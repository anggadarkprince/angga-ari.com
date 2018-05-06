@extends('layouts.dashboard')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">Settings</h4>
        <small class="text-muted">@yield('setting_description')</small>
    </div>
    <ul class="nav nav-tabs flex-row justify-content-lg-start justify-content-between mb-4">
        <li class="nav-item">
            <a class="nav-link{{ Route::current()->getName() == 'setting.profile' ? ' active' : '' }}" href="{{ route('setting.profile') }}">
                <i class="icon-user"></i>Profile
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{ Route::current()->getName() == 'setting.contact' ? ' active' : '' }}" href="{{ route('setting.contact') }}">
                <i class="icon-location-pin"></i>Contact
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{ Route::current()->getName() == 'setting.password' ? ' active' : '' }}" href="{{ route('setting.password') }}">
                <i class="icon-lock"></i>Password
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{ Route::current()->getName() == 'setting.notification' ? ' active' : '' }}" href="{{ route('setting.notification') }}">
                <i class="icon-bell"></i>Notification
            </a>
        </li>
    </ul>

    <div class="section-content">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                @yield('setting_content')
            </div>
        </div>
    </div>
@endsection