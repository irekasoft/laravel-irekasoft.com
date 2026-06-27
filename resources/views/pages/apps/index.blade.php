<x-layouts.app :title="'Apps'" :description="'iOS, Android, and Mac apps from iReka Soft — FaceClock Pro, Nightstand, Expense, and more.'">

  <x-page-hero
    :image="asset('images/heroes/apps.jpg')"
    :video="asset('videos/heroes/apps.mp4')"
  >
    <p class="font-mono text-[12px] uppercase tracking-[0.2em] text-gold">
      Products
    </p>
    <h1 class="mt-3 font-display font-semibold text-4xl md:text-5xl tracking-tight max-w-2xl leading-tight">
      Apps
    </h1>

    <div class="mt-6 max-w-2xl text-paper/70 leading-relaxed space-y-4">
      <p>
        Software we build and publish ourselves — small, focused apps for
        <strong class="text-paper">iPhone</strong> and <strong class="text-paper">Mac</strong>.
        Clocks, reminders, expense tracking, and everyday utilities — each one does one job well.
      </p>
      
    </div>
  </x-page-hero>

  {{-- <section class="bg-paper border-b border-ink/10 pt-6">
    <div class="mx-auto max-w-6xl px-6 pb-10 text-center">
      <h1 class="font-display font-semibold text-4xl md:text-5xl tracking-tight text-ink">
        Apps
      </h1>
      <p class="mt-6 font-mono text-[12px] uppercase tracking-[0.14em] text-charcoal/50">
        @foreach ($platforms as $label)
          <span>{{ $label }}</span>
          @if (!$loop->last)
            <span class="px-3 text-charcoal/25">|</span>
          @endif
        @endforeach
      </p>
    </div>
  </section> --}}

  @foreach ($grouped as $platformKey => $platformApps)
    <section @class([
        'apps-platform-section border-b border-ink/10',
        'apps-platform-section--light bg-paper' => $loop->even,
        'bg-ink-soft text-paper' => $loop->odd,
    ])>
      <div class="relative z-10 mx-auto max-w-6xl px-6 pt-6 pb-10">
        <h2 @class([
            'font-display font-semibold text-2xl md:text-3xl tracking-tight mb-4',
            'text-ink' => $loop->even,
            'text-paper' => $loop->odd,
        ])>{{ $platforms[$platformKey] }} Apps</h2>

        <div class="grid gap-4 sm:grid-cols-2">
          @foreach ($platformApps as $app)
            <x-app-card :app="$app" :dark="!$loop->parent->even" />
          @endforeach
        </div>
      </div>
    </section>
  @endforeach

</x-layouts.app>
