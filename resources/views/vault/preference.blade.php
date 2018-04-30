@extends('vault._layout')

@section('title', 'Vault - Preference')

@section('vault_description', 'Password vault settings')

@section('vault_content')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <form enctype="multipart/form-data">
                <fieldset>
                    <legend>Security Setting</legend>
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
                        <button class="btn btn-primary btn-sm btn-wide">Update Preference</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection