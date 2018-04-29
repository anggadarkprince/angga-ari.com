<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Angga\' Web Blog') }} - @yield('title') </title>

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
        <nav class="navbar navbar-expand-md navbar-light navbar-app">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Angga') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('showcase') }}">{{ __('Showcase') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blog') }}">{{ __('Blog') }}</a>
                            </li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if(Route::current()->getName() == 'register')
                                <li class="nav-item">
                                    <a class="btn btn-outline-primary btn-sm" href="{{ route('login') }}">
                                        {{ __('Sign In') }}
                                    </a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="btn btn-outline-primary btn-sm" href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        <i class="icon-layers"></i> {{ __('Apps') }}
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="icon-equalizer"></i> {{ __('Setting') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('help') }}">
                                        <i class="icon-question"></i> {{ __('Help') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="icon-logout"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="bg-primary text-white">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb main text-uppercase">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">
                                <i class="fa fa-arrow-circle-left mr-2"></i>Apps
                            </a>
                        </li>
                        @if(Request::segment(1) == 'app')
                            @if(empty(Request::segment(3)))
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ ucfirst(Request::segment(2)) }}
                                </li>
                            @else
                                <li class="breadcrumb-item" aria-current="page">
                                    <a href="{{ url('/' . Request::segment(1) . '/' . Request::segment(2)) }}">
                                        {{ ucfirst(Request::segment(2)) }}
                                    </a>
                                </li>
                            @endif
                            @if(!empty(Request::segment(2)) && !empty(Request::segment(3)))
                                <li class="breadcrumb-item active d-none d-sm-inline-block" aria-current="page">
                                    {{ ucfirst(Request::segment(3)) }}
                                </li>
                            @endif
                        @endif
                    </ol>
                </nav>
            </div>
        </div>

        <main class="py-3 py-lg-5 content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="sidebar mr-xl-4">
                            <div class="sidebar-header d-none d-lg-block{{ Request::segment(1) == 'app' ? ' avatar-collapse' : '' }}">
                                <img class="user-avatar" src="{{ Storage::url('avatars/' . (Auth::user()->avatar ? Auth::user()->avatar : 'noavatar.jpg')) }}" alt="{{ Auth::user()->name }}">
                                <div class="user-info clearfix">
                                    <h3 class="user-name">{{ Auth::user()->name }}</h3>
                                    <p class="user-username text-muted">
                                        <small>{{ '@'.Auth::user()->username }}</small>
                                    </p>
                                </div>

                                <div{{ Request::segment(1) == 'app' ? ' class=text-center' : '' }}>
                                    <a href="{{ route('setting.profile') }}" class="btn btn-sm btn-primary">Edit Profile</a>
                                    <a href="{{ route('setting.notification') }}" class="btn btn-sm btn-primary"><i class="icon-bell"></i></a>
                                </div>
                            </div>

                            <ul class="sidebar-menu{{ Request::segment(1) == 'app' ? '' : ' d-none d-lg-block' }}">
                                <li class="d-none d-lg-block{{ Route::current()->getName() == 'home' || Request::segment(1) == 'app' ? ' active' : '' }}">
                                    @if(Request::segment(1) == 'app')
                                        <a href="{{ url('/app/' . Request::segment(2)) }}"><i class="icon-layers"></i>{{ ucfirst(Request::segment(2)) }}</a>
                                    @else
                                        <a href="{{ route('home') }}"><i class="icon-layers"></i>Apps</a>
                                    @endif
                                </li>
                                @if(Request::segment(1) == 'app')
                                    <li>
                                        @include(Request::segment(2) . '._navigation')
                                    </li>
                                @else
                                    <li><a href="#"><i class="icon-present"></i>Discover</a></li>
                                    <li><a href="#"><i class="icon-graph"></i>Insight</a></li>
                                @endif
                            </ul>

                            <ul class="sidebar-menu d-none d-lg-block justify-content-around{{ Request::segment(1) == 'app' ? '' : ' d-sm-flex' }}">
                                <li><a href="{{ route('subscribe') }}"><i class="icon-energy d-none d-sm-inline-block"></i>Go Premium</a></li>
                                <li{{ Request::segment(1) == 'setting' ? ' class=active' : '' }}><a href="{{ route('setting.profile') }}"><i class="icon-equalizer d-none d-sm-inline-block"></i>Settings</a></li>
                                <li><a href="{{ route('help') }}"><i class="icon-question d-none d-sm-inline-block"></i>Help & Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>

        @include('components.footer')
    </div>
</body>
</html>
