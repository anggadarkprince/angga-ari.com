@extends('layouts.dashboard')

@section('title', $user->name)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 sidebar">
            <div class="sidebar-header">
                <img class="user-avatar" src="{{ Storage::url('avatars/' . ($user->avatar ? $user->avatar : 'noavatar.jpg')) }}" alt="{{ $user->name }}">

                <h3 class="user-name">{{ $user->name }}</h3>
                <p class="text-muted"><small>{{ '@'.$user->username }}</small></p>

                <a href="#" class="btn btn-sm btn-outline-primary">Edit Profile</a>
                <a href="#" class="btn btn-sm btn-primary"><i class="icon-bell"></i></a>
            </div>

            <ul class="sidebar-menu">
                <li class="active">
                    <a href="#"><i class="icon-layers"></i>Apps</a>
                    <ul>
                        <li><a href="#">Showcase</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="icon-present"></i>Discover</a></li>
                <li><a href="#"><i class="icon-graph"></i>Insight</a></li>
            </ul>

            <ul class="sidebar-menu">
                <li><a href="#"><i class="icon-energy"></i>Go Premium</a></li>
                <li><a href="#"><i class="icon-equalizer"></i>Settings</a></li>
                <li><a href="#"><i class="icon-question"></i>Help</a></li></ul>
        </div>
        <div class="col-md-9">
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
                            <h5 class="card-title"><a href="#" class="link-natural">Showcase</a></h5>
                            <p class="card-text">Your professional profile</p>
                            <a href="#"><i class="icon-arrow-right-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box-shadow card-app">
                        <div class="card-feature"></div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#" class="link-natural">Blog</a></h5>
                            <p class="card-text">Personal journal</p>
                            <a href="#"><i class="icon-arrow-right-circle"></i></a>
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
        </div>
    </div>
</div>
@endsection
