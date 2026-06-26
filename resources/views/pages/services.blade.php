<x-layouts.app
    :title="'Services'"
    :description="'Product design and engineering from the team behind Orderla — for businesses that want the same thing built bespoke.'"
>

    <section class="bg-ink text-paper">
        <div class="mx-auto max-w-6xl px-6 pt-20 pb-16 md:pt-28 md:pb-20">
            <p class="font-mono text-[12px] uppercase tracking-[0.2em] text-gold">Services</p>
            <h1 class="mt-6 font-display font-semibold text-4xl md:text-5xl tracking-tight max-w-2xl">
                What we do, beyond Orderla
            </h1>
            <p class="mt-5 max-w-xl text-paper/70 leading-relaxed">
                Orderla is our product. For partners who want the same kind of thing built bespoke —
                custom commerce tooling, internal systems, or a full product build — we take on a
                limited number of engagements a year.
            </p>
        </div>
    </section>

    <section class="bg-paper">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20 grid gap-10 md:grid-cols-3">
            <div>
                <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta">Product strategy</p>
                <p class="mt-3 font-display text-xl">Plan before you build</p>
                <p class="mt-3 text-sm text-charcoal/70 leading-relaxed">
                    Scoping, flows, and a clear plan before a single line of code — so the build matches
                    how the business actually runs.
                </p>
            </div>
            <div>
                <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta">UI / UX design</p>
                <p class="mt-3 font-display text-xl">Interfaces people don't have to learn</p>
                <p class="mt-3 text-sm text-charcoal/70 leading-relaxed">
                    Web and mobile interface design with an eye for the screens staff use under
                    pressure, not just the ones in a pitch deck.
                </p>
            </div>
            <div>
                <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta">Engineering</p>
                <p class="mt-3 font-display text-xl">Laravel, React, and React Native</p>
                <p class="mt-3 text-sm text-charcoal/70 leading-relaxed">
                    Full-stack builds on Laravel and React/Inertia for the web, React Native for mobile —
                    the same stack that runs Orderla in production.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-ink-soft text-paper">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20 grid gap-10 md:grid-cols-2 items-center">
            <div>
                <p class="font-mono text-[12px] uppercase tracking-wide text-gold">Commerce infrastructure</p>
                <h2 class="mt-3 font-display text-2xl tracking-tight">
                    WhatsApp Business API &amp; POS integration
                </h2>
                <p class="mt-4 text-paper/70 leading-relaxed">
                    The part most teams underestimate — WhatsApp Business API integration, payment
                    gateways, and Bluetooth receipt printer support. We've already solved these for
                    Orderla, and can bring that directly into a partner's build.
                </p>
            </div>
            <ul class="space-y-3 text-sm text-paper/80">
                <li class="border-t border-paper/20 pt-3">WhatsApp Cloud API &amp; Embedded Signup</li>
                <li class="border-t border-paper/20 pt-3">Payment gateway integration (FPX, cards, e-wallets)</li>
                <li class="border-t border-paper/20 pt-3">Bluetooth thermal printer (ESC/POS) support</li>
            </ul>
        </div>
    </section>

    <section class="bg-paper">
        <div class="mx-auto max-w-6xl px-6 py-20 md:py-24 text-center">
            <h2 class="font-display font-semibold text-3xl md:text-4xl tracking-tight">
                Have something specific in mind?
            </h2>
            <div class="mt-8">
                <a href="{{ route('contact') }}"
                   class="font-mono text-[13px] uppercase tracking-wide bg-ink text-paper px-6 py-3 rounded-sm hover:bg-charcoal transition-colors">
                    Tell us about it
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
