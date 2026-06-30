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
    $patterns = [
      ['id' => 'modals', 'route' => 'ireka-ui.modals', 'name' => 'Modals', 'summary' => 'Full-screen modal pages — presented or pushed, with multi-step flows.'],
      ['id' => 'overlays', 'route' => 'ireka-ui.overlays', 'name' => 'Overlays', 'summary' => 'Bottom sheets, dropdown menus, alerts, popups, HUDs and toasts.'],
      ['id' => 'layout', 'route' => 'ireka-ui.layout', 'name' => 'Layout', 'summary' => 'The 12-column Grid and the iOS-style GroupedList.'],
    ];
  @endphp

  <h2 class="mt-12 max-w-3xl font-display text-2xl font-semibold tracking-tight text-ink">Patterns</h2>
  <p class="mt-2 max-w-3xl leading-relaxed text-charcoal/60">Composable building blocks for navigation, overlays and page layout.</p>
  <div class="mt-5 grid gap-2 sm:grid-cols-2">
    @foreach ($patterns as $p)
      <a href="{{ route($p['route']) }}"
        class="group flex items-start gap-3 rounded-xl border border-charcoal/10 bg-white px-4 py-3 transition-colors hover:border-charcoal/30">
        <div class="min-w-0">
          <p class="font-mono text-[13px] text-ink">{{ $p['name'] }}</p>
          <p class="mt-0.5 text-xs text-charcoal/50">{{ $p['summary'] }}</p>
        </div>
        <i class="bi bi-arrow-right ml-auto mt-0.5 text-charcoal/30 transition-colors group-hover:text-ink" aria-hidden="true"></i>
      </a>
    @endforeach
  </div>

  <h2 class="mt-12 max-w-3xl font-display text-2xl font-semibold tracking-tight text-ink">Components</h2>
  <div class="mt-5 grid gap-2 sm:grid-cols-2">
    @foreach ($catalog as $c)
      <a href="{{ route('ireka-ui.component', $c['id']) }}"
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
