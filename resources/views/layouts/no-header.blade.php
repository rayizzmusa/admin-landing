<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Techwind - Laravel 13 Multipurpose Landing & Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Tailwind CSS Multipurpose Landing & Admin Dashboard Template">
        <meta name="keywords" content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="3.3.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Css -->
        <!-- Main Css -->
        <link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/remixicon/fonts/remixicon.css') }}" rel="stylesheet" type="text/css" />
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">

    </head>
    
    <body class="font-nunito text-base text-slate-900 dark:text-white dark:bg-slate-900 bg-white">

        <!-- Main Content -->
        <div>
            @yield('content')
        </div>

        <div class="fixed bottom-3 inset-e-3">
            <a href="" class="back-button size-9 inline-flex items-center justify-center tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-full"><i class="ri-arrow-left-line"></i></a>
        </div>

        <!-- Switcher -->
        <div class="fixed top-1/4 -inset-e-2 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow-sm dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-15 h-8" for="chk">
                    <i class="ri-moon-line text-yellow-500 ps-1 relative z-1"></i>
                    <i class="ri-sun-line text-yellow-500 pe-1 relative z-1"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-0.5 left-0.5 size-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -inset-e-3 z-50">
            <a href="" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow-sm dark:shadow-gray-700 font-bold rtl:block ltr:hidden" >LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow-sm dark:shadow-gray-700 font-bold ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code -->

        <!-- JAVASCRIPTS -->
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>