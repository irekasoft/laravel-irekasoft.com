<x-ireka-ui.shell
  :title="$page['title'] . ' — ireka-ui'"
  :description="$page['description']"
  active="getting-started"
  :components="$components">

  @if ($page['eyebrow'])
    <p class="font-mono text-[11px] uppercase tracking-[0.16em] text-charcoal/40">{{ $page['eyebrow'] }}</p>
  @endif
  <h1 class="mt-3 font-display text-4xl font-semibold tracking-tight text-ink md:text-5xl">{{ $page['title'] }}</h1>
  @if ($page['intro_html'])
    <div class="ireka-ui-markdown mt-5 max-w-3xl text-lg leading-relaxed text-charcoal/70">
      {!! $page['intro_html'] !!}
    </div>
  @endif

  <div class="mt-12 space-y-12">
    @foreach ($page['sections'] as $section)
      <x-ireka-ui.markdown-section :section="$section" heading="h2" />
    @endforeach
  </div>

</x-ireka-ui.shell>
