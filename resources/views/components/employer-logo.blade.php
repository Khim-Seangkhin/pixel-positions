@props(['employer', 'size' => 'base'])

@php
    $classes = "object-cover rounded";
    if ($size === 'base') {
        $classes .= " w-full h-full";
    }
    if ($size === 'small') {
        $classes .= " w-14 h-11";
    }
@endphp

<img src="{{ asset('storage/'.$employer->logo) }}" alt="" class="{{ $classes }}">
