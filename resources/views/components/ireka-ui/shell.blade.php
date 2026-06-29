@props([
    'title' => 'ireka-ui',
    'description' => null,
    'active' => 'intro',
    'components' => [],
])

@php
  $section = match ($active) {
    'intro' => 'intro',
    'components' => 'components',
    default => 'guides',
  };
@endphp

<x-layouts.docs :title="$title" :description="$description" product="ireka-ui" :section="$section">
  <x-slot:sidebar>
    <x-ireka-ui.sidebar-nav :section="$section" :active="$active" :components="$components" />
  </x-slot:sidebar>

  @isset($toc)
    <x-slot:toc>{{ $toc }}</x-slot:toc>
  @endisset

  {{ $slot }}
</x-layouts.docs>
