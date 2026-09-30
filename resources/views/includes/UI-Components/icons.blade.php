@php
$icons = [
    [
        'icon' => 'ri-heart-add-line',
    ],
    [
        'icon' => 'ri-android-line',
    ],
    [
        'icon' => 'ri-btc-line',
    ],
    [
        'icon' => 'ri-calendar-2-line',
    ],
    [
        'icon' => 'ri-pie-chart-line',
    ]
];
@endphp

@foreach ($icons as $item)
    <span class="text-lg text-primary me-2"><i class="{{ $item['icon'] }}"></i></span>
@endforeach