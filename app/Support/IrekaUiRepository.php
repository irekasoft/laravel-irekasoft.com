<?php

namespace App\Support;

use Illuminate\Support\Str;

class IrekaUiRepository {
  
  public function intro(): array {
    $intro = $this->load('intro.md');

    return [
      'title' => $intro['meta']['title'] ?? 'ireka-ui',
      'description' => $intro['meta']['description'] ?? '',
      'eyebrow' => $intro['meta']['eyebrow'] ?? '',
      'features' => $intro['meta']['features'] ?? [],
      'intro_html' => $this->introHtml($intro['body']),
      'sections' => $this->parseSections($intro['body']),
    ];
  }

  public function structure(): array {
    $doc = $this->load('structure/structure.md');

    return [
      'section' => $this->loadSection('structure/structure.md'),
      'description' => $doc['meta']['description'] ?? '',
    ];
  }

  public function doc(string $filename): array {
    
    $doc = $this->load($filename);

    return [
      'title' => $doc['meta']['title'] ?? Str::headline(pathinfo($filename, PATHINFO_FILENAME)),
      'description' => $doc['meta']['description'] ?? '',
      'eyebrow' => $doc['meta']['eyebrow'] ?? '',
      'intro_html' => $this->introHtml($doc['body']),
      'sections' => $this->parseSections($doc['body']),
    ];

  }

  public function componentOverview(): array {
    return $this->doc('components/index.md');
  }

  /**
   * Guide categories (Modals, Overlays, Layout) that live in the
   * components section. Each is a folder of markdown sub-pages.
   */
  public function categoryMeta(): array {
    return [
      'navigation' => ['id' => 'navigation', 'name' => 'Navigation', 'route' => 'ireka-ui.navigation'],
      'modals' => ['id' => 'modals', 'name' => 'Modals', 'route' => 'ireka-ui.modals'],
      'overlays' => ['id' => 'overlays', 'name' => 'Overlays', 'route' => 'ireka-ui.overlays'],
      'layout' => ['id' => 'layout', 'name' => 'Layout', 'route' => 'ireka-ui.layout'],
    ];
  }

  public function guideCategory(string $category): array {
    $meta = $this->categoryMeta()[$category] ?? null;

    if ($meta === null) {
      throw new \RuntimeException("Unknown guide category: {$category}");
    }

    $index = $this->parseFile($this->categoryPath($category) . '/index.md');

    return [
      'id' => $category,
      'name' => $index['meta']['title'] ?? $meta['name'],
      'eyebrow' => $index['meta']['eyebrow'] ?? '',
      'summary' => $index['meta']['summary'] ?? '',
      'intro_html' => $index['body'] !== '' ? Str::markdown($index['body']) : '',
      'guides' => $this->guidesIn($category),
    ];
  }

  public function guidesIn(string $category): array {
    return collect(glob($this->categoryPath($category) . '/*.md'))
      ->reject(fn(string $file) => basename($file) === 'index.md')
      ->map(fn(string $file) => $this->parseGuideMeta($file, $category))
      ->sortBy('order')
      ->values()
      ->all();
  }

  public function guidesByCategory(): array {
    return collect($this->categoryMeta())
      ->map(fn(array $meta, string $key) => $meta + ['guides' => $this->guidesIn($key)])
      ->values()
      ->all();
  }

  public function findGuide(string $category, string $id): ?array {
    $meta = $this->categoryMeta()[$category] ?? null;

    if ($meta === null) {
      return null;
    }

    $path = $this->categoryPath($category) . "/{$id}.md";

    if (! is_readable($path)) {
      return null;
    }

    $doc = $this->parseFile($path);

    return [
      'id' => $doc['meta']['id'] ?? $id,
      'category' => $category,
      'category_name' => $meta['name'],
      'category_route' => $meta['route'],
      'title' => $doc['meta']['title'] ?? Str::headline($id),
      'summary' => $doc['meta']['summary'] ?? '',
      'blocks' => $this->parseBlocks($doc['body']),
    ];
  }

  private function categoryPath(string $category): string {
    return config('ireka-ui.path', base_path('content/ireka-ui')) . '/' . $category;
  }

  private function parseGuideMeta(string $path, string $category): array {
    $meta = $this->parseFile($path)['meta'];

    return [
      'id' => $meta['id'] ?? pathinfo($path, PATHINFO_FILENAME),
      'title' => $meta['title'] ?? Str::headline(pathinfo($path, PATHINFO_FILENAME)),
      'summary' => $meta['summary'] ?? '',
      'order' => (int) ($meta['order'] ?? 0),
      'category' => $category,
    ];
  }

