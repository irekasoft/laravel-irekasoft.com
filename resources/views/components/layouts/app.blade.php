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
        // ['route' => 'products', 'label' => 'Products'],
        // ['route' => 'contact', 'label' => 'Contact'],
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
            'lg:hidden relative z-[120] flex h-10 w-10 items-center justify-center -mr-2',
            'text-ink' => !$immersive,
            'text-white' => $immersive,
        ]) aria-expanded="false"
          aria-controls="mobile-menu" aria-label="Open menu">
          <span
            class="mobile-menu-bar absolute block h-0.5 w-5 bg-current transition-all duration-300 -translate-y-1.5"></span>
          <span class="mobile-menu-bar absolute block h-0.5 w-5 bg-current transition-all duration-300"></span>
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

    <div class="relative z-10 flex h-full flex-col px-6 pt-6 pb-10">
      <div class="flex shrink-0 justify-end">
        <button type="button" id="mobile-menu-close"
          class="relative z-20 flex items-center gap-2 border border-paper/25 bg-ink px-3 py-2 font-mono text-[12px] uppercase tracking-[0.14em] text-paper transition-colors hover:border-paper/50"
          aria-label="Close menu">
          <span>Close</span>
          <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
            aria-hidden="true">
            <path stroke-linecap="round" d="M6 6l12 12M18 6L6 18" />
          </svg>
        </button>
      </div>

      <nav class="mt-10 flex flex-col gap-8 font-display text-3xl sm:text-4xl text-paper">
        @foreach ($navItems as $item)
          <a href="{{ route($item['route']) }}" @class([
              'transition-colors hover:text-gold',
              request()->routeIs($item['route']) ? 'text-blue-800' : 'text-paper',
          ])>{{ $item['label'] }}</a>
        @endforeach
      </nav>

      <a href="{{ $ctaHref }}" @if ($ctaExternal) target="_blank" rel="noopener" @endif
        class="mt-auto font-mono text-[13px] uppercase tracking-[0.12em] bg-blue-800 text-paper px-6 py-3.5 rounded-sm text-center hover:bg-blue-900 transition-colors">
        {{ $ctaLabel }}
      </a>
    </div>
  </div>

  <main class="pt-20">
    {{ $slot }}
  </main>

  <footer class="bg-ink text-paper/80">
    <div class="mx-auto max-w-6xl px-6 py-14 grid gap-10 md:grid-cols-4">
      <div class="md:col-span-2">
        <p class="font-display text-xl text-paper">iReka Soft</p>
        <p class="mt-3 text-sm leading-relaxed max-w-sm text-paper/60">
          An software development studio in Cyberjaya, Malaysia.
        </p>
        <p class="mt-4 font-mono text-[12px] uppercase tracking-wide text-paper/40">
          iReka Soft Enterprise · Co. Reg. 201503132920 · Est. 2015
        </p>
      </div>

      <div>
        <p class="font-mono text-[12px] uppercase tracking-wide text-gold mb-3">Orderla Suite</p>
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
        <p class="font-mono text-[12px] uppercase tracking-wide text-gold mb-3">Get in touch</p>
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
            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M17.525 8.999h-3.031v-1.54c0-.718.061-1.104 1.092-1.104h1.899V3.37l-2.6-.011c-3.006 0-4.092 1.493-4.092 4.006v1.634H7.005V13h2.789v8h4.7v-8h2.44l.591-4.001z" />
            </svg>
            <span class="sr-only">Facebook</span>
          </a>
          <a href="https://instagram.com/irekasoft" target="_blank" rel="noopener"
            class="hover:text-paper flex items-center gap-1" aria-label="Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M12 2.163c3.204.002 3.584.013 4.849.07 1.366.06 2.633.338 3.608 1.313.97.972 1.251 2.247 1.311 3.608.058 1.267.068 1.645.069 4.849.002 3.206-.011 3.586-.069 4.85-.06 1.363-.34 2.637-1.314 3.609-.971.981-2.246 1.253-3.608 1.312-1.264.057-1.644.069-4.849.069s-3.585-.012-4.849-.069c-1.362-.059-2.638-.331-3.608-1.312-.974-.972-1.255-2.246-1.314-3.609C2.175 15.648 2.163 15.268 2.163 12c0-3.204.013-3.584.07-4.849.059-1.359.34-2.634 1.313-3.608.971-.974 2.246-1.254 3.607-1.313C8.416 2.176 8.796 2.163 12 2.163zm0-2.163C8.741 0 8.333.014 7.052.073c-1.677.077-3.166.68-4.342 1.856C1.464 3.101.86 4.591.783 6.27.725 7.55.712 7.958.712 12.001s.013 4.451.071 5.73c.077 1.68.681 3.169 1.927 4.415 1.253 1.254 2.741 1.857 4.419 1.934C8.332 23.986 8.74 24 12 24s3.668-.014 4.949-.073c1.678-.077 3.166-.68 4.419-1.934 1.247-1.246 1.851-2.735 1.928-4.415.059-1.279.071-1.687.071-5.729s-.012-4.451-.07-5.73c-.077-1.68-.681-3.169-1.928-4.415C20.116 1.753 18.628 1.15 16.95 1.073 15.669 1.014 15.26 1 12 1zm0 5.838a6.164 6.164 0 1 0 0 12.326 6.164 6.164 0 0 0 0-12.326zm0 10.184A4.02 4.02 0 1 1 12 7.981a4.019 4.019 0 0 1 0 8.041zm6.406-11.845a1.44 1.44 0 1 0 0 2.88 1.44 1.44 0 0 0 0-2.88z" />
            </svg>
            <span class="sr-only">Instagram</span>
          </a>
          <a href="https://www.linkedin.com/company/ireka-soft" target="_blank" rel="noopener"
            class="hover:text-paper flex items-center gap-1" aria-label="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M19.998 3A2.0003 2.0003 0 0 1 22 5v14a2.0003 2.0003 0 0 1-2.002 2H3.998A1.9988 1.9988 0 0 1 2 19V5a2 2 0 0 1 1.998-2h16zm-10.846 15V10.685H6V18h3.152zm-1.578-8.308c1.012 0 1.644-.688 1.644-1.548-.018-.878-.631-1.548-1.626-1.548-.995 0-1.646.67-1.646 1.548 0 .86.633 1.548 1.611 1.548h.017zm7.422 8.308v-4.226c0-.226.018-.453.085-.614.188-.454.615-.924 1.334-.924.941 0 1.318.698 1.318 1.719V18H20v-4.595c0-2.471-1.318-3.619-3.076-3.619-1.368 0-1.979.759-2.312 1.293V10.684h-3.152c.041.749 0 7.315 0 7.315h3.152z" />
            </svg>
            <span class="sr-only">LinkedIn</span>
          </a>
          <a href="https://github.com/irekasoft" target="_blank" rel="noopener"
            class="hover:text-paper flex items-center gap-1" aria-label="GitHub">
            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.387.6.111.82-.258.82-.577 0-.285-.011-1.04-.017-2.04-3.338.726-4.042-1.415-4.042-1.415C4.422 17.07 3.633 16.7 3.633 16.7c-1.087-.744.084-.729.084-.729 1.205.084 1.84 1.237 1.84 1.237 1.07 1.835 2.807 1.305 3.495.998.108-.775.418-1.305.762-1.605-2.665-.3-5.466-1.335-5.466-5.932 0-1.31.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.303 1.23a11.49 11.49 0 0 1 3.003-.404c1.018.004 2.045.138 3.003.404 2.293-1.553 3.299-1.23 3.299-1.23.653 1.653.242 2.874.119 3.176.77.84 1.236 1.911 1.236 3.221 0 4.609-2.803 5.629-5.475 5.921.43.371.823 1.102.823 2.222 0 1.606-.015 2.902-.015 3.293 0 .321.216.694.825.576C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
            </svg>
            <span class="sr-only">GitHub</span>
          </a>

        </div>
      </div>
    </div>
  </footer>

</body>

</html>
