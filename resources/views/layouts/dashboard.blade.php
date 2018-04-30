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
    <link href="https://fonts.googleapis.com/css?family=Lato:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand navbar-app">
            <div class="container">
                <a class="navbar-brand text-uppercase mr-1 mr-sm-4" href="{{ url('/') }}">
                    {{ config('app.name', 'Angga') }}
                </a>

                <div class="navbar-collapse">
                    <form class="form-inline ml-lg-4 d-none d-md-block search-form">
                        <div class="input-group">
                            <input class="form-control form-control-sm" id="search" type="text" placeholder="Search" aria-label="Search">
                            <i class="icon-magnifier"></i>
                        </div>
                    </form>

                    <ul class="navbar-nav ml-auto text-strong">
                        <li class="nav-item d-md-none">
                            <a class="nav-link link-natural" href="#"><i class="icon-magnifier"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-inline-block">
                            <a class="nav-link link-natural" href="#"><i class="icon-energy mr-2"></i>Go Premium</a>
                        </li>
                        <li class="nav-item d-none d-md-inline-block">
                            <a class="nav-link link-natural" href="#">Discovery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-natural" href="#">
                                <i class="icon-bell d-sm-none"></i>
                                <span class="d-none d-sm-inline-block">Notifications</span>
                                <span class="badge badge-primary ml-1 ml-lg-2">23</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-account">
                            <a id="navbarDropdown" class="nav-link py-0 pr-0 pl-2 pl-md-3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img class="rounded-circle" src="{{ Storage::url('avatars/' . (Auth::user()->avatar ? Auth::user()->avatar : 'noavatar.jpg')) }}" alt="{{ Auth::user()->name }}">
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
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="icon-logout"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
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
                                @if(empty(Request::segment(4)))
                                    <li class="breadcrumb-item active d-none d-sm-inline-block" aria-current="page">
                                        {{ ucfirst(Request::segment(3)) }}
                                    </li>
                                @else
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a href="{{ url('/' . Request::segment(1) . '/' . Request::segment(2) . '/' . Request::segment(3)) }}">
                                            {{ ucfirst(Request::segment(3)) }}
                                        </a>
                                    </li>
                                @endif
                            @endif


                            @if(!empty(Request::segment(2)) && !empty(Request::segment(3)) && !empty(Request::segment(4)))
                                <li class="breadcrumb-item active d-none d-sm-inline-block" aria-current="page">
                                    {{ ucfirst(Request::segment(4)) }}
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
