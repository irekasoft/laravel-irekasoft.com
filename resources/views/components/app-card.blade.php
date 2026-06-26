@props(['app', 'dark' => false])

<div @class([
    'group relative flex gap-4 border p-4 transition-colors rounded-lg',
    'border-ink/10 bg-paper hover:border-blue-500/40' => !$dark,
    'border-paper/15 bg-ink hover:border-blue-500/40' => $dark,
])>
  <a href="{{ route('apps.show', $app['slug']) }}"
    class="absolute inset-0 z-0 rounded-lg"
    aria-label="View {{ $app['name'] }}"></a>

  <x-app-icon :app="$app" class="relative z-10 pointer-events-none" />

  <div class="relative z-10 min-w-0 flex-1 pointer-events-none">
    <span @class([
        'font-display text-lg font-semibold transition-colors group-hover:text-blue-500',
        'text-ink' => !$dark,
        'text-paper' => $dark,
    ])>{{ $app['name'] }}</span>
    <span @class([
        'mt-0 block text-sm leading-relaxed',
        'text-charcoal/70' => !$dark,
        'text-paper/70' => $dark,
    ])>{{ $app['tagline'] }}</span>

    @if ($app['store_url'])
      <a href="{{ $app['store_url'] }}" target="_blank" rel="noopener" @class([
          'relative z-20 mt-3 inline-flex w-fit items-center rounded-sm px-3 py-1.5 font-mono text-[10px] uppercase tracking-wide transition-colors pointer-events-auto',
          'bg-ink text-paper hover:bg-blue-500' => !$dark,
          'bg-paper text-ink hover:bg-blue-500 hover:text-paper' => $dark,
      ])>
        App Store
      </a>
    @endif
  </div>
</div>
