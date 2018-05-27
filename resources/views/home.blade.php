@extends('layouts.dashboard')

@section('title', Auth::user()->name)

@section('content')
    @include('errors._message')

    <div class="row card-app-wrapper">
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature" style="background: url('{{ Storage::url('layouts/app/showcase.png') }}') no-repeat center center / cover;"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('showcase.portfolio') }}" class="link-pink">Showcase</a></h5>
                    <p class="card-text">Professional profile</p>
                    <a href="{{ route('showcase.portfolio') }}" class="btn-arrow"><i class="icon-arrow-right-circle bg-pink"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature" style="background: url('{{ Storage::url('layouts/app/blog.png') }}') no-repeat center center / cover;"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('blog.post') }}" class="link-aqua">Blog</a></h5>
                    <p class="card-text">Personal blog post</p>
                    <a href="{{ route('blog.post') }}" class="btn-arrow"><i class="icon-arrow-right-circle bg-aqua"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature" style="background: url('{{ Storage::url('layouts/app/drive.png') }}') no-repeat center center / cover;"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('drive.browser') }}" class="link-lime">Drive</a></h5>
                    <p class="card-text">Service cloud storage</p>
                    <a href="{{ route('drive.browser') }}" class="btn-arrow"><i class="icon-arrow-right-circle bg-lime"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature" style="background: url('{{ Storage::url('layouts/app/note.png') }}') no-repeat center center / cover;"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('journal.notebook') }}" class="link-violet">Journal</a></h5>
                    <p class="card-text">Task and todo list</p>
                    <a href="{{ route('journal.notebook') }}" class="btn-arrow"><i class="icon-arrow-right-circle bg-violet"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature" style="background: url('{{ Storage::url('layouts/app/finance.png') }}') no-repeat center center / cover;"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('finance.transaction') }}" class="link-tosca">Finance</a></h5>
                    <p class="card-text">A transaction tracker</p>
                    <a href="{{ route('finance.transaction') }}" class="btn-arrow"><i class="icon-arrow-right-circle bg-tosca"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app">
                <div class="card-feature" style="background: url('{{ Storage::url('layouts/app/vault.png') }}') no-repeat center center / cover;"></div>
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('vault.password') }}" class="link-gold">Password Vault</a></h5>
                    <p class="card-text">Secure key reminder</p>
                    <a href="{{ route('vault.password') }}" class="btn-arrow"><i class="icon-arrow-right-circle bg-gold"></i></a>
                </div>
            </div>
        </div>
    </div>
    <hr class="mb-5">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app card-coming-soon text-center mr-0">
                <div class="card-feature" style="background: url('{{ Storage::url('layouts/app/alarm.png') }}') no-repeat center center / cover;"></div>
                <div class="card-body">
                    <h5 class="card-title text-muted">Coming Soon</h5>
                    <p class="card-text text-primary pr-0">Alarm</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app card-coming-soon text-center mr-0">
                <div class="card-feature" style="background: url('{{ Storage::url('layouts/app/diet.png') }}') no-repeat center center / cover;"></div>
                <div class="card-body">
                    <h5 class="card-title text-muted">Coming Soon</h5>
                    <p class="card-text text-primary pr-0">Diet</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card box-shadow card-app card-coming-soon text-center mr-0">
                <div class="card-feature" style="background: url('{{ Storage::url('layouts/app/news.png') }}') no-repeat center center / cover;"></div>
                <div class="card-body">
                    <h5 class="card-title text-muted">Coming Soon</h5>
                    <p class="card-text text-primary pr-0">News Feeder</p>
                </div>
            </div>
        </div>
    </div>
@endsection
