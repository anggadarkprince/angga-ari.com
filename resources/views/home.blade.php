@extends('layouts.dashboard')

@section('title', Auth::user()->name)

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="row card-app-wrapper">
        <div class="col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('showcase.portfolio') }}" class="link-natural">Showcase</a></h5>
                    <p class="card-text">Your professional profile</p>
                    <a href="{{ route('showcase.portfolio') }}"><i class="icon-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('blog.post') }}" class="link-natural">Blog</a></h5>
                    <p class="card-text">Personal journal</p>
                    <a href="{{ route('blog.post') }}"><i class="icon-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="#" class="link-natural">Drive</a></h5>
                    <p class="card-text">Service cloud storage</p>
                    <a href="#"><i class="icon-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="#" class="link-natural">Note</a></h5>
                    <p class="card-text">Task and note list</p>
                    <a href="#"><i class="icon-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="#" class="link-natural">Finance</a></h5>
                    <p class="card-text">A transaction tracker</p>
                    <a href="#"><i class="icon-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="#" class="link-natural">Password Vault</a></h5>
                    <p class="card-text">Secure password reminder</p>
                    <a href="#"><i class="icon-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card box-shadow card-app card-coming-soon">
                <div class="card-body">
                    <h5 class="card-title">Coming Soon</h5>
                    <p class="card-text">Alarm</p>
                    <i class="icon-arrow-right-circle"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card box-shadow card-app card-coming-soon">
                <div class="card-body">
                    <h5 class="card-title">Coming Soon</h5>
                    <p class="card-text">Diet</p>
                    <i class="icon-arrow-right-circle"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card box-shadow card-app card-coming-soon">
                <div class="card-body">
                    <h5 class="card-title">Coming Soon</h5>
                    <p class="card-text">Cooking</p>
                    <i class="icon-arrow-right-circle"></i>
                </div>
            </div>
        </div>
    </div>
@endsection
