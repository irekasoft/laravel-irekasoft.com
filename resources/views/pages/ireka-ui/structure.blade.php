<x-ireka-ui.shell
  :title="$page['section']['title'] . ' — ireka-ui'"
  :description="$page['description']"
  active="structure"
  :components="$components">

  <x-ireka-ui.markdown-section :section="$page['section']" heading="h1" />

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

</x-ireka-ui.shell>
