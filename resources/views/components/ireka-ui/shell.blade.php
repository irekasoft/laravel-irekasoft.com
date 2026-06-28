@props([
    'title' => 'ireka-ui',
    'description' => null,
    'active' => 'intro',
    'components' => [],
])

<x-layouts.app :title="$title" :description="$description">
  <div class="flex-1 bg-white">
    <div class="mx-auto w-full max-w-7xl px-6">
      <div class="grid gap-10 py-10 md:grid-cols-[15rem_minmax(0,1fr)] lg:py-12">

      {{-- Sidebar --}}
      <aside class="hidden md:block">
        <div class="sticky top-24 max-h-[calc(100vh-7rem)] overflow-y-auto pr-2">
          <a href="{{ route('ireka-ui.index') }}" class="flex items-center gap-2.5">
            <span class="grid h-8 w-8 place-items-center rounded-lg bg-ink text-paper">
              <i class="bi bi-boxes text-base" aria-hidden="true"></i>
            </span>
            <span class="leading-tight">
              <span class="block font-mono text-[15px] font-semibold text-ink">ireka-ui</span>
              <span class="block font-mono text-[11px] text-charcoal/40">v0.1.0</span>
            </span>
          </a>

          <nav class="mt-7 space-y-7 text-sm">
            <div class="space-y-1">
              <p class="mb-1.5 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Getting started</p>
              <a href="{{ route('ireka-ui.index') }}" @class([
                  'flex items-center gap-2.5 rounded-lg px-3 py-1.5 transition-colors',
                  'bg-ink text-paper font-medium' => $active === 'intro',
                  'text-charcoal/70 hover:bg-charcoal/5' => $active !== 'intro',
              ])>
                <i class="bi bi-house-door" aria-hidden="true"></i> Introduction
              </a>
              <a href="{{ route('ireka-ui.components') }}" @class([
                  'flex items-center gap-2.5 rounded-lg px-3 py-1.5 transition-colors',
                  'bg-ink text-paper font-medium' => $active === 'components',
                  'text-charcoal/70 hover:bg-charcoal/5' => $active !== 'components',
              ])>
                <i class="bi bi-grid-1x2" aria-hidden="true"></i> Components
              </a>
            </div>

            <div class="space-y-0.5">
              <p class="mb-1.5 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Components</p>
              @foreach ($components as $c)
                <a href="{{ route('ireka-ui.components') }}#{{ $c['id'] }}"
                  data-component-link="{{ $c['id'] }}"
                  class="block rounded-lg px-3 py-1.5 text-charcoal/70 transition-colors hover:bg-charcoal/5">
                  {{ $c['name'] }}
                </a>
              @endforeach
            </div>
          </nav>
        </div>
      </aside>

      {{-- Content --}}
      <div class="min-w-0">
        {{ $slot }}
      </div>

      </div>
    </div>
  </div>
</x-layouts.app>
