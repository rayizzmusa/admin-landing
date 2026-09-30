@php
$sales = [
    [
        'icon' => 'ri-bookmark-line',
        'icon1' => 'ri-line-chart-line',
        'title' => 'Total Sales',
        'dollar' => '$',
        'price' => '35214',
        'target' => '48575',
        'percentage' => '3.84%',
        'today' => '+$1245 today',
        'style' => 'text-emerald-600',
    ],
    [
        'icon' => 'ri-user-line',
        'icon1' => 'ri-line-chart-line',
        'title' => 'Total Users',
        'dollar' => '',
        'price' => '4231',
        'target' => '5134',
        'percentage' => '3.84%',
        'today' => '+35 today',
        'style' => 'text-emerald-600',
    ],
    [
        'icon' => 'ri-box-3-line',
        'icon1' => 'ri-line-chart-line',
        'title' => 'Total Orders',
        'dollar' => '',
        'price' => '5135',
        'target' => '7546',
        'percentage' => '3.84%',
        'today' => '+124 today',
        'style' => 'text-emerald-600',
    ],
    [
        'icon' => 'ri-reset-right-line',
        'icon1' => 'ri-line-chart-line',
        'title' => 'Refunds',
        'dollar' => '',
        'price' => '112',
        'target' => '485',
        'percentage' => '5.76%',
        'today' => '4 today',
        'style' => 'text-red-600',
    ]
];
@endphp

@foreach ($sales as $item)
    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
        <div class="p-5">
            <div class="flex items-center justify-between mb-3">
                <div class="flex items-center">
                    <span class="flex justify-center items-center rounded-md size-8 min-w-8 bg-primary/5 dark:bg-primary/10 shadow-sm shadow-primary/5 dark:shadow-primary/10 text-primary">
                        <i class="{{ $item['icon'] }}"></i>
                    </span>

                    <span class="font-semibold block ms-3">{{ $item['title'] }}</span>
                </div>

                <div class="dropdown inline-block relative">
                    <button data-dropdown-toggle="dropdown" class="dropdown-toggle inline-flex text-[20px] text-center text-slate-400 rounded-full" type="button">
                        <i class="ri-more-2-line text-xl"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu absolute inset-e-0 m-0 mt-1 z-10 w-28 rounded-md bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                        <ul class="py-2 text-start" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="" class="block text-sm py-0.5 px-4 dark:text-white/70 hover:text-primary dark:hover:text-white">Today</a>
                            </li>
                            <li>
                                <a href="" class="block text-sm py-0.5 px-4 dark:text-white/70 hover:text-primary dark:hover:text-white">Weekly</a>
                            </li>
                            <li>
                                <a href="" class="block text-sm py-0.5 px-4 dark:text-white/70 hover:text-primary dark:hover:text-white">Monthly</a>
                            </li>
                            <li>
                                <a href="" class="block text-sm py-0.5 px-4 dark:text-white/70 hover:text-primary dark:hover:text-white">Yearly</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <span class="text-2xl font-semibold block mb-1">{{ $item['dollar'] }} <span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['price'] }}</span></span>

            <span class="{{ $item['style'] }} text-sm ms-1 font-semibold"><i class="{{ $item['icon1'] }}"></i> {{ $item['percentage'] }} <span class="text-slate-400">{{ $item['today'] }}</span></span>
        </div>

        <div class="px-5 py-4 bg-gray-50 dark:bg-slate-800">
            <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:inset-e-0 hover:after:inset-e-auto after:bottom-0 after:inset-s-0 after:transition-all after:duration-500 text-primary dark:text-white/70 hover:text-primary dark:hover:text-white after:bg-primary dark:after:bg-white duration-500">View data <i class="ri-arrow-right-line"></i></a>
        </div>
    </div>
@endforeach