<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}"> --}}
    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
    <!-- map-vector css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jsvectormap.min.css') }}">
    <!-- [Google Font : Poppins] icon -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link">
    <link rel="stylesheet" href="../assets/css/style-preset.css">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://unpkg.com/pdf-lib"></script>
    <script src="https://unpkg.com/@pdf-lib/fontkit@0.0.4"></script>
    <script src="https://unpkg.com/downloadjs"></script>





    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js', 'resources/js/script.js']) --}}

    @livewireStyles

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <button class="btn" id="sidebar-toggle" type="buttom">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle arrow-none" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a href="#" class="dropdown-item">
                                    <span class="d-flex align-items-center">
                                        <i class="ph ph-user-circle"></i>
                                        <span>Edit profile</span>
                                    </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="d-flex align-items-center">
                                        <i class="ph ph-bell"></i>
                                        <span>Notifications</span>
                                    </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="d-flex align-items-center">
                                        <i class="ph ph-gear-six"></i>
                                        <span>Settings</span>
                                    </span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="d-flex align-items-center">
                                        <i class="ph ph-plus-circle"></i>
                                        <span>Add account</span>
                                    </span>
                                </a>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"
                                    class="dropdown-item">
                                    <span class="d-flex align-items-center">
                                        <i class="ph ph-power"></i>
                                        <span>{{ __('Logout') }}</span>
                                    </span>
                                </a>
                        <li>
                            <a></a>
                        </li>
                        <a id="navbarDropdown" class="nav-link dropdown-toggle p-0 m-0" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar"
                                    style="width: 40px; height: 40px; border-radius: 50%;">
                            </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </div>
                </li>
            @endguest
            </ul>
        </div>
        </div>
    </nav>

    <div class="wrapper">

        <aside id="sidebar" class="js-sidebar shadow-sm">
            @include('components.layouts.silebar')
        </aside>

        <main class="content py-4">
            @yield('content')
        </main>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- [Page Specific JS] start -->
    {{-- <script src="../assets/js/plugins/apexcharts.min.js"></script> --}}
   
    {{-- <script src="../assets/js/plugins/jsvectormap.min.js"></script> --}}
    {{-- <script src="../assets/js/plugins/world.js"></script> --}}
    {{-- <script src="../assets/js/plugins/world-merc.js"></script> --}}
    {{-- <script src="../assets/js/pages/dashboard-sales.js"></script> --}}
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="../assets/js/plugins/popper.min.js"></script>
    <script src="../assets/js/plugins/simplebar.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/fonts/custom-font.js"></script>
    {{-- <script src="../assets/js/pcoded.js"></script> --}}
    <script src="../assets/js/plugins/feather.min.js"></script>
    @yield('script')
    @stack('plugin-scripts')
    @stack('custom-scripts')
</body>

</html>
