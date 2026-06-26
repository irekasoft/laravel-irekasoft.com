@props(['app', 'dark' => false])

<a href="{{ route('apps.show', $app['slug']) }}"
   @class([
       'group flex gap-4 border p-4 transition-colors',
       'border-ink/10 bg-paper hover:border-gold/40' => ! $dark,
       'border-paper/15 bg-ink hover:border-gold/40' => $dark,
   ])>
    <span
        class="flex h-16 w-16 shrink-0 items-center justify-center rounded-xl font-display text-sm font-semibold text-white shadow-sm"
        style="background-color: {{ $app['icon_bg'] }}"
    >{{ $app['icon_label'] }}</span>

    <span class="min-w-0 flex-1">
        <span @class([
            'font-display text-lg font-semibold transition-colors group-hover:text-gold',
            'text-ink' => ! $dark,
            'text-paper' => $dark,
        ])>{{ $app['name'] }}</span>
        <span @class([
            'mt-1 block text-sm leading-relaxed',
            'text-charcoal/70' => ! $dark,
            'text-paper/70' => $dark,
        ])>{{ $app['tagline'] }}</span>
        @if ($app['store_url'])
            <span class="mt-3 inline-block font-mono text-[10px] uppercase tracking-wide text-charcoal/50">
                Download on the App Store →
            </span>
        @endif
    </span>
</a>
