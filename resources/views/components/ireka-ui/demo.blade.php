@props([
    'code' => null,
    'language' => 'jsx',
])

<div class="overflow-hidden rounded-xl border border-charcoal/10 bg-white">
  <div class="flex items-center justify-center px-5 py-8"
    style="background-image: radial-gradient(circle at 1px 1px, rgba(11,15,25,0.10) 1px, transparent 0); background-size: 16px 16px;">
    <div class="w-full max-w-sm">{{ $slot }}</div>
  </div>

  @if ($code)
    <x-ireka-ui.code-block :code="$code" :language="$language" :rounded="false" />
  @endif
</div>
