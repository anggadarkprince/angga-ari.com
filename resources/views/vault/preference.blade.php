@extends('layouts.dashboard')

@section('title', 'Vault - Preference')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">Preference</h4>
        <small class="text-muted">Vault password setting</small>
    </div>
    <div class="row justify-content-center">
        <div class="col-xl-11">
            <form enctype="multipart/form-data">
                <fieldset>
                    <legend>Security Setting</legend>
                    <div class="form-group row">
                        <label for="password" class="col-md-3 col-form-label">Master Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                            <small class="form-text text-muted">
                                Your master password to unlock your vault.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="secret" class="col-md-3 col-form-label">Secret Key</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="secret" name="secret" placeholder="Type secret key to decrypt the password" rows="2"></textarea>
                            <small class="form-text text-muted">
                                Secret key is used to decrypt your password, please create long and complex key but remember-able and don't write it down to paper or any physical note.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="encryption" class="col-md-3 col-form-label">Default Encryption</label>
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
                        <label for="reveal_stenography" class="col-md-3 col-form-label">Reveal Password</label>
                        <div class="col-md-9">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="reveal" id="reveal_stenography" value="stenography" checked>
                                <label class="custom-control-label" for="gender_male">Stenography</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="reveal" id="reveal_plain" value="plain">
                                <label class="custom-control-label" for="reveal">Plain Text</label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                        <button class="btn btn-primary">Update Preference</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection