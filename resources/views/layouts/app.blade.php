<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Quality Stone Countertops') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- Page-top Navbar -->
        <nav class="text-center my-3">
            <a class="fa fa-phone text-secondary"href="tel:859-338-8890">
            (859) 338-8890
            </a>
        </nav>
        <!-- Page-subtop Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('pictures/logo/logo.png') }}" class="navbar-brand img-thumbnail" style="height:50px; object-fit: contain;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ url('/about') }}">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{Request::is('portfolio') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ url('/portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item {{Request::is('materials') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ url('/materials') }}">Materials</a>
                    </li>
                    <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        {{-- <a class="nav-link " href=""></a> --}}

        <main class="container-fluid justify-content-center">
            <div class="row justify-content-center text-center">
            @yield('content')
            </div>
        </main>
    </div>
    <footer class="bg-dark text-light p-3 footer">
        <p><a href="{{ url('/contact') }}">Contact us</a></p>
        <p>Hours: Mon-Fri 8am to 5p, Sat by appointment, Sun closed</p>
        <p>Location: 1008 S Main Street Nicholasville, KY  40356</p>
    </footer>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
