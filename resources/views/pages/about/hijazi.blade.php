@php
  $timeline = [
    [
      'year' => '2009',
      'items' => [        
        'Learn Java',
        'Learn iPhone OS 2.0 and Objective-C',
      ],
    ],
    [
      'year' => '2010',
      'items' => [
        'Graduated from Tokyo University of Technology in Computer Science',
        'Q1 Published CalcDrill (first app on the App Store)',
        'Q2 Worked at start-up app developer company',
        'Q4 Published FaceClock 1.0 (global hit app)',
      ],
    ],
    [
      'year' => '2011',
      'items' => [
        'Established iReka Soft entity. iRekaSoft.com was up',
        'Q2 Published FaceClock Calendar',
        'Q2 Won IPCC 2011 from MDeC for Golden Guli game',
      ],
    ],
    [
      'year' => '2012',
      'items' => [
        'Published Golden Guli',
        'Casual Connect SG',
      ],
    ],
    [
      'year' => '2013',
      'items' => [
        'Full time iReka Soft development',
        'Published first Android app (Steve Jobs Quotes)',
        'iOS 7 Tech Talk in Shanghai',
        'iOS 7 Kitchen in Singapore',
      ],
      'image' => 'ios7-tech-talk-2013.jpeg',
      'image_alt' => 'iOS 7 Tech Talk in Shanghai',
    ],
    [
      'year' => '2014',
      'items' => [
        'Learn about iOS Push Notifications, iBeacon, Passbook',
        'Q4 Learning Ruby on Rails',
        'iRekaSoft.com website redesign with Bootstrap',
      ],
    ],
    [
      'year' => '2015',
      'items' => [
        'Q2 Setup iReka Soft Enterprise',
        'Q3 Android Studio course',
        'Q4 WordPress and Bootstrap course',
      ],
    ],
    [
      'year' => '2016',
      'items' => [
        'Q1 Learn Laravel',
        'Q3 Learn UI/UX (Design + Code Course)',
        'Q3 Learn Swift 3',
      ],
    ],
    [
      'year' => '2017',
      'items' => [
        'Q1 Learn Ionic',
        'Based in Magic co-working space in Cyberjaya',
      ],
      'image' => 'magic-cyberjaya.png',
      'image_alt' => 'iReka Soft based in Magic co-working space in Cyberjaya',
    ],
    [
      'year' => '2018',
      'items' => [
        'Q1 Learn React Native',
      ],
    ],
    [
      'year' => '2019',
      'items' => [
        'Experimenting to setup Laravel on VPS',
      ],
    ],
    [
      'year' => '2020',
      'items' => [
        'Launched Orderla.my',
      ],
    ],
    [
      'year' => '2021',
      'items' => [
        'Joined Teraju SUPERB Program',
      ],
    ],
    [
      'year' => '2022',
      'items' => [
        'Joined SAP Accelerator Program',
      ],
    ],
    [
      'year' => '2023',
      'items' => [
        'Based in RekaScape, Cyberjaya',
      ],
    ],
    [
      'year' => '2025',
      'items' => [
        'Launched Orderla.co',
        'Joined Tech Startup Bootcamp',
        'Joined Stripe Tour in Singapore',
        'Joined Stripe Startup Program',
      ],
    ],
    [
      'year' => '2026',
      'items' => [
        'Launched Orderla FOS',
        'Joined Laravel Live in Tokyo, Japan',
      ],
      'image' => 'laravel-live-2026.jpeg',
      'image_alt' => 'Laravel Live in Tokyo, Japan',
    ],
  ];

  $timeline = array_reverse($timeline);

  $timelinePulseSlot = 0.65;
  $timelinePulseCycle = count($timeline) * $timelinePulseSlot;
@endphp

<x-layouts.app
    :title="'Muhammad Hijazi'"
    :description="'Muhammad Hijazi — founder of iReka Soft Enterprise. iOS developer, designer, and builder of mobile software since 2010.'"
