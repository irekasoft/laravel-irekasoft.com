<x-ireka-ui.shell
  :title="$category['name'] . ' — ireka-ui'"
  :description="$category['summary']"
  :active="$category['id']"
  :components="$catalog">

  <div class="max-w-3xl">
    @if ($category['eyebrow'])
      <p class="inline-flex items-center gap-1.5 font-mono text-[11px] uppercase tracking-[0.16em] text-terracotta">
        <i class="bi bi-collection" aria-hidden="true"></i> {{ $category['eyebrow'] }}
      </p>
    @endif
    <h1 class="mt-3 font-display text-4xl font-semibold tracking-tight text-ink md:text-5xl">{{ $category['name'] }}</h1>
    @if ($category['intro_html'])
      <div class="ireka-ui-markdown mt-5 text-lg leading-relaxed text-charcoal/70">
        {!! $category['intro_html'] !!}
      </div>
    @endif
  </div>

  <div class="mt-10 grid gap-2 sm:grid-cols-2">
    @foreach ($category['guides'] as $g)
      <a href="{{ route('ireka-ui.guide', [$category['id'], $g['id']]) }}"
        class="group flex items-start gap-3 rounded-xl border border-charcoal/10 bg-white px-4 py-3 transition-colors hover:border-charcoal/30">
        <div class="min-w-0">
          <p class="font-mono text-[13px] text-ink">{{ $g['title'] }}</p>
          <p class="mt-0.5 text-xs text-charcoal/50">{{ $g['summary'] }}</p>
        </div>
        <i class="bi bi-arrow-right ml-auto mt-0.5 text-charcoal/30 transition-colors group-hover:text-ink" aria-hidden="true"></i>
      </a>
    @endforeach
  </div>

</x-ireka-ui.shell>
