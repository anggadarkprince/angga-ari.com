@extends('finance._layout')

@section('title', 'Finance - Create New Category')

@section('finance_description', 'Transaction category')

@section('finance_content')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <form action="#">
                @csrf
                <fieldset>
                    <legend>Transaction Category</legend>
                    <div class="form-group row">
                        <label for="username" class="col-md-3 col-form-label">Category</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="username" placeholder="Transaction category">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-3 col-form-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="description" name="description" placeholder="Detail category information" rows="2"></textarea>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                        <button class="btn btn-primary btn-wide">Save Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection