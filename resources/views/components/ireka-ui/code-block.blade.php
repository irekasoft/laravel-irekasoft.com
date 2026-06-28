@props([
    'code' => '',
    'language' => 'jsx',
    'rounded' => true,
])

<div @class([
    'relative overflow-hidden bg-ink',
    'rounded-xl' => $rounded,
    'border-t border-charcoal/10' => ! $rounded,
]) data-code-block>
  <div class="flex items-center justify-between border-b border-white/10 px-4 py-2">
    <span class="font-mono text-[11px] uppercase tracking-[0.14em] text-paper/40">{{ $language }}</span>
    {{-- <button type="button" data-copy
      class="inline-flex items-center gap-1.5 font-mono text-[11px] uppercase tracking-[0.1em] text-paper/50 transition-colors hover:text-paper">
      <i class="bi bi-clipboard" aria-hidden="true"></i><span data-copy-label>Copy</span>
    </button> --}}
  </div>
  <pre class="overflow-x-auto px-4 py-3.5 text-[13px] leading-relaxed"><code class="whitespace-pre font-mono text-paper/90">{{ $code }}</code></pre>
</div>
