@props([
    'code' => '',
    'language' => 'jsx',
    'rounded' => true,
])

<div @class([
    'relative overflow-hidden bg-zinc-50',
    'rounded-xl border border-charcoal/10' => $rounded,
    'border-t border-charcoal/10' => ! $rounded,
]) data-code-block>
  <div class="flex items-center justify-between border-b border-charcoal/10 bg-white px-4 py-2">
    <span class="font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/40">{{ $language }}</span>
    <button type="button" data-copy
      class="inline-flex items-center gap-1.5 font-mono text-[11px] uppercase tracking-[0.1em] text-charcoal/45 transition-colors hover:text-ink">
      <i class="bi bi-clipboard" aria-hidden="true"></i><span data-copy-label>Copy</span>
    </button>
  </div>
  <pre class="m-0 overflow-x-auto px-4 py-3.5 text-[13px] leading-relaxed"><code @class([
      'language-' . $language,
      'whitespace-pre font-mono text-charcoal/90',
  ])>{{ $code }}</code></pre>
</div>
