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

    <title>{{ config('app.name', 'Angga\' Web') }} - @yield('title') </title>

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}" defer></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/blog.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/blog.css') }}" rel="stylesheet">
</head>
<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-sm navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ route('blog') }}">
            Angga's Blog
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Showcase</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Browse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Contribute</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- Footer -->
<footer>
    <div class="container">
        <p class="mb-0">All copyrights reserved &copy; {{ date('Y') }} - Designed & Developed by Angga</p>
        <p class="text-muted"><small>Made with Love and Coffee</small></p>
    </div>
</footer>

</body>
</html>
