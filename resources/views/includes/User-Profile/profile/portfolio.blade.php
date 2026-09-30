@php
$portfolios = [
    [
        'img' => 'assets/images/portfolio/1.jpg',
        'title' => 'Mockup Collection',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/2.jpg',
        'title' => 'The Landscape House',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/3.jpg',
        'title' => 'New Build Family Home',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/4.jpg',
        'title' => 'Private and Social Apartments',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/5.jpg',
        'title' => 'Apartment Complex',
        'name' => 'Abstract',
    ],
    [
        'img' => 'assets/images/portfolio/6.jpg',
        'title' => 'Construction Engineering',
        'name' => 'Abstract',
    ]
];
@endphp

@foreach ($portfolios as $item)
    <div class="group relative block overflow-hidden rounded-md duration-500">
        <img src="{{ asset($item['img']) }}" class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500" alt="">
        <div class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 duration-500 z-0 rounded-md"></div>

        <div class="content duration-500">
            <div class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-6 inset-e-6 duration-500">
                <a href="{{ asset($item['img']) }}" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-full lightbox"><i class="ri-camera-4-line font-normal"></i></a>
            </div>

            <div class="absolute z-10 opacity-0 group-hover:opacity-100 bottom-6 inset-s-6 duration-500">
                <a href="" class="h6 text-lg font-medium hover:text-primary duration-500 ease-in-out">{{ $item['title'] }}</a>
                <p class="text-slate-400 mb-0">{{ $item['name'] }}</p>
            </div>
        </div>
    </div>
@endforeach