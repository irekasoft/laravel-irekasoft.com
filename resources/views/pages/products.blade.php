<x-layouts.app
    :title="'Products'"
    :description="'The Orderla commerce suite — Orderla.my, Orderla.co, and Orderla FOS — plus the earlier apps that started it all.'"
>

    <section class="bg-ink text-paper">
        <div class="mx-auto max-w-6xl px-6 pt-20 pb-16 md:pt-28 md:pb-20">
            <p class="font-mono text-[12px] uppercase tracking-[0.2em] text-gold">Products</p>
            <h1 class="mt-6 font-display font-semibold text-4xl md:text-5xl tracking-tight max-w-2xl">
                The Orderla Suite
            </h1>
            <p class="mt-5 max-w-xl text-paper/70 leading-relaxed">
                Three products, one job: let a merchant run their business without hiring an IT team.
            </p>
        </div>
    </section>

    {{-- ORDERLA.MY --}}
    <section class="bg-paper">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20 grid gap-10 md:grid-cols-2 items-start">
            <div>
                <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta">01 — Orderla.my</p>
                <h2 class="mt-3 font-display font-semibold text-3xl tracking-tight">
                    WhatsApp-native order management
                </h2>
                <p class="mt-4 text-charcoal/70 leading-relaxed">
                    Built for SMEs that already take orders over WhatsApp. Orderla.my turns a chat
                    thread into a real ordering flow — catalogue, cart, and order tracking — without
                    asking the customer to download anything.
                </p>
                <a href="https://orderla.my" target="_blank" rel="noopener"
                   class="mt-6 inline-block font-mono text-[13px] uppercase tracking-wide border-b border-ink pb-1 hover:text-terracotta hover:border-terracotta transition-colors">
                    Visit orderla.my →
                </a>
            </div>
            <ul class="space-y-3 text-sm">
                <li class="border-t border-ink/10 pt-3">No app download required for the customer</li>
                <li class="border-t border-ink/10 pt-3">Catalogue and order form set up same-day</li>
                <li class="border-t border-ink/10 pt-3">Built for SMEs, hawkers, and home businesses</li>
            </ul>
        </div>
    </section>

    {{-- ORDERLA.CO --}}
    <section class="bg-ink-soft text-paper">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20 grid gap-10 md:grid-cols-2 items-start">
            <div>
                <p class="font-mono text-[12px] uppercase tracking-wide text-gold">02 — Orderla.co</p>
                <h2 class="mt-3 font-display font-semibold text-3xl tracking-tight">
                    Storefronts &amp; B2B ordering
                </h2>
                <p class="mt-4 text-paper/70 leading-relaxed">
                    For brands that have outgrown a chat-only setup. Orderla.co gives merchants a proper
                    e-commerce storefront, with B2B ordering flows for wholesale and repeat business
                    customers.
                </p>
                <a href="https://orderla.co" target="_blank" rel="noopener"
                   class="mt-6 inline-block font-mono text-[13px] uppercase tracking-wide border-b border-paper pb-1 hover:text-gold hover:border-gold transition-colors">
                    Visit orderla.co →
                </a>
            </div>
            <ul class="space-y-3 text-sm text-paper/80">
                <li class="border-t border-paper/20 pt-3">Full storefront, not just a product list</li>
                <li class="border-t border-paper/20 pt-3">B2B ordering for wholesale customers</li>
                <li class="border-t border-paper/20 pt-3">Subscription tooling for growing merchants</li>
            </ul>
        </div>
    </section>

    {{-- ORDERLA FOS --}}
    <section class="bg-paper">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20 grid gap-10 md:grid-cols-2 items-start">
            <div>
                <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta">03 — Orderla FOS</p>
                <h2 class="mt-3 font-display font-semibold text-3xl tracking-tight">
                    Food Ordering System &amp; POS
                </h2>
                <p class="mt-4 text-charcoal/70 leading-relaxed">
                    Point of sale for F&amp;B floors — fast order entry, kitchen routing, and receipt
                    printing over Bluetooth, running on whatever tablet or phone is already on the
                    counter.
                </p>
                <span class="mt-6 inline-block font-mono text-[12px] uppercase tracking-wide text-charcoal/40">
                    In active development
                </span>
            </div>
            <ul class="space-y-3 text-sm">
                <li class="border-t border-ink/10 pt-3">Built for the counter, not the back office</li>
                <li class="border-t border-ink/10 pt-3">Bluetooth thermal receipt printing</li>
                <li class="border-t border-ink/10 pt-3">Works as an installable app on existing hardware</li>
            </ul>
        </div>
    </section>

    {{-- HERITAGE --}}
    <section class="bg-ink-soft text-paper">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20">
            <p class="font-mono text-[12px] uppercase tracking-[0.2em] text-gold mb-3">Where it started</p>
            <p class="max-w-xl text-paper/70 leading-relaxed mb-10">
                Before Orderla, there was a decade of small iOS apps — the ones that taught us how to
                build software people actually open every day.
                <a href="{{ route('apps.index') }}" class="text-gold hover:text-gold-soft transition-colors">Browse the full app catalogue →</a>
            </p>
            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 font-mono text-sm text-paper/60">
                <div class="border-t border-paper/15 pt-3">FaceClock Pro — analogue clock</div>
                <div class="border-t border-paper/15 pt-3">Nightstand — alarm &amp; sleep timer</div>
                <div class="border-t border-paper/15 pt-3">Expense — spending tracker</div>
                <div class="border-t border-paper/15 pt-3">FaceLapse — daily photo journal</div>
                <div class="border-t border-paper/15 pt-3">Countdowns — multi-event countdown</div>
                <div class="border-t border-paper/15 pt-3">Daily Reminder — recurring reminders</div>
                <div class="border-t border-paper/15 pt-3">InstaReka — photo text overlays</div>
                <div class="border-t border-paper/15 pt-3">Kamus — EN ⇄ BM dictionary</div>
                <div class="border-t border-paper/15 pt-3">App Icon Resizer — dev utility, Mac</div>
            </div>
        </div>
    </section>

</x-layouts.app>
