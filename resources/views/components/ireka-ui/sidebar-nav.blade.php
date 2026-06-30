@props([
    'section' => 'intro',
    'active' => 'intro',
    'components' => [],
])

@php
  $guides = [
    ['id' => 'structure', 'route' => 'ireka-ui.structure', 'name' => 'Structure', 'icon' => 'bi-diagram-3'],
  ];

  $patternCategories = $section === 'components'
    ? app(\App\Support\IrekaUiRepository::class)->guidesByCategory()
    : [];
@endphp

<a href="{{ route('ireka-ui.index') }}" class="flex items-center gap-2.5">
  <span class="grid h-8 w-8 place-items-center rounded-lg bg-ink text-paper">
    <i class="bi bi-boxes text-base" aria-hidden="true"></i>
  </span>
  <span class="leading-tight">
    <span class="block font-mono text-[15px] font-semibold text-ink">ireka-ui</span>
    <span class="block font-mono text-[11px] text-charcoal/40">v0.1.0</span>
  </span>
</a>

@if ($section === 'guides')
  <nav class="mt-7 space-y-1 text-sm">
    <p class="mb-1.5 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Getting started</p>
    @foreach ($guides as $guide)
      <a href="{{ route($guide['route']) }}" @class([
          'flex items-center gap-2.5 rounded-lg px-3 py-1.5 transition-colors',
          'bg-ink text-paper font-medium' => $active === $guide['id'],
          'text-charcoal/70 hover:bg-charcoal/5' => $active !== $guide['id'],
      ])>
        <i class="bi {{ $guide['icon'] }}" aria-hidden="true"></i> {{ $guide['name'] }}
      </a>
    @endforeach
  </nav>
@elseif ($section === 'components')
  @foreach ($patternCategories as $cat)
    <nav class="mt-7 space-y-0.5 text-sm">
      <a href="{{ route($cat['route']) }}" @class([
          'mb-1 block font-mono text-[11px] uppercase tracking-[0.14em] transition-colors',
          'text-ink' => $active === $cat['id'],
          'text-charcoal/40 hover:text-ink' => $active !== $cat['id'],
      ])>{{ $cat['name'] }}</a>
      @foreach ($cat['guides'] as $g)
        <a href="{{ route('ireka-ui.guide', [$cat['id'], $g['id']]) }}" @class([
            'block rounded-lg px-3 py-1.5 transition-colors',
            'bg-ink text-paper font-medium' => $active === $g['id'],
            'text-charcoal/70 hover:bg-charcoal/5' => $active !== $g['id'],
        ])>
          {{ $g['title'] }}
        </a>
      @endforeach
    </nav>
  @endforeach

  @if (count($components) > 0)
    <nav class="mt-7 space-y-0.5 text-sm">
      <a href="{{ route('ireka-ui.components') }}" @class([
          'mb-1 block font-mono text-[11px] uppercase tracking-[0.14em] transition-colors',
          'text-ink' => $active === 'components',
          'text-charcoal/40 hover:text-ink' => $active !== 'components',
      ])>Components</a>
      @foreach ($components as $c)
        <a href="{{ route('ireka-ui.component', $c['id']) }}" @class([
            'block rounded-lg px-3 py-1.5 transition-colors',
            'bg-ink text-paper font-medium' => $active === $c['id'],
            'text-charcoal/70 hover:bg-charcoal/5' => $active !== $c['id'],
        ])>
          {{ $c['name'] }}
        </a>
      @endforeach
    </nav>
  @endif
@endif
