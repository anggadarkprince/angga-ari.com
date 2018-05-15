@extends('layouts.dashboard')

@section('title', 'Finance - Create new wallet')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">Create Wallet</h4>
        <small class="text-muted">Account that collect money</small>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-11">
            <form action="#">
                @csrf
                <fieldset>
                    <legend>Wallet Info</legend>
                    <div class="form-group row">
                        <label for="type" class="col-md-3 col-form-label">Wallet Type</label>
                        <div class="col-md-9">
                            <select class="custom-select" id="type" name="type">
                                <option value="cash">Cash (Physic Wallet)</option>
                                <option value="saving">Bank Saving</option>
                                <option value="checking">Bank Checking</option>
                                <option value="cc">Credit Card</option>
                                <option value="digital">Digital Money</option>
                                <option value="loan">Loan</option>
                                <option value="misc">Misc</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 col-form-label">Wallet Title</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Wallet or account title">
                            <small class="form-text text-muted">
                                Eg: My Wallet, Avenue Bank, Apple Pay.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-3 col-form-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="description" name="description" placeholder="Detail wallet information" rows="2"></textarea>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Wallet Detail</legend>
                    <div class="form-group row">
                        <label for="identifier" class="col-md-3 col-form-label">Identifier Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="identifier" name="identifier" placeholder="Account owner of the platform">
                            <small class="form-text text-muted">
                                User account or bank account owner.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="reference" class="col-md-3 col-form-label">Reference Number</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="reference" name="reference" placeholder="ID or number reference of the platform">
                            <small class="form-text text-muted">
                                Reference ID number (such as Bank Account Number or Apple ID).
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="url" class="col-md-3 col-form-label">Reference URL</label>
                        <div class="col-md-9">
                            <input type="url" class="form-control" id="url" name="url" placeholder="Website of your wallet such as bank or digital money">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="balance" class="col-md-3 col-form-label">Initial Balance</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="balance" name="balance" placeholder="Initial balance of wallet" value="IDR 0">
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                        <button class="btn btn-primary btn-wide">Save Wallet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection