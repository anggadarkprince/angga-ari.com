@extends('setting._layout')

@section('title', 'Setting Contact')

@section('setting_description', 'Contact and location info')

@section('setting_content')

    @include('errors._general')
    @include('errors._message')

    <form action="{{ route('setting.contact.update') }}" method="post" novalidate>

        @csrf
        @method('put')

        <fieldset>

            <legend>Socials</legend>

            <div class="form-group row">
                <label for="facebook" class="col-2 col-sm-3 col-form-label">
                    <img src="{{ Storage::url('layouts/social/facebook.svg') }}" class="mr-2" style="width: 35px"
                         alt="Facebook">
                    <span class="d-none d-md-inline-block">Facebook</span>
                </label>
                @if($facebook)
                    <div class="col-10 col-sm-9">
                        <div class="row">
                            <div class="col-sm-8 d-flex justify-content-start">
                                <img src="{{ $facebook->getAvatar() }}" alt="Avatar" style="width: 50px"
                                     class="mr-3 rounded-circle">
                                <div>
                                    <input type="text" readonly class="form-control-plaintext pb-0 pt-0" id="facebook"
                                           value="{{ $facebook->getName() }}">
                                    <a href="https://facebook.com/{{ $facebook->getId() }}" target="_blank">
                                        <small class="form-text mt-0">{{ $facebook->getName() }}</small>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 d-flex justify-content-sm-end">
                                <a href="{{ route('setting.contact.unbind', ['provider' => 'facebook']) }}"
                                   class="btn btn-sm btn-danger align-self-center mt-3 mt-sm-0">
                                    Disconnect
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-9 d-flex">
                        <a href="{{ route('setting.contact.bind', ['provider' => 'facebook']) }}?bind=true"
                           class="btn btn-sm btn-secondary align-self-center">Connect</a>
                    </div>
                @endif
            </div>

            <div class="form-group row">
                <label for="twitter" class="col-2 col-sm-3 col-form-label">
                    <img src="{{ Storage::url('layouts/social/twitter.svg') }}" class="mr-2" style="width: 35px"
                         alt="Twitter">
                    <span class="d-none d-md-inline-block">Twitter</span>
                </label>
                @if($twitter)
                    <div class="col-10 col-sm-9">
                        <div class="row">
                            <div class="col-sm-8 d-flex justify-content-start">
                                <img src="{{ $twitter->getAvatar() }}" alt="Avatar" style="width: 50px"
                                     class="mr-3 rounded-circle">
                                <div><input type="text" readonly class="form-control-plaintext pb-0 pt-0" id="twitter"
                                            value="{{ $twitter->getName() }}">
                                    <a href="https://twitter.com/{{ $twitter->getNickname() }}" target="_blank">
                                        <small class="form-text mt-0">{{ '@' . $twitter->getNickname() }}</small>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 d-flex justify-content-sm-end">
                                <a href="{{ route('setting.contact.unbind', ['provider' => 'twitter']) }}"
                                   class="btn btn-sm btn-danger align-self-center mt-3 mt-sm-0">
                                    Disconnect
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-9 d-flex">
                        <a href="{{ route('setting.contact.bind', ['provider' => 'twitter']) }}?bind=true"
                           class="btn btn-sm btn-secondary align-self-center">Connect</a>
                    </div>
                @endif
            </div>

            <div class="form-group row">
                <label for="google" class="col-2 col-sm-3 col-form-label">
                    <img src="{{ Storage::url('layouts/social/google-plus.svg') }}" class="mr-2" style="width: 35px"
                         alt="Google">
                    <span class="d-none d-md-inline-block">Google</span>
                </label>
                @if($google)
                    <div class="col-10 col-sm-9">
                        <div class="row">
                            <div class="col-sm-8 d-flex justify-content-start">
                                <img src="{{ $google->getAvatar() }}" alt="Avatar" style="width: 50px"
                                     class="mr-3 rounded-circle">
                                <div><input type="text" readonly class="form-control-plaintext pb-0 pt-0" id="google"
                                            value="{{ $google->getName() }}">
                                    <a href="https://plus.google.com/{{ $google->getNickname() }}" target="_blank">
                                        <small class="form-text mt-0">{{ '+' . $google->getNickname() }}</small>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 d-flex justify-content-sm-end">
                                <a href="{{ route('setting.contact.unbind', ['provider' => 'google']) }}"
                                   class="btn btn-sm btn-danger align-self-center mt-3 mt-sm-0">
                                    Disconnect
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-9 d-flex">
                        <a href="{{ route('setting.contact.bind', ['provider' => 'google']) }}?bind=true"
                           class="btn btn-sm btn-secondary align-self-center">Connect</a>
                    </div>
                @endif
            </div>

            <div class="form-group">
                <small class="form-text text-muted">
                    <i class="icon-info mr-2"></i>You can login with any connected social account.
                </small>
            </div>

        </fieldset>

        <fieldset>

            <legend>Get In Touch</legend>

            <div class="form-group row">
                <label for="contact" class="col-md-3 col-form-label">Contact</label>
                <div class="col-md-9">
                    <input type="text" class="form-control{{ $errors->first('contact') ? ' is-invalid' : '' }}"
                           id="contact" name="contact" value="{{ old('contact', $user->contact) }}"
                           placeholder="Your phone number" required maxlength="50">
                    @if($errors->first('contact'))
                        <span class="invalid-feedback">{{ $errors->first('contact') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="location" class="col-md-3 col-form-label">Location</label>
                <div class="col-md-9">
                    <input type="text" class="form-control{{ $errors->first('location') ? ' is-invalid' : '' }}"
                           id="location" name="location" value="{{ old('location', $user->location) }}"
                           placeholder="Your location address" required maxlength="100">
                    @if($errors->first('location'))
                        <span class="invalid-feedback">{{ $errors->first('location') }}</span>
                    @endif
                    <small class="form-text text-muted">
                        Put your city and country will be better, this field connect with google map service, some
                        keyword may be inaccurate that you expect.
                    </small>
                </div>
            </div>

            <div class="form-group row">
                <label for="website" class="col-md-3 col-form-label">Website</label>
                <div class="col-md-9">
                    <input type="url" class="form-control{{ $errors->first('website') ? ' is-invalid' : '' }}"
                           id="website" name="website" value="{{ old('website', $user->website) }}"
                           placeholder="Your website or blog">
                    @if($errors->first('website'))
                        <span class="invalid-feedback">{{ $errors->first('website') }}</span>
                    @endif
                </div>
            </div>

        </fieldset>

        <div class="form-group row">
            <div class="col-md-9 offset-md-3">
                <button class="btn btn-primary btn-wide">Update Contact</button>
            </div>
        </div>
    </form>

@endsection

@section('scripts')
    <script>
        function initAutocomplete() {
            // Create the search box and link it to the UI element.
            var input = document.getElementById('location');
            var searchBox = new google.maps.places.SearchBox(input);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcpgnVh2B3uA1ckiwEmZ9yS8PN1DIkc4k&libraries=places&callback=initAutocomplete"
            async defer></script>
@endsection