<?php

namespace App\Support;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class AppRepository
{
    public function all(): Collection
    {
        $path = config('apps.path', base_path('content/apps'));

        return collect(glob($path.'/*.md'))
            ->map(fn (string $file) => $this->parse($file))
            ->sortBy('name')
            ->values();
    }

    public function find(string $slug): ?array
    {
        return $this->all()->firstWhere('slug', $slug);
    }

    private function parse(string $path): array
    {
        $raw = file_get_contents($path);

        if (! preg_match('/^---\s*\r?\n(.*?)\r?\n---\s*\r?\n(.*)$/s', $raw, $matches)) {
            throw new \RuntimeException("Invalid app markdown file: {$path}");
        }

        $meta = $this->parseFrontmatter($matches[1]);
        $body = trim($matches[2]);

        $app = [
            'slug' => pathinfo($path, PATHINFO_FILENAME),
            'name' => $meta['name'] ?? pathinfo($path, PATHINFO_FILENAME),
            'tagline' => $meta['tagline'] ?? '',
            'platforms' => $meta['platforms'] ?? [],
            'icon' => $meta['icon'] ?? null,
            'icon_bg' => $meta['icon_bg'] ?? '#566573',
            'icon_label' => $meta['icon_label'] ?? '?',
            'store_url' => $meta['store_url'] ?? null,
            'video_url' => $meta['video_url'] ?? null,
            'features' => $meta['features'] ?? [],
            'body' => $body,
            'body_html' => $body !== '' ? Str::markdown($body) : '',
        ];

        if ($app['store_url'] === '') {
            $app['store_url'] = null;
        }

        if ($app['video_url'] === '') {
            $app['video_url'] = null;
        }

        return $app;
    }

    private function parseFrontmatter(string $yaml): array
    {
        $data = [];
        $lines = preg_split('/\r?\n/', trim($yaml));
        $currentKey = null;

        for ($i = 0; $i < count($lines); $i++) {
            $line = $lines[$i];

            if (preg_match('/^\s*-\s+(.+)$/', $line, $matches)) {
                if ($currentKey !== null) {
                    $data[$currentKey][] = $this->unquote($matches[1]);
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
