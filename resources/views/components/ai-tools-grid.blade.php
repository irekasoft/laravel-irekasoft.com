@php
    $tools = config('ai-tools.tools');
@endphp

<div class="mt-16 md:mt-20 border-t border-ink/10 pt-10 md:pt-12">
    <p class="font-mono text-[12px] uppercase tracking-wide text-terracotta flex items-center gap-2">
        <i class="bi bi-stars text-base" aria-hidden="true"></i>
        Tools for the AI age
    </p>
    <ul class="mt-6 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($tools as $tool)
            <li class="flex gap-3 rounded-lg border border-ink/10 bg-white px-4 py-3">
                <x-ai-tool-icon :tool="$tool['slug']" class="mt-0.5" aria-hidden="true" />
                <div class="min-w-0">
                    <p class="font-medium text-charcoal">{{ $tool['name'] }}</p>
                    <p class="mt-1 text-sm leading-relaxed text-charcoal/60">{{ $tool['description'] }}</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>
