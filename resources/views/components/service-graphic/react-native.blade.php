@props(['class' => ''])

<svg {{ $attributes->merge(['class' => 'w-full h-auto ' . $class]) }} viewBox="0 0 240 160" fill="none"
  xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
  <defs>
    <linearGradient id="rn-app-icon" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#7DD3FC" />
      <stop offset="100%" stop-color="#38BDF8" />
    </linearGradient>
  </defs>

  <rect x="12" y="28" width="96" height="68" rx="4" fill="#E8ECF4" stroke="#94A3B8" stroke-width="1.5" />
  <rect x="20" y="36" width="80" height="52" rx="2" fill="#1E293B" />
  <rect x="28" y="46" width="36" height="3" rx="1" fill="#38BDF8" />
  <rect x="28" y="54" width="52" height="3" rx="1" fill="#64748B" />
  <rect x="28" y="62" width="44" height="3" rx="1" fill="#64748B" />
  <rect x="28" y="70" width="48" height="3" rx="1" fill="#38BDF8" />
  <rect x="44" y="100" width="32" height="6" rx="1" fill="#94A3B8" />
  <rect x="52" y="106" width="16" height="4" rx="1" fill="#CBD5E1" />

  <path d="M118 72h28" stroke="grey" stroke-width="2" stroke-linecap="round" />
  

  <rect x="158" y="34" width="44" height="76" rx="6" fill="#E8ECF4" stroke="#3B82F6" stroke-width="2" />
  <rect x="166" y="44" width="28" height="28" rx="6" fill="url(#rn-app-icon)" stroke="#2563EB"
    stroke-width="1" />
  <circle cx="180" cy="88" r="3" fill="#CBD5E1" />
</svg>
