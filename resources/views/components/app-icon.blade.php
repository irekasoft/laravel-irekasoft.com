@props(['app', 'size' => 'md'])

@php
    $sizes = [
        'md' => 'h-16 w-16 rounded-2xl text-sm',
        'lg' => 'h-20 w-20 rounded-2xl text-xl',
    ];
    $sizeClass = $sizes[$size] ?? $sizes['md'];
@endphp

@if ($app['icon'] ?? null)
    <img
        src="{{ asset('images/apps/' . $app['icon']) }}"
        alt="{{ $app['name'] }} icon"
        {{ $attributes->class(['shrink-0 object-cover shadow-sm', $sizeClass]) }}
    />
@else
    <span
        {{ $attributes->class(['flex shrink-0 items-center justify-center font-display font-semibold text-white shadow-sm', $sizeClass]) }}
        style="background-color: {{ $app['icon_bg'] }}"
    >{{ $app['icon_label'] }}</span>
@endif