  /**
   * Split a markdown body into ordered prose/code blocks so the two
   * render interleaved in document order.
   */
  private function parseBlocks(string $body): array {
    $blocks = [];
    $offset = 0;

    if (preg_match_all('/```(\w*)\r?\n(.*?)```/s', $body, $matches, PREG_OFFSET_CAPTURE)) {
      foreach ($matches[0] as $i => $whole) {
        $prose = trim(substr($body, $offset, $whole[1] - $offset));

        if ($prose !== '') {
          $blocks[] = ['type' => 'prose', 'html' => Str::markdown($prose)];
        }

        $blocks[] = [
          'type' => 'code',
          'language' => $matches[1][$i][0] !== '' ? $matches[1][$i][0] : 'jsx',
          'code' => rtrim($matches[2][$i][0], "\r\n"),
        ];

        $offset = $whole[1] + strlen($whole[0]);
      }
    }

    $tail = trim(substr($body, $offset));

    if ($tail !== '') {
      $blocks[] = ['type' => 'prose', 'html' => Str::markdown($tail)];
    }

    return $blocks;
  }

  public function findComponent(string $id): ?array {
    return collect($this->components())->firstWhere('id', $id);
  }

  public function componentCatalog(): array {
    return collect($this->components())
      ->map(fn(array $component) => [
        'id' => $component['id'],
        'name' => $component['name'],
        'summary' => $component['summary'],
      ])
      ->all();
  }

  public function components(): array {
    $path = config('ireka-ui.components_path', base_path('content/ireka-ui/components'));

    return collect(glob($path . '/*.md'))
      ->reject(fn(string $file) => basename($file) === 'index.md')
      ->map(fn(string $file) => $this->parseComponent($file))
      ->sortBy('order')
      ->values()
      ->all();
  }

  private function parseComponent(string $path): array {
    $doc = $this->parseFile($path);
    $meta = $doc['meta'];
    $body = $doc['body'];

    $previewHtml = $this->extractFencedBlock($body, ['html', 'preview']) ?? '';
    $code = $this->extractFencedBlock($body, ['jsx']) ?? '';
    $remainder = trim(preg_replace('/```\w*\r?\n.*?```/s', '', $body) ?? $body);

    return [
      'id' => $meta['id'] ?? pathinfo($path, PATHINFO_FILENAME),
      'name' => $meta['name'] ?? Str::headline(pathinfo($path, PATHINFO_FILENAME)),
      'summary' => $meta['summary'] ?? '',
      'lead' => $meta['lead'] ?? '',
      'order' => (int) ($meta['order'] ?? 0),
      'preview_html' => $previewHtml,
      'code' => $code,
      'prop_groups' => $this->parsePropGroups($remainder),
    ];
  }

  private function parseFile(string $path): array {
    if (! is_readable($path)) {
      throw new \RuntimeException("Ireka UI markdown file not found: {$path}");
    }

    $raw = file_get_contents($path);

    if (! preg_match('/^---\s*\r?\n(.*?)\r?\n---\s*\r?\n(.*)$/s', $raw, $matches)) {
      throw new \RuntimeException("Invalid Ireka UI markdown file: {$path}");
    }

    return [
      'meta' => $this->parseFrontmatter($matches[1]),
      'body' => trim($matches[2]),
    ];
  }

  private function extractFencedBlock(string $body, array $languages): ?string {
    $pattern = '/```(' . implode('|', array_map('preg_quote', $languages)) . ')\r?\n(.*?)```/s';

    if (! preg_match($pattern, $body, $matches)) {
      return null;
    }

    return rtrim($matches[2], "\r\n");
  }

  private function parsePropGroups(string $body): array {
    if ($body === '' || ! preg_match('/^## /m', $body)) {
      return [];
    }

    $groups = [];

    foreach (preg_split('/^## /m', $body, -1, PREG_SPLIT_NO_EMPTY) as $chunk) {
      [$title, $content] = array_pad(explode("\n", $chunk, 2), 2, '');
      $rows = $this->parsePropsTable(trim($content));

      if ($rows === []) {
        continue;
      }

      $groups[] = [
        'title' => trim($title),
        'rows' => $rows,
      ];
    }

    return $groups;
  }

