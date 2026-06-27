@php
    $offerings = config('services-offerings.offerings');
@endphp

<section class="section-dot-grid bg-paper relative" data-dot-cursor>
  <div class="section-dot-grid__pulses" aria-hidden="true"></div>
  <div class="relative z-10 mx-auto max-w-6xl px-6 py-16 md:py-20">
    <h2 class="font-display font-semibold text-2xl md:text-3xl tracking-tight text-blue-500 text-center">
      Services We Provide
    </h2>
    <p class="text-center text-charcoal/70 leading-relaxed mt-4 text-sm">
      From planning to deployment.
    </p>
    <div class="mt-12 grid gap-12 md:grid-cols-3">
      @foreach ($offerings as $offering)
        <x-service-offering-card :offering="$offering" />
      @endforeach
    </div>
  </div>
</section>
