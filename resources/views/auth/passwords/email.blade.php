@extends('layouts.app')

@section('title', 'Request Reset Link')

@section('main')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-sm-8 col-lg-5 col-xl-4">

            @if (session('status'))
                <div class="alert alert-success text-left">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card box-shadow">

                <div class="card-body text-center">
                    <h4 class="mb-0">{{ __('Reset Password') }}</h4>
                    <small class="text-muted">
                        {{ __('Request reset link for your account') }}
                    </small>

                    <hr class="mb-4">

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Put registered email" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary btn-block mb-2">
                                {{ __('Send Me Reset Link') }}
                            </button>

                            <a href="{{ route('login') }}">
                                <small>{{ __('I Remember my password') }}</small>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