  private function parsePropsTable(string $content): array {
    if (! preg_match('/^\|(.+)\|\s*\r?\n\|[-| :]+\|\s*\r?\n((?:\|.+\|\s*\r?\n?)+)/m', $content, $matches)) {
      return [];
    }

    $rows = [];

    foreach (preg_split('/\r?\n/', trim($matches[2])) as $line) {
      $line = trim($line);

      if ($line === '' || ! str_starts_with($line, '|')) {
        continue;
      }

      $cells = array_map('trim', explode('|', trim($line, '|')));

      if (count($cells) < 4) {
        continue;
      }

      $default = trim($cells[2], '` ');

      $rows[] = [
        'prop' => trim($cells[0], '` '),
        'type' => trim($cells[1], '` '),
        'default' => $default !== '' && $default !== '—' ? $default : null,
        'description' => $cells[3],
      ];
    }

    return $rows;
  }

  private function load(string $filename): array {
    $path = config('ireka-ui.path', base_path('content/ireka-ui')) . '/' . $filename;

    return $this->parseFile($path);
  }

  private function loadSection(string $filename): array {
    $doc = $this->load($filename);
    $title = $doc['meta']['title'] ?? Str::headline(pathinfo($filename, PATHINFO_FILENAME));

    return $this->parseSection($title, $doc['body']);
  }

  private function introHtml(string $body): string {
    if (! preg_match('/^## /m', $body, $match, PREG_OFFSET_CAPTURE)) {
      return $body !== '' ? Str::markdown($body) : '';
    }

    $intro = trim(substr($body, 0, $match[0][1]));

    return $intro !== '' ? Str::markdown($intro) : '';
  }

  private function parseSections(string $body): array {
    if (! preg_match('/^## /m', $body, $match, PREG_OFFSET_CAPTURE)) {
      return [];
    }

    $rest = substr($body, $match[0][1]);
    $sections = [];

    foreach (preg_split('/^## /m', $rest, -1, PREG_SPLIT_NO_EMPTY) as $chunk) {
      [$title, $content] = array_pad(explode("\n", $chunk, 2), 2, '');
      $sections[] = $this->parseSection(trim($title), trim($content));
    }

    return $sections;
  }

  private function parseSection(string $title, string $content): array {
    $codeBlocks = [];

    $prose = preg_replace_callback(
      '/```(\w*)\r?\n(.*?)```/s',
      function (array $matches) use (&$codeBlocks): string {
        $codeBlocks[] = [
          'language' => $matches[1] !== '' ? $matches[1] : 'jsx',
          'code' => rtrim($matches[2], "\r\n"),
        ];

        return '';
      },
      $content,
    );

    $prose = trim($prose ?? $content);

    return [
      'id' => Str::slug($title),
      'title' => $title,
      'prose_html' => $prose !== '' ? Str::markdown($prose) : '',
      'code_blocks' => $codeBlocks,
    ];
  }

  private function parseFrontmatter(string $yaml): array {
    $data = [];
    $lines = preg_split('/\r?\n/', trim($yaml));
    $currentKey = null;

    for ($i = 0; $i < count($lines); $i++) {
      $line = $lines[$i];

      if (preg_match('/^\s{2,}([\w_]+):\s*(.*)$/', $line, $matches)) {
        if ($currentKey !== null && $data[$currentKey] !== []) {
          $last = array_key_last($data[$currentKey]);
          $data[$currentKey][$last][$matches[1]] = $this->unquote($matches[2]);
        }

        continue;
      }

      if (preg_match('/^\s*-\s+(.+)$/', $line, $matches)) {
        $value = $matches[1];

        if (preg_match('/^([\w_]+):\s*(.*)$/', $value, $itemMatches)) {
          if ($currentKey !== null) {
            $data[$currentKey][] = [
              $itemMatches[1] => $this->unquote($itemMatches[2]),
            ];
          }

          continue;
        }

        if ($currentKey !== null) {
          $data[$currentKey][] = $this->unquote($value);
        }

        continue;
      }

      if (! preg_match('/^([\w_]+):\s*(.*)$/', $line, $matches)) {
        continue;
      }

      $key = $matches[1];
      $value = $matches[2];

      if ($value === '') {
        $nextLine = $lines[$i + 1] ?? '';
        if (preg_match('/^\s*- /', $nextLine)) {
          $data[$key] = [];
          $currentKey = $key;
        } else {
          $data[$key] = null;
          $currentKey = null;
        }

        continue;
      }

      $data[$key] = $this->unquote($value);
      $currentKey = null;
    }

    return $data;
  }

  private function unquote(string $value): string {
    $value = trim($value);

    if ((str_starts_with($value, "'") && str_ends_with($value, "'"))
      || (str_starts_with($value, '"') && str_ends_with($value, '"'))
    ) {
      return substr($value, 1, -1);
    }

    return $value;
  }
}
