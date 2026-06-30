@props([
    'section' => 'intro',
])

@php
  $items = [
    [
      'section' => 'intro',
      'label' => 'Intro',
      'short' => 'Intro',
      'icon' => 'bi-book',
      'href' => route('ireka-ui.index'),
    ],
    [
      'section' => 'guides',
      'label' => 'Structure',
      'short' => 'Structure',
      'icon' => 'bi-diagram-3',
      'href' => route('ireka-ui.structure'),
    ],
    [
      'section' => 'components',
      'label' => 'Components',
      'short' => 'Components',
      'icon' => 'bi-grid',
      'href' => route('ireka-ui.components'),
    ],
  ];
@endphp

<nav aria-label="Documentation sections"
  class="border-b border-charcoal/10 bg-white/90 backdrop-blur-sm">
  <div class="mx-auto flex max-w-7xl items-center px-4 sm:px-6">
    <button type="button" id="docs-sidebar-button"
      @class([
          'docs-sidebar-button cursor-pointer relative z-[120] -ml-2 mr-1 flex h-10 w-10 shrink-0 items-center justify-center rounded-lg text-ink transition-colors hover:bg-charcoal/5 md:hidden',
          'hidden' => $section === 'intro',
      ])
      aria-expanded="false" aria-controls="docs-sidebar-drawer" aria-label="Open documentation menu">
      <span class="docs-sidebar-bar absolute left-2 block h-0.5 w-5 bg-blue-500 transition-all duration-300 -translate-y-1.5"></span>
      <span class="docs-sidebar-bar absolute left-2 block h-0.5 w-4 bg-current transition-all duration-300"></span>
      <span class="docs-sidebar-bar absolute left-2 block h-0.5 w-5 bg-current transition-all duration-300 translate-y-1.5"></span>
    </button>

    <div class="flex flex-1 gap-1 overflow-x-auto">
    @foreach ($items as $item)
      <a href="{{ $item['href'] }}" @class([
          'group relative flex shrink-0 items-center gap-2 px-2.5 py-4 text-sm transition-colors sm:px-3',
          'text-ink' => $section === $item['section'],
          'text-charcoal/60 hover:text-ink' => $section !== $item['section'],
      ])>
        <i class="bi {{ $item['icon'] }} text-[15px]" aria-hidden="true"></i>
        <span @class(['font-medium' => $section === $item['section']])>
          <span class="sm:hidden">{{ $item['short'] }}</span>
          <span class="hidden sm:inline">{{ $item['label'] }}</span>
        </span>
        <span @class([
            'absolute inset-x-2.5 bottom-0 h-0.5 rounded-full bg-blue-500 transition-opacity sm:inset-x-3',
            'opacity-100' => $section === $item['section'],
            'opacity-0 group-hover:opacity-40' => $section !== $item['section'],
        ]) aria-hidden="true"></span>
      </a>
    @endforeach
    </div>
  </div>
</nav>
