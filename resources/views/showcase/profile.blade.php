@extends('showcase._layout')

@section('title', 'Showcase')

@section('showcase_description', 'Your professional profile')

@section('showcase_content')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <form enctype="multipart/form-data">
                <fieldset>
                    <legend>Basic Info</legend>
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label">Full Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="name" placeholder="Your name" value="Angga Ari Wijaya">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact" class="col-md-3 col-form-label">Business Contact</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="contact" placeholder="Your phone number" value="+6285655479868">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label">Main Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="email" placeholder="Email address" value="angga.aw92@gmail.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="website" class="col-md-3 col-form-label">Website</label>
                        <div class="col-md-9">
                            <input type="url" class="form-control" id="website" placeholder="Your personal web or blog" value="angga-ari.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthday" class="col-md-3 col-form-label">Day of Birth</label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" id="birthday" placeholder="Your birthday" value="1992-05-26">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="location" class="col-md-3 col-form-label">Address</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="location" placeholder="Your location address" value="Gresik, Indonesia">
                            <small class="form-text text-muted">
                                Put your city and country will be better, this field connect with google map service, some keyword may be inaccurate that you expect.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="about" class="col-md-3 col-form-label">Personal Profile</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="about" placeholder="Tell about yourself" rows="5">Hey, I am Angga Ari Wijaya a boy with quarter century of age, just call me Angga, I'm a rookie software engineer, I used to live in Gresik - East Java, Indonesia. Half workaholic, sometimes playing games, less sleep, build something like application or software. I practice everyday by the way and I think I'm good at it as well.

Welcome to my personal website, here you can found my latest works, achievement, history, papers and blog posts. Presently I am working at Transcon Indonesia a logistic company in Surabaya, Indonesia since 2017.</textarea>
                            <small class="form-text text-muted">
                                Everyone has story, tell yours begin with fancy tagline or something like your favourite, jobs or bit a humors.
                            </small>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                        <small class="form-text text-muted mb-4">
                            <i class="icon-info mr-2"></i>
                            This profile related with account information in <a href="{{ route('setting.profile') }}">setting</a> page.
                        </small>
                        <button class="btn btn-primary btn-sm btn-wide">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection