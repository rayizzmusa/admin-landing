<!-- sidebar-wrapper -->
<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-light.png') }}" height="24" alt=""></a>
        </div>

        <ul class="sidebar-menu border-t border-white/10" data-simplebar style="height: calc(100% - 70px);">
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ri-layout-line font-normal me-2"></i>Dashboard</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/') }}">Analytics</a></li>
                        <li><a href="{{ url('/index-crypto') }}">Cryptocurrency</a></li>
                        <li><a href="{{ url('/index-ecommerce') }}">eCommerce</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ri-airplay-line font-normal me-2"></i>Layouts</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/index-dark') }}">Dark Dashboard</a></li>
                        <li><a href="{{ url('/index-rtl') }}">RTL Dashboard</a></li>
                        <li><a href="{{ url('/index-dark-rtl') }}">Dark RTL Dashboard</a></li>
                        <li><a href="{{ url('/index-sidebar-light') }}">Light Sidebar</a></li>
                        <li><a href="{{ url('/index-sidebar-colored') }}">Colored Sidebar</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ri-apps-line font-normal me-2"></i>Apps</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/chat') }}">Chat</a></li>
                        <li><a href="{{ url('/email') }}">Email</a></li>
                        <li><a href="{{ url('/calendar') }}">Calendar</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ri-user-line font-normal me-2"></i>User Profile</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/profile') }}">Profile</a></li>
                        <li><a href="{{ url('/profile-billing') }}">Billing Info</a></li>
                        <li><a href="{{ url('/profile-payment') }}">Payment</a></li>
                        <li><a href="{{ url('/profile-social') }}">Social Profile</a></li>
                        <li><a href="{{ url('/profile-notification') }}">Notifications</a></li>
                        <li><a href="{{ url('/profile-setting') }}">Profile Settings</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ri-news-line font-normal me-2"></i>Blog</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/blog') }}">Blogs</a></li>
                        <li><a href="{{ url('/blog-detail') }}">Blog Detail</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ri-shopping-cart-line font-normal me-2"></i>E-Commerce</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/shop') }}">Shop</a></li>
                        <li><a href="{{ url('/shop-item-detail') }}">Shop Detail</a></li>
                        <li><a href="{{ url('/shop-cart') }}">Shopcart</a></li>
                        <li><a href="{{ url('/checkout') }}">Checkout</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ri-camera-4-line font-normal me-2"></i>Gallery</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/gallery-one') }}">Gallary One</a></li>
                        <li><a href="{{ url('/gallery-two') }}">Gallery Two</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ri-file-line font-normal me-2"></i>Pages</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/starter') }}">Starter</a></li>
                        <li><a href="{{ url('/faqs') }}">FAQs</a></li>
                        <li><a href="{{ url('/pricing') }}">Pricing</a></li>
                        <li><a href="{{ url('/team') }}">Team</a></li>
                        <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
                        <li><a href="{{ url('/terms') }}">Term & Condition</a></li>
                    </ul>
                </div>
            </li>

            <li class="">
                <a href="{{ url('/ui-components') }}"><i class="ri-layout-line font-normal me-2"></i>UI Components</a>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ri-mail-line font-normal me-2"></i>Email Template</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/email-confirmation') }}">Confirmation</a></li>
                        <li><a href="{{ url('/email-password-reset') }}">Reset Password</a></li>
                        <li><a href="{{ url('/email-alert') }}">Alert</a></li>
                        <li><a href="{{ url('/email-invoices') }}">Invoice</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ri-receipt-line font-normal me-2"></i>Invoice</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/invoice-list') }}">Invoice List</a></li>
                        <li><a href="{{ url('/invoice') }}">Invoice Preview</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ri-login-circle-line font-normal me-2"></i>Authentication</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/auth-login') }}">Login</a></li>
                        <li><a href="{{ url('/auth-signup') }}">Signup</a></li>
                        <li><a href="{{ url('/auth-signup-success') }}">Signup Success</a></li>
                        <li><a href="{{ url('/auth-re-password') }}">Reset Password</a></li>
                        <li><a href="{{ url('/auth-lock-screen') }}">Lockscreen</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ri-stack-line font-normal me-2"></i>Miscellaneous</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('/comingsoon') }}">Comingsoon</a></li>
                        <li><a href="{{ url('/maintenance') }}">Maintenance</a></li>
                        <li><a href="{{ url('/error') }}">Error</a></li>
                        <li><a href="{{ url('/thankyou') }}">Thank You</a></li>
                    </ul>
                </div>
            </li>

            <li class="relative lg:m-8 m-6 px-8 py-10 rounded-lg bg-linear-to-b to-transparent from-slate-800 text-center">
                <span class="relative z-10">
                    <span class="text-xl font-bold h5 text-white">Upgrade to Pro</span>

                    <span class="text-slate-400 mt-3 mb-5 !block">Get one month free and subscribe to pro</span>

                    <a href="https://1.envato.market/techwind" target="_blank" class="py-2 px-5 !block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-gray-500/5 hover:bg-gray-500 border-gray-500/10 hover:border-gray-500 text-white rounded-md">Subscribe</a>
                </span>
    
                <img src="{{ asset('assets/images/shree-276.png') }}" class="absolute top-1/2 -translate-y-1/2 inset-s-0 inset-e-0 mx-auto text-center size-40 z-0 opacity-5" alt="">
            </li>
        </ul>
        <!-- sidebar-menu  -->
    </div>
</nav>
<!-- sidebar-wrapper  -->