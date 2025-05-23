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
<svg {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
    preserveAspectRatio="xMidYMid" viewBox="0 0 2000 1500">
    <g>
        <path fill="currentColor"
            d="M 706.5,734.5 C 705.5,902.666 705.167,1071 705.5,1239.5C 640.5,1239.5 575.5,1239.5 510.5,1239.5C 510.333,1066.5 510.5,893.5 511,720.5C 521.629,579.74 580.129,463.573 686.5,372C 797.036,282.103 923.369,246.103 1065.5,264C 1228.03,291.955 1349.53,377.455 1430,520.5C 1461.51,579.709 1480.51,642.709 1487,709.5C 1488.47,886.158 1488.97,1062.82 1488.5,1239.5C 1423.17,1239.5 1357.83,1239.5 1292.5,1239.5C 1292.67,1071.17 1292.5,902.833 1292,734.5C 1282.38,633.383 1235.55,554.883 1151.5,499C 1065.33,448.055 975.664,441.055 882.5,478C 793.564,519.683 737.064,588.183 713,683.5C 709.008,700.276 706.841,717.276 706.5,734.5 Z" />
    </g>
    <g>
        <path fill="currentColor"
            d="M 765.5,789.5 C 765.5,854.5 765.5,919.5 765.5,984.5C 921.167,984.5 1076.83,984.5 1232.5,984.5C 1232.5,919.5 1232.5,854.5 1232.5,789.5C 1233.5,854.665 1233.83,919.998 1233.5,985.5C 1077.17,985.5 920.833,985.5 764.5,985.5C 764.168,919.998 764.501,854.665 765.5,789.5 Z" />
    </g>
    <g>
        <path fill="currentColor"
            d="M 765.5,789.5 C 921.167,789.5 1076.83,789.5 1232.5,789.5C 1232.5,854.5 1232.5,919.5 1232.5,984.5C 1076.83,984.5 921.167,984.5 765.5,984.5C 765.5,919.5 765.5,854.5 765.5,789.5 Z" />
    </g>
    <g>
        <path fill="currentColor"
            d="M 1232.5,1239.5 C 1232.5,1174.5 1232.5,1109.5 1232.5,1044.5C 1076.83,1044.5 921.167,1044.5 765.5,1044.5C 765.5,1109.5 765.5,1174.5 765.5,1239.5C 764.501,1174.34 764.168,1109 764.5,1043.5C 920.833,1043.5 1077.17,1043.5 1233.5,1043.5C 1233.83,1109 1233.5,1174.34 1232.5,1239.5 Z" />
    </g>
    <g>
        <path fill="currentColor"
            d="M 1232.5,1239.5 C 1076.83,1239.5 921.167,1239.5 765.5,1239.5C 765.5,1174.5 765.5,1109.5 765.5,1044.5C 921.167,1044.5 1076.83,1044.5 1232.5,1044.5C 1232.5,1109.5 1232.5,1174.5 1232.5,1239.5 Z" />
    </g>
    <g>
        <path fill="currentColor"
            d="M 706.5,734.5 C 706.5,903.167 706.5,1071.83 706.5,1240.5C 640.998,1240.83 575.665,1240.5 510.5,1239.5C 575.5,1239.5 640.5,1239.5 705.5,1239.5C 705.167,1071 705.5,902.666 706.5,734.5 Z" />
    </g>
</svg>