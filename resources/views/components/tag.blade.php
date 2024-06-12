@props(['size' => 'normal'])
@php
    if ($size === "normal") {
        $classes = "bg-white/10 hover:bg-white/25 px-5 py-2 text-sm rounded-xl transition-colors duration-300 ";
    }else {
        $classes = "bg-white/10 hover:bg-white/25 px-2 py-1 text-2xs rounded-xl transition-colors duration-300 ";
    }
@endphp
<a  {{ $attributes->merge(['class'=> $classes]) }}>{{ $slot }}</a>
