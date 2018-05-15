@extends('layouts.dashboard')

@section('title', 'Vault - Password Log Activity')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">Create Vault</h4>
        <small class="text-muted">Secure your password vault</small>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-11">
            <form enctype="multipart/form-data">
                <fieldset>
                    <legend>Password Info</legend>
                    <div class="form-group row">
                        <label for="type" class="col-md-3 col-form-label">Vault Type</label>
                        <div class="col-md-9">
                            <select class="custom-select" name="type" id="type" required>
                                <option value="password">Password</option>
                                <option value="cc">Credit Card</option>
                                <option value="bank">Bank Account</option>
                                <option value="email">Email Account</option>
                                <option value="database">Database</option>
                                <option value="passport">Passport</option>
                                <option value="license">License</option>
                                <option value="wifi">Wifi</option>
                                <option value="server">Server</option>
                                <option value="document">Document</option>
                                <option value="misc">Misc</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 col-form-label">Key Title</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="title" name="title" required placeholder="Key or token title">
                            <small class="form-text text-muted">
                                Eg: Facebook, Twitter, Avenue Bank, My Credit Card Pin.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="identifier" class="col-md-3 col-form-label">Identifier</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="identifier" name="identifier" required placeholder="Username or key identifier">
                            <small class="form-text text-muted">
                                Unique ID pair credential with the password.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-3 col-form-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="password" placeholder="Secured password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_2" class="col-md-3 col-form-label">Password 2</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="password_2" name="password_2" placeholder="Another key pair if it is needed"><small class="form-text text-muted">
                                Input another password or key if necessary (optional).
                            </small>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Security Detail</legend>
                    <div class="form-group row">
                        <label for="description" class="col-md-3 col-form-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="description" name="description" placeholder="Detail info about credential" rows="2"></textarea>
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
                        <button class="btn btn-primary">Save Password Vault</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection