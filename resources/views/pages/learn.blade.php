<x-layouts.app
    :title="'Learn'"
    :description="'Learning resources for developers — Laravel, Laravel Cloud, Git and more.'"
>

  @php
    $groups = [
      [
        'label' => 'PHP & Laravel',
        'links' => [
          ['name' => 'Laravel', 'desc' => 'The PHP framework we build on — full documentation.', 'href' => 'https://laravel.com/docs', 'icon' => 'bi-fire'],          
        ],
      ],
      [
        'label' => 'Deploy & Hosting',
        'links' => [
          ['name' => 'Laravel Cloud', 'desc' => 'Fully managed hosting for Laravel apps.', 'href' => 'https://cloud.laravel.com', 'icon' => 'bi-cloud'],
          
        ],
      ],
      [
        'label' => 'Version Control',
        'links' => [
          ['name' => 'Git', 'desc' => 'The official Git documentation and reference.', 'href' => 'https://git-scm.com/doc', 'icon' => 'bi-git'],
          
        ],
      ],
      
    ];
  @endphp

  <section class="mx-auto max-w-6xl px-6 pt-16 pb-10 md:pt-24">
    <div class="mt-6 inline-flex items-center gap-2 rounded-full border border-gold/40 bg-gold/10 px-4 py-1.5 font-mono text-[11px] uppercase tracking-[0.14em] text-charcoal/60">
      <i class="bi bi-cone-striped text-gold" aria-hidden="true"></i> Under construction — more coming soon
    </div>
  </section>

  <section class="mx-auto max-w-6xl px-6 pb-24 space-y-14">
    @foreach ($groups as $group)
      <div>
        <h2 class="font-mono text-[12px] uppercase tracking-[0.16em] text-charcoal/40">{{ $group['label'] }}</h2>
        <div class="mt-4 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
          @foreach ($group['links'] as $link)
            <a href="{{ $link['href'] }}" target="_blank" rel="noopener"
              class="group flex items-start gap-4 rounded-xl border border-ink/10 bg-white p-5 transition-colors hover:border-ink/30">
              <span class="grid h-10 w-10 shrink-0 place-items-center rounded-lg bg-ink text-paper">
                <i class="bi {{ $link['icon'] }} text-lg" aria-hidden="true"></i>
              </span>
              <span class="min-w-0">
                <span class="flex items-center gap-1.5 font-display font-semibold text-ink">
                  {{ $link['name'] }}
                  <i class="bi bi-box-arrow-up-right text-[11px] text-charcoal/30 transition-colors group-hover:text-ink" aria-hidden="true"></i>
                </span>
                <span class="mt-1 block text-sm leading-relaxed text-charcoal/55">{{ $link['desc'] }}</span>
              </span>
            </a>
          @endforeach
        </div>
      </div>
    @endforeach
  </section>

</x-layouts.app>
