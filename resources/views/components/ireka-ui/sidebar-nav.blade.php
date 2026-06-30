@props([
    'section' => 'intro',
    'active' => 'intro',
    'components' => [],
])

@php
  $guides = [
    ['id' => 'structure', 'route' => 'ireka-ui.structure', 'name' => 'Structure', 'icon' => 'bi-diagram-3'],
    ['id' => 'navigation', 'route' => 'ireka-ui.navigation', 'name' => 'Navigation', 'icon' => 'bi-layers'],
  ];

  $patterns = [
    ['id' => 'modals', 'route' => 'ireka-ui.modals', 'name' => 'Modals'],
    ['id' => 'overlays', 'route' => 'ireka-ui.overlays', 'name' => 'Overlays'],
    ['id' => 'layout', 'route' => 'ireka-ui.layout', 'name' => 'Layout'],
  ];
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
    <p class="mb-1.5 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Structure & Navigation</p>
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
@elseif ($section === 'components' && count($components) > 0)
  <nav class="mt-7 space-y-0.5 text-sm">
    <p class="mb-1.5 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Components</p>
    <a href="{{ route('ireka-ui.components') }}" @class([
        'block rounded-lg px-3 py-1.5 transition-colors',
        'bg-ink text-paper font-medium' => $active === 'components',
        'text-charcoal/70 hover:bg-charcoal/5' => $active !== 'components',
    ])>
      Overview
    </a>
    @foreach ($patterns as $p)
      <a href="{{ route($p['route']) }}" @class([
          'block rounded-lg px-3 py-1.5 transition-colors',
          'bg-ink text-paper font-medium' => $active === $p['id'],
          'text-charcoal/70 hover:bg-charcoal/5' => $active !== $p['id'],
      ])>
        {{ $p['name'] }}
      </a>
    @endforeach
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
