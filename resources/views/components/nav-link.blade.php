@props(['active'])

@php
$classes = ($active ?? false)
    ? 'nav-link active text-warning border border-warning rounded fw-bold'
    : 'nav-link text-white border border-transparent rounded';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} style="padding: 0.3rem 0.75rem; transition: all 0.3s;">
    {{ $slot }}
</a>