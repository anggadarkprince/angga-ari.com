@extends('setting._layout')

@section('title', 'Setting Notification')

@section('setting_description', 'Subscribe the news and activity log')

@section('setting_content')

    @include('errors._general')
    @include('errors._message')

    <form action="{{ route('setting.notification.update') }}" method="post" novalidate>

        @csrf
        @method('put')

        <fieldset>

            <legend>Notification</legend>

            <div class="form-group row">
                <label class="col-md-3 col-form-label">Email</label>
                <div class="col-md-9 pt-2">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="notification_update"
                               id="notification_update"
                               value="1"{{ old('notification_update', $update) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="notification_update">News and updates</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="notification_product"
                               id="notification_product"
                               value="1"{{ old('notification_product', $product) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="notification_product">Product and interesting
                            offer</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="notification_login"
                               id="notification_login"
                               value="1"{{ old('notification_login', $login) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="notification_login">Sign in device notification</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="new_password" class="col-md-3 col-form-label">Mobile</label>
                <div class="col-md-9 pt-2">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="notification_mobile"
                               id="notification_mobile"
                               value="1"{{ old('notification_mobile', $mobile) ? ' checked' : '' }}>
                        <label class="custom-control-label" for="notification_mobile">Send me notification
                            message</label>
                    </div>
                </div>
            </div>
        </fieldset>

        <div class="form-group row">
            <div class="col-md-9 offset-md-3">
                <button class="btn btn-primary btn-wide">Update Notification</button>
            </div>
        </div>
    </form>
@endsection