@extends('layouts.app')

@section('title', 'Login Page')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-7">
                @if (session('resent'))
                    <div class="alert alert-success">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                <div class="card box-shadow mb-4">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>
                    <div class="card-body">
                        <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                        <p>
                            {{ __('If you did not receive the email') }},
                            <a class="cursor-pointer" onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">
                                {{ __('click here to request another') }}
                            </a>
                        </p>

                        <form id="resend-verification-form" method="POST" action="{{ route('verification.resend') }}" class="hidden">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
