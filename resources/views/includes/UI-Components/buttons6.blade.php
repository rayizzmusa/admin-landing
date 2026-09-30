@php
$buttons = [
    [
        'title' => 'Small',
        'style' => 'py-1.25 px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md',
    ],
    [
        'title' => 'Default',
        'style' => 'py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md',
    ],
    [
        'title' => 'Large',
        'style' => 'py-2.5 px-8 inline-block font-semibold tracking-wide border align-middle duration-500 text-lg text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md',
    ]
];
@endphp

@foreach ($buttons as $item)
    <li class="inline-block m-0.5">
        <a href="" class="{{ $item['style'] }}">{{ $item['title'] }}</a>
    </li>
@endforeach