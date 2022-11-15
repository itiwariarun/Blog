@props(['active' => false])

@php
$classes = 'block text-left rounded-3xl py-0.5 my-0.5 px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500
hover:text-white
focus:text-white';

if ($active) $classes .= ' bg-blue-500 text-white';
@endphp

<a {{ $attributes(['class'=> $classes]) }}
    >{{ $slot }}</a>