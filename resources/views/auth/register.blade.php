@extends('layouts.app')

@section('title', 'Register New Account')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-lg-5 col-xl-4">
            <div class="card box-shadow">
                <div class="card-body text-center">
                    <h4 class="mb-0">{{ __('Register') }}</h4>
                    <small class="text-muted">{{ __('Create new account') }}</small>

                    <hr class="mb-4">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required placeholder="Your full name" maxlength="30" autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback text-left">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email address" maxlength="50" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback text-left">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Pick your secure password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback text-left">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Retype your password" required>
                        </div>

                        <div class="form-group mb-3 text-left">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="agree" name="agree"{{ old('agree', true) ? ' checked' : '' }}>
                                <label class="custom-control-label" for="agree">{{ __('I agree with terms and conditions') }}</label>
                            </div>
                        </div>

                        <div class="form-group text-center mb-2">
                            <button type="submit" class="btn btn-primary btn-block mb-2">
                                {{ __('Register') }}
                            </button>
                            <a href="{{ route('login') }}">
                                <small>I already have an account</small>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
