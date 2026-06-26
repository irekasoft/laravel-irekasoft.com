<x-layouts.app
    :title="'Services'"
    :description="'Web and mobile app development services from iReka Soft — UI/UX design, React Native development, and Laravel mobile backends from Cyberjaya, Malaysia.'"
>

  <section class="bg-ink text-paper">
    <div class="mx-auto max-w-6xl px-6 pt-20 pb-16 md:pt-28 md:pb-20">
      <p class="font-mono text-[12px] uppercase tracking-[0.2em] text-gold">Services</p>
      <h1 class="mt-6 font-display font-semibold text-4xl md:text-5xl tracking-tight max-w-2xl leading-tight">
        Web / Mobile App<br>Development<br>Services
      </h1>
      <div class="mt-6 max-w-2xl text-paper/70 leading-relaxed space-y-4">
        <p>
          We can help you to <em>plan</em>, <em>design</em>, <em>develop</em> and <em>publish</em>
          mobile apps for <strong class="text-paper">iPhone</strong> and
          <strong class="text-paper">Android</strong> platforms with
          <strong class="text-paper">React Native technology</strong>.
        </p>
        <p>
          React Native is a <em>cross-platform</em> mobile apps development technology that help
          many Fortune 500 companies build their apps efficiently. React Native generate
          <strong class="text-paper">native user interface</strong> for respective platforms and
          it performs amazing.
        </p>
        <p>
          Now <strong class="text-paper">performance</strong> and
          <strong class="text-paper">maintainability</strong> can live together thanks to React
          Native technology.
        </p>
      </div>
    </div>
  </section>

  <section class="bg-paper">
    <div class="mx-auto max-w-6xl px-6 py-16 md:py-20 grid gap-12 md:grid-cols-3 text-center">
      <div>
        <div class="mx-auto w-60" aria-hidden="true">
          <x-service-graphic.uiux />
        </div>
        <h2 class="mt-6 font-bold text-blue-600 text-xl leading-snug">
          UI / UX Design
        </h2>
        <p class="mt-4 text-sm text-charcoal/70 leading-relaxed">
          Plan and design the whole concept of mobile app is key to succeed in launching
          successful mobile apps.
        </p>
      </div>
      <div>
        <div class="mx-auto w-60" aria-hidden="true">
          <x-service-graphic.react-native />
        </div>
        <h2 class="mt-6 font-bold text-blue-600 text-xl leading-snug">
          Mobile App Development
        </h2>
        <p class="mt-4 text-sm text-charcoal/70 leading-relaxed">
          In this time of modern-smartphone technology choosing the right technology help you to
          develop mobile apps faster and efficient.
        </p>
      </div>
      <div>
        <div class="mx-auto w-60" aria-hidden="true">
          <x-service-graphic.api-admin />
        </div>
        <h2 class="mt-6 font-bold text-blue-600 text-xl leading-snug">
          API & Admin Web
        </h2>
        <p class="mt-4 text-sm text-charcoal/70 leading-relaxed">
          Empowering the mobile apps with the power of cloud and let you manage mobile apps by
          using powerful admin panel.
        </p>
      </div>
    </div>
  </section>

  <section class="services-cta-band text-paper border-t border-paper/10">
    <div class="relative z-10 mx-auto max-w-6xl px-6 py-16 md:py-24 text-center">
      <h2 class="font-serif text-3xl md:text-4xl font-normal tracking-tight leading-snug text-paper/95 max-w-3xl mx-auto">
        Hire us to develop your custom mobile apps.
      </h2>
      <div class="mt-8">
        <a href="{{ route('services.portfolio') }}"
          class="font-mono text-[13px] uppercase tracking-wide bg-gold text-black px-6 py-3 rounded-sm hover:bg-gold/80 transition-colors">
          <i class="bi bi-collection mr-1"></i>
          See our portfolio
        </a>
      </div>
    </div>
  </section>

  <section class="bg-white border-t border-ink/10">
    <div class="mx-auto max-w-6xl px-6 py-16 md:py-20 text-center">
      <h2 class="font-display font-semibold text-2xl md:text-3xl tracking-tight text-blue-500">
        Technologies We Used
      </h2>
      <img src="{{ asset('images/services/services-tech.png') }}" alt="Technologies we use"
        class="mx-auto mt-10 max-w-lg w-full" width="500" loading="lazy">
    </div>
  </section>

  <section class="services-cta-band text-paper border-t border-paper/10">
    <div class="relative z-10 mx-auto max-w-6xl px-6 py-16 md:py-24 text-center">
      <blockquote class="font-serif text-3xl md:text-4xl font-normal tracking-tight leading-snug text-paper/95 max-w-3xl mx-auto">
        &ldquo;Plan &amp; design before jumping into coding to<br class="hidden sm:inline">
        make sure we get everything covered&rdquo;
      </blockquote>
    </div>
  </section>

  <section class="bg-white">
    <div class="mx-auto max-w-6xl px-6 py-16 md:py-20 text-center">
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

  <section class="bg-ink text-paper">
    <div class="mx-auto max-w-6xl px-6 py-20 md:py-24 text-center">
      <p class="max-w-2xl mx-auto text-paper/70 leading-relaxed">
        We believe that every business should have mobile apps to retain customer and to engage
        users to give more value for their lives.
      </p>
      <p class="mt-4 max-w-2xl mx-auto text-paper/70 leading-relaxed">
        We are here to help you by giving free consultation where and how we could start in this
        mobile apps technologies.
      </p>
      <div class="mt-8">
        <a href="https://wa.me/601135859242?text=Hello%20from%20irekasoft.com" target="_blank" rel="noopener"
          class="font-mono text-[13px] uppercase tracking-wide bg-green-500 text-white px-6 py-3 rounded-sm hover:bg-green-600 transition-colors">
          <i class="bi bi-whatsapp"></i>
          Send enquiry now
        </a>
      </div>
      <p class="mt-8 text-sm text-paper/50">
        We are based in RekaScape, Cyberjaya — feel free to ask about mobile apps or web development.
      </p>
    </div>
  </section>

</x-layouts.app>
