<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Quality Stone Countertops') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- Page-subtop Navbar -->
        <nav class="text-center my-3">
            <a class="fa fa-phone text-secondary"href="tel:859-338-8890">
            (859) 338-8890
            </a>
        </nav>
        
        <!-- Page-subtop Navbar -->
        <nav class="navbar navbar-dark bg-dark mb-5">
            
            <!-- Branding Image -->
            <a class="navbar-brand float-left pl-4" href="{{ route('welcome') }}">
                <img src="{{ asset('logo/qsc_ball.png') }}" class="img-thumbnail" style="height: 200px">
            </a>

            <!-- Collapsed Hamburger -->
            <button class="navbar-toggler justify-content-end mr-4" type="button" data-toggle="collapse" data-target="#app-navbar-collapse" aria-controls="app-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- right Side Of Navbar -->
                <ul class="navbar-nav mx-5 mt-2">
                    <!-- <li class="nav-item ">
                        <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/">Home <span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('about') ? 'active' : ''}}" href="{{ url('/about') }}">About</a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('portfolio') ? 'active' : ''}}" href="/portfolio">Portfolio</a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('materials') ? 'active' : ''}}" href="{{ route('materials') }}">Materials</a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('contact') ? 'active' : ''}}" href="{{ url('/contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="bg-dark text-light p-3 footer">
        <p><a href="{{ route('contact') }}">Contact us</a></p>
        <p>Hours: Mon-Fri 8am to 5p, Sat by appointment, Sun closed</p>
        <p>Location: 1008 S Main Street Nicholasville, KY  40356</p>
    </footer>
</body>
</html>
