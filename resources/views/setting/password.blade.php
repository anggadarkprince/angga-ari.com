@extends('setting._layout')

@section('title', 'Setting Password')

@section('setting_description', 'Secure your credentials')

@section('setting_content')
    <form enctype="multipart/form-data">
        <fieldset>
            <legend>Secure Password</legend>
            <div class="form-group row">
                <label for="password" class="col-md-3 col-form-label">Current Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control" id="password" placeholder="Your password">
                    <small class="form-text text-muted">
                        You need confirm your current password to make sure your action is real you.
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label for="new_password" class="col-md-3 col-form-label">New Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control" id="new_password" placeholder="New secure password">
                    <small class="form-text text-muted">
                        Your password must be 6-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label for="password_confirmation" class="col-md-3 col-form-label">Confirm Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control" id="password_confirmation" placeholder="Retype your new password">
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