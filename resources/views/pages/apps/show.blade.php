@php
  $platformLabels = collect($app['platforms'])->map(fn(string $key) => $platforms[$key] ?? $key)->join(' · ');
  $appImageSrc = $app['image_url']
    ? (str_starts_with($app['image_url'], 'http') ? $app['image_url'] : asset('images/apps/' . $app['image_url']))
    : null;
@endphp

<x-layouts.app :title="$app['name']" :description="$app['tagline']">

  <div class="fixed inset-x-0 top-15 z-40 border-b border-white/10 bg-ink/40 backdrop-blur-sm">
    <div class="mx-auto max-w-6xl px-6 py-3">
      <a href="{{ route('apps.index') }}"
        class="font-mono text-[12px] uppercase tracking-[0.14em] text-white hover:text-gold transition-colors">
        <i class="bi bi-chevron-left"></i>
        All apps
      </a>
    </div>
  </div>

  <section class="relative overflow-hidden bg-ink text-paper">
    <x-app-show-bg />

    <div class="relative z-10 mx-auto max-w-6xl px-6 pt-16 pb-8">
      <div class="flex flex-col gap-6 md:flex-row md:items-start">
        <x-app-icon :app="$app" size="lg" class="shadow-md" />

        <div class="max-w-2xl">
          <p class="font-mono text-[12px] uppercase tracking-[0.14em] text-gold">{{ $platformLabels }}</p>
          <h1 class="mt-0 font-display font-semibold text-4xl md:text-5xl tracking-tight">
            {{ $app['name'] }}
          </h1>
          <p class="mt-1 text-lg text-paper/70 leading-relaxed">{{ $app['tagline'] }}</p>

          @if ($app['store_url'])
            <a href="{{ $app['store_url'] }}" target="_blank" rel="noopener"
              class="mt-4 inline-flex items-center gap-2 rounded-sm bg-paper px-5 py-3 font-mono text-[12px] uppercase tracking-wide text-ink transition-colors hover:bg-blue-500 hover:text-paper">
              Download on the App Store
            </a>
          @else
            <p class="mt-8 font-mono text-[11px] uppercase tracking-wide text-paper/40">

            </p>
          @endif
        </div>
      </div>
    </div>
  </section>

  <section class="bg-paper">
    <div class="mx-auto max-w-6xl px-6 py-16 md:py-20 grid gap-12 md:grid-cols-2">
      <div>
        <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta mb-4">About</p>
        <div class="app-markdown text-charcoal/80 leading-relaxed">
          {!! $app['body_html'] !!}
        </div>
      </div>

      <div class="space-y-12">
        @if ($appImageSrc)
          <div>
            <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta mb-4">Preview</p>
            <img src="{{ $appImageSrc }}" alt="{{ $app['name'] }} screenshot"
              class="w-full rounded-sm border border-ink/10 object-cover" loading="lazy">
          </div>
        @endif

        @if ($app['video_url'])
          @php
            $videoId = null;
            if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/))([a-zA-Z0-9_-]{11})/', $app['video_url'], $matches)) {
              $videoId = $matches[1];
            }
          @endphp
          @if ($videoId)
            <div>
              <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta mb-4">Demo</p>
              <div class="aspect-video overflow-hidden rounded-sm border border-ink/10 bg-ink/5">
                <iframe
                  class="h-full w-full"
                  src="https://www.youtube.com/embed/{{ $videoId }}"
                  title="{{ $app['name'] }} demo video"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen></iframe>
              </div>
            </div>
          @endif
        @endif

        <div>
          <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta mb-4">Highlights</p>
          <ul class="space-y-3 text-sm text-charcoal/80">
            @foreach ($app['features'] as $feature)
              <li class="border-t border-ink/10 pt-3">{{ $feature }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>

  @if ($related->isNotEmpty())
    <section class="bg-ink-soft text-paper border-t border-paper/10">
      <div class="mx-auto max-w-6xl px-6 py-14 md:py-16">
        <h2 class="font-display font-semibold text-2xl tracking-tight mb-8">More
          {{ explode(' · ', $platformLabels)[0] }} apps</h2>
        <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3">
          @foreach ($related as $relatedApp)
            <x-app-card :app="$relatedApp" :dark="true" />
          @endforeach
        </div>
      </div>
    </section>
  @endif

</x-layouts.app>
