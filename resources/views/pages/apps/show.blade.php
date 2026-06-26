@php
    $platformLabels = collect($app['platforms'])
        ->map(fn (string $key) => $platforms[$key] ?? $key)
        ->join(' · ');
@endphp

<x-layouts.app
    :title="$app['name']"
    :description="$app['tagline']"
>

    <section class="bg-ink text-paper">
        <div class="mx-auto max-w-6xl px-6 pt-20 pb-16 md:pt-28 md:pb-20">
            <a href="{{ route('apps.index') }}"
               class="font-mono text-[12px] uppercase tracking-[0.14em] text-paper/50 hover:text-gold transition-colors">
                ← All apps
            </a>

            <div class="mt-10 flex flex-col gap-8 md:flex-row md:items-start">
                <span
                    class="flex h-24 w-24 shrink-0 items-center justify-center rounded-2xl font-display text-2xl font-semibold text-white shadow-md"
                    style="background-color: {{ $app['icon_bg'] }}"
                >{{ $app['icon_label'] }}</span>

                <div class="max-w-2xl">
                    <p class="font-mono text-[12px] uppercase tracking-[0.14em] text-gold">{{ $platformLabels }}</p>
                    <h1 class="mt-3 font-display font-semibold text-4xl md:text-5xl tracking-tight">
                        {{ $app['name'] }}
                    </h1>
                    <p class="mt-5 text-lg text-paper/70 leading-relaxed">{{ $app['tagline'] }}</p>

                    @if ($app['store_url'])
                        <a href="{{ $app['store_url'] }}" target="_blank" rel="noopener"
                           class="mt-8 inline-flex items-center gap-2 rounded-sm bg-paper px-5 py-3 font-mono text-[12px] uppercase tracking-wide text-ink transition-colors hover:bg-gold hover:text-paper">
                            Download on the App Store
                        </a>
                    @else
                        <p class="mt-8 font-mono text-[11px] uppercase tracking-wide text-paper/40">
                            Store link coming soon
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

            <div>
                <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta mb-4">Highlights</p>
                <ul class="space-y-3 text-sm text-charcoal/80">
                    @foreach ($app['features'] as $feature)
                        <li class="border-t border-ink/10 pt-3">{{ $feature }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    @if ($related->isNotEmpty())
        <section class="bg-ink-soft text-paper border-t border-paper/10">
            <div class="mx-auto max-w-6xl px-6 py-14 md:py-16">
                <h2 class="font-display font-semibold text-2xl tracking-tight mb-8">More {{ explode(' · ', $platformLabels)[0] }} apps</h2>
                <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3">
                    @foreach ($related as $relatedApp)
                        <x-app-card :app="$relatedApp" :dark="true" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

</x-layouts.app>
