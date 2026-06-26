<x-layouts.app
    :title="'Portfolio : Mobile Apps'"
    :description="'Client mobile app portfolio from iReka Soft — React Native, iOS, Android, AR, and Laravel projects from 2012 to 2020.'"
>

  <x-page-hero
    :image="asset('images/' . $hero['image'])"    
  >
    <p class="font-mono text-[12px] uppercase tracking-[0.2em] text-gold">
      <a href="{{ route('services') }}" class="hover:text-paper transition-colors">Services</a>
      <span class="mx-2 text-paper/30">/</span>
      Portfolio
    </p>
    <h1 class="mt-3 font-display font-semibold text-4xl md:text-5xl tracking-tight max-w-2xl leading-tight">
      Portfolio : Mobile Apps
    </h1>
  </x-page-hero>

  @foreach ($projects as $project)
    @php
      $isEven = $loop->even;
    @endphp
    <section @class([
        'border-t border-ink/10',
        'bg-paper' => $isEven,
        'bg-ink-soft text-paper' => !$isEven,
    ])>
      <div class="mx-auto max-w-6xl px-6 py-14 md:py-16">
        <div class="grid gap-10 md:grid-cols-5 md:gap-12">
          <div class="md:col-span-3">
            <h2 @class([
                'font-display font-semibold text-2xl md:text-3xl tracking-tight leading-snug',
                'text-ink' => $isEven,
                'text-paper' => !$isEven,
            ])>{{ $project['title'] }}</h2>

            @if (!empty($project['meta']))
              <dl class="mt-5 space-y-1.5 text-sm">
                @foreach ($project['meta'] as $label => $value)
                  <div class="flex flex-wrap gap-x-2">
                    <dt @class([
                        'font-mono uppercase tracking-wide text-[11px]',
                        'text-charcoal/50' => $isEven,
                        'text-paper/50' => !$isEven,
                    ])>{{ $label }}:</dt>
                    <dd @class([
                        $isEven ? 'text-charcoal/80' : 'text-paper/80',
                    ])>{{ $value }}</dd>
                  </div>
                @endforeach
              </dl>
            @endif

            @if (!empty($project['paragraphs']))
              <div @class([
                  'mt-6 space-y-4 leading-relaxed',
                  'text-charcoal/80' => $isEven,
                  'text-paper/80' => !$isEven,
              ])>
                @foreach ($project['paragraphs'] as $paragraph)
                  <p>{{ $paragraph }}</p>
                @endforeach
              </div>
            @endif

            @if (!empty($project['highlights']))
              <ul @class([
                  'mt-6 space-y-2 text-sm leading-relaxed',
                  'text-charcoal/75' => $isEven,
                  'text-paper/75' => !$isEven,
              ])>
                @foreach ($project['highlights'] as $highlight)
                  <li class="flex gap-3">
                    <span @class([
                        'mt-2 h-1 w-1 shrink-0 rounded-full',
                        'bg-blue-500' => $isEven,
                        'bg-gold' => !$isEven,
                    ]) aria-hidden="true"></span>
                    <span>{{ $highlight }}</span>
                  </li>
                @endforeach
              </ul>
            @endif

            @if (!empty($project['links']))
              <div class="mt-6 flex flex-wrap gap-4">
                @foreach ($project['links'] as $link)
                  <a href="{{ $link['url'] }}" target="_blank" rel="noopener"
                    @class([
                        'font-mono text-[12px] uppercase tracking-wide underline underline-offset-4 transition-colors',
                        'text-blue-600 hover:text-blue-700' => $isEven,
                        'text-gold hover:text-paper' => !$isEven,
                    ])>
                    {{ $link['label'] }}
                  </a>
                @endforeach
              </div>
            @endif
          </div>

          @php
            $images = $project['images'] ?? (isset($project['image']) ? [$project['image']] : []);
          @endphp

          @if (!empty($images))
            <div @class([
                'md:col-span-2',
                'grid gap-4' => count($images) > 1,
            ])>
              @foreach ($images as $image)
                <img src="{{ asset('images/' . $image) }}" alt="{{ $project['title'] }}"
                  @class([
                      'w-full rounded-sm border object-cover',
                      'border-ink/10' => $isEven,
                      'border-paper/10' => !$isEven,
                  ])
                  loading="lazy">
              @endforeach
            </div>
          @endif
        </div>
      </div>
    </section>
  @endforeach

</x-layouts.app>
