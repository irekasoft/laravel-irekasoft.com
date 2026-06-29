@props([
    'items' => [],
    'label' => 'On this page',
    'variant' => 'desktop',
])

@if ($variant === 'mobile')
  <div class="relative mb-6 xl:hidden" data-on-page-nav-mobile>
    <button type="button"
      data-on-page-nav-toggle
      class="flex w-full items-center gap-2.5 rounded-xl border border-charcoal/10 bg-charcoal/[0.03] px-3.5 py-2.5 text-left text-sm transition-colors hover:border-charcoal/20"
      aria-expanded="false"
      aria-controls="on-page-nav-menu">
      <i class="bi bi-list text-charcoal/50" aria-hidden="true"></i>
      <span class="font-medium text-ink">{{ $label }}</span>
      <span data-on-page-nav-current class="ml-auto truncate text-charcoal/50"></span>
      <i class="bi bi-chevron-down shrink-0 text-charcoal/40 transition-transform duration-200" data-on-page-nav-chevron aria-hidden="true"></i>
    </button>

    <div id="on-page-nav-menu"
      data-on-page-nav-menu
      class="absolute inset-x-0 top-full z-30 mt-1.5 hidden max-h-[min(24rem,60vh)] overflow-y-auto rounded-xl border border-charcoal/10 bg-white py-1.5 shadow-lg">
      @foreach ($items as $item)
        <a href="#{{ $item['id'] }}"
          data-component-link="{{ $item['id'] }}"
          class="on-page-nav__link block px-3.5 py-2 text-sm text-charcoal/70 transition-colors hover:bg-charcoal/5 hover:text-ink">
          {{ $item['name'] }}
        </a>
      @endforeach
    </div>
  </div>
@else
  <nav data-on-page-nav-desktop class="hidden xl:block">
    <p class="mb-3 flex items-center gap-2 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">
      <i class="bi bi-list text-[13px]" aria-hidden="true"></i>
      {{ $label }}
    </p>
    <ul class="space-y-0.5 border-l border-charcoal/10">
      @foreach ($items as $item)
        <li>
          <a href="#{{ $item['id'] }}"
            data-component-link="{{ $item['id'] }}"
            class="on-page-nav__link -ml-px block border-l-2 border-transparent py-1 pl-3 pr-2 text-sm text-charcoal/60 transition-colors hover:text-ink">
            {{ $item['name'] }}
          </a>
        </li>
      @endforeach
    </ul>
  </nav>
@endif
