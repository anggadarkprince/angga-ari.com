@extends('setting._layout')

@section('title', 'Setting Profile')

@section('setting_description', 'Account and profile preferences')

@section('setting_content')
    <form enctype="multipart/form-data">
        <fieldset>
            <legend>Info Account</legend>
            <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label">Full Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="name" placeholder="Your name">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-md-3 col-form-label">Username</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="username" placeholder="Unique username">
                    <small class="form-text text-muted">
                        Your unique ID only allow alpha-numeric and dash or dot characters.
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-3 col-form-label">Email</label>
                <div class="col-md-9">
                    <input type="email" class="form-control" id="email" placeholder="Email address">
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Identity Detail</legend>
            <div class="form-group row">
                <label for="birthday" class="col-md-3 col-form-label">Day of Birth</label>
                <div class="col-md-9">
                    <input type="date" class="form-control" id="birthday" placeholder="Your birthday">
                </div>
            </div>
            <div class="form-group row">
                <label for="location" class="col-md-3 col-form-label pt-0">Gender</label>
                <div class="col-md-9">
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" name="gender" id="gender_male" value="male" checked>
                        <label class="custom-control-label" for="gender_male">Male</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" name="gender" id="gender_female" value="female">
                        <label class="custom-control-label" for="gender_female">Female</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="about" class="col-md-3 col-form-label">Avatar</label>
                <div class="col-md-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="avatar">
                        <label class="custom-file-label" for="avatar">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="about" class="col-md-3 col-form-label">About</label>
                <div class="col-md-9">
                    <textarea class="form-control" id="about" placeholder="Tell about yourself" rows="3"></textarea>
                    <small class="form-text text-muted">
                        Everyone has story, tell yours begin with fancy tagline or something like your favourite, jobs or bit a humors.
                    </small>
                </div>
            </div>
        </fieldset>

        <div class="form-group row">
            <div class="col-md-9 offset-md-3">
                <button class="btn btn-primary btn-wide">Update Profile</button>
            </div>
        </div>
    </form>
@endsection