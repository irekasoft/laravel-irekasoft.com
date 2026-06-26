<x-layouts.app
    :title="'About'"
    :description="'iReka Soft Enterprise — founded 2015 in Cyberjaya, Malaysia. The studio behind the Orderla commerce suite.'"
>

    <x-page-hero
        :image="asset('images/heroes/about.jpg')"        
    >
        <div class="grid gap-10 md:grid-cols-[1fr_auto] md:items-end">
            <div>
                <p class="font-mono text-[12px] uppercase tracking-[0.2em] text-gold">About</p>
                <h1 class="mt-6 font-display font-semibold text-4xl md:text-5xl tracking-tight max-w-2xl">
                    A small studio, building things people use every day.
                </h1>
            </div>
            <img
                src="{{ asset('images/about/Artboard-17-300x300.png') }}"
                alt="iReka Soft"
                class="w-20 h-20 rounded-2xl shadow-lg shadow-black/30"
                width="60"
                height="60"
                loading="eager"
            >
        </div>
    </x-page-hero>

    <section class="bg-paper">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20 grid gap-12 md:grid-cols-3">
            <div class="md:col-span-1">
                <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta">Our story</p>
            </div>
            <div class="md:col-span-2 space-y-5 text-charcoal/80 leading-relaxed">
                <p>
                    It started in 2009, in a computer lab at Tokyo University of Technology. We noticed
                    that people around us liked repetitive, almost game-like practice — solving the same
                    kind of maths problem, over and over. So we built CalcDrill, a simple iPhone app for
                    exactly that. It found an audience in Japan's education category, and it taught us
                    something we still build around: small, focused software travels further than
                    feature-heavy software.
                </p>
                <p>
                    From there we kept building — iOS apps, then Android, then web, picking up WordPress
                    and Laravel along the way, alongside design tools like Sketch and Illustrator.
                    In May 2015 that became a company: iReka Soft, founded in Cyberjaya, Malaysia.
                </p>
                <p>
                    For years that meant client work — custom mobile and web apps for businesses across
                    Malaysia — alongside a string of small consumer apps under our own name. Over time,
                    one thread pulled ahead of the rest: commerce. Helping merchants take orders, run a
                    storefront, and manage a till without needing an IT team. That thread is now Orderla,
                    and it's the focus of everything we build.
                </p>
                <p>
                    Mobile technology keeps maturing, and software that genuinely helps in daily life
                    still matters to us. Our motto is <em class="text-charcoal">app for life</em>.
                </p>
                
            </div>
        </div>
    </section>

    <section class="bg-ink-soft text-paper">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20 grid gap-12 md:grid-cols-2 md:items-center">
            <div>
                <p class="font-mono text-[12px] uppercase tracking-wide text-gold mb-3">Learn + research + development</p>
                <p class="text-paper/70 leading-relaxed">
                    Technologies evolve quickly. We invest time studying recent trends, new techniques,
                    and what's worth adopting — so what we ship stays current without chasing every headline.
                </p>                
            </div>
            <div>
                <p class="font-mono text-[12px] uppercase tracking-wide text-gold mb-3">Platform partners</p>
                <p class="text-paper/70 leading-relaxed">
                    Apple for the platform and developer tools that shaped our earliest work, and Google
                    for the business services and Android ecosystem that let us reach a wider audience.
                </p>
                
            </div>
        </div>
    </section>

    <section class="bg-ink text-paper">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20 grid gap-10 md:grid-cols-2">
            <div>
                <p class="font-mono text-[12px] uppercase tracking-wide text-gold mb-3">Vision</p>
                <p class="font-display text-xl leading-snug">
                    Commerce software merchants anywhere can run their business on — built from Malaysia,
                    used well beyond it.
                </p>
            </div>
            <div>
                <p class="font-mono text-[12px] uppercase tracking-wide text-gold mb-3">Mission</p>
                <p class="text-paper/70 leading-relaxed">
                    Give business owners tools that fit how they actually work — ordering, storefronts,
                    and point of sale that are fast to set up and simple to run, with no IT department
                    required.
                </p>
            </div>
            <div>
                <p class="font-mono text-[12px] uppercase tracking-wide text-gold mb-3">Objective</p>
                <p class="text-paper/70 leading-relaxed">
                    Develop quality software with the best user experience we can manage. Put Malaysia
                    on the map as a place that builds apps and systems the world actually uses.
                </p>
            </div>
            <div>
                <p class="font-mono text-[12px] uppercase tracking-wide text-gold mb-3">Values</p>
                <p class="text-paper/70 leading-relaxed">
                    Care in the craft, refined rather than rushed. We'd rather ship something narrow and
                    solid than broad and brittle — and we try to nurture the technology community around us.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-paper">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20">
            <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta mb-6">Business information</p>
            <dl class="grid gap-6 md:grid-cols-3 max-w-3xl text-sm">
                <div>
                    <dt class="text-charcoal/50">Business name</dt>
                    <dd class="font-display text-lg">iReka Soft Enterprise</dd>
                </div>
                <div>
                    <dt class="text-charcoal/50">Registration number</dt>
                    <dd class="font-display text-lg">002435676-P</dd>
                </div>
                <div>
                    <dt class="text-charcoal/50">Established</dt>
                    <dd class="font-display text-lg">May 2015</dd>
                </div>
                <div>
                    <dt class="text-charcoal/50">Registered country</dt>
                    <dd class="font-display text-lg">Malaysia</dd>
                </div>
                <div>
                    <dt class="text-charcoal/50">Bank</dt>
                    <dd class="font-display text-lg">CIMB Bank Berhad (Cyberjaya Branch)</dd>
                </div>
                <div>
                    <dt class="text-charcoal/50">Representative</dt>
                    <dd class="font-display text-lg">
                        <a href="{{ route('about.hijazi') }}"
                            class="text-terracotta hover:underline transition-colors">
                            Muhammad Hijazi
                        </a>
                    </dd>
                </div>
                <div class="md:col-span-3">
                    <dt class="text-charcoal/50">Business activities</dt>
                    <dd class="mt-2 space-y-1 font-display text-lg">
                        <p>Developing mobile software</p>
                        <p>Digital creative</p>
                        <p>Publishing mobile apps on App Store and Google Play</p>
                        <p>Mobile apps consultation</p>
                    </dd>
                </div>
            </dl>
        </div>
    </section>

</x-layouts.app>
