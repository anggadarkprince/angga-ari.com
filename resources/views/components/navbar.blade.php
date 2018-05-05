<nav class="navbar navbar-expand navbar-app">
    <div class="container">
        <a class="navbar-brand text-uppercase mr-1 mr-sm-4" href="{{ url('/') }}">
            {{ config('app.name') }}
        </a>

        <div class="navbar-collapse">
            <form action="search" class="ml-lg-4 search-form">
                <div class="input-group">
                    <input class="form-control form-control-sm" id="search" name="q" type="text" placeholder="Search" aria-label="Search">
                    <i class="icon-magnifier"></i>
                </div>
            </form>

            <ul class="navbar-nav ml-auto text-strong">
                <li class="nav-item d-md-none">
                    <a class="nav-link link-natural icon-search" href="#">
                        <i class="icon-magnifier"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-inline-block{{ Route::current()->getName() == 'premium' ? ' active' : '' }}">
                    <a class="nav-link" href="{{ route('premium') }}">
                        <i class="icon-energy mr-2"></i>{{ __('Go Premium') }}
                    </a>
                </li>
                <li class="nav-item d-none d-lg-inline-block">
                    <a class="nav-link" href="{{ route('coming_soon') }}">
                        {{ __('Discovery') }}
                    </a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="icon-bell d-sm-none"></i>
                            <span class="d-none d-sm-inline-block">{{ __('Notifications') }}</span>
                            <span class="badge badge-primary ml-1 ml-lg-2">23</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-account">
                        <a id="dropdown-account" class="nav-link py-0 pr-0 pl-2 pl-md-3" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle"
                                 src="{{ Storage::url('avatars/' . (Auth::user()->avatar ? Auth::user()->avatar : 'noavatar.jpg')) }}"
                                 alt="{{ Auth::user()->name }}">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-account">
                            <a class="dropdown-item" href="{{ route('home') }}">
                                <i class="icon-layers"></i> {{ __('Apps') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('setting.profile') }}">
                                <i class="icon-equalizer"></i> {{ __('Settings') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('help') }}">
                                <i class="icon-question"></i> {{ __('Help & Support') }}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="icon-logout"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth
            </ul>
            @guest
                <div class="ml-2">
                    @if(Route::current()->getName() == 'register')
                        <a class="btn btn-outline-primary btn-sm align-middle" href="{{ route('login') }}">
                            {{ __('Sign In') }}
                        </a>
                    @else
                        <a class="btn btn-outline-primary btn-sm align-middle" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    @endif
                </div>
            @endguest
        </div>
    </div>
</nav>