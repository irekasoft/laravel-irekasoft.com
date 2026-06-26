@props([
    'title' => null,
    'description' => null,
    'immersive' => false,
])

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'iReka Soft' }} — iReka Soft</title>
  <meta name="description"
    content="{{ $description ?? 'iReka Soft builds the Orderla commerce suite — WhatsApp ordering, storefronts, and F&B point of sale — from Cyberjaya, Malaysia.' }}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body @class([
    'font-sans antialiased',
    'bg-paper text-charcoal' => !$immersive,
    'bg-black text-white' => $immersive,
])>

  @php
    $navItems = [
        ['route' => 'home', 'label' => 'Home'],
        ['route' => 'apps.index', 'label' => 'Apps'],
        ['route' => 'services', 'label' => 'Services'],
        ['route' => 'about', 'label' => 'About'],
        ['route' => 'contact', 'label' => 'Contact'],
        // ['route' => 'products', 'label' => 'Products'],
    ];
    $ctaHref = $immersive ? route('products') : 'https://wa.me/601135859242';
    $ctaLabel = $immersive ? 'Explore iReka Soft' : 'WhatsApp Us';
    $ctaExternal = true;
  @endphp

  <header @class([
      'fixed inset-x-0 top-0 z-50',
      'border-b border-ink/10 bg-paper/90 backdrop-blur-sm' => !$immersive,
      'border-b border-white/10 bg-black/40 backdrop-blur-sm' => $immersive,
  ])>
    <div class="mx-auto max-w-7xl px-6 py-5 flex items-center justify-between gap-6">
      <a href="{{ route('home') }}" class="flex items-center gap-3 shrink-0 group">

        <span class="flex flex-col">
          <span @class([
              'font-display font-semibold text-2xl tracking-tight leading-none',
              'text-ink' => !$immersive,
              'text-white' => $immersive,
          ])>
            ireka<span class="text-blue-800">soft.</span>
          </span>
          
        </span>
      </a>

      <nav @class([
          'hidden lg:flex items-center font-mono text-[12px] uppercase tracking-[0.14em]',
          'gap-8 text-charcoal/70' => !$immersive,
          'gap-0 text-white/70' => $immersive,
      ])>
        @foreach ($navItems as $index => $item)
          @if ($immersive && $index > 0)
            <span class="px-4 text-white/25" aria-hidden="true">/</span>
          @endif
          <a href="{{ route($item['route']) }}" @class([
              'hover:text-ink transition-colors' => !$immersive,
              'hover:text-white transition-colors' => $immersive,
              request()->routeIs($item['route'])
                  ? ($immersive
                      ? 'text-white'
                      : 'text-ink')
                  : '',
          ])>{{ $item['label'] }}</a>
        @endforeach
      </nav>

      <div class="flex items-center gap-2 sm:gap-3 shrink-0">
        <a href="{{ $ctaHref }}" @if ($ctaExternal) target="_blank" rel="noopener" @endif
          @class([
              'hidden sm:inline-flex shrink-0 font-mono text-[12px] uppercase tracking-[0.12em] px-4 py-2.5 rounded-sm transition-colors',
              'bg-green-500 text-white hover:bg-green-600' => !$immersive,
              'bg-blue-500 text-white hover:bg-blue-600' => $immersive,
          ])>
          {{ $ctaLabel }}
        </a>

        <button type="button" id="mobile-menu-button" @class([
            'cursor-pointer lg:hidden relative z-[120] flex h-10 w-10 items-center justify-start ml-2 -mr-4',
            'text-ink' => !$immersive,
            'text-white' => $immersive,
        ]) aria-expanded="false"
          aria-controls="mobile-menu" aria-label="Open menu">
          <span
            class="mobile-menu-bar absolute block h-0.5 w-5 bg-blue-500 transition-all duration-300 -translate-y-1.5"></span>
          <span class="mobile-menu-bar absolute block h-0.5 w-4 bg-current transition-all duration-300"></span>
          <span
            class="mobile-menu-bar absolute block h-0.5 w-5 bg-current transition-all duration-300 translate-y-1.5"></span>
        </button>
      </div>
    </div>
  </header>

  <div id="mobile-menu"
    class="fixed inset-0 z-[100] lg:hidden opacity-0 invisible pointer-events-none data-[open=true]:opacity-100 data-[open=true]:visible data-[open=true]:pointer-events-auto transition-opacity duration-300"
    data-open="false" aria-hidden="true">
    <div class="absolute inset-0 bg-ink/95 backdrop-blur-md" data-mobile-menu-backdrop aria-hidden="true"></div>

    <div class="relative z-10 flex h-full flex-col px-6 pt-6 pb-10 -mt-2">
      <div class="flex shrink-0 justify-end">
        <button type="button" id="mobile-menu-close"
          class="cursor-pointer relative z-20 flex items-center gap-2  border-paper/25  px-3 py-2 font-mono text-[16px] uppercase tracking-[0.14em] text-paper transition-colors hover:border-paper/50"
          aria-label="Close menu">          
          <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
            aria-hidden="true">
            <path stroke-linecap="round" d="M6 6l12 12M18 6L6 18" />
          </svg>
        </button>
      </div>

      <nav class="mt-10 flex flex-col gap-8 font-display text-3xl sm:text-4xl text-paper">
        @foreach ($navItems as $item)
          <a href="{{ route($item['route']) }}" @class([
              'transition-colors hover:text-blue-800',
              request()->routeIs($item['route']) ? 'text-blue-500' : 'text-paper',
          ])>{{ $item['label'] }}</a>
        @endforeach
      </nav>

      {{-- <a href="{{ $ctaHref }}" @if ($ctaExternal) target="_blank" rel="noopener" @endif
        class="mt-auto font-mono text-[13px] uppercase tracking-[0.12em] bg-blue-800 text-paper px-6 py-3.5 rounded-sm text-center hover:bg-blue-900 transition-colors">
        {{ $ctaLabel }}
      </a> --}}
    </div>
  </div>

  <main class="pt-20">
    {{ $slot }}
  </main>

  <footer class="bg-ink text-paper/80">
    <div class="mx-auto max-w-6xl px-6 py-14 grid gap-10 md:grid-cols-4">
      <div class="md:col-span-2">
        <p class="font-bold text-xl text-paper">ireka<span class="text-blue-400">soft.</span></p>
        <p class="mt-0 text-sm leading-relaxed max-w-sm text-paper/60">
          A software development studio in Cyberjaya, Malaysia.
        </p>
        <p class="mt-4 font-mono text-[12px] uppercase tracking-wide text-paper/40">
          iReka Soft Enterprise · Co. Reg. 201503132920 · Est. 2015
        </p>
      </div>

      <div>
        <p class="font-mono text-[12px] uppercase tracking-wide text-blue-400 mb-3">Orderla Suite</p>
        <ul class="space-y-2 text-sm">
          <li><a href="https://orderla.my" target="_blank" rel="noopener"
              class="hover:text-paper transition-colors">Orderla.my</a></li>
          <li><a href="https://orderla.co" target="_blank" rel="noopener"
              class="hover:text-paper transition-colors">Orderla.co</a></li>
          <li><a href="https://orderla.co/fos" target="_blank" rel="noopener"
              class="hover:text-paper transition-colors">Orderla FOS</a></li>
        </ul>
      </div>

      <div>
        <p class="font-mono text-[12px] uppercase tracking-wide text-blue-400 mb-3">Get in touch</p>
        <ul class="space-y-2 text-sm">
          <li><a href="mailto:irekasoft@gmail.com" class="hover:text-paper transition-colors">irekasoft@gmail.com</a>
          </li>
          <li><a href="https://wa.me/601135859242" target="_blank" rel="noopener"
              class="hover:text-paper transition-colors">+60 11-3585 9242</a></li>
          <li class="text-paper/50">Cyberjaya, Selangor, Malaysia</li>
        </ul>
      </div>
    </div>

    <div class="border-t border-paper/10">
      <div
        class="mx-auto max-w-6xl px-6 py-5 flex flex-wrap items-center justify-between gap-3 font-mono text-[11px] uppercase tracking-wide text-paper/40">
        <span>&copy; {{ date('Y') }} iReka Soft Enterprise. All rights reserved.</span>
        <div class="flex gap-5">
          <a href="https://facebook.com/irekasoft" target="_blank" rel="noopener"
            class="hover:text-paper flex items-center gap-1" aria-label="Facebook">
            <i class="bi bi-facebook text-2xl" aria-hidden="true"></i>
            <span class="sr-only">Facebook</span>
          </a>
          <a href="https://instagram.com/irekasoft" target="_blank" rel="noopener"
            class="hover:text-paper flex items-center gap-1" aria-label="Instagram">
            <i class="bi bi-instagram text-2xl" aria-hidden="true"></i>
            <span class="sr-only">Instagram</span>
          </a>
          <a href="https://www.linkedin.com/company/ireka-soft" target="_blank" rel="noopener"
            class="hover:text-paper flex items-center gap-1" aria-label="LinkedIn">
            <i class="bi bi-linkedin text-2xl" aria-hidden="true"></i>
            <span class="sr-only">LinkedIn</span>
          </a>
          <a href="https://github.com/irekasoft" target="_blank" rel="noopener"
            class="hover:text-paper flex items-center gap-1" aria-label="GitHub">
            <i class="bi bi-github text-2xl" aria-hidden="true"></i>
            <span class="sr-only">GitHub</span>
          </a>

        </div>
      </div>
    </div>
  </footer>

</body>

</html>
