@extends('layouts.app')

@section('title', 'Login Page')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">

            @if (session('status'))
                <div class="alert alert-{{ session('type', 'success') }} text-left">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card box-shadow">
                <div class="card-body text-center">
                    <h4 class="mb-0">{{ __('Sign In') }}</h4>
                    <small class="text-muted">{{ __('Login to your dashboard') }}</small>

                    <ul class="list-inline mt-3">
                        <li class="list-inline-item">
                            <a href="{{ route('social.login', ['provider' => 'facebook']) }}">
                                <img src="{{ Storage::url('layouts/social/facebook.svg') }}" style="width: 40px" alt="Facebook">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ route('social.login', ['provider' => 'twitter']) }}">
                                <img src="{{ Storage::url('layouts/social/twitter.svg') }}" style="width: 40px" alt="Twitter">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ route('social.login', ['provider' => 'google']) }}">
                                <img src="{{ Storage::url('layouts/social/google-plus.svg') }}" style="width: 40px" alt="Google">
                            </a>
                        </li>
                    </ul>
                    <hr class="mb-4">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Username or email" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback text-left">
                                    <strong>
                                        {{ $errors->first('email') }}

                                        @if ($errors->has('resend'))
                                            <a href="{{ route('register.resend') }}" class="link-muted"
                                                       onclick="event.preventDefault(); document.getElementById('resend-form').submit();">
                                                {{ __('Click here to resend') }}
                                            </a>
                                        @endif
                                    </strong>
                                </span>

                            @endif
                        </div>

                        <div class="form-group">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback text-left">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-2 text-left row">
                            <div class="col-7">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <small>{{ __('Remember Me') }}</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-5 text-right">
                                <a href="{{ route('register') }}">
                                    <small>{{ __('Register Me') }}</small>
                                </a>
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary btn-block mb-2">
                                {{ __('Login') }}
                            </button>

                            <a href="{{ route('password.request') }}">
                                <small>{{ __('Forgot Your Password?') }}</small>
                            </a>
                        </div>
                    </form>

                    <form id="resend-form" action="{{ route('register.resend') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="email" value="{{ old('email') }}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
