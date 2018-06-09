<div class="sidebar mr-xl-4">
    <div class="sidebar-header d-none d-lg-block{{ is_app_route() ? ' avatar-collapse' : '' }}">
        <img class="user-avatar img-fluid" src="{{ Storage::url((Auth::user()->avatar ? Auth::user()->avatar : 'avatars/noavatar.jpg')) }}" alt="{{ Auth::user()->name }}">
        <div class="user-info clearfix">
            <h3 class="user-name text-truncate">{{ Auth::user()->name }}</h3>
            <p class="text-truncate mb-0 text-muted">
                <small>{{ '@'.Auth::user()->username }}</small>
            </p>
        </div>

        <div class="mt-3 user-control">
            <a href="{{ route('setting.profile') }}" class="btn btn-sm btn-primary">Edit Profile</a>
            <a href="{{ route('setting.notification') }}" class="btn btn-sm btn-primary"><i class="icon-bell"></i></a>
        </div>
    </div>

    <ul class="sidebar-menu{{ is_app_route() ? '' : ' d-none d-lg-block' }}">
        <li class="d-none d-lg-block{{ Route::current()->getName() == 'home' || is_app_route() ? ' active' : '' }}">
            @if(is_app_route())
                <a href="{{ url(Request::segment(1)) }}">
                    <i class="icon-layers"></i>{{ ucfirst(Request::segment(1)) }}
                </a>
            @else
                <a href="{{ route('home') }}"><i class="icon-layers"></i>Apps</a>
            @endif
        </li>
        @if(is_app_route())
            <li>
                @include(Request::segment(1) . '._navigation')
            </li>
        @else
            <li><a href="{{ route('coming_soon') }}"><i class="icon-map"></i>{{ __('Discovery') }}</a></li>
            <li><a href="{{ route('coming_soon') }}"><i class="icon-graph"></i>{{ __('Insight') }}</a></li>
        @endif
    </ul>

    <ul class="sidebar-menu d-none d-lg-block justify-content-around{{ is_app_route() ? '' : ' d-sm-flex' }}">
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