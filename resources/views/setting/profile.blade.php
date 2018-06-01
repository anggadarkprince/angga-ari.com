@extends('setting._layout')

@section('title', 'Setting Profile')

@section('setting_description', 'Account and profile preferences')

@section('setting_content')

    @include('errors._general')
    @include('errors._message')

    <form action="{{ route('setting.profile.update') }}" novalidate method="post" id="form-with-avatar">

        @csrf
        @method('put')

        <fieldset>

            <legend>Info Account</legend>

            <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label">Full Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name"
                           name="name" value="{{ old('name', $user->name) }}"
                           placeholder="Your name">
                    @if($errors->first('name'))
                        <span class="invalid-feedback">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="username" class="col-md-3 col-form-label">Username</label>
                <div class="col-md-9">
                    <input type="text" class="form-control{{ $errors->first('username') ? ' is-invalid' : '' }}"
                           id="username" name="username" placeholder="Unique username"
                           value="{{ old('username', $user->username) }}" required maxlength="50">
                    @if($errors->first('username'))
                        <span class="invalid-feedback">{{ $errors->first('username') }}</span>
                    @endif
                    <small class="form-text text-muted">
                        Your unique ID only allow alpha-numeric and dash or dot characters.
                    </small>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-3 col-form-label">Email</label>
                <div class="col-md-9">
                    <input type="email" class="form-control{{ $errors->first('email') ? ' is-invalid' : '' }}"
                           id="email" name="email" placeholder="Email address"
                           value="{{ old('email', $user->email) }}" required maxlength="50">
                    @if($errors->first('email'))
                        <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>

        </fieldset>

        <fieldset>

            <legend>Identity Detail</legend>

            <div class="form-group row">
                <label for="birthday" class="col-md-3 col-form-label">Day of Birth</label>
                <div class="col-md-9">
                    <div class="row">

                        <div class="col">
                            <select class="selectize select-year{{ $errors->first('birthday_year') ? ' is-invalid' : '' }}"
                                    name="birthday_year" id="birthday_year" placeholder="Year" required>
                                @for($year = 1975; $year <= date('Y'); $year++)
                                    <option value="{{ $year }}"{{ old('birthday_year', \Carbon\Carbon::parse($user->birthday)->format('Y')) == $year ? ' selected' : '' }}>
                                        {{ $year }}
                                    </option>
                                @endfor
                            </select>
                            @if($errors->first('birthday_year'))
                                <span class="invalid-feedback">{{ $errors->first('birthday_year') }}</span>
                            @endif
                        </div>

                        <div class="col">
                            <select class="selectize select-month{{ $errors->first('birthday_month') ? ' is-invalid' : '' }}"
                                    name="birthday_month" id="birthday_month" placeholder="Month" required>
                                @foreach(\App\Contracts\Calendar::MONTH_NAMES as $numMonth => $monthName)
                                    <option value="{{ $numMonth }}"{{ old('birthday_month', format_date($user->birthday, 'm')) == $numMonth ? ' selected' : '' }}>
                                        {{ __($monthName) }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->first('birthday_month'))
                                <span class="invalid-feedback">{{ $errors->first('birthday_month') }}</span>
                            @endif
                        </div>

                        <div class="col">
                            <select class="selectize select-date{{ $errors->first('birthday_date') ? ' is-invalid' : '' }}"
                                    name="birthday_date" id="birthday_date" placeholder="Date" required>
                                @for($i = 1; $i <= 31; $i++)
                                    <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}"{{ old('birthday_date', \Carbon\Carbon::parse($user->birthday)->format('d')) == str_pad($i, 2, '0', STR_PAD_LEFT) ? ' selected' : '' }}>
                                        {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                                    </option>
                                @endfor
                            </select>
                            @if($errors->first('birthday_date'))
                                <span class="invalid-feedback">{{ $errors->first('birthday_date') }}</span>
                            @endif
                        </div>

                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="gender_male" class="col-md-3 col-form-label pt-0">Gender</label>
                <div class="col-md-9">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="gender" id="gender_male"
                               value="male"{{ (old('gender', $user->gender) == 'male' OR empty($user->gender)) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="gender_male">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="gender" id="gender_female"
                               value="female"{{ old('gender', $user->gender) == 'female' ? ' checked' : '' }}>
                        <label class="custom-control-label" for="gender_female">Female</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="about" class="col-md-3 col-form-label">Avatar</label>
                <div class="col-md-9">
                    <div class="upload-avatar-wrapper rounded" style="display:none; max-width: 230px">
                        <div id="upload-avatar-content"></div>
                    </div>
                    <div class="custom-file">
                        <input type="hidden" name="avatar_base64" id="avatar-base64">
                        <input type="file" class="custom-file-input" id="avatar" name="avatar" accept="image/*">
                        <label class="custom-file-label" for="avatar">Click to change avatar</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="about" class="col-md-3 col-form-label">About</label>
                <div class="col-md-9">
                    <textarea class="form-control{{ $errors->first('about') ? ' is-invalid' : '' }}" id="about"
                              name="about" placeholder="Tell about yourself" rows="3"
                              maxlength="500">{{ old('about', $user->about) }}</textarea>
                    @if($errors->first('about'))
                        <span class="invalid-feedback">{{ $errors->first('about') }}</span>
                    @endif
                    <small class="form-text text-muted">
                        Everyone has story, tell yours begin with fancy tagline or something like your favourite, jobs
                        or bit a humors.
                    </small>
                </div>
            </div>

        </fieldset>

        <div class="form-group row">
            <div class="col-md-9 offset-md-3">
                <button class="btn btn-primary btn-wide" type="submit">Update Profile</button>
            </div>
        </div>
    </form>
@endsection