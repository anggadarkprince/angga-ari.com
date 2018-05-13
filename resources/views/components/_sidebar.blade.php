<?php $routeName = Route::current()->getName() ?>
<?php $isAppRoute = ($routeName != 'home' && strpos($routeName, 'setting.') === false) ?>
<div class="sidebar mr-xl-4">
    <div class="sidebar-header d-none d-lg-block{{ $isAppRoute ? ' avatar-collapse' : '' }}">
        <img class="user-avatar" src="{{ Storage::url('avatars/' . (Auth::user()->avatar ? Auth::user()->avatar : 'noavatar.jpg')) }}" alt="{{ Auth::user()->name }}">
        <div class="user-info clearfix">
            <h3 class="user-name text-truncate">{{ Auth::user()->name }}</h3>
            <p class="text-truncate mb-0 text-muted">
                <small>{{ '@'.Auth::user()->username }}</small>
            </p>
        </div>

        <div class="mt-3 user-control">
            <a href="{{ route('setting.profile') }}" class="btn btn-sm btn-primary">Edit<span class="{{ Request::segment(1) == 'app' ? 'd-none ' : '' }}d-xl-inline-block"> Profile</span></a>
            <a href="{{ route('setting.notification') }}" class="btn btn-sm btn-primary"><i class="icon-bell"></i></a>
        </div>
    </div>

    <ul class="sidebar-menu{{ $isAppRoute ? '' : ' d-none d-lg-block' }}">
        <li class="d-none d-lg-block{{ $routeName == 'home' || $isAppRoute ? ' active' : '' }}">
            @if($isAppRoute)
                <a href="{{ url(Request::segment(1)) }}">
                    <i class="icon-layers"></i>{{ ucfirst(Request::segment(1)) }}
                </a>
            @else
                <a href="{{ route('home') }}"><i class="icon-layers"></i>Apps</a>
            @endif
        </li>
        @if($isAppRoute)
            <li>
                @include(Request::segment(1) . '._navigation')
            </li>
        @else
            <li><a href="{{ route('coming_soon') }}"><i class="icon-map"></i>{{ __('Discovery') }}</a></li>
            <li><a href="{{ route('coming_soon') }}"><i class="icon-graph"></i>{{ __('Insight') }}</a></li>
        @endif
    </ul>

    <ul class="sidebar-menu d-none d-lg-block justify-content-around{{ $isAppRoute ? '' : ' d-sm-flex' }}">
        <li{{ Request::segment(1) == 'premium' ? ' class=active' : '' }}>
            <a href="{{ route('premium') }}">
                <i class="icon-energy d-none d-sm-inline-block"></i>{{ __('Go Premium') }}
            </a>
        </li>
        <li{{ Request::segment(1) == 'setting' ? ' class=active' : '' }}>
            <a href="{{ route('setting.profile') }}">
                <i class="icon-equalizer d-none d-sm-inline-block"></i>{{ __('Settings') }}
            </a>
        </li>
        <li{{ Request::segment(1) == 'help' ? ' class=active' : '' }}>
            <a href="{{ route('help') }}">
                <i class="icon-question d-none d-sm-inline-block"></i>{{ __('Help & Support') }}
            </a>
        </li>
    </ul>
</div>