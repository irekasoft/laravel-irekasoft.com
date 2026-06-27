@php
    $technologies = config('service-tech.stack');
@endphp

<ul class="mx-auto mt-10 grid max-w-4xl grid-cols-2 gap-6 sm:grid-cols-3 sm:gap-8 lg:grid-cols-4">
    @foreach ($technologies as $tech)
        <li class="flex flex-col items-center gap-3 rounded-lg border border-ink/10 bg-paper px-6 py-8">
            <img
                src="{{ asset('images/icons/tech/' . $tech['icon']) }}"
                alt=""
                class="h-10 w-10 object-contain"
                width="40"
                height="40"
                loading="lazy"
                aria-hidden="true"
            >
            <span class="font-display text-lg tracking-tight text-charcoal/80">{{ $tech['name'] }}</span>
        </li>
    @endforeach
</ul>
