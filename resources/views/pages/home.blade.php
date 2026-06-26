<x-layouts.app
    :immersive="true"
    :title="'Home'"
    :description="'iReka Soft builds the Orderla commerce suite — WhatsApp ordering, storefronts, and F&B point of sale — from Cyberjaya, Malaysia.'"
>

    {{-- IMMERSIVE HERO --}}
    <section class="relative min-h-screen flex flex-col overflow-hidden">
        <div class="absolute inset-0 hero-geometry" aria-hidden="true"></div>
        <div class="absolute inset-0 hero-grid opacity-50" aria-hidden="true"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-ink/30 via-transparent to-ink" aria-hidden="true"></div>

        <div class="relative flex flex-1 flex-col justify-center px-6 pt-28 pb-10 md:px-10 md:pt-32 md:pb-14">
            <div class="mx-auto w-full max-w-5xl">
                <div class="viewfinder border border-white/25 px-6 py-10 md:px-12 md:py-14">
                    <span class="viewfinder-corner" aria-hidden="true"></span>

                    <p class="font-mono text-[11px] uppercase tracking-[0.22em] text-white/45">
                        Mode 02 — Suite active
                    </p>

                    <div class="mt-8 md:mt-10">
                        <h1 class="font-display font-semibold leading-none tracking-tight">
                            <span class="text-[clamp(3.5rem,14vw,8.5rem)]">ireka</span>
                            <span class="text-[clamp(3.5rem,14vw,8.5rem)] text-gold">soft</span>
                        </h1>
                    </div>

                    <p class="mt-8 max-w-2xl font-mono text-[11px] md:text-[12px] uppercase leading-relaxed tracking-[0.14em] text-white/70">
                        A Cyberjaya product studio — UI/UX design, web apps, and mobile development.
                        Makers of the Orderla commerce suite, and partners for bespoke software that ships.
                    </p>

                    <div class="mt-8 inline-flex items-center gap-3 rounded-full border border-white/15 bg-white/5 px-2 py-2 backdrop-blur-sm">
                        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-gold/20 font-display text-sm font-semibold text-gold">
                            iR
                        </span>
                        <span class="font-mono text-[11px] uppercase tracking-[0.16em] text-white/75 mr-3">
                            iReka Soft — Cyberjaya, Malaysia
                        </span>
                    </div>

                    <nav class="mt-10 flex flex-wrap items-center gap-x-4 gap-y-2 font-mono text-[11px] uppercase tracking-[0.16em] text-white/45">
                        <a href="https://orderla.my" target="_blank" rel="noopener" class="hover:text-white transition-colors">Orderla.my</a>
                        <span aria-hidden="true">/</span>
                        <a href="https://orderla.co" target="_blank" rel="noopener" class="hover:text-white transition-colors">Orderla.co</a>
                        <span aria-hidden="true">/</span>
                        <a href="{{ route('products') }}" class="hover:text-white transition-colors">Orderla FOS</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="relative border-t border-white/10 px-6 py-5 md:px-10">
            <div class="mx-auto flex max-w-5xl flex-wrap items-end justify-between gap-6">
                <div>
                    <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-white/40">Suite status</p>
                    <div class="mt-3 flex items-end gap-2" aria-hidden="true">
                        <span class="h-8 w-1.5 bg-violet"></span>
                        <span class="h-6 w-1.5 bg-violet/80"></span>
                        <span class="h-4 w-1.5 bg-violet/55"></span>
                        <span class="h-2.5 w-1.5 bg-violet/30"></span>
                    </div>
                </div>
                <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-white/40">
                    Cyberjaya, Malaysia
                </p>
            </div>
        </div>
    </section>

    {{-- SIGNATURE: THE MENU BOARD --}}
    <section class="bg-ink-soft text-paper border-t border-white/10">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20">
            <p class="font-mono text-[12px] uppercase tracking-[0.2em] text-gold mb-8">
                What's on the menu
            </p>

            <ul class="divide-y divide-paper/10 font-display">
                <li class="group">
                    <a href="https://orderla.my" target="_blank" rel="noopener" class="flex flex-col md:flex-row md:items-baseline gap-2 md:gap-4 py-7">
                        <span class="text-2xl md:text-3xl group-hover:text-gold transition-colors">Orderla.my</span>
                        <span class="leader-row text-paper/20 flex-1"></span>
                        <span class="font-mono text-sm uppercase tracking-wide text-paper/50 whitespace-nowrap">
                            WhatsApp ordering, zero setup
                        </span>
                    </a>
                </li>
                <li class="group">
                    <a href="https://orderla.co" target="_blank" rel="noopener" class="flex flex-col md:flex-row md:items-baseline gap-2 md:gap-4 py-7">
                        <span class="text-2xl md:text-3xl group-hover:text-gold transition-colors">Orderla.co</span>
                        <span class="leader-row text-paper/20 flex-1"></span>
                        <span class="font-mono text-sm uppercase tracking-wide text-paper/50 whitespace-nowrap">
                            Storefronts that scale to B2B
                        </span>
                    </a>
                </li>
                <li class="group">
                    <a href="{{ route('products') }}" class="flex flex-col md:flex-row md:items-baseline gap-2 md:gap-4 py-7">
                        <span class="text-2xl md:text-3xl group-hover:text-gold transition-colors">Orderla FOS</span>
                        <span class="leader-row text-paper/20 flex-1"></span>
                        <span class="font-mono text-sm uppercase tracking-wide text-paper/50 whitespace-nowrap">
                            POS built for the kitchen, not the boardroom
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    {{-- WHAT WE BUILD --}}
    <section class="bg-paper">
        <div class="mx-auto max-w-6xl px-6 py-20 md:py-24">
            <h2 class="font-display text-blue-500 font-semibold text-3xl md:text-4xl tracking-tight max-w-xl">
                One suite, three jobs.
            </h2>

            <div class="mt-12 grid gap-10 md:grid-cols-3">
                <div>
                    <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta">Orderla.my</p>
                    <p class="mt-3 font-display text-blue-500 text-xl">Take orders where your customers already are.</p>
                    <p class="mt-3 text-sm text-charcoal/70 leading-relaxed">
                        A WhatsApp-native ordering flow for SMEs — no app to download, no POS to buy.
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
                    <p class="mt-3 font-display text-blue-500 text-xl">Point of sale that survives a dinner rush.</p>
                    <p class="mt-3 text-sm text-charcoal/70 leading-relaxed">
                        A food ordering and POS system built for the floor — fast order entry, kitchen
                        tickets, and receipt printing that just works.
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
                <a href="{{ route('contact') }}"
                   class="font-mono text-[13px] uppercase tracking-wide bg-ink text-paper px-6 py-3 rounded-sm hover:bg-charcoal transition-colors">
                    Get in touch
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
