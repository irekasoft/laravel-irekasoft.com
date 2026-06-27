@props(['offering'])

<article class="text-center">
  <p class="font-mono text-[12px] uppercase tracking-[0.2em] text-terracotta">
    {{ $offering['number'] }}
  </p>
  <div class="mx-auto mt-4 w-60" aria-hidden="true">
    <x-dynamic-component :component="'service-graphic.' . $offering['graphic']" />
  </div>
  <h2 class="mt-6 font-bold text-blue-600 text-xl leading-snug">
    {{ $offering['title'] }}
  </h2>
  <p class="mt-4 text-sm text-charcoal/70 leading-relaxed">
    {{ $offering['description'] }}
  </p>
</article>
