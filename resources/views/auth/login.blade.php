@extends('layouts.app')

@section('title', 'Login Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-lg-5 col-xl-4">
            <div class="card box-shadow">
                <div class="card-body text-center">
                    <h4 class="mb-0">{{ __('Sign In') }}</h4>
                    <small class="text-muted">{{ __('Login to your dashboard') }}</small>

                    <hr class="mb-4">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Username or email" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-2 text-left row">
                            <div class="col-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <small>{{ __('Remember Me') }}</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('register') }}">
                                    <small>{{ __('Register here') }}</small>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
