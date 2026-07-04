@props([
    'title' => null,
    'description' => null,
    'product' => 'Documentation',
    'section' => 'intro',
])

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? $product }} — irekasoft.</title>
  <meta name="description"
    content="{{ $description ?? 'Documentation by iReka Soft.' }}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased flex flex-col bg-white text-charcoal">

  <header class="fixed inset-x-0 top-0 z-50 border-b border-charcoal/10 bg-white/90 backdrop-blur-sm">
    <div class="mx-auto flex h-14 max-w-7xl items-center justify-between gap-4 px-4 sm:px-6">
      <div class="flex min-w-0 items-center gap-3">
        <a href="{{ route('ireka-ui.index') }}" class="truncate font-mono text-[15px] font-semibold text-ink">
          {{ $product }}
        </a>
      </div>

      <a href="{{ route('home') }}"
        class="shrink-0 font-mono text-[11px] uppercase tracking-[0.12em] text-charcoal/50 transition-colors hover:text-ink">
        <span class="hidden sm:inline">← </span>irekasoft
      </a>
    </div>
  </header>

  <div id="docs-topnav" class="fixed inset-x-0 top-14 z-40">
    <x-ireka-ui.top-nav :section="$section" />
  </div>

  <div id="docs-sidebar-drawer"
    class="fixed inset-0 z-[100] md:hidden opacity-0 invisible pointer-events-none transition-opacity duration-300 data-[open=true]:opacity-100 data-[open=true]:visible data-[open=true]:pointer-events-auto"
    data-open="false" aria-hidden="true">
    <div class="absolute inset-0 bg-ink/40 backdrop-blur-sm" data-docs-sidebar-backdrop aria-hidden="true"></div>

    <div data-docs-sidebar-panel
      class="absolute inset-y-0 left-0 flex w-[min(100%,18rem)] flex-col border-r border-charcoal/10 bg-white shadow-xl transition-transform duration-300 -translate-x-full">
      <div class="flex shrink-0 items-center justify-between border-b border-charcoal/10 px-2 py-3">
        <span class="font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">Menu</span>
        <button type="button" id="docs-sidebar-close"
          class="cursor-pointer flex h-9 w-9 items-center justify-center rounded-lg text-charcoal/60 transition-colors hover:bg-charcoal/5 hover:text-ink"
          aria-label="Close documentation menu">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
            aria-hidden="true">
            <path stroke-linecap="round" d="M6 6l12 12M18 6L6 18" />
          </svg>
        </button>
      </div>

      <div class="flex-1 overflow-y-auto px-4 py-5">
        @isset($sidebar)
          {{ $sidebar }}
        @endisset
      </div>
    </div>
  </div>

  <main class="flex flex-col pt-32">
    <div class="mx-auto flex w-full max-w-7xl items-start gap-10 px-4 pt-3 pb-8 sm:px-6 lg:pt-4 lg:pb-10">
      <aside @class([
          'hidden w-60 shrink-0 md:block',
          'md:hidden' => $section === 'intro',
      ])>
        <div class="sticky top-32 max-h-[calc(100vh-9rem)] overflow-y-auto pr-2">
          @isset($sidebar)
            {{ $sidebar }}
          @endisset
        </div>
      </aside>

      <div class="min-w-0 flex-1">
        {{ $slot }}
      </div>

      @isset($toc)
        <aside class="hidden w-44 shrink-0 xl:block">
          <div class="sticky top-32 max-h-[calc(100vh-9rem)] overflow-y-auto pl-2">
            {{ $toc }}
          </div>
        </aside>
      @endisset
    </div>
  </main>

  <footer class="border-t border-charcoal/10 bg-white">
    <div
      class="mx-auto max-w-7xl px-4 py-5 font-mono text-[11px] uppercase tracking-[0.12em] text-charcoal/40 sm:px-6">
      {{ $product }} · built by <a href="{{ route('home') }}" class="text-charcoal/60 hover:text-ink">irekasoft</a>
    </div>
  </footer>

</body>

</html>
