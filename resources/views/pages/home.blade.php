<x-layouts.app :immersive="true" :title="'Home'" :description="'iReka Soft builds the Orderla commerce suite — WhatsApp ordering, storefronts, and F&B point of sale — from Cyberjaya, Malaysia.'">

  {{-- IMMERSIVE HERO --}}
  <section class="hero-stage relative min-h-screen flex flex-col overflow-hidden isolate">
    <div class="hero-bg pointer-events-none" aria-hidden="true">
      <div class="hero-bg__geometry"></div>
      <div class="hero-bg__glow"></div>
      <div class="hero-bg__grid"></div>
      <div class="hero-bg__shade"></div>
    </div>

    <div class="relative z-10 flex flex-1 flex-col justify-center px-6 py-10">
      <div class="mx-auto w-full max-w-5xl ">
        <div class="viewfinder border border-white/25 px-6 py-10">
          <span class="viewfinder-corner" aria-hidden="true"></span>

          <div class="mt-8">
            <h1 class="font-display font-semibold leading-none tracking-tight">
              <span class="text-[clamp(3.5rem,14vw,8.5rem)]">ireka</span><span class="text-[clamp(3.5rem,14vw,8.5rem)] text-blue-500">soft.</span>
            </h1>
          </div>

          <p
            class="mt-2 max-w-2xl font-mono text-[11px] md:text-[12px] uppercase leading-relaxed tracking-[0.14em] text-white/70 text-balance">
            A modern software development studio — UI/UX design, web apps, and mobile development.
            Working on Laravel, React, and React Native.
          </p>

          <a
            href="{{ route('services') }}"
            class="mt-8 inline-flex items-center gap-3 rounded-full border border-white/15 bg-white/5 px-2 py-2 backdrop-blur-sm hover:border-white/30 hover:bg-white/10 transition-colors">
            <span
              class="flex h-8 w-8 items-center justify-center rounded-full bg-gold/20 font-display text-sm font-semibold text-gold">
              iR
            </span>
            <span class="font-mono text-[11px] uppercase tracking-[0.16em] text-white/75 mr-3">
              iReka Soft — Cyberjaya, Malaysia
            </span>
          </a>

          <nav
            class="mt-10 flex flex-wrap items-center gap-x-4 gap-y-2 font-mono text-[11px] uppercase tracking-[0.16em] text-white/45">
            <a href="/apps" target="_blank" rel="noopener"
              class="hover:text-white transition-colors">Apps</a>
            <span aria-hidden="true">/</span>
            <a href="https://orderla.my" target="_blank" rel="noopener"
              class="hover:text-white transition-colors">Orderla.my</a>
            <span aria-hidden="true">/</span>
            <a href="https://orderla.co" target="_blank" rel="noopener"
              class="hover:text-white transition-colors">Orderla.co</a>
            <span aria-hidden="true">/</span>
            <a href="{{ route('products') }}" class="hover:text-white transition-colors">Orderla FOS</a>
          </nav>
        </div>
      </div>
    </div>

  </section>

  {{-- WHAT WE BUILD --}}
  <section class="bg-paper">
    <div class="mx-auto max-w-6xl px-6 py-20 md:py-24">
      <h2 class="font-display text-blue-500 font-semibold text-3xl md:text-4xl tracking-tight max-w-xl">
        One suite, three markets.
      </h2>

      <div class="mt-12 grid gap-10 md:grid-cols-3">
        <div>
          <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta">Orderla.my</p>
          <p class="mt-3 font-display text-blue-500 text-xl">Take orders where your customers already are.</p>
          <p class="mt-3 text-sm text-charcoal/70 leading-relaxed">
            A WhatsApp-native ordering flow for SMEs — no app to download.
            Merchants set up a catalogue and start taking orders the same day.
          </p>
        </div>
        <div>
          <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta">Orderla.co</p>
          <p class="mt-3 font-display text-blue-500 text-xl">A storefront that grows with the business.</p>
          <p class="mt-3 text-sm text-charcoal/70 leading-relaxed">
            E-commerce storefronts and B2B ordering for brands that have outgrown a chat-only
            setup, with the catalogue and checkout to match.
          </p>
        </div>
        <div>
          <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta">Orderla FOS</p>
          <p class="mt-3 font-display text-blue-500 text-xl">Food ordering and mini POS system.</p>
          <p class="mt-3 text-sm text-charcoal/70 leading-relaxed">
            A food ordering and mini POS system built for the floor — fast order entry. Built for restaurants and cafes.
          </p>
        </div>
      </div>
    </div>
  </section>

  {{-- STORY STRIP --}}
  <section class="bg-ink text-paper">
    <div class="mx-auto max-w-6xl px-6 py-20 md:py-24">
      <p class="font-mono text-[12px] uppercase tracking-[0.2em] text-gold mb-8">
        How we got here
      </p>

      <div class="grid gap-8 md:grid-cols-3 font-display">
        <div class="border-t border-paper/20 pt-5">
          <p class="font-mono text-sm text-paper/40 mb-2">2009 — Tokyo</p>
          <p class="text-lg leading-snug">
            Built CalcDrill, an iPhone maths app, while studying in Japan. It became one of
            the most-used education apps there — the first sign that small, focused software
            could travel.
          </p>
        </div>
        <div class="border-t border-paper/20 pt-5">
          <p class="font-mono text-sm text-paper/40 mb-2">2015 — Cyberjaya</p>
          <p class="text-lg leading-snug">
            Founded iReka Soft, building iOS, Android, and web apps for clients across
            Malaysia while shipping a string of small consumer apps of our own.
          </p>
        </div>
        <div class="border-t border-paper/20 pt-5">
          <p class="font-mono text-sm text-paper/40 mb-2">Today — Orderla</p>
          <p class="text-lg leading-snug">
            All of that became one focus: Orderla, a commerce suite merchants actually run
            their business on, every day.
          </p>
        </div>
      </div>
    </div>
  </section>

  {{-- CTA --}}
  <section class="bg-paper">
    <div class="mx-auto max-w-6xl px-6 py-20 md:py-24 text-center">
      <h2 class="font-display font-semibold text-3xl md:text-4xl tracking-tight text-blue-500">
        Building something a merchant can run their whole business on.
      </h2>
      <p class="mt-4 text-charcoal/70">Want to see it, or build something like it with us?</p>
      <div class="mt-8 flex flex-wrap gap-4 justify-center">
        <a href="{{ route('services') }}"
          class="font-mono text-[13px] uppercase tracking-wide bg-gold text-black px-6 py-3 rounded-sm hover:bg-gold/80 transition-colors">
          <i class="bi bi-person-lines-fill mr-1"></i>
          Our Services
        </a>
      </div>
    </div>
  </section>

</x-layouts.app>
