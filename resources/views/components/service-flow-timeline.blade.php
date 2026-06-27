@php
    $flow = config('services-offerings.flow');
@endphp

<section class="section-dot-grid bg-paper relative border-t border-ink/10" data-dot-cursor>
    <div class="section-dot-grid__pulses" aria-hidden="true"></div>
    <div class="relative z-10 mx-auto max-w-6xl px-6 py-16 md:py-20">
        <h2 class="font-display font-semibold text-2xl md:text-3xl tracking-tight text-blue-500 text-center">
            Service Flow
        </h2>
        <p class="mt-4 mx-auto max-w-2xl text-center text-sm text-charcoal/60 leading-relaxed">
            From first conversation to launch — how we typically work with you.
        </p>

        <div class="relative mt-12 md:mt-14">
            <div
                class="absolute left-6 top-6 bottom-6 w-px -translate-x-1/2 bg-ink/15 md:left-1/2"
                aria-hidden="true"
            ></div>

            <div>
                @foreach ($flow as $index => $step)
                    @php $isLeft = $index % 2 === 0; @endphp
                    <div class="relative grid pb-12 last:pb-0 md:grid-cols-2 md:gap-x-16">
                        <div
                            class="absolute left-6 top-0 z-10 -translate-x-1/2 md:left-1/2"
                            aria-hidden="true"
                        >
                            <span class="service-flow-dot">
                                <i class="{{ $step['icon'] }}" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div
                            @class([
                                'absolute left-6 top-6 hidden h-px w-10 bg-ink/15 md:left-1/2 md:block',
                                '-translate-x-full' => $isLeft,
                            ])
                            aria-hidden="true"
                        ></div>

                        <div @class([
                            'pl-16 md:col-start-1 md:pl-0 md:pr-12 md:text-right' => $isLeft,
                            'pl-16 md:col-start-2 md:pl-12' => ! $isLeft,
                        ])>
                            <p class="font-mono text-[12px] uppercase tracking-[0.2em] text-terracotta">
                                {{ $step['step'] }}
                            </p>
                            <h3 class="mt-2 font-bold text-xl text-charcoal leading-snug">
                                {{ $step['title'] }}
                            </h3>
                            <p class="mt-2 text-sm leading-relaxed text-charcoal/70">
                                {{ $step['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
