<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - @yield('title') </title>

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}" defer></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/landing.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ mix('css/landing.css') }}" rel="stylesheet">
</head>
<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light fixed-top" id="mainNav">
    <div class="container">
        @if (!isset($backToProfile))
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                Angga's Web
            </a>
        @elseif ($backToProfile)
            <a class="navbar-brand js-scroll-trigger" href="{{ route('index') }}">
                <i class="fa fa-arrow-left mr-2"></i> Back to Profile
            </a>
        @else
            <a class="navbar-brand js-scroll-trigger" href="{{ route('showcase') }}">
                <i class="fa fa-arrow-left mr-2"></i> Back to Showcases
            </a>
        @endif
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @if (!isset($backToProfile))
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#experiences">Experiences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#showcases">Showcases</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

@include('components._footer_mini')
@include('components._to_top')

</body>
</html>
