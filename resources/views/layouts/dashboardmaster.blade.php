
<!DOCTYPE html>
<html lang="en" data-sidebar-color="light" data-topbar-color="light" data-sidebar-view="default">

<head>
    <meta charset="utf-8">
    <title>Personal Portfolio | Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="MyraStudio" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend_assets') }}//images/favicon.ico">

    <!-- App css -->
    <link href="{{ asset('backend_assets') }}/css/theme.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend_assets') }}/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend_assets') }}/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">

    <!-- Head Js -->
    <script src="{{ asset('backend_assets') }}/js/head.js"></script>

    @vite('resources/css/app.css')
</head>

<body>

    <div class="app-wrapper">

        <!-- Sidebar Menu Start -->
        <div class="app-menu">

            <!-- Brand Logo -->
            <a href="index.html" class="logo-box">
                <img src="{{ asset('backend_assets') }}/images/logo-light.png" class="logo-light h-6" alt="Light logo">
                <img src="{{ asset('backend_assets') }}/images/logo-dark.png" class="logo-dark h-6" alt="Dark logo">
            </a>

            <!--- Menu -->
            <div data-simplebar>
                <ul class="menu">
                    <li class="menu-title">Menu</li>

                    <li class="menu-item">
                        <a href="index.html" class="menu-link">
                            <span class="menu-icon"><i class="uil uil-estate"></i></span>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="chat.html" class="menu-link">
                            <span class="menu-icon"><i class="uil uil-hipchat"></i></span>
                            <span class="menu-text"> AI Chat </span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <!-- Sidebar Menu End  -->

        <!-- Start Page Content here -->
        <div class="app-content">

            <!-- Topbar Start -->
            <header class="app-header flex items-center px-5 gap-4">

                <!-- Brand Logo -->
                <a href="index.html" class="logo-box">
                    <img src="{{ asset('backend_assets') }}/images/logo-sm.png" class="h-6" alt="Small logo">
                </a>

                <!-- Sidenav Menu Toggle Button -->
                <button id="button-toggle-menu" class="nav-link p-2">
                    <span class="sr-only">Menu Toggle Button</span>
                    <span class="flex items-center justify-center h-6 w-6">
                        <i class="uil uil-bars text-2xl"></i>
                    </span>
                </button>

                <!-- Page Title -->
                <h4 class="text-slate-900 text-lg font-medium">Dashboard</h4>

                <button id="button-toggle-profile" class="nav-link p-2 ms-auto">
                    <span class="sr-only">Profile Menu Offcanvas Button</span>
                    <span class="flex items-center justify-center h-6 w-6">
                        <i class="uil uil-heart-rate text-2xl"></i>
                    </span>
                </button>
            </header>
            <!-- Topbar End -->

            <main class="p-6">

                <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-6 mb-6">
                    @yield('content')

                </div>



            </main>

            <!-- Footer Start -->
            <footer class="footer h-16 flex items-center px-6 border-t border-gray-200 mt-auto">
                <div class="flex md:justify-between justify-center w-full gap-4">
                    <div>
                        <p class="text-sm font-medium"><script>document.write(new Date().getFullYear())</script> © TailFox</p>
                    </div>
                    <div class="md:flex hidden gap-2 item-center md:justify-end">
                        <p class="text-sm font-medium">Design &amp; Develop by <a href="#" class="text-primary">MyraStudio</a></p>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

        </div>
        <!-- End Page content -->

        <div class="profile-menu">
            <div class="flex flex-col items-center h-full gap-4 py-10 px-3">
                <!-- Profile Link -->
                <a href="#" type="button" class="flex flex-col items-center gap-1">
                    <img src="{{ asset('backend_assets') }}/images/users/avatar-6.jpg" alt="user-image" class="rounded-full h-8 w-8">
                    <span class="font-medium text-base"> {{ Auth::user()->name }} </span>
                    <span class="text-sm"> {{ Auth::user()->usertype }} </span>
                </a>

                <!-- Search Modal Button -->
                <button type="button" data-hs-overlay="#search-modal" class="bg-white rounded-full shadow-md p-2">
                    <span class="sr-only">Search</span>
                    <span class="flex items-center justify-center h-6 w-6">
                        <i class="uil uil-search text-2xl"></i>
                    </span>
                </button>

                <!-- Fullscreen Toggle Button -->
                <div class="flex">
                    <button data-toggle="fullscreen" type="button" class="bg-white rounded-full shadow-md p-2">
                        <span class="sr-only">Fullscreen Mode</span>
                        <span class="flex items-center justify-center h-6 w-6">
                            <i class="uil uil-people text-2xl"></i>
                        </span>
                    </button>
                </div>

                {{-- Logout Button --}}
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <div class="flex">
                        <a type="button" href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();" class="bg-white rounded-full shadow-md p-2">
                            <span class="sr-only">Logout</span>
                            <span class="flex items-center justify-center h-6 w-6">
                                <i class="uil uil-power text-2xl"></i>
                            </span>
                        </a>
                    </div>
                </form>


            </div>
        </div>



        <div id="search-modal"
            class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto pointer-events-none">
            <div
                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                <div
                    class="flex flex-col bg-white shadow-sm rounded-xl pointer-events-auto overflow-hidden">
                    <div class="relative z-[60]">
                        <input type="search" id="search-input" class="form-input ps-10">
                        <span class="absolute start-3 top-1.5">
                            <i class="uil uil-search text-lg"></i>
                        </span>

                        <span class="absolute end-3 top-1.5">
                            <button data-hs-overlay="#search-modal">
                                <i class="uil uil-times text-lg"></i>
                            </button>
                        </span>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Plugin Js -->
    <script src="{{ asset('backend_assets') }}/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('backend_assets') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('backend_assets') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('backend_assets') }}/libs/preline/preline.js"></script>

    <!-- App Js -->
    <script src="{{ asset('backend_assets') }}/js/app.js"></script>

    <!-- Apexcharts js -->
    <script src="{{ asset('backend_assets') }}/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Knob charts js -->
    <script src="{{ asset('backend_assets') }}/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- Morris Js-->
    <script src="{{ asset('backend_assets') }}/libs/morris.js/morris.min.js"></script>

    <!-- Raphael Js-->
    <script src="{{ asset('backend_assets') }}/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard Project Page js -->
    <script src="{{ asset('backend_assets') }}/js/pages/dashboard.js"></script>

</body>

</html>
