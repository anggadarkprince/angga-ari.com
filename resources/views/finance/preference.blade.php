@extends('layouts.dashboard')

@section('title', 'Finance - Preference')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">Preference</h4>
        <small class="text-muted">Transaction configuration</small>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-11">
            <form enctype="multipart/form-data">
                <fieldset>
                    <legend>Finance Setting</legend>
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label">Balance Rule</label>
                        <div class="col-md-9">
                            <div class="custom-control custom-checkbox mt-2">
                                <input class="custom-control-input" type="checkbox" name="adjust" id="adjust" value="1" checked>
                                <label class="custom-control-label" for="adjust">Allow adjust balance directly</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-md-3 col-form-label">Currency</label>
                        <div class="col-md-9">
                            <select class="custom-select">
                                <option value="EN" selected>Dollar ($)</option>
                                <option value="ID">Rupiah (IDR)</option>
                            </select>
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