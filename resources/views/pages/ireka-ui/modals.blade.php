<x-ireka-ui.shell
  :title="$page['title'] . ' — ireka-ui'"
  :description="$page['description']"
  active="modals"
  :components="$components">

  <div class="max-w-3xl">
    @if ($page['eyebrow'])
      <p class="inline-flex items-center gap-1.5 font-mono text-[11px] uppercase tracking-[0.16em] text-terracotta">
        <i class="bi bi-window-stack" aria-hidden="true"></i> {{ $page['eyebrow'] }}
      </p>
    @endif
    <h1 class="mt-3 font-mono text-4xl font-semibold tracking-tight text-ink md:text-5xl">{{ $page['title'] }}</h1>
    @if ($page['intro_html'])
      <div class="ireka-ui-markdown mt-5 text-lg leading-relaxed text-charcoal/70">
        {!! $page['intro_html'] !!}
      </div>
    @endif
  </div>

  @foreach ($page['sections'] as $section)
    <x-ireka-ui.markdown-section :section="$section" class="mt-14" />
  @endforeach

</x-ireka-ui.shell>
