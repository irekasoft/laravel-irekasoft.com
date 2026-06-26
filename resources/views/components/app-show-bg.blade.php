@php
    $tiles = [
        ['size' => 56, 'top' => 6, 'left' => 68, 'opacity' => 0.72, 'pulse' => true, 'delay' => 0.4, 'duration' => 5.2],
        ['size' => 44, 'top' => 14, 'left' => 82, 'opacity' => 0.62, 'pulse' => false],
        ['size' => 64, 'top' => 4, 'left' => 56, 'opacity' => 0.58, 'pulse' => true, 'delay' => 2.8, 'duration' => 6.4],
        ['size' => 40, 'top' => 24, 'left' => 76, 'opacity' => 0.68, 'pulse' => true, 'delay' => 1.1, 'duration' => 4.6],
        ['size' => 52, 'top' => 10, 'left' => 91, 'opacity' => 0.55, 'pulse' => false],
        ['size' => 48, 'top' => 30, 'left' => 64, 'opacity' => 0.64, 'pulse' => true, 'delay' => 3.6, 'duration' => 5.8],
        ['size' => 36, 'top' => 36, 'left' => 86, 'opacity' => 0.6, 'pulse' => false],
        ['size' => 58, 'top' => 18, 'left' => 50, 'opacity' => 0.52, 'pulse' => true, 'delay' => 0.9, 'duration' => 7.2],
        ['size' => 42, 'top' => 42, 'left' => 72, 'opacity' => 0.66, 'pulse' => true, 'delay' => 4.2, 'duration' => 5.0],
        ['size' => 50, 'top' => 48, 'left' => 58, 'opacity' => 0.5, 'pulse' => false],
        ['size' => 38, 'top' => 52, 'left' => 84, 'opacity' => 0.58, 'pulse' => true, 'delay' => 1.8, 'duration' => 6.8],
        ['size' => 46, 'top' => 58, 'left' => 66, 'opacity' => 0.48, 'pulse' => true, 'delay' => 5.1, 'duration' => 4.4],
    ];
@endphp

<div class="app-show-bg pointer-events-none" aria-hidden="true">
    <div class="app-show-bg__field">
        @foreach ($tiles as $tile)
            <span
                @class(['app-show-bg__tile', 'app-show-bg__tile--pulse' => $tile['pulse'] ?? false])
                style="
                    --tile-size: {{ $tile['size'] }}px;
                    top: {{ $tile['top'] }}%;
                    left: {{ $tile['left'] }}%;
                    --tile-opacity-max: {{ $tile['opacity'] }};
                    @if ($tile['pulse'] ?? false)
                        --tile-fade-delay: {{ $tile['delay'] }}s;
                        --tile-fade-duration: {{ $tile['duration'] }}s;
                    @else
                        opacity: {{ $tile['opacity'] }};
                    @endif
                "
            ></span>
        @endforeach
    </div>
    <div class="app-show-bg__shade"></div>
</div>
