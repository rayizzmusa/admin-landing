@php
$navmenus = [
    [
        'icon' => 'ri-user-line',
        'title' => 'Profile',
        'link' => url('/profile'),
    ],
    [
        'icon' => 'ri-receipt-line',
        'title' => 'Billing Info',
        'link' => url('/profile-billing'),
    ],
    [
        'icon' => 'ri-bank-card-2-line',
        'title' => 'Payment',
        'link' => url('/profile-payment'),
    ],
    [
        'icon' => 'ri-flow-chart',
        'title' => 'Social Profile',
        'link' => url('/profile-social'),
    ],
    [
        'icon' => 'ri-notification-2-line',
        'title' => 'Notifications',
        'link' => url('/profile-notification'),
    ],
    [
        'icon' => 'ri-settings-line',
        'title' => 'Settings',
        'link' => url('/profile-setting'),
    ],
    [
        'icon' => 'ri-logout-circle-r-line',
        'title' => 'Sign Out',
        'link' => url('/auth-lock-screen'),
    ]
];
@endphp

@foreach ($navmenus as $item)
    <li class="navbar-item account-menu">
        <a href="{{ $item['link'] }}" class="navbar-link text-slate-400 flex items-center py-2 rounded">
            <span class="me-2 text-[18px] mb-0"><i class="{{ $item['icon'] }}"></i></span>
            <h6 class="mb-0 font-semibold">{{ $item['title'] }}</h6>
        </a>
    </li>
@endforeach