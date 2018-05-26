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
    <script>
        var CKEDITOR_BASEPATH = '/js/ckeditor/';
    </script>
    <script src="{{ mix('js/manifest.js') }}" defer></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('components._navbar')
        @yield('sub_header')

        <main class="py-3 py-lg-5 content-wrapper">
            @yield('main')
        </main>

        @include('components._footer')
        @include('components._to_top')

        <div class="cookie-choice alert mb-0 rounded-0" style="display: none">
            <div class="container">
                <span class="d-block d-sm-inline-block">By continuing to browse the site you are agreeing to our use of cookies. For more details about cookies see our cookie policy.</span>
                <a href="{{ route('privacy') }}" target="_blank" class="ml-2 text-strong text-info">See details</a>
                <a class="ml-2 text-strong text-info" href="#" data-dismiss="alert" aria-label="Close">OK</a>
            </div>
        </div>
    </div>

    @yield('scripts')
</body>
</html>
