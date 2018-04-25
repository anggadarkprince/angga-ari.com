@extends('layouts.dashboard')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">
            <a href="javascript:void(0)" onclick="window.history.back();" class="link-natural">
                <i class="icon-arrow-left-circle"></i>
            </a>Showcase @if(!empty(Request::segment(3))) <span class="small text-muted"> / {{ Request::segment(3) }}</span> @endif
            <a href="#" class="float-right btn btn-sm btn-primary">
                View Showcase <i class="fa fa-arrow-right ml-2"></i>
            </a>
        </h4>
        <small class="text-muted">
            @yield('showcase_description')
        </small>
    </div>
    <ul class="nav nav-tabs nav-justified">
        <li class="nav-item">
            <a class="nav-link{{ Route::current()->getName() == 'showcase.portfolio' ? ' active' : '' }}" href="{{ route('showcase.portfolio') }}">
                <i class="icon-notebook"></i>Portfolio
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{ Route::current()->getName() == 'showcase.skill' ? ' active' : '' }}" href="{{ route('showcase.skill') }}">
                <i class="icon-energy"></i>Expertise
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{ Route::current()->getName() == 'showcase.achievement' ? ' active' : '' }}" href="{{ route('showcase.achievement') }}">
                <i class="icon-trophy"></i>Achievement
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{ Route::current()->getName() == 'showcase.profile' ? ' active' : '' }}" href="{{ route('showcase.profile') }}">
                <i class="icon-user"></i>Profile
            </a>
        </li>
    </ul>

    <div class="section-content">
        @yield('showcase_content')
    </div>
@endsection