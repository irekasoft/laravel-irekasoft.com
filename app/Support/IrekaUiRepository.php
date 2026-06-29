<?php

namespace App\Support;

use Illuminate\Support\Str;

class IrekaUiRepository
{
    public function intro(): array
    {
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

    public function structure(): array
    {
        $intro = $this->load('intro.md');
        $doc = $this->load('structure.md');

        return [
            'section' => $this->loadSection('structure.md'),
            'description' => $doc['meta']['description'] ?? '',
            'features' => $intro['meta']['features'] ?? [],
        ];
    }

    private function load(string $filename): array
    {
        $path = config('ireka-ui.path', base_path('content/ireka-ui')).'/'.$filename;

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

    private function loadSection(string $filename): array
    {
        $doc = $this->load($filename);
        $title = $doc['meta']['title'] ?? Str::headline(pathinfo($filename, PATHINFO_FILENAME));

        return $this->parseSection($title, $doc['body']);
    }

    private function introHtml(string $body): string
    {
        if (! preg_match('/^## /m', $body, $match, PREG_OFFSET_CAPTURE)) {
            return $body !== '' ? Str::markdown($body) : '';
        }

        $intro = trim(substr($body, 0, $match[0][1]));

        return $intro !== '' ? Str::markdown($intro) : '';
    }

    private function parseSections(string $body): array
    {
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

    private function parseSection(string $title, string $content): array
    {
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

    private function parseFrontmatter(string $yaml): array
    {
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

    private function unquote(string $value): string
    {
        $value = trim($value);

        if ((str_starts_with($value, "'") && str_ends_with($value, "'"))
            || (str_starts_with($value, '"') && str_ends_with($value, '"'))) {
            return substr($value, 1, -1);
        }

        return $value;
    }
}
