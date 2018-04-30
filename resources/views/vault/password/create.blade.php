@extends('vault._layout')

@section('title', 'Vault - Create New Password')

@section('vault_description', 'Store key or password to remain')

@section('vault_content')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <form enctype="multipart/form-data">
                <fieldset>
                    <legend>Password Info</legend>
                    <div class="form-group row">
                        <label for="type" class="col-md-3 col-form-label">Key Type</label>
                        <div class="col-md-9">
                            <select class="custom-select" name="type">
                                <option value="password">Password</option>
                                <option value="token">Token / Key</option>
                                <option value="cc">Credit Card</option>
                                <option value="banking">Banking</option>
                                <option value="misc">Misc</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 col-form-label">Key Title</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Key or token title">
                            <small class="form-text text-muted">
                                Eg: Facebook, Twitter, Avenue Bank, My Credit Card Pin.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-md-3 col-form-label">Identifier</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="username" placeholder="Username or key identifier">
                            <small class="form-text text-muted">
                                Unique ID pair credential with the password (leave it blank if you want save the key only).
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-3 col-form-label">Password 1</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                            <small class="form-text text-muted">
                                Your password regarding with type and platform you are using.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_2" class="col-md-3 col-form-label">Password 2</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="password_2" name="password_2" placeholder="Another key pair if necessary."><small class="form-text text-muted">
                                Eg: token as Password 1 and secret as Password 2 (default use password 1).
                            </small>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Security Detail</legend>
                    <div class="form-group row">
                        <label for="encryption" class="col-md-3 col-form-label">Encryption Algorithm</label>
                        <div class="col-md-9">
                            <select class="custom-select" name="encryption" id="encryption">
                                <option value="sha512">SHA 512</option>
                                <option value="sha256">SHA 256</option>
                                <option value="aes128">AES 128</option>
                                <option value="aes256">AES 256</option>
                                <option value="des">DES</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="secret" class="col-md-3 col-form-label">Secret Key</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="secret" name="secret" placeholder="Type secret key to decrypt the password" rows="2"></textarea>
                            <small class="form-text text-muted">
                                Your secret key that use to decrypt your password, if it blank will be use your email + your name, we suggest use same secret key in all Vault, easy to remember to unlocking the password.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="entropy_more" class="col-md-3 col-form-label pt-0">Entropy</label>
                        <div class="col-md-9">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="entropy" id="entropy_more" value="more" checked>
                                <label class="custom-control-label" for="entropy_more">More (Strong Random)</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="entropy" id="entropy_less" value="less">
                                <label class="custom-control-label" for="entropy_less">Less (Normal)</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="expired" class="col-md-3 col-form-label">Expired In</label>
                        <div class="col-md-9">
                            <select class="custom-select" name="expired" id="expired">
                                <option value="7">7 Days</option>
                                <option value="30">1 Month (30 days)</option>
                                <option value="90">3 Months (90 days)</option>
                                <option value="365">1 Year (365 days)</option>
                                <option value="never">Never Expired (Not Recommended)</option>
                            </select>
                            <small class="form-text text-muted">
                                Your vault automatically removed if expiration date is due.
                            </small>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                        <button class="btn btn-primary btn-wide">Store to Password Vault</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection