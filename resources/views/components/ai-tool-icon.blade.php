@props(['tool'])

<span {{ $attributes->merge([
    'class' => 'flex h-20 w-20 shrink-0 items-center justify-center rounded-md border border-ink/10 bg-white p-1',
]) }}>
    @include('components.icons.ai.' . $tool)
</span>
