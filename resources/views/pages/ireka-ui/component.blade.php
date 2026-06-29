<x-ireka-ui.shell
  :title="$doc['name'] . ' — ireka-ui'"
  :description="$doc['summary']"
  :active="$doc['id']"
  :components="$catalog">

  <p class="font-mono text-[11px] uppercase tracking-[0.16em] text-charcoal/40">Component</p>
  <h1 class="mt-3 font-display text-4xl font-semibold tracking-tight text-ink">{{ $doc['name'] }}</h1>
  <p class="mt-5 max-w-2xl text-lg leading-relaxed text-charcoal/70">{{ $doc['lead'] }}</p>

  <div class="mt-10">
    <x-ireka-ui.demo :code="$doc['code']">
      {!! $doc['preview_html'] !!}
    </x-ireka-ui.demo>

    @foreach ($doc['prop_groups'] as $group)
      <h3 class="pt-6 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">{{ $group['title'] }}</h3>
      <div class="mt-3">
        <x-ireka-ui.props :rows="$group['rows']" />
      </div>
    @endforeach
  </div>

</x-ireka-ui.shell>
