@extends('layouts.dashboard')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between{{ Route::current()->getName() == 'showcase.profile' ? ' mb-0 mb-sm-3' : '' }}">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">
                <a href="javascript:void(0)" onclick="window.history.back();" class="link-natural d-none d-sm-inline-block">
                    <i class="icon-arrow-left-circle"></i>
                </a>Showcase @if(!empty(Request::segment(3))) <span class="small text-muted"> / {{ Request::segment(3) }}</span> @endif
            </h4>
            <small class="text-muted">
                @yield('showcase_description')
            </small>
        </div>
        <div>
            @if(Route::current()->getName() == 'showcase.portfolio')
                <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                    <i class="icon-note mr-2 d-none d-sm-inline-block"></i>New Portfolio
                </a>
            @endif

            @if(Route::current()->getName() == 'showcase.skill')
                <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                    <i class="icon-note mr-2 d-none d-sm-inline-block"></i>New Skill
                </a>
            @endif

            @if(Route::current()->getName() == 'showcase.achievement')
                <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                    <i class="icon-note mr-2 d-none d-sm-inline-block"></i>New Achievement
                </a>
            @endif
        </div>
    </div>
    <ul class="nav nav-tabs nav-justified mb-4 d-none d-lg-flex">
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

    <div class="section-content{{ Route::current()->getName() == 'showcase.profile' ? ' pt-0 pt-sm-3' : '' }}">
        @yield('showcase_content')
    </div>
@endsection