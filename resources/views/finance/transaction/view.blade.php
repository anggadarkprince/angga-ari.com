@extends('layouts.dashboard')

@section('title', 'Finance - View transaction')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">View Transaction</h4>
        <small class="text-muted">Detail about your transaction</small>
    </div>
    <form>
        <fieldset>
            <legend>Transaction</legend>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="type" class="text-uppercase mb-0">Type</label>
                        <input type="text" readonly class="form-control-plaintext text-primary" id="type" value="Expense">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="title" class="text-uppercase mb-0">Wallet</label>
                        <input type="text" readonly class="form-control-plaintext text-primary" id="title" value="Bank Mandiri">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="description" class="text-uppercase mb-0">Title</label>
                        <input type="text" readonly class="form-control-plaintext text-primary" id="description" value="Hand out with my friends">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="category" class="text-uppercase mb-0">Category</label>
                        <input type="text" readonly class="form-control-plaintext text-primary" id="category" value="Drinks">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="date" class="text-uppercase mb-0">Transaction Date</label>
                        <input type="text" readonly class="form-control-plaintext text-primary" id="date" value="May 26, 2018">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="amount" class="text-uppercase mb-0">Amount</label>
                        <input type="text" readonly class="form-control-plaintext text-primary" id="amount" value="IDR 18.000">
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Detail</legend>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="balance" class="text-uppercase mb-0">Tag</label>
                        <div class="text-uppercase mt-2">
                            <span class="badge badge-primary">Drink</span>
                            <span class="badge badge-primary">Nightlife</span>
                            <span class="badge badge-primary">Happy</span>
                            <span class="badge badge-primary">Food</span>
                            <span class="badge badge-primary">Friends</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="income" class="text-uppercase mb-0">Location</label>
                        <p class="form-control-plaintext text-primary" id="income">Starbuck, Juanda Airport International</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="expense" class="text-uppercase mb-0">Note</label>
                        <input type="text" readonly class="form-control-plaintext text-primary" id="expense" value="Everyone happy and I am">
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
@endsection