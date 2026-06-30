<x-ireka-ui.shell
  :title="$doc['title'] . ' — ireka-ui'"
  :description="$doc['summary']"
  :active="$doc['id']"
  :components="$catalog">

  <a href="{{ route($doc['category_route']) }}"
    class="font-mono text-[11px] uppercase tracking-[0.16em] text-charcoal/40 transition-colors hover:text-ink">
    {{ $doc['category_name'] }}
  </a>
  <h1 class="mt-3 font-display text-4xl font-semibold tracking-tight text-ink">{{ $doc['title'] }}</h1>
  @if ($doc['summary'])
    <p class="mt-5 max-w-2xl text-lg leading-relaxed text-charcoal/70">{{ $doc['summary'] }}</p>
  @endif

  <div class="mt-8 max-w-3xl space-y-5">
    @foreach ($doc['blocks'] as $block)
      @if ($block['type'] === 'prose')
        <div class="ireka-ui-markdown leading-relaxed text-charcoal/70">{!! $block['html'] !!}</div>
      @else
        <x-ireka-ui.code-block :language="$block['language']" :code="$block['code']" />
      @endif
    @endforeach
  </div>

</x-ireka-ui.shell>
