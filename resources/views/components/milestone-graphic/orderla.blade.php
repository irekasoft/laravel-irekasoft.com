@props(['class' => ''])

<svg {{ $attributes->merge(['class' => 'h-16 w-auto ' . $class]) }} viewBox="0 0 80 64" fill="none"
  xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
  <path d="M10 48h60" stroke="rgba(238,241,248,0.2)" stroke-width="1.5" stroke-linecap="round" />
  <path d="M16 48V28c0-4 3-8 8-8h32c5 0 8 4 8 8v20" stroke="rgba(238,241,248,0.45)" stroke-width="1.5"
    stroke-linejoin="round" />
  <path d="M12 28h56" stroke="rgba(238,241,248,0.25)" stroke-width="1.5" stroke-linecap="round" />
  <rect x="22" y="34" width="14" height="10" rx="1.5" fill="rgba(56,189,248,0.12)" stroke="#38BDF8"
    stroke-width="1" stroke-opacity="0.5" />
  <rect x="44" y="34" width="14" height="10" rx="1.5" fill="rgba(255,215,0,0.08)" stroke="#FFD700"
    stroke-width="1" stroke-opacity="0.5" />
  <path d="M29 39h4M47 39h4" stroke="rgba(238,241,248,0.5)" stroke-width="1.5" stroke-linecap="round" />
  <path d="M40 12v8" stroke="#FFD700" stroke-width="1.5" stroke-linecap="round" stroke-opacity="0.7" />
  <path d="M34 16h12" stroke="#FFD700" stroke-width="1.5" stroke-linecap="round" stroke-opacity="0.5" />
  <circle cx="40" cy="10" r="3" fill="#FFD700" fill-opacity="0.85" />
  <path d="M52 22c6 0 10 3 10 8" stroke="#38BDF8" stroke-width="1.5" stroke-linecap="round" stroke-opacity="0.45" />
  <circle cx="62" cy="30" r="2" fill="#38BDF8" fill-opacity="0.6" />
  <rect x="30" y="48" width="20" height="8" rx="1" fill="rgba(238,241,248,0.06)" stroke="rgba(238,241,248,0.2)"
    stroke-width="1" />
  <path d="M34 52h12" stroke="rgba(238,241,248,0.3)" stroke-width="1" stroke-linecap="round" />
</svg>
