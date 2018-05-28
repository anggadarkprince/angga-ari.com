@extends('layouts.dashboard')

@section('title', 'Showcase - Profile')

@section('content')
    <div class="section-title d-none d-sm-block">
        <h4 class="mb-0">Profile Info</h4>
        <small class="text-muted">Detail information about you</small>
    </div>
    <div class="row justify-content-center">
        <div class="col-xl-10">

            @include('errors._general')
            @include('errors._message')

            <form action="{{ route('showcase.profile.update') }}" method="post">

                @csrf
                @method('put')

                <fieldset>
                    <legend>Basic Info</legend>
                    <div class="form-group row">
                        <label for="contact" class="col-md-3 col-form-label">Business Contact</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control{{ $errors->first('contact') ? ' is-invalid' : '' }}"
                                   id="contact" name="contact"
                                   placeholder="Your phone number" value="{{ old('contact', $contact) }}">
                            @if($errors->first('contact'))
                                <span class="invalid-feedback">{{ $errors->first('contact') }}</span>
                            @endif
                            <small class="form-text text-muted">
                                May different with your account contact setting.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label">Business Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control{{ $errors->first('email') ? ' is-invalid' : '' }}"
                                   id="email" name="email" placeholder="Email address"
                                   value="{{ old('email', $email) }}">
                            @if($errors->first('email'))
                                <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="website" class="col-md-3 col-form-label">Website</label>
                        <div class="col-md-9">
                            <input type="url" class="form-control{{ $errors->first('website') ? ' is-invalid' : '' }}"
                                   id="website" name="website"
                                   placeholder="Your personal web or blog" value="{{ old('website', $website) }}">
                            @if($errors->first('website'))
                                <span class="invalid-feedback">{{ $errors->first('website') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tagline" class="col-md-3 col-form-label">Tagline</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control{{ $errors->first('tagline') ? ' is-invalid' : '' }}"
                                   id="tagline" name="tagline"
                                   placeholder="Main heading profile" value="{{ old('tagline', $tagline) }}">
                            @if($errors->first('tagline'))
                                <span class="invalid-feedback">{{ $errors->first('tagline') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subtagline" class="col-md-3 col-form-label">Sub Tagline</label>
                        <div class="col-md-9">
                            <textarea class="form-control{{ $errors->first('subtagline') ? ' is-invalid' : '' }}"
                                      id="subtagline" name="subtagline" placeholder="Assertive sub heading"
                                      rows="3">{{ old('subtagline', $subtagline) }}</textarea>
                            @if($errors->first('subtagline'))
                                <span class="invalid-feedback">{{ $errors->first('subtagline') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="identity" class="col-md-3 col-form-label">Identity Detail</label>
                        <div class="col-md-9">
                            <textarea class="form-control{{ $errors->first('identity') ? ' is-invalid' : '' }}"
                                      id="identity" name="identity" placeholder="Tell about your personal identity"
                                      rows="8">{{ old('identity', $identity) }}</textarea>
                            @if($errors->first('identity'))
                                <span class="invalid-feedback">{{ $errors->first('identity') }}</span>
                            @endif
                            <small class="form-text text-muted">
                                Everyone has story, tell yours begin with fancy tagline or something like your
                                favorite, jobs or bit a humors.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="profile" class="col-md-3 col-form-label">Professional Profile</label>
                        <div class="col-md-9">
                            <textarea class="form-control{{ $errors->first('profile') ? ' is-invalid' : '' }}"
                                      id="profile" name="profile" placeholder="Write your professional profile"
                                      rows="10">{{ old('profile', $profile) }}</textarea>
                            @if($errors->first('profile'))
                                <span class="invalid-feedback">{{ $errors->first('profile') }}</span>
                            @endif
                            <small class="form-text text-muted">
                                Tell your interest about your work or your passion in good way.
                            </small>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                        <small class="form-text text-muted mb-4">
                            <i class="icon-info mr-2"></i>
                            This profile related with account information in
                            <a href="{{ route('setting.profile') }}">setting</a> page.
                        </small>
                        <button class="btn btn-primary btn-wide">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection