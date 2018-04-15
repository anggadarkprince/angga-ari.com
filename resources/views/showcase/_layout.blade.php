@extends('layouts.dashboard')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">
            <a href="{{ route('home') }}" class="link-natural">
                <i class="icon-arrow-left-circle"></i>
            </a>Showcase
            <a href="#" class="float-right btn btn-sm btn-primary">
                View Showcase <i class="fa fa-arrow-right ml-2"></i>
            </a>
        </h4>
        <small class="text-muted">
            @yield('showcase_description')
        </small>
    </div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link{{ Route::current()->getName() == 'showcase.profile' ? ' active' : '' }}" href="{{ route('showcase.profile') }}">
                <i class="icon-user"></i>Profile
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{ Route::current()->getName() == 'showcase.school' ? ' active' : '' }}" href="{{ route('showcase.school') }}">
                <i class="icon-graduation"></i>School
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{ Route::current()->getName() == 'showcase.work' ? ' active' : '' }}" href="{{ route('showcase.work') }}">
                <i class="icon-briefcase"></i>Work
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{ Route::current()->getName() == 'showcase.award' ? ' active' : '' }}" href="{{ route('showcase.award') }}">
                <i class="icon-trophy"></i>Award
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{ Route::current()->getName() == 'showcase.skill' ? ' active' : '' }}" href="{{ route('showcase.skill') }}">
                <i class="icon-wrench"></i>Skill
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{ Route::current()->getName() == 'showcase.portfolio' ? ' active' : '' }}" href="{{ route('showcase.portfolio') }}">
                <i class="icon-notebook"></i>Portfolio
            </a>
        </li>
    </ul>

    <div class="section-content">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @yield('showcase_content')
            </div>
        </div>
    </div>
@endsection