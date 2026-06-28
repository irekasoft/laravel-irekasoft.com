@props([
    'title' => 'ireka-ui',
    'description' => null,
    'active' => 'intro',
    'components' => [],
])

<x-layouts.docs :title="$title" :description="$description" product="ireka-ui">
  <x-slot:sidebar>
    <x-ireka-ui.sidebar-nav :active="$active" :components="$components" />
  </x-slot:sidebar>

  {{ $slot }}
</x-layouts.docs>
