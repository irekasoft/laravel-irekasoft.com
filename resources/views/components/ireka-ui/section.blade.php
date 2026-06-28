@props([
    'id' => null,
    'title' => null,
    'lead' => null,
])

<section id="{{ $id }}" class="scroll-mt-24 border-t border-charcoal/10 pt-12 pb-4 first:border-t-0 first:pt-0">
  <h2 class="font-display text-2xl font-semibold tracking-tight text-ink">{{ $title }}</h2>
  @if ($lead)
    <p class="mt-2 max-w-2xl leading-relaxed text-charcoal/70">{{ $lead }}</p>
  @endif
  <div class="mt-5 space-y-5">{{ $slot }}</div>
</section>
