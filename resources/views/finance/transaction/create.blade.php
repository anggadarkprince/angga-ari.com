@extends('finance._layout')

@section('title', 'Finance - Create New Transaction')

@section('finance_description', 'Financial transaction')

@section('finance_content')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <form enctype="multipart/form-data">
                <fieldset>
                    <legend>Transaction</legend>
                    <div class="form-group row">
                        <label for="type" class="col-md-3 col-form-label">Type</label>
                        <div class="col-md-9">
                            <select class="custom-select" name="type" id="type">
                                <option value="income">Income</option>
                                <option value="expense">Expense</option>
                                <option value="transfer">Transfer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="wallet" class="col-md-3 col-form-label">Wallet</label>
                        <div class="col-md-9">
                            <select class="custom-select" name="wallet" id="wallet">
                                <option value="1">My Cash</option>
                                <option value="2">Bank Mandiri</option>
                                <option value="3">Apple Pay</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-md-3 col-form-label">Category</label>
                        <div class="col-md-9">
                            <select class="custom-select" name="category" id="category">
                                <option value="1">General</option>
                                <option value="2">Food</option>
                                <option value="3">Drink</option>
                                <option value="4">Night Life</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-3 col-form-label">Date</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="date" name="date" placeholder="Date of transaction">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 col-form-label">Title</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title of transaction">
                            <small class="form-text text-muted">
                                Eg: Buy coffee and snack or deposit into my account.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="amount" class="col-md-3 col-form-label">Amount</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="amount" name="amount" value="IDR 0" placeholder="Item price or amount transaction">
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Detail</legend>
                    <div class="form-group row">
                        <label for="tags" class="col-md-3 col-form-label">Tags or Keywords</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="tags" name="tags" placeholder="Separate tags by commas">
                            <small class="form-text text-muted">
                                Tag your transaction into multi group category.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="location" class="col-md-3 col-form-label">Location</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="location" name="location" placeholder="Transaction location or place">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="note" class="col-md-3 col-form-label">Note</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="note" name="note" placeholder="Detail transaction information" rows="2"></textarea>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                        <button class="btn btn-primary btn-wide">Save Transaction</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection