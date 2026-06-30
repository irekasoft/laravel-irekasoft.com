<x-ireka-ui.shell
  :title="$page['title']"
  :description="$page['description']"
  active="intro"
  :components="$components">

  <div id="introduction" class="max-w-3xl scroll-mt-32">
    @if ($page['eyebrow'])
      <p class="inline-flex items-center gap-1.5 font-mono text-[11px] uppercase tracking-[0.16em] text-terracotta">
        <i class="bi bi-stars" aria-hidden="true"></i> {{ $page['eyebrow'] }}
      </p>
    @endif
    <h1 class="mt-3 font-mono text-4xl font-semibold tracking-tight text-ink md:text-5xl">{{ $page['title'] }}</h1>
    @if ($page['intro_html'])
      <div class="ireka-ui-markdown mt-5 text-lg leading-relaxed text-charcoal/70">
        {!! $page['intro_html'] !!}
      </div>
    @endif

    <div class="mt-7 flex flex-wrap gap-3">
      <a href="{{ route('ireka-ui.components') }}"
        class="inline-flex items-center gap-2 rounded-xl bg-ink px-4 py-2.5 text-sm font-medium text-paper transition-colors hover:bg-ink-soft">
        Browse components <i class="bi bi-chevron-right" aria-hidden="true"></i>
      </a>
    </div>
  </div>

  @if ($page['features'])
    <div class="mt-12 grid max-w-3xl gap-4 sm:grid-cols-2">
      @foreach ($page['features'] as $f)
        <div class="rounded-xl border border-charcoal/10 bg-white p-5">
          <span class="mb-3 grid h-9 w-9 place-items-center rounded-lg bg-ink text-paper">
            <i class="bi {{ $f['icon'] }} text-base" aria-hidden="true"></i>
          </span>
          <p class="font-display text-[15px] font-semibold text-ink">{{ $f['title'] }}</p>
          <p class="mt-1 text-sm leading-relaxed text-charcoal/60">{{ $f['body'] }}</p>
        </div>
      @endforeach
    </div>
  @endif

  @foreach ($page['sections'] as $section)
    <x-ireka-ui.markdown-section :section="$section" class="mt-14" />
  @endforeach

</x-ireka-ui.shell>