>

    <div class="fixed inset-x-0 top-15 z-40 border-b border-white/10 bg-ink/80 backdrop-blur-sm">
        <div class="mx-auto max-w-6xl px-6 py-3">
            <a href="{{ route('about') }}"
                class="font-mono text-[12px] uppercase tracking-[0.14em] text-white hover:text-gold transition-colors">
                <i class="bi bi-chevron-left"></i>
                About
            </a>
        </div>
    </div>

    <section class="bg-ink text-paper">
        <div class="mx-auto max-w-6xl px-6 pt-20 pb-16 md:pt-28 md:pb-20 grid gap-10 md:grid-cols-[1fr_auto] md:items-end">
            <div>
                <p class="font-mono text-[12px] uppercase tracking-[0.2em] text-gold">Founder</p>
                <h1 class="mt-6 font-display font-semibold text-4xl md:text-5xl tracking-tight max-w-2xl">
                    Muhammad Hijazi
                </h1>
                <p class="mt-5 max-w-2xl text-paper/70 leading-relaxed">
                    Founder at iReka Soft Enterprise. Development, design, marketing, and content.
                </p>
            </div>
            <img
                src="{{ asset('images/about/hijazi-300x300.png') }}"
                alt="Muhammad Hijazi"
                class="w-28 h-28 rounded-2xl object-cover shadow-lg shadow-black/30"
                width="112"
                height="112"
                loading="eager"
            >
        </div>
    </section>

    <section class="bg-paper">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20 grid gap-12 md:grid-cols-3">
            <div class="md:col-span-1">
                <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta">Introduction</p>
            </div>
            <div class="md:col-span-2 space-y-5 text-charcoal/80 leading-relaxed">
                <p>
                    Hi, my name is Muhammad Hijazi. I am the founder at iReka Soft Enterprise.
                    You may call me Hijazi. I do development, design, marketing, and content
                    at my own business. These days I spend most of my time on Laravel and React,
                    and sometimes React Native when a project needs mobile.
                </p>
                <p>
                    For design I work in Sketch, Figma, and Pencil. On the mobile side I still
                    tinker with native modules on Expo when something needs to go deeper than
                    JavaScript alone. By being good at what I do, I can earn a living and help
                    other people build their apps too.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-ink-soft text-paper">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20 grid gap-12 md:grid-cols-3">
            <div class="md:col-span-1">
                <p class="font-mono text-[12px] uppercase tracking-wide text-gold">Mobile industry</p>
            </div>
            <div class="md:col-span-2 space-y-5 text-paper/70 leading-relaxed">
                <p class="font-display text-xl text-paper leading-snug">
                    Incredible time to meet with people who build iOS software.
                </p>
                <p>
                    The modern mobile industry is just at the beginning. I am thrilled for what
                    comes next. I anticipated this kind of tech a long time ago — as a kid, I
                    imagined holding a device where I could read books and use a full-screen mobile
                    phone. Back then it was only Nokia phones with buttons. As we grew up, Apple
                    made it real in 2007, and by 2008 opened the platform for developers.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-paper">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20 grid gap-12 md:grid-cols-3">
            <div class="md:col-span-1">
                <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta">Personal story</p>
            </div>
            <div class="md:col-span-2 space-y-5 text-charcoal/80 leading-relaxed">
                <p>
                    It has been a long way through IT, multimedia, web, and the internet industry.
                    It started in the 90s with MS-DOS — command prompts, no mouse, selecting up and
                    down. Sometimes I broke the interface into ghost characters and waited weeks for
                    repairs. Nostalgic games like Prince of Persia, Aladdin, and racing titles —
                    plus early database and BASIC programs. Text was everything.
                </p>
                <p>
                    Then came the Windows 9x era, dial-up internet, and the reformasi period in
                    1998. I made websites with Microsoft FrontPage and uploaded them to
                    tripod.com — manually linking
                    HTML pages one by one. Later I used Macromedia Flash and Adobe Dreamweaver.
                </p>
                <p>
                    I studied in Japan at Tokyo University of Technology (東京工科大学), choosing Computer Science
                    to learn more about ICT. In Japan the industry was advanced — gaming, ecommerce,
                    websites, Flash, and software everywhere. I learned C and Java formally, and PHP,
                    HTML, jQuery, and CSS on my own. In 2009 I started Objective-C for iPhone on an
                    iPhone 3G. I published my first app after graduating in 2010: CalcDrill. It
                    reached #1 in Japan's free Education category on the App Store.
                </p>
                <p>
                    Fast forward — I have built a number of iOS apps since. The goal is quality
                    software and sustainable work. It is still an exciting experience.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-ink text-paper">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20">
            <p class="font-mono text-[12px] uppercase tracking-wide text-gold mb-10 md:mb-14">Timeline</p>

            <div class="relative">
                <div
                    class="absolute left-3 top-2 bottom-2 w-px -translate-x-1/2 bg-paper/15 md:left-1/2"
                    aria-hidden="true"
                ></div>

                <div>
                    @foreach ($timeline as $index => $entry)
                        @php $isLeft = $index % 2 === 0; @endphp
                        <div class="relative grid pb-12 last:pb-0 md:grid-cols-2 md:gap-x-16">
                            <div
                                class="absolute left-3 top-1 z-10 -translate-x-1/2 md:left-1/2"
                                aria-hidden="true"
                            >
                                <span class="timeline-dot">
                                    <span
                                        class="timeline-dot__pulse"
                                        style="animation-duration: {{ $timelinePulseCycle }}s; animation-delay: {{ -$index * $timelinePulseSlot }}s"
                                    ></span>
                                    <span class="timeline-dot__border"></span>
                                    <span class="timeline-dot__core"></span>
                                </span>
                            </div>

                            <div
                                @class([
                                    'absolute left-3 top-4 hidden h-px w-10 bg-paper/15 md:left-1/2 md:block',
                                    '-translate-x-full' => $isLeft,
                                ])
                                aria-hidden="true"
                            ></div>

                            <div @class([
                                'pl-10 md:col-start-1 md:pl-0 md:pr-12 md:text-right' => $isLeft,
                                'pl-10 md:col-start-2 md:pl-12' => ! $isLeft,
                            ])>
                                <p class="font-bold text-2xl text-gold">{{ $entry['year'] }}</p>
                                <ul class="mt-2 space-y-1 text-sm leading-relaxed text-paper/70">
                                    @foreach ($entry['items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>

                                @if (! empty($entry['image']))
                                    <img
                                        src="{{ asset('images/about/' . $entry['image']) }}"
                                        alt="{{ $entry['image_alt'] ?? $entry['year'] }}"
                                        @class([
                                            'mt-4 w-full rounded-lg border border-paper/10 object-cover',
                                            'md:ml-auto md:max-w-sm' => $isLeft,
                                            'md:max-w-sm' => ! $isLeft,
                                        ])
                                        loading="lazy"
                                    >
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-6 py-16 md:py-20">
            <div class="grid gap-10 md:grid-cols-2 md:items-center">
                <div>
                    <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta mb-4 flex items-center gap-2">
                        <i class="bi bi-phone text-base" aria-hidden="true"></i>
                        Tools for developing mobile experience
                    </p>
                    <p class="text-charcoal/80 leading-relaxed">
                        Xcode, Coda, Android Studio, Sketch, and Blender — the everyday stack for
                        designing, building, and shipping mobile software.
                    </p>
                </div>
                <img
                    src="{{ asset('images/about/tools.png') }}"
                    alt="Development tools"
                    class="w-full rounded-lg border border-ink/10 object-cover"
                    loading="lazy"
                >
            </div>

            <x-ai-tools-grid />
        </div>
    </section>

</x-layouts.app>
