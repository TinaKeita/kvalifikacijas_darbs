@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex w-full items-center gap-2 rounded-md border-l-2 border-brand-secondary bg-black/10 px-3 py-2 text-sm font-medium text-white transition duration-150'
            : 'flex w-full items-center gap-2 rounded-md border-l-2 border-transparent px-3 py-2 text-sm font-medium text-white/60 hover:bg-black/8 hover:text-white/85 transition duration-150';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
