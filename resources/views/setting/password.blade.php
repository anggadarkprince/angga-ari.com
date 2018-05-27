@extends('setting._layout')

@section('title', 'Setting Password')

@section('setting_description', 'Secure your credentials')

@section('setting_content')

    @include('errors._general')
    @include('errors._message')

    <form action="{{ route('setting.password.update') }}" method="post" novalidate>

        @csrf
        @method('put')

        <fieldset>

            <legend>Secure Password</legend>

            <div class="form-group row">
                <label for="password" class="col-md-3 col-form-label">Current Password</label>
                <div class="col-md-9">
                    @if($user->password)
                        <input type="password" class="form-control{{ $errors->first('password') ? ' is-invalid' : '' }}"
                               id="password" name="password" placeholder="Your password" required>
                        @if($errors->first('password'))
                            <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                        @endif
                        <small class="form-text text-muted">
                            You need confirm your current password to make sure your action is real you.
                        </small>
                    @else
                        <div class="alert alert-warning mb-1">
                            <h6 class="mb-1">Likely you're logged in via Social Account</h6>
                            <p class="mb-0">
                                You are allowed not set account password, but if you intend to login with
                                email or username please put new password.
                            </p>
                        </div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="new_password" class="col-md-3 col-form-label">New Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control{{ $errors->first('new_password') ? ' is-invalid' : '' }}"
                           id="new_password" name="new_password" placeholder="New secure password" required minlength="5" maxlength="50">
                    @if($errors->first('new_password'))
                        <span class="invalid-feedback">{{ $errors->first('new_password') }}</span>
                    @endif
                    <small class="form-text text-muted">
                        Your password must be 6-20 characters long, contain letters and numbers, and must not contain
                        spaces, special characters, or emoji.
                    </small>
                </div>
            </div>

            <div class="form-group row">
                <label for="new_password_confirmation" class="col-md-3 col-form-label">Confirm Password</label>
                <div class="col-md-9">
                    <input type="password"
                           class="form-control{{ $errors->first('new_password_confirmation') ? ' is-invalid' : '' }}"
                           id="new_password_confirmation" name="new_password_confirmation"
                           placeholder="Retype your new password" required minlength="5" maxlength="50">
                    @if($errors->first('new_password_confirmation'))
                        <span class="invalid-feedback">{{ $errors->first('new_password_confirmation') }}</span>
                    @endif
                </div>
            </div>
        </fieldset>

        <div class="form-group row">
            <div class="col-md-9 offset-md-3">
                <button class="btn btn-primary btn-wide">Update Password</button>
            </div>
        </div>
    </form>
@endsection