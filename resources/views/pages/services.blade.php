<x-layouts.app
    :title="'Services'"
    :description="'Web and mobile app development services from iReka Soft — UI/UX design, React Native development, and Laravel mobile backends from Cyberjaya, Malaysia.'"
>

  <x-page-hero
    :image="asset('images/heroes/services.jpg')"
    
  >
      <p class="font-mono text-[12px] uppercase tracking-[0.2em] text-gold">Services</p>
      <h1 class="mt-6 font-display font-semibold text-4xl md:text-5xl tracking-tight max-w-2xl leading-tight">
        Web / Mobile App<br>Development<br>Services
      </h1>
      <div class="mt-6 max-w-2xl text-paper/70 leading-relaxed space-y-4">
        <p>
          We can help you <em>plan</em>, <em>design</em>, <em>develop</em> and <em>publish</em>
          <strong class="text-paper">web apps</strong>, <strong class="text-paper">APIs</strong> and <strong class="text-paper">admin panels</strong>
          with <strong class="text-paper">Laravel + React</strong> and <strong class="text-paper">React Native</strong>.
        </p>
        <aside class="flex gap-4 rounded-lg border border-paper/15 bg-paper/5 px-5 py-4 backdrop-blur-sm">
          <i class="bi bi-lightbulb text-xl text-gold shrink-0 mt-0.5" aria-hidden="true"></i>
          <p class="leading-relaxed">            
            <strong class="text-paper">Laravel</strong> powers the backends, dashboards, and
            business logic that mobile and web products rely on.
            <strong class="text-paper">React Native</strong> is a <em>cross-platform</em> stack that
            helps companies ship native mobile experiences from a single codebase.
          </p>
        </aside>
      </div>

      <div class="mt-8 flex flex-col sm:flex-row flex-wrap gap-4 justify-start items-stretch sm:items-center">
        <a href="{{ route('services.portfolio') }}"
          class="inline-flex items-center justify-center font-mono text-[13px] uppercase tracking-wide bg-gold text-black px-6 py-3 rounded-sm hover:bg-gold/80 transition-colors">
          <i class="bi bi-collection mr-1"></i>
          See our portfolio
        </a>
        <a href="https://irekaweb.com/enquiry?from=irekasoft.com" rel="noopener"
          class="inline-flex items-center justify-center font-mono text-[13px] uppercase tracking-wide bg-blue-500 text-white px-6 py-3 rounded-sm hover:bg-blue-600 transition-colors">
          <i class="bi bi-cursor mr-1"></i>
          Send enquiry
        </a>
      </div>
  </x-page-hero>

  <x-service-offerings-grid />

  <x-service-flow-timeline />

  
  <section class="section-dot-grid bg-paper relative border-t border-ink/10" data-dot-cursor>
    <div class="section-dot-grid__pulses" aria-hidden="true"></div>
    <div class="relative z-10 mx-auto max-w-6xl px-6 py-16 md:py-20 text-center">
      <h2 class="font-display font-semibold text-2xl md:text-3xl tracking-tight text-blue-500">
        Technologies We Used
      </h2>
      <p class="mt-4 mx-auto max-w-2xl text-center text-sm text-charcoal/60 leading-relaxed">
        We use the latest modern technologies to build your software.
      </p>
      <x-service-tech-grid />
    </div>
  </section>

  <section class="services-cta-band services-cta-band--guilloche text-paper border-t border-paper/10">
    <div class="relative z-10 mx-auto max-w-6xl px-6 py-16 md:py-24 text-center">
      <blockquote class="font-serif text-3xl md:text-4xl font-normal tracking-tight leading-snug text-paper/95 max-w-3xl mx-auto">
        &ldquo;Plan &amp; design before jumping into coding to<br class="hidden sm:inline">
        make sure we get everything covered&rdquo;
      </blockquote>
    </div>
  </section>

  <section class="subtle-line-grid bg-white">
    <div class="relative z-10 mx-auto max-w-6xl px-6 pt-14 pb-26 text-center">
      <h2 class="font-display font-semibold text-3xl md:text-4xl tracking-tight text-blue-500">
        Previous Clients
      </h2>
      <p class="mt-5 max-w-2xl mx-auto text-charcoal/70 leading-relaxed">
        We have experience working with aspiring individuals to high profile companies. We are
        thrilled to serve and to help more people to thrive in this mobilize world of business.
      </p>
      <div class="mt-12 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8 items-center justify-items-center">
        <img src="{{ asset('images/services/clients/etikaf-logo-o68p19quq0tqottd0taru41nke8e6439zrncolosm2.png') }}"
          alt="Etikaf" class="max-h-12 w-auto object-contain grayscale opacity-70 hover:opacity-100 hover:grayscale-0 transition-all" loading="lazy">
        <img src="{{ asset('images/services/clients/logowebint3-new-01_9dda33eb3e742c2ed60c139812ef0c74-o7l9o0p2qxnl9wc9v4d767kh3k07k176l1mgr9zi6y.png') }}"
          alt="Webint3" class="max-h-12 w-auto object-contain grayscale opacity-70 hover:opacity-100 hover:grayscale-0 transition-all" loading="lazy">
        <img src="{{ asset('images/services/clients/logo_main.png') }}"
          alt="Client logo" class="max-h-12 w-auto object-contain grayscale opacity-70 hover:opacity-100 hover:grayscale-0 transition-all" loading="lazy">
        <img src="{{ asset('images/services/clients/Unknown-1.jpeg') }}"
          alt="Client logo" class="max-h-12 w-auto object-contain grayscale opacity-70 hover:opacity-100 hover:grayscale-0 transition-all" loading="lazy">
        <img src="{{ asset('images/services/clients/logo-50da964fe92f09387cbb162638dfb4b0.png') }}"
          alt="Client logo" class="max-h-12 w-auto object-contain grayscale opacity-70 hover:opacity-100 hover:grayscale-0 transition-all" loading="lazy">
        <img src="{{ asset('images/services/clients/objective-connection.png') }}"
          alt="Objective Connection" class="max-h-12 w-auto object-contain grayscale opacity-70 hover:opacity-100 hover:grayscale-0 transition-all" loading="lazy">
        <img src="{{ asset('images/services/clients/tganu.png') }}"
          alt="TGANU" class="max-h-12 w-auto object-contain grayscale opacity-70 hover:opacity-100 hover:grayscale-0 transition-all" loading="lazy">
        <img src="{{ asset('images/services/clients/mayamediamyLogo@2x.png') }}"
          alt="Maya Media" class="max-h-12 w-auto object-contain grayscale opacity-70 hover:opacity-100 hover:grayscale-0 transition-all" loading="lazy">
      </div>
    </div>
  </section>

  <section class="services-ocean-band text-paper" data-ocean-cursor>
    <div class="services-ocean-band__glow" aria-hidden="true"></div>
    <div class="services-ocean-band__waves" aria-hidden="true"></div>
    <div class="services-ocean-band__cursor" aria-hidden="true"></div>

    <div class="relative z-10 mx-auto max-w-6xl px-6 pt-14 pb-12 text-center">

      <h2 class="font-serif text-3xl md:text-4xl font-normal tracking-tight leading-snug text-paper/95 max-w-3xl mx-auto mb-4">
        Hire us to build your custom software — web, mobile, or both.
      </h2>

      <p class="max-w-2xl mx-auto text-paper/70 leading-relaxed">
        We believe that every business should have mobile apps to retain customer and to engage
        users to give more value for their lives.
      </p>
      <p class="mt-4 max-w-2xl mx-auto text-paper/70 leading-relaxed">
        We are here to help you by giving free consultation where and how we could start in this
        mobile apps technologies.
      </p>
      <div class="mt-8 flex justify-center">
        <a href="https://irekaweb.com/enquiry?from=irekasoft.com" rel="noopener" class="ocean-btn">
          <span class="ocean-btn__label">
            <i class="bi bi-cursor mr-1"></i>
            Send enquiry
          </span>
        </a>
      </div>
      <p class="mt-8 text-sm text-paper/50 font-mono">
        We are based in RekaScape, Cyberjaya — feel free to ask about mobile apps or web development.
      </p>
    </div>
  </section>

</x-layouts.app>
