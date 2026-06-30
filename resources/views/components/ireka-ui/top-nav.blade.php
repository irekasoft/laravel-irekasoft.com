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
      'label' => 'Structure & Navigation',
      'short' => 'Guides',
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
  <div class="mx-auto flex max-w-7xl gap-1 overflow-x-auto px-4 sm:px-6">
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
</nav>
