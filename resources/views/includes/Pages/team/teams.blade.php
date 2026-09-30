@php
$teams = [
    [
        'img' => 'assets/images/client/01.jpg',
        'name' => 'Jack John',
        'title' => 'Designer',
    ],
    [
        'img' => 'assets/images/client/02.jpg',
        'name' => 'Krista John',
        'title' => 'Designer',
    ],
    [
        'img' => 'assets/images/client/03.jpg',
        'name' => 'Roger Jackson',
        'title' => 'Designer',
    ],
    [
        'img' => 'assets/images/client/04.jpg',
        'name' => 'Johnny English',
        'title' => 'Designer',
    ],
    [
        'img' => 'assets/images/client/05.jpg',
        'name' => 'Jack John',
        'title' => 'Designer',
    ],
    [
        'img' => 'assets/images/client/06.jpg',
        'name' => 'Krista John',
        'title' => 'Designer',
    ],
    [
        'img' => 'assets/images/client/07.jpg',
        'name' => 'Roger Jackson',
        'title' => 'Designer',
    ],
    [
        'img' => 'assets/images/client/08.jpg',
        'name' => 'Johnny English',
        'title' => 'Designer',
    ],
    [
        'img' => 'assets/images/client/09.jpg',
        'name' => 'Jack John',
        'title' => 'Designer',
    ],
    [
        'img' => 'assets/images/client/10.jpg',
        'name' => 'Krista John',
        'title' => 'Designer',
    ],
    [
        'img' => 'assets/images/client/11.jpg',
        'name' => 'Roger Jackson',
        'title' => 'Designer',
    ],
    [
        'img' => 'assets/images/client/12.jpg',
        'name' => 'Johnny English',
        'title' => 'Designer',
    ]
];
@endphp

@foreach ($teams as $item)
    <div class="group text-center">
        <div class="relative inline-block mx-auto max-h-52 max-w-52 rounded-full overflow-hidden shadow-sm dark:shadow-gray-700">
            <img src="{{ asset($item['img']) }}" class="" alt="">
            <div class="absolute inset-0 bg-linear-to-b from-transparent to-black max-h-52 max-w-52 rounded-full opacity-0 group-hover:opacity-100 duration-500"></div>

            <ul class="list-none absolute inset-s-0 inset-e-0 -bottom-20 group-hover:bottom-5 duration-500">
                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full border border-primary bg-primary hover:border-primary hover:bg-primary text-white"><i class="ri-facebook-line"></i></a></li>
                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full border border-primary bg-primary hover:border-primary hover:bg-primary text-white"><i class="ri-instagram-line"></i></a></li>
                <li class="inline"><a href="" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full border border-primary bg-primary hover:border-primary hover:bg-primary text-white"><i class="ri-linkedin-line"></i></a></li>
            </ul><!--end icon-->
        </div>

        <div class="content mt-3">
            <a href="" class="text-lg font-semibold hover:text-primary duration-500">{{ $item['name'] }}</a>
            <p class="text-slate-400">{{ $item['title'] }}</p>
        </div>
    </div>
@endforeach