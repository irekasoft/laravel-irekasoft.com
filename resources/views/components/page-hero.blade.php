@props([
    'image',
    'video' => null,
    'credit' => null,
    'creditUrl' => null,
])

<section
    {{ $attributes->class([
        'page-hero relative isolate overflow-hidden bg-ink text-paper',
        'page-hero--has-video' => $video,
    ]) }}
    style="--page-hero-image: url('{{ $image }}')"
>
    <div class="page-hero__backdrop pointer-events-none" aria-hidden="true">
        @if ($video)
            <video
                class="page-hero__video"
                autoplay
                muted
                loop
                playsinline
                preload="metadata"
                poster="{{ $image }}"
            >
                <source src="{{ $video }}" type="video/mp4">
            </video>
        @endif
        <div class="page-hero__image"></div>
        <div class="page-hero__shade"></div>
    </div>

    <div class="relative z-10 mx-auto max-w-6xl px-6 pt-20 pb-16 md:pt-28 md:pb-20">
        {{ $slot }}

        @if ($credit)
            <p class="mt-10 font-mono text-[10px] uppercase tracking-wide text-paper/30">
                Photo by
                @if ($creditUrl)
                    <a href="{{ $creditUrl }}" class="hover:text-paper/50 transition-colors" target="_blank" rel="noopener">{{ $credit }}</a>
                @else
                    {{ $credit }}
                @endif
                on Unsplash
            </p>
        @endif
    </div>
</section>
