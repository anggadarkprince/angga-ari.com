@extends('setting._layout')

@section('title', 'Setting Notification')

@section('setting_description', 'Subscribe the news and activity log')

@section('setting_content')
    <form enctype="multipart/form-data">
        <fieldset>
            <legend>Notification</legend>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Email</label>
                <div class="col-md-9">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="news_offer" id="news_offer" value="1" checked>
                        <label class="custom-control-label" for="news_offer">News and updates</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="product_offer" id="product_offer" value="1" checked>
                        <label class="custom-control-label" for="product_offer">Product and interesting offer</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="login_notification" id="login_notification" value="1" checked>
                        <label class="custom-control-label" for="login_notification">Sign in device notification</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="new_password" class="col-md-3 col-form-label">Mobile</label>
                <div class="col-md-9">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="mobile_notification" id="mobile_notification" value="1" checked>
                        <label class="custom-control-label" for="mobile_notification">Send me notification message</label>
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