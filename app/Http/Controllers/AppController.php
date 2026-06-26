<?php

namespace App\Http\Controllers;

use App\Support\AppRepository;

class AppController extends Controller
{
    public function __construct(private AppRepository $apps) {}

    public function index()
    {
        $apps = $this->apps->all();

        $grouped = collect([
            'ios' => $apps->filter(fn (array $app) => in_array('ios', $app['platforms'], true) && ! in_array('android', $app['platforms'], true))->values(),
            'ios_android' => $apps->filter(fn (array $app) => in_array('ios', $app['platforms'], true) && in_array('android', $app['platforms'], true))->values(),
            'android' => $apps->filter(fn (array $app) => in_array('android', $app['platforms'], true) && ! in_array('ios', $app['platforms'], true))->values(),
            'mac' => $apps->filter(fn (array $app) => in_array('mac', $app['platforms'], true))->values(),
        ])->filter(fn ($group) => $group->isNotEmpty());

        return view('pages.apps.index', [
            'platforms' => config('apps.platforms'),
            'grouped' => $grouped,
        ]);
    }

    public function show(string $slug)
    {
        $app = $this->apps->find($slug);

        abort_unless($app, 404);

        $related = $this->apps->all()
            ->filter(fn (array $item) => $item['slug'] !== $slug)
            ->filter(fn (array $item) => count(array_intersect($item['platforms'], $app['platforms'])) > 0)
            ->take(3)
            ->values();

        return view('pages.apps.show', [
            'app' => $app,
            'platforms' => config('apps.platforms'),
            'related' => $related,
        ]);
    }
}
