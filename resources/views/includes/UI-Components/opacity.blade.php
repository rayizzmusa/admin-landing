@php
$opacitys = [
    [
        'title' => '.bg-primary',
        'style' => 'bg-primary',
    ],
    [
        'title' => '.bg-primary .opacity-95',
        'style' => 'bg-primary/95',
    ],
    [
        'title' => '.bg-primary .opacity-90',
        'style' => 'bg-primary/90',
    ],
    [
        'title' => '.bg-primary .opacity-85',
        'style' => 'bg-primary/85',
    ],
    [
        'title' => '.bg-primary .opacity-80',
        'style' => 'bg-primary/80',
    ],
    [
        'title' => '.bg-primary .opacity-75',
        'style' => 'bg-primary/75',
    ],
    [
        'title' => '.bg-primary .opacity-70',
        'style' => 'bg-primary/70',
    ],
    [
        'title' => '.bg-primary .opacity-65',
        'style' => 'bg-primary/65',
    ],
    [
        'title' => '.bg-primary .opacity-60',
        'style' => 'bg-primary/60',
    ],
    [
        'title' => '.bg-primary .opacity-55',
        'style' => 'bg-primary/55',
    ],
    [
        'title' => '.bg-primary .opacity-50',
        'style' => 'bg-primary/50',
    ],
    [
        'title' => '.bg-primary .opacity-45',
        'style' => 'bg-primary/45',
    ],
    [
        'title' => '.bg-primary .opacity-40',
        'style' => 'bg-primary/40',
    ],
    [
        'title' => '.bg-primary .opacity-35',
        'style' => 'bg-primary/35',
    ],
    [
        'title' => '.bg-primary .opacity-30',
        'style' => 'bg-primary/30',
    ],
    [
        'title' => '.bg-primary .opacity-25',
        'style' => 'bg-primary/25',
    ],
    [
        'title' => '.bg-primary .opacity-20',
        'style' => 'bg-primary/20',
    ],
    [
        'title' => '.bg-primary .opacity-15',
        'style' => 'bg-primary/15',
    ],
    [
        'title' => '.bg-primary .opacity-10',
        'style' => 'bg-primary/10',
    ],
    [
        'title' => '.bg-primary .opacity-5',
        'style' => 'bg-primary/5',
    ],
    [
        'title' => '.bg-primary .opacity-0',
        'style' => 'bg-primary/0',
    ]
];
@endphp

@foreach ($opacitys as $item)
    <li class="inline-block shadow-sm dark:shadow-gray-800 rounded-md py-2 px-3 m-0.5 {{ $item['style'] }}">{{ $item['title'] }}</li>
@endforeach