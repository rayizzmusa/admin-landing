<!-- resources/views/auth-lock-screen.blade.php -->
@extends('layouts.no-header')

@section('title', 'Auth-Lock-Screen Page')

@section('content')

<!-- Start -->
<section class="relative overflow-hidden">
    <div class="absolute inset-0 bg-primary/2"></div>
    <div class="container-fluid relative">
        <div class="md:flex items-center">
            <div class="xl:w-[30%] lg:w-1/3 md:w-1/2">
                <div class="relative md:flex flex-col md:min-h-screen justify-center bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 md:px-10 py-10 px-4 z-1">
                    <div class="text-center">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-icon-64.png') }}" class="mx-auto" alt=""></a>
                    </div>
                    <div class="title-heading text-center md:my-auto my-20">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/client/05.jpg') }}" class="mx-auto size-24 rounded-full shadow-sm dark:shadow-gray-700" alt="">
                            <h5 class="mb-6 mt-4 text-xl font-semibold">Jenny Jimenez</h5>
                        </div>
                        <form class="text-start" action="user-{{ url('/profile') }}">
                            <div class="grid grid-cols-1">
                                <div class="mb-4">
                                    <label class="font-semibold" for="LoginPassword">Password:</label>
                                    <input id="LoginPassword" type="password" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-primary dark:border-gray-800 dark:focus:border-primary focus:ring-0" required="" placeholder="Password:">
                                </div>

                                <div class="flex justify-between mb-4">
                                    <div class="flex items-center mb-0">
                                        <input class="form-checkbox size-4 appearance-none rounded border border-gray-200 dark:border-gray-800 accent-primary checked:appearance-auto dark:accent-primary focus:border-primary-300 focus:ring-0 focus:ring-offset-0 focus:ring-primary-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="RememberMe">
                                        <label class="form-checkbox-label text-slate-400" for="RememberMe">Remember me</label>
                                    </div>
                                    <p class="text-slate-400 mb-0"><a href="{{ url('/auth-re-password') }}" class="text-slate-400">Forgot password ?</a></p>
                                </div>

                                <div class="">
                                    <input type="submit" class="py-2 px-5 inline-block tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md w-full" value="Login / Sign in">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        <p class="mb-0 text-slate-400">© {{ date('Y') }} Techwind. Design & Develop with <i class="ri-heart-fill text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                    </div>
                </div>
            </div>

            <div class="xl:w-[70%] lg:w-2/3 md:w-1/2 flex justify-center mx-6 md:my-auto my-20">
                <div>
                    <div class="relative">
                        <div class="absolute top-20 inset-s-20 bg-primary/2 size-300 rounded-full"></div>
                        <div class="absolute bottom-20 -inset-e-20 bg-primary/2 size-150 rounded-full"></div>
                    </div>

                    <div class="text-center">
                        <div>
                            <img src="{{ asset('assets/images/contact.svg') }}" class="max-w-xl mx-auto" alt="">
                            <div class="relative max-w-xl mx-auto text-start">
                                <div class="relative p-8 border-2 border-primary rounded-[30px] before:content-[''] before:absolute before:w-28 before:border-[6px] before:border-white dark:before:border-slate-900 before:-bottom-1 before:inset-s-16 before:z-2 after:content-[''] after:absolute after:border-2 after:border-primary after:rounded-none after:rounded-e-[50px] after:size-20 after:-bottom-20 after:inset-s-15 after:z-3 after:border-s-0 after:border-b-0">
                                    <span class="font-semibold leading-normal">
                                        Launch your campaign and benefit from our expertise on designing and managing conversion centered latest Tailwind CSS html page.
                                    </span>
    
                                    <div class="absolute text-8xl -top-0 inset-s-4 text-primary/10 dark:text-primary/20 -z-1">
                                        <i class="ri-double-quotes-l"></i>
                                    </div>
                                </div>
    
                                <div class="text-lg font-semibold mt-6 ms-44">
                                        - Techwind
                                </div>
                            </div>
                            <!-- <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect. Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section -->
<!-- End -->

@endsection