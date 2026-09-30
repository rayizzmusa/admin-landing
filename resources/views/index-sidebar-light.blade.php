<!-- resources/views/index-sidebar-light.blade.php -->
@extends('layouts.main')

@section('title', 'Index-Sidebar-Light Page')

@section('content')

<div class="container-fluid relative px-3">
    <div class="layout-specing">
        <!-- Start Content -->
        <div class="flex justify-between items-center">
            <div>
                <h5 class="text-xl font-bold">Hello, Cristina</h5>
                <h6 class="text-slate-400 font-semibold">Welcome!</h6>
            </div>

            <div class="flex items-center">
                <div class="position-relative">
                    <select class="form-select form-input w-full p-2 pe-6 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                        <option value="Y" selected>Yearly</option>
                        <option value="M">Monthly</option>
                        <option value="W">Weekly</option>
                        <option value="T">Today</option>
                    </select>
                </div>

                <a href="" class="ms-1">
                    <span class="py-1.75 px-6 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white rounded-md sm:inline-block hidden"><i class="ri-export-line font-normal"></i> Export</span>

                    <span class="size-10 items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md border bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white sm:hidden inline-flex"><i class="ri-export-line font-normal"></i></span>
                </a>
            </div>
        </div>

        <div class="grid xl:grid-cols-5 md:grid-cols-3 grid-cols-1 mt-6 gap-6">
        
            <!-- includes/Dashboard/index/visitors.blade.php -->
            @include('includes.Dashboard.index.visitors')
        
        </div>

        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
            <div class="lg:col-span-8">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">Profit / Expenses Analytics</h6>
                        
                        <div class="position-relative">
                            <select class="form-select form-input w-full py-2 px-2 pe-6 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                <option value="Y" selected>Yearly</option>
                                <option value="M">Monthly</option>
                                <option value="W">Weekly</option>
                                <option value="T">Today</option>
                            </select>
                        </div>
                    </div>
                    <div id="mainchart" class="apex-chart px-4 pb-6"></div>
                </div>
            </div>

            <div class="lg:col-span-4">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">Customers by Country</h6>

                        <div class="dropdown relative">
                            <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                                <span class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-800/5 dark:bg-gray-700 border border-gray-800/5 dark:border-gray-700 text-slate-900 dark:text-white rounded-full"><i class="ri-more-2-line"></i></span>
                            </button>
                            <!-- Dropdown menu -->
                            <div class="dropdown-menu absolute inset-e-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                                <ul class="py-2 text-start">
                                    <li>
                                        <a href="" class="block font-medium py-1 px-4 text-slate-400 dark:text-white/70 hover:text-slate-900 dark:hover:text-white">Profile</a>
                                    </li>
                                    <li>
                                        <a href="" class="block font-medium py-1 px-4 text-slate-400 dark:text-white/70 hover:text-slate-900 dark:hover:text-white">Profile Settings</a>
                                    </li>
                                    <li>
                                        <a href="" class="block font-medium py-1 px-4 text-slate-400 dark:text-white/70 hover:text-slate-900 dark:hover:text-white">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-b border-gray-100 dark:border-gray-800">
                        <div id="map" class="w-full h-59!"></div>
                    </div>

                    <div class="p-6">
                        <ul class="list-none flex">
                            <li class="inline-block w-1/2"><span class="text-primary font-semibold">Canada</span>:<span class="text-slate-400 ms-2">12468</span></li>
                            <li class="inline-block w-1/2"><span class="text-primary font-semibold">Greenland</span>:<span class="text-slate-400 ms-2">12468</span></li>
                        </ul>
                        <ul class="list-none flex">
                            <li class="inline-block w-1/2"><span class="text-primary font-semibold">Russia</span>:<span class="text-slate-400 ms-2">12468</span></li>
                            <li class="inline-block w-1/2"><span class="text-primary font-semibold">Palestine</span>:<span class="text-slate-400 ms-2">12468</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-12 grid-cols-1 mt-6 gap-6">
            <div class="xl:col-span-5 lg:col-span-12">
                <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">Orders</h6>
                        
                        <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:inset-e-0 hover:after:inset-e-auto after:bottom-0 after:inset-s-0 after:transition-all after:duration-500 text-slate-400 dark:text-white/70 hover:text-primary dark:hover:text-white after:bg-primary dark:after:bg-white duration-500">View orders <i class="ri-arrow-right-line"></i></a>
                    </div>

                    <div class="relative overflow-x-auto block w-full max-h-100" data-simplebar>
                        <table class="w-full text-start">
                            <thead class="text-base">
                                <tr>
                                    <th class="text-start font-semibold text-[15px] p-4 min-w-25">No.</th>
                                    <th class="text-start font-semibold text-[15px] p-4 min-w-32">ID</th>
                                    <th class="text-start font-semibold text-[15px] p-4 min-w-32">Date</th>
                                    <th class="text-start font-semibold text-[15px] p-4 min-w-32">Price</th>
                                    <th class="text-end font-semibold text-[15px] p-4 min-w-32">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <!-- includes/Dashboard/index/orders.blade.php -->
                                @include('includes.Dashboard.index.orders')

                            </tbody>
                        </table>
                    </div>
                </div>


            </div>

            <div class="xl:col-span-4 lg:col-span-6">
                <div class="rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="flex justify-between items-center border-b border-gray-100 dark:border-gray-800 p-4">
                        <div class="flex">
                            <img src="{{ asset('assets/images/client/01.jpg') }}" class="size-11 rounded-full shadow-sm dark:shadow-gray-700" alt="">
                            <div class="overflow-hidden ms-3">
                                <a href="#" class="block font-semibold text-truncate">Calvin Carlo</a>
                                <span class="text-slate-400 flex items-center text-sm"><span class="bg-green-600 text-white text-[10px] font-bold rounded-full size-2 me-1"></span> Online</span>
                            </div>
                        </div>

                        <div class="dropdown relative">
                            <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                                <span class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-gray-800/5 dark:bg-gray-700 border border-gray-800/5 dark:border-gray-700 text-slate-900 dark:text-white rounded-full"><i class="ri-more-2-line"></i></span>
                            </button>
                                
                            <!-- includes/Dashboard/index/dropdown.blade.php -->
                            @include('includes.Dashboard.index.dropdown')

                        </div>
                    </div>

                    <ul class="p-4 list-none mb-0 max-h-87.5 bg-no-repeat bg-center bg-cover" style="background-image: url('{{ asset('assets/images/bg-chat.png') }}');" data-simplebar>
                        
                        <!-- includes/Dashboard/index/chat.blade.php -->
                        @include('includes.Dashboard.index.chat')

                    </ul>

                    <div class="p-2 border-t border-gray-100 dark:border-gray-800">
                        <div class="flex ">
                            <input type="text" class="form-input w-full py-2 px-3 h-9 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Enter Message...">

                            <div class="min-w-31.5 text-end">
                                <a href="#" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md"><i class="ri-send-plane-line"></i></a>
                                <a href="#" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md"><i class="ri-emotion-happy-line"></i></a>
                                <a href="#" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md"><i class="ri-attachment-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-3 lg:col-span-6">
                <div class="rounded-md shadow-sm dark:shadow-gray-700 bg-white dark:bg-slate-900">
                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                        <h6 class="text-lg font-semibold">Top Products / Items</h6>

                        <a href="" class="text-slate-400 hover:text-primary dark:text-white/70 dark:hover:text-white text-[20px]"><i class="ri-arrow-up-down-line"></i></a>
                    </div>

                    <div class="relative overflow-x-auto block w-full max-h-100" data-simplebar>
                        <table class="w-full text-start">
                            <thead class="text-base">
                                <tr>
                                    <th class="text-start font-semibold text-[15px] p-4 min-w-37.5">Products</th>
                                    <th class="text-start font-semibold text-[15px] p-4 min-w-25">Earnings</th>
                                    <th class="text-end font-semibold text-[15px] p-4 min-w-20">Progress</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <!-- includes/Dashboard/index/items.blade.php -->
                                @include('includes.Dashboard.index.items')

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
</div><!--end container-->

@endsection