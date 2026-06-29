@props(['class' => ''])

<svg {{ $attributes->merge(['class' => 'h-16 w-auto ' . $class]) }} viewBox="0 0 80 64" fill="none"
  xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
  <circle cx="62" cy="14" r="10" stroke="#FFD700" stroke-width="1.5" stroke-opacity="0.85" />
  <path d="M62 8v12M56 14h12" stroke="#FFD700" stroke-width="1.5" stroke-linecap="round" stroke-opacity="0.5" />
  <rect x="18" y="10" width="28" height="48" rx="5" stroke="rgba(238,241,248,0.45)" stroke-width="1.5" />
  <rect x="22" y="16" width="20" height="32" rx="2" fill="rgba(238,241,248,0.06)" stroke="rgba(238,241,248,0.15)" stroke-width="1" />
  <rect x="28" y="50" width="8" height="2" rx="1" fill="rgba(238,241,248,0.25)" />
  <text x="26" y="30" fill="#38BDF8" font-family="ui-monospace, monospace" font-size="9" font-weight="600">1+2</text>
  <text x="26" y="40" fill="rgba(238,241,248,0.35)" font-family="ui-monospace, monospace" font-size="8">= 3</text>
  <path d="M8 52c4-8 10-12 18-12" stroke="#38BDF8" stroke-width="1.5" stroke-linecap="round" stroke-opacity="0.4" />
  <circle cx="8" cy="52" r="2" fill="#38BDF8" fill-opacity="0.6" />
</svg>
