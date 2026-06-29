@props([
    'section' => 'intro',
])

@php
  $items = [
    [
      'section' => 'intro',
      'label' => 'Intro',
      'icon' => 'bi-book',
      'href' => route('ireka-ui.index'),
    ],
    [
      'section' => 'guides',
      'label' => 'Structure & Navigation',
      'icon' => 'bi-diagram-3',
      'href' => route('ireka-ui.structure'),
    ],
    [
      'section' => 'components',
      'label' => 'Components',
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
          'group relative flex shrink-0 items-center gap-2 px-3 py-3.5 text-sm transition-colors',
          'text-ink' => $section === $item['section'],
          'text-charcoal/60 hover:text-ink' => $section !== $item['section'],
      ])>
        <i class="bi {{ $item['icon'] }} text-[15px]" aria-hidden="true"></i>
        <span @class(['font-medium' => $section === $item['section']])>{{ $item['label'] }}</span>
        <span @class([
            'absolute inset-x-3 bottom-0 h-0.5 rounded-full bg-blue-500 transition-opacity',
            'opacity-100' => $section === $item['section'],
            'opacity-0 group-hover:opacity-40' => $section !== $item['section'],
        ]) aria-hidden="true"></span>
      </a>
    @endforeach
  </div>
</nav>
