@props(['market'])

<div class="group relative">
  <a
    href="{{ $market['url'] }}"
    target="_blank"
    rel="noopener"
    class="absolute inset-0 z-0 rounded-lg"
    aria-label="{{ $market['name'] }}"
  ></a>

  <img
    src="{{ asset($market['image']) }}"
    alt="{{ $market['alt'] }}"
    class="relative z-10 h-48 w-full rounded-lg object-cover md:h-52 pointer-events-none"
    loading="lazy"
  >
  <p class="relative z-10 mt-4 font-mono text-[12px] uppercase tracking-wide text-terracotta transition-colors group-hover:text-blue-600">
    {{ $market['name'] }}
  </p>
  <p class="relative z-10 mt-1 font-bold text-zinc-900 text-xl transition-colors group-hover:text-blue-600">
    {{ $market['headline'] }}
  </p>
  <p class="relative z-10 mt-2 text-sm text-charcoal/70 leading-relaxed">{{ $market['description'] }}</p>
  <span class="relative z-10 mt-4 inline-block font-mono text-[11px] uppercase tracking-wide text-terracotta/80 transition-colors group-hover:text-blue-600">
    Visit →
  </span>
</div>
