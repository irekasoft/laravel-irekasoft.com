<x-ireka-ui.shell
  title="Components — ireka-ui"
  :description="$page['description']"
  active="components"
  :components="$catalog">

  <div class="max-w-3xl">
    @if ($page['eyebrow'])
      <p class="inline-flex items-center gap-1.5 font-mono text-[11px] uppercase tracking-[0.16em] text-terracotta">
        <i class="bi bi-grid" aria-hidden="true"></i> {{ $page['eyebrow'] }}
      </p>
    @endif
    <h1 class="mt-3 font-display text-4xl font-semibold tracking-tight text-ink">{{ $page['title'] }}</h1>
    @if ($page['intro_html'])
      <div class="ireka-ui-markdown mt-5 text-lg leading-relaxed text-charcoal/70">
        {!! $page['intro_html'] !!}
      </div>
    @endif
  </div>

  @php
    $patternCategories = app(\App\Support\IrekaUiRepository::class)->guidesByCategory();
  @endphp

  <h2 class="mt-12 max-w-3xl font-display text-2xl font-semibold tracking-tight text-ink">Patterns</h2>
  <p class="mt-2 max-w-3xl leading-relaxed text-charcoal/60">Composable building blocks for navigation, overlays and page layout.</p>

  <div class="mt-6 space-y-8">
    @foreach ($patternCategories as $cat)
      <div>
        <a href="{{ route($cat['route']) }}" class="group inline-flex items-center gap-2">
          <h3 class="font-mono text-[12px] uppercase tracking-[0.14em] text-ink">{{ $cat['name'] }}</h3>
          <i class="bi bi-arrow-right text-charcoal/30 transition-colors group-hover:text-ink" aria-hidden="true"></i>
        </a>
        <div class="mt-3 grid gap-2 sm:grid-cols-2">
          @foreach ($cat['guides'] as $g)
            <a href="{{ route('ireka-ui.guide', [$cat['id'], $g['id']]) }}"
              class="group flex items-center gap-3 rounded-xl border border-charcoal/10 bg-white px-4 py-3 transition-colors hover:border-charcoal/30">
              <span class="flex h-10 w-12 shrink-0 items-center justify-center rounded-lg border border-charcoal/10 bg-charcoal/[0.03] text-charcoal/55 transition-colors group-hover:text-ink">
                <x-ireka-ui.component-icon :id="$g['id']" />
              </span>
              <div class="min-w-0">
                <p class="font-mono text-[13px] text-ink">{{ $g['title'] }}</p>
                <p class="mt-0.5 text-xs text-charcoal/50">{{ $g['summary'] }}</p>
              </div>
              <i class="bi bi-arrow-right ml-auto text-charcoal/30 transition-colors group-hover:text-ink" aria-hidden="true"></i>
            </a>
          @endforeach
        </div>
      </div>
    @endforeach
  </div>

  <h2 class="mt-12 max-w-3xl font-display text-2xl font-semibold tracking-tight text-ink">Components</h2>
  <div class="mt-5 grid gap-2 sm:grid-cols-2">
    @foreach ($catalog as $c)
      <a href="{{ route('ireka-ui.component', $c['id']) }}"
        class="group flex items-center gap-3 rounded-xl border border-charcoal/10 bg-white px-4 py-3 transition-colors hover:border-charcoal/30">
        <span class="flex h-10 w-12 shrink-0 items-center justify-center rounded-lg border border-charcoal/10 bg-charcoal/[0.03] text-charcoal/55 transition-colors group-hover:text-ink">
          <x-ireka-ui.component-icon :id="$c['id']" />
        </span>
        <div class="min-w-0">
          <p class="font-mono text-[13px] text-ink">{{ $c['name'] }}</p>
          <p class="mt-0.5 text-xs text-charcoal/50">{{ $c['summary'] }}</p>
        </div>
        <i class="bi bi-arrow-right ml-auto text-charcoal/30 transition-colors group-hover:text-ink" aria-hidden="true"></i>
      </a>
    @endforeach
  </div>

</x-ireka-ui.shell>
