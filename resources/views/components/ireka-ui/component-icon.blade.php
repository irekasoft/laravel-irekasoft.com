@props(['id' => null])

{{-- Tiny wireframe glyphs representing each ireka-ui component. --}}
@php
  $svg = 'viewBox="0 0 48 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="h-7 w-10"';
@endphp

@switch($id)
  @case('badge')
    <svg {!! $svg !!}>
      <rect x="13" y="11.5" width="22" height="9" rx="4.5" fill="currentColor" fill-opacity="0.12"/>
      <rect x="13" y="11.5" width="22" height="9" rx="4.5"/>
      <circle cx="19" cy="16" r="1.6" fill="currentColor" stroke="none"/>
      <line x1="23" y1="16" x2="30" y2="16"/>
    </svg>
    @break

  @case('button')
    <svg {!! $svg !!}>
      <rect x="10" y="11" width="28" height="10" rx="3" fill="currentColor" fill-opacity="0.85" stroke="none"/>
      <line x1="19" y1="16" x2="29" y2="16" stroke="var(--color-paper)" stroke-opacity="0.9"/>
    </svg>
    @break

  @case('button-circle')
    <svg {!! $svg !!}>
      <circle cx="24" cy="16" r="8"/>
      <line x1="24" y1="12.5" x2="24" y2="19.5"/>
      <line x1="20.5" y1="16" x2="27.5" y2="16"/>
    </svg>
    @break

  @case('button-group')
    <svg {!! $svg !!}>
      <rect x="12" y="11" width="24" height="10" rx="5" fill="currentColor" fill-opacity="0.10"/>
      <rect x="12" y="11" width="24" height="10" rx="5"/>
      <rect x="13.2" y="12.2" width="10.6" height="7.6" rx="3.8" fill="currentColor" fill-opacity="0.85" stroke="none"/>
    </svg>
    @break

  @case('card')
    <svg {!! $svg !!}>
      <rect x="13" y="7" width="22" height="18" rx="2.5"/>
      <path d="M13 13.5 h22" stroke-opacity="0.5"/>
      <line x1="16" y1="18" x2="31" y2="18"/>
      <line x1="16" y1="21.5" x2="27" y2="21.5" stroke-opacity="0.55"/>
    </svg>
    @break

  @case('content-container')
    <svg {!! $svg !!}>
      <rect x="12" y="6" width="24" height="20" rx="2.5"/>
      <line x1="15" y1="11" x2="30" y2="11"/>
      <line x1="15" y1="15" x2="30" y2="15" stroke-opacity="0.6"/>
      <line x1="15" y1="19" x2="27" y2="19" stroke-opacity="0.6"/>
      <rect x="32.6" y="9" width="1.4" height="9" rx="0.7" fill="currentColor" fill-opacity="0.5" stroke="none"/>
    </svg>
    @break

  @case('floating-nav-bar')
    <svg {!! $svg !!}>
      <rect x="9" y="10" width="30" height="12" rx="3" fill="currentColor" fill-opacity="0.06"/>
      <polyline points="16,13.5 13.5,16 16,18.5"/>
      <line x1="21" y1="16" x2="30" y2="16"/>
      <circle cx="34.5" cy="16" r="1.3" fill="currentColor" stroke="none"/>
    </svg>
    @break

  @case('section-label')
    <svg {!! $svg !!}>
      <line x1="14" y1="9.5" x2="22" y2="9.5" stroke-width="1.8"/>
      <rect x="14" y="13.5" width="20" height="9.5" rx="2"/>
    </svg>
    @break

  @case('segmented-control')
    <svg {!! $svg !!}>
      <rect x="11" y="11" width="26" height="10" rx="3" fill="currentColor" fill-opacity="0.10"/>
      <rect x="11" y="11" width="26" height="10" rx="3"/>
      <rect x="12" y="12" width="8" height="8" rx="2" fill="currentColor" fill-opacity="0.85" stroke="none"/>
      <line x1="28.3" y1="12.5" x2="28.3" y2="19.5" stroke-opacity="0.4"/>
    </svg>
    @break

  @case('skeleton')
    <svg {!! $svg !!}>
      <circle cx="16" cy="16" r="4.5" fill="currentColor" fill-opacity="0.18" stroke="none"/>
      <rect x="23" y="12.7" width="14" height="2.8" rx="1.4" fill="currentColor" fill-opacity="0.18" stroke="none"/>
      <rect x="23" y="17.5" width="10" height="2.8" rx="1.4" fill="currentColor" fill-opacity="0.18" stroke="none"/>
    </svg>
    @break

  @case('snackbar')
    <svg {!! $svg !!}>
      <rect x="9" y="11" width="30" height="10" rx="3" fill="currentColor" fill-opacity="0.12"/>
      <rect x="9" y="11" width="30" height="10" rx="3"/>
      <line x1="13" y1="16" x2="26" y2="16"/>
      <rect x="29.5" y="13.5" width="6" height="5" rx="1.5" fill="currentColor" fill-opacity="0.8" stroke="none"/>
    </svg>
    @break

  @case('stepper')
    <svg {!! $svg !!}>
      <circle cx="15" cy="16" r="4.3"/>
      <line x1="12.9" y1="16" x2="17.1" y2="16"/>
      <line x1="24" y1="13.6" x2="24" y2="18.4" stroke-opacity="0.5"/>
      <circle cx="33" cy="16" r="4.3"/>
      <line x1="30.9" y1="16" x2="35.1" y2="16"/>
      <line x1="33" y1="13.9" x2="33" y2="18.1"/>
    </svg>
    @break

  @case('switch')
    <svg {!! $svg !!}>
      <rect x="14" y="11.5" width="20" height="9" rx="4.5" fill="currentColor" fill-opacity="0.85" stroke="none"/>
      <circle cx="29.5" cy="16" r="3.1" fill="var(--color-paper)" stroke="none"/>
    </svg>
    @break

  @case('text-area')
    <svg {!! $svg !!}>
      <rect x="12" y="8" width="24" height="16" rx="2.5"/>
      <line x1="15" y1="12.5" x2="32" y2="12.5" stroke-opacity="0.6"/>
      <line x1="15" y1="16" x2="32" y2="16" stroke-opacity="0.6"/>
      <line x1="15" y1="19.5" x2="26" y2="19.5" stroke-opacity="0.4"/>
    </svg>
    @break

  @case('text-input')
    <svg {!! $svg !!}>
      <line x1="12" y1="9.5" x2="20" y2="9.5" stroke-width="1.7"/>
      <rect x="12" y="13" width="24" height="9" rx="2.5"/>
      <line x1="15" y1="17.5" x2="28" y2="17.5" stroke-opacity="0.5"/>
    </svg>
    @break

  {{-- Navigation --}}
  @case('page')
    <svg {!! $svg !!}>
      <rect x="14" y="5" width="20" height="22" rx="2.5"/>
      <line x1="14" y1="10" x2="34" y2="10"/>
      <line x1="17" y1="7.6" x2="24" y2="7.6" stroke-opacity="0.6"/>
      <line x1="17" y1="14" x2="31" y2="14" stroke-opacity="0.5"/>
      <line x1="17" y1="17.5" x2="28" y2="17.5" stroke-opacity="0.5"/>
    </svg>
    @break

  @case('usenavigation')
    <svg {!! $svg !!}>
      <rect x="12" y="7" width="16" height="18" rx="2"/>
      <line x1="28" y1="16" x2="35" y2="16"/>
      <polyline points="31,12 35,16 31,20"/>
    </svg>
    @break

  @case('stacknav')
    <svg {!! $svg !!}>
      <rect x="17" y="6" width="17" height="17" rx="2" stroke-opacity="0.4"/>
      <rect x="14" y="9" width="17" height="17" rx="2" fill="var(--color-paper)"/>
      <rect x="14" y="9" width="17" height="17" rx="2"/>
    </svg>
    @break

  @case('tabnav')
    <svg {!! $svg !!}>
      <rect x="14" y="5" width="20" height="22" rx="2.5" stroke-opacity="0.4"/>
      <line x1="14" y1="21" x2="34" y2="21" stroke-opacity="0.5"/>
      <circle cx="18" cy="24" r="1.3" fill="currentColor" stroke="none"/>
      <circle cx="24" cy="24" r="1.3" fill="currentColor" fill-opacity="0.4" stroke="none"/>
      <circle cx="30" cy="24" r="1.3" fill="currentColor" fill-opacity="0.4" stroke="none"/>
    </svg>
    @break

  {{-- Modals --}}
  @case('modalpage')
    <svg {!! $svg !!}>
      <rect x="13" y="4" width="22" height="24" rx="2.5" stroke-opacity="0.3"/>
      <rect x="13" y="10" width="22" height="18" rx="2.5" fill="var(--color-paper)"/>
      <rect x="13" y="10" width="22" height="18" rx="2.5"/>
      <line x1="21" y1="12.6" x2="27" y2="12.6" stroke-width="1.8"/>
    </svg>
    @break

  @case('multi-step-modals')
    <svg {!! $svg !!}>
      <rect x="13" y="6" width="22" height="20" rx="2.5"/>
      <line x1="13" y1="11" x2="35" y2="11"/>
      <polyline points="18,8 16.3,9.5 18,11" stroke-opacity="0.7"/>
      <circle cx="21" cy="21.5" r="1.2" fill="currentColor" stroke="none"/>
      <circle cx="24" cy="21.5" r="1.2" fill="currentColor" fill-opacity="0.4" stroke="none"/>
      <circle cx="27" cy="21.5" r="1.2" fill="currentColor" fill-opacity="0.4" stroke="none"/>
    </svg>
    @break

  {{-- Overlays --}}
  @case('bottomsheet')
    <svg {!! $svg !!}>
      <rect x="14" y="4" width="20" height="24" rx="2.5" stroke-opacity="0.3"/>
      <rect x="14" y="16" width="20" height="12" rx="2.5" fill="var(--color-paper)"/>
      <rect x="14" y="16" width="20" height="12" rx="2.5"/>
      <line x1="21" y1="19" x2="27" y2="19" stroke-width="1.8"/>
    </svg>
    @break

  @case('action-sheet')
    <svg {!! $svg !!}>
      <rect x="15" y="11" width="18" height="10" rx="2.5"/>
      <line x1="15" y1="16" x2="33" y2="16" stroke-opacity="0.4"/>
      <rect x="15" y="23" width="18" height="5" rx="2.5" fill="currentColor" fill-opacity="0.12"/>
      <rect x="15" y="23" width="18" height="5" rx="2.5"/>
    </svg>
    @break

  @case('dropdownmenu')
    <svg {!! $svg !!}>
      <circle cx="16" cy="8" r="1.2" fill="currentColor" stroke="none"/>
      <rect x="20" y="9" width="16" height="16" rx="2.5"/>
      <line x1="23" y1="13" x2="33" y2="13" stroke-opacity="0.6"/>
      <line x1="23" y1="17" x2="33" y2="17" stroke-opacity="0.6"/>
      <line x1="23" y1="21" x2="30" y2="21" stroke-opacity="0.6"/>
    </svg>
    @break

  @case('alert')
    <svg {!! $svg !!}>
      <rect x="14" y="8" width="20" height="16" rx="3"/>
      <line x1="18" y1="12" x2="30" y2="12" stroke-opacity="0.6"/>
      <line x1="18" y1="14.8" x2="27" y2="14.8" stroke-opacity="0.4"/>
      <rect x="17" y="18" width="6.5" height="4" rx="2" fill="currentColor" fill-opacity="0.14" stroke="none"/>
      <rect x="24.5" y="18" width="6.5" height="4" rx="2" fill="currentColor" fill-opacity="0.85" stroke="none"/>
    </svg>
    @break

  @case('popup')
    <svg {!! $svg !!}>
      <rect x="15" y="9" width="18" height="14" rx="3"/>
      <circle cx="30.5" cy="11.5" r="1" fill="currentColor" stroke="none"/>
      <line x1="19" y1="14" x2="29" y2="14" stroke-opacity="0.5"/>
      <line x1="19" y1="17.5" x2="26" y2="17.5" stroke-opacity="0.5"/>
    </svg>
    @break

  @case('hud')
    <svg {!! $svg !!}>
      <rect x="18" y="9" width="12" height="12" rx="3"/>
      <path d="M24 12.4 a2.6 2.6 0 1 1 -1.9 0.8" stroke-linecap="round"/>
    </svg>
    @break

  @case('toast')
    <svg {!! $svg !!}>
      <rect x="14" y="5" width="20" height="22" rx="2.5" stroke-opacity="0.25"/>
      <rect x="16" y="20" width="16" height="5" rx="2.5" fill="currentColor" fill-opacity="0.85" stroke="none"/>
    </svg>
    @break

  @case('toastpill')
    <svg {!! $svg !!}>
      <rect x="11" y="12.5" width="26" height="7" rx="3.5"/>
      <circle cx="15.5" cy="16" r="1.6" fill="currentColor" stroke="none"/>
      <line x1="19" y1="16" x2="31" y2="16" stroke-opacity="0.6"/>
    </svg>
    @break

  @case('android-back')
    <svg {!! $svg !!}>
      <circle cx="24" cy="16" r="8" stroke-opacity="0.5"/>
      <polyline points="26,12 21,16 26,20"/>
    </svg>
    @break

  {{-- Layout --}}
  @case('grid')
    <svg {!! $svg !!}>
      <rect x="15" y="8" width="7.5" height="7.5" rx="1.5"/>
      <rect x="25.5" y="8" width="7.5" height="7.5" rx="1.5"/>
      <rect x="15" y="17.5" width="7.5" height="7.5" rx="1.5"/>
      <rect x="25.5" y="17.5" width="7.5" height="7.5" rx="1.5"/>
    </svg>
    @break

  @case('groupedlist')
    <svg {!! $svg !!}>
      <rect x="14" y="8" width="20" height="16" rx="3"/>
      <line x1="14" y1="13.3" x2="34" y2="13.3" stroke-opacity="0.4"/>
      <line x1="14" y1="18.6" x2="34" y2="18.6" stroke-opacity="0.4"/>
      <circle cx="18" cy="10.6" r="1.2" fill="currentColor" fill-opacity="0.5" stroke="none"/>
      <circle cx="18" cy="15.9" r="1.2" fill="currentColor" fill-opacity="0.5" stroke="none"/>
      <circle cx="18" cy="21.2" r="1.2" fill="currentColor" fill-opacity="0.5" stroke="none"/>
    </svg>
    @break

  @default
    <svg {!! $svg !!}>
      <rect x="12" y="8" width="24" height="16" rx="3"/>
    </svg>
@endswitch
