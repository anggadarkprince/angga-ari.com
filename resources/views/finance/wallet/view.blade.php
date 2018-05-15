@extends('layouts.dashboard')

@section('title', 'Finance - View wallet')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">View Wallet</h4>
        <small class="text-muted">Detail about the wallet</small>
    </div>
    <form>
        <fieldset>
            <legend>Basic</legend>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="type" class="text-uppercase mb-0">Wallet Type</label>
                        <input type="text" readonly class="form-control-plaintext text-primary" id="type" value="Bank Saving">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="title" class="text-uppercase mb-0">Wallet Title</label>
                        <input type="text" readonly class="form-control-plaintext text-primary" id="title" value="Bank Mandiri">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="description" class="text-uppercase mb-0">Description</label>
                        <input type="text" readonly class="form-control-plaintext text-primary" id="description" value="My first bank account from work">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="identifier" class="text-uppercase mb-0">Identifier</label>
                        <input type="text" readonly class="form-control-plaintext text-primary" id="identifier" value="Angga Ari Wijaya">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="reference" class="text-uppercase mb-0">Ref Number</label>
                        <input type="text" readonly class="form-control-plaintext text-primary" id="reference" value="17000634623">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="url" class="text-uppercase mb-0">Ref URL</label>
                        <a href="https://mandiri.co.id" class="form-control-plaintext" id="url">https://mandiri.co.id</a>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Transaction</legend>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="balance" class="text-uppercase mb-0">Balance</label>
                        <input type="text" readonly class="form-control-plaintext text-primary text-strong" id="balance" value="IDR 45.320.000">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="income" class="text-uppercase mb-0">Income</label>
                        <input type="text" readonly class="form-control-plaintext text-success text-strong" id="income" value="IDR 88.231.200">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="expense" class="text-uppercase mb-0">Expense</label>
                        <input type="text" readonly class="form-control-plaintext text-danger text-strong" id="expense" value="IDR 67.891.200">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="balance" class="text-uppercase mb-0">Transaction</label>
                        <input type="text" readonly class="form-control-plaintext text-primary" id="balance" value="2.423x">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="balance" class="text-uppercase mb-0">In Avg / Mo</label>
                        <input type="text" readonly class="form-control-plaintext text-primary" id="balance" value="IDR 1.200.00">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="balance" class="text-uppercase mb-0">Out Avg / Mo</label>
                        <input type="text" readonly class="form-control-plaintext text-primary" id="balance" value="IDR 1.730.00">
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
@endsection