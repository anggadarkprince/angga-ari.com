<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - @yield('title') </title>

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}" defer></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/dashboard.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('components.navbar')
    @include('components.breadcrumb')

    <main class="py-3 py-lg-5 content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('components.sidebar')
                </div>
                <div class="col-lg-9">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container d-block d-md-flex justify-content-between text-center text-md-left">
            <div>
                <p class="mb-0">
                    <span class="d-none d-lg-inline-block">All copyrights reserved </span>
                    &copy; {{ date('Y') }} Designed & Developed by Angga
                </p>
                <small class="text-muted">Made with Love and Coffee</small>
            </div>
            <ul class="list-inline mb-0 mt-1 mt-md-0">
                <li class="list-inline-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="list-inline-item"><a href="{{ route('privacy') }}">Privacy</a></li>
                <li class="list-inline-item"><a href="{{ route('agreement') }}">Agreement</a></li>
                <li class="list-inline-item"><a href="{{ route('about') }}">About</a></li>
            </ul>
        </div>
    </footer>

    <div class="cookie-choice alert mb-0 rounded-0">
        <span>By continuing to browse the site you are agreeing to our use of cookies. For more details about cookies see our cookie policy.</span>
        <a href="{{ route('privacy') }}" target="_blank" class="ml-2 text-strong text-info">See details</a>
        <a class="ml-2 text-strong text-info" href="#" data-dismiss="alert" aria-label="Close">OK</a>
    </div>

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
        <i class="icon-arrow-up-circle"></i>
    </a>
</div>
</body>
</html>
