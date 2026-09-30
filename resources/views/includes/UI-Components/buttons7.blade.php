@php
$buttons = [
    [
        'style' => 'rounded-md bg-primary hover:bg-primary-700 border border-primary hover:border-primary-700 text-white',
    ],
    [
        'style' => 'rounded-full bg-primary hover:bg-primary-700 border border-primary hover:border-primary-700 text-white',
    ],
    [
        'style' => 'rounded-md border bg-transparent hover:bg-primary border-primary text-primary hover:text-white',
    ],
    [
        'style' => 'rounded-full border bg-transparent hover:bg-primary border-primary text-primary hover:text-white',
    ],
    [
        'style' => 'rounded-md border bg-transparent hover:bg-primary border-primary text-primary hover:text-white',
    ],
    [
        'style' => 'rounded-full border bg-transparent hover:bg-primary border-primary text-primary hover:text-white',
    ],
    [
        'style' => 'rounded-md border bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white',
    ],
    [
        'style' => 'rounded-full border bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white',
    ]
];
@endphp

@foreach ($buttons as $item)
    <li class="inline-block m-0.5">
        <a href="" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center {{ $item['style'] }}"><i class="ri-shopping-cart-line"></i></a>
    </li>
@endforeach