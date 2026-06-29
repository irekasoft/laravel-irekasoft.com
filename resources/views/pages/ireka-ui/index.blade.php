<x-ireka-ui.shell
  :title="$page['title']"
  :description="$page['description']"
  active="intro"
  :components="$components">

  <div id="introduction" class="max-w-3xl scroll-mt-24">
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
        Browse components <i class="bi bi-arrow-right" aria-hidden="true"></i>
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

  {{-- Index --}}
  <h2 class="mt-14 max-w-3xl font-display text-2xl font-semibold tracking-tight text-ink">What's inside</h2>
  <p class="mt-3 max-w-3xl leading-relaxed text-charcoal/70">
    {{ count($components) }} components and counting — here's the full set.
    <a href="{{ route('ireka-ui.components') }}" class="text-ink underline underline-offset-2">See them in action</a>.
  </p>
  <div class="mt-5 grid max-w-3xl gap-2 sm:grid-cols-2">
    @foreach ($components as $c)
      <a href="{{ route('ireka-ui.components') }}#{{ $c['id'] }}"
        class="group flex items-start gap-3 rounded-xl border border-charcoal/10 bg-white px-4 py-3 transition-colors hover:border-charcoal/30">
        <div class="min-w-0">
          <p class="font-mono text-[13px] text-ink">{{ $c['name'] }}</p>
          <p class="mt-0.5 text-xs text-charcoal/50">{{ $c['summary'] }}</p>
        </div>
        <i class="bi bi-arrow-right ml-auto mt-0.5 text-charcoal/30 transition-colors group-hover:text-ink" aria-hidden="true"></i>
      </a>
    @endforeach
  </div>

</x-ireka-ui.shell>
