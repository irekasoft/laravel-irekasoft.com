@props([
    'section',
    'heading' => 'h2',
])

<section id="{{ $section['id'] }}" {{ $attributes->merge(['class' => 'max-w-3xl scroll-mt-24']) }}>
  @if ($heading === 'h1')
    <h1 class="font-mono text-4xl font-semibold tracking-tight text-ink md:text-5xl">{{ $section['title'] }}</h1>
  @else
    <h2 class="font-display text-2xl font-semibold tracking-tight text-ink">{{ $section['title'] }}</h2>
  @endif

  @if ($section['prose_html'])
    <div @class([
      'ireka-ui-markdown leading-relaxed text-charcoal/70',
      'mt-5 text-lg' => $heading === 'h1',
      'mt-3' => $heading !== 'h1',
    ])>
      {!! $section['prose_html'] !!}
    </div>
  @endif

  @if ($section['code_blocks'])
    <div @class([
      'space-y-4' => count($section['code_blocks']) > 1,
      'mt-5' => $section['prose_html'] && count($section['code_blocks']) === 1,
      'mt-4' => ! $section['prose_html'] || count($section['code_blocks']) > 1,
    ])>
      @foreach ($section['code_blocks'] as $block)
        <x-ireka-ui.code-block :language="$block['language']" :code="$block['code']" />
      @endforeach
    </div>
  @endif
</section>
