@props(['class' => ''])

<svg {{ $attributes->merge(['class' => 'h-16 w-auto ' . $class]) }} viewBox="0 0 80 64" fill="none"
  xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
  <rect x="8" y="22" width="18" height="30" rx="3" stroke="rgba(238,241,248,0.4)" stroke-width="1.5" />
  <rect x="12" y="28" width="10" height="16" rx="1.5" fill="rgba(238,241,248,0.05)" />
  <rect x="31" y="16" width="18" height="36" rx="3" stroke="#38BDF8" stroke-width="1.5" stroke-opacity="0.7" />
  <rect x="35" y="22" width="10" height="22" rx="1.5" fill="rgba(56,189,248,0.08)" />
  <rect x="54" y="26" width="22" height="18" rx="2" stroke="rgba(238,241,248,0.4)" stroke-width="1.5" />
  <rect x="58" y="31" width="14" height="2" rx="1" fill="#FFD700" fill-opacity="0.7" />
  <rect x="58" y="36" width="10" height="2" rx="1" fill="rgba(238,241,248,0.2)" />
  <path d="M17 52v6M40 52v6M65 44v14" stroke="rgba(238,241,248,0.15)" stroke-width="1.5" stroke-linecap="round" />
  <circle cx="40" cy="10" r="5" stroke="#FFD700" stroke-width="1.5" stroke-opacity="0.8" />
  <path d="M32 10h16M40 6v8" stroke="#FFD700" stroke-width="1" stroke-linecap="round" stroke-opacity="0.35" />
  <path d="M26 38h28" stroke="rgba(238,241,248,0.12)" stroke-width="1" stroke-dasharray="3 3" />
</svg>
