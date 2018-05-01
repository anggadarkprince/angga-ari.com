@extends('layouts.dashboard')

@section('title', Auth::user()->name)

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="row card-app-wrapper">
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('showcase.portfolio') }}" class="link-natural">Showcase</a></h5>
                    <p class="card-text">Professional profile</p>
                    <a href="{{ route('showcase.portfolio') }}" class="btn-arrow"><i class="icon-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('blog.post') }}" class="link-natural">Blog</a></h5>
                    <p class="card-text">Personal journal</p>
                    <a href="{{ route('blog.post') }}" class="btn-arrow"><i class="icon-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('drive.browser') }}" class="link-natural">Drive</a></h5>
                    <p class="card-text">Service cloud storage</p>
                    <a href="{{ route('drive.browser') }}" class="btn-arrow"><i class="icon-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('note.notebook') }}" class="link-natural">Note</a></h5>
                    <p class="card-text">Task and todo list</p>
                    <a href="{{ route('note.notebook') }}" class="btn-arrow"><i class="icon-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('finance.transaction') }}" class="link-natural">Finance</a></h5>
                    <p class="card-text">A transaction tracker</p>
                    <a href="{{ route('finance.transaction') }}" class="btn-arrow"><i class="icon-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('vault.password') }}" class="link-natural">Password Vault</a></h5>
                    <p class="card-text">Secure key reminder</p>
                    <a href="{{ route('vault.password') }}" class="btn-arrow"><i class="icon-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
    <hr class="mb-5">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app card-coming-soon text-center mr-0">
                <div class="card-feature"></div>
                <div class="card-body">
                    <h5 class="card-title text-muted">Coming Soon</h5>
                    <p class="card-text text-primary pr-0">Alarm</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app card-coming-soon text-center mr-0">
                <div class="card-feature"></div>
                <div class="card-body">
                    <h5 class="card-title text-muted">Coming Soon</h5>
                    <p class="card-text text-primary pr-0">Diet</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app card-coming-soon text-center mr-0">
                <div class="card-feature"></div>
                <div class="card-body">
                    <h5 class="card-title text-muted">Coming Soon</h5>
                    <p class="card-text text-primary pr-0">Cooking</p>
                </div>
            </div>
        </div>
    </div>
@endsection
