@php $attributes = $unescapedForwardedAttributes ?? $attributes; @endphp

@props([
    'variant' => 'outline',
])

@php
    $classes = Flux::classes('shrink-0')->add(
        match ($variant) {
            'outline' => '[:where(&)]:size-6',
            'solid' => '[:where(&)]:size-6',
            'mini' => '[:where(&)]:size-5',
            'micro' => '[:where(&)]:size-4',
        },
    );
@endphp

{{-- Your SVG code here: --}}
<svg data-flux-icon aria-hidden="true" preserveAspectRatio="xMidYMid"
    class="group h-4 fill-current self-start mx-2 my-3 stroke-current stroke-2 [stroke-linecap:round]" viewBox="0 0 18 13"
    xmlns="http://www.w3.org/2000/svg" {{ $attributes->class($classes) }}>
    
    <line x1="1" y1="5" x2="1" y2="10"></line>
    <line x1="5" y1="1" x2="5" y2="8"></line>
    <line x1="9" y1="5" x2="9" y2="10"></line>
    <line x1="13" y1="1" x2="13" y2="12"></line>
    <line x1="17" y1="5" x2="17" y2="10"></line>
</svg>
