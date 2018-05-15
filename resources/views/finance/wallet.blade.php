@extends('layouts.dashboard')

@section('title', 'Finance - Wallet')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">Wallet</h4>
            <small class="text-muted">Digital cash wallet</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="{{ route('finance.wallet.create') }}" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                Create Wallet
            </a>
        </div>
    </div>
    <div>
        <div class="card box-shadow mb-4">
            <div class="card-body">
                <small class="card-subtitle mb-1 mt-0 text-muted d-block">
                    <a href="#" class="link-muted">CASH WALLET</a>
                </small>
                <h5 class="card-title text-primary mb-1"><a href="#">My Wallet</a></h5>
                <div class="d-flex w-100 justify-content-between">
                    <p class="mb-0">
                        IDR 340.000<a href="#" class="ml-2 small link-muted">Hide Balance</a>
                    </p>
                    <div class="dropdown small mt-1">
                        <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="{{ route('finance.wallet.view') }}"><i class="icon-info mr-2"></i>Info Wallet</a>
                            <a class="dropdown-item" href="{{ route('finance.transaction.create', ['wallet' => 1, 'type' => 'income']) }}"><i class="icon-arrow-up-circle mr-2"></i>Deposit Fund</a>
                            <a class="dropdown-item" href="{{ route('finance.transaction', ['transaction' => 'transaction', 'filter' => true, 'wallet' => 1]) }}"><i class="icon-bag mr-2"></i>Transactions</a>
                            <a class="dropdown-item" href="{{ route('finance.wallet.create') }}"><i class="icon-note mr-2"></i>Edit Wallet</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4">
            <div class="card-body">
                <small class="card-subtitle mb-1 mt-0 text-muted d-block">
                    <a href="#" class="link-muted">BANK ACCOUNT</a>
                    <span class="float-right">1420004656422</span>
                </small>
                <h5 class="card-title text-primary mb-1"><a href="#">Bank Mandiri</a></h5>
                <div class="d-flex w-100 justify-content-between">
                    <p class="mb-0">
                        IDR 8.200.000<a href="#" class="ml-2 small link-muted">Hide Balance</a>
                    </p>
                    <div class="dropdown small mt-1">
                        <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="{{ route('finance.wallet.view') }}"><i class="icon-info mr-2"></i>Info Wallet</a>
                            <a class="dropdown-item" href="{{ route('finance.transaction.create', ['wallet' => 1, 'type' => 'income']) }}"><i class="icon-arrow-up-circle mr-2"></i>Deposit Fund</a>
                            <a class="dropdown-item" href="{{ route('finance.transaction', ['transaction' => 'transaction', 'filter' => true, 'wallet' => 1]) }}"><i class="icon-bag mr-2"></i>Transactions</a>
                            <a class="dropdown-item" href="{{ route('finance.wallet.create') }}"><i class="icon-note mr-2"></i>Edit Wallet</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4">
            <div class="card-body">
                <small class="card-subtitle mb-1 mt-0 text-muted d-block">
                    <a href="#" class="link-muted">DIGITAL CASH</a>
                    <a href="#" class="float-right">anggadarkprince</a>
                </small>
                <h5 class="card-title text-primary mb-1"><a href="#">Mandiri E-Cash</a></h5>
                <div class="d-flex w-100 justify-content-between">
                    <p class="mb-0">
                        <a href="#" class="small">Show Balance</a>
                    </p>
                    <div class="dropdown small mt-1">
                        <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="{{ route('finance.wallet.view') }}"><i class="icon-info mr-2"></i>Info Wallet</a>
                            <a class="dropdown-item" href="{{ route('finance.transaction.create', ['wallet' => 1, 'type' => 'income']) }}"><i class="icon-arrow-up-circle mr-2"></i>Deposit Fund</a>
                            <a class="dropdown-item" href="{{ route('finance.transaction', ['transaction' => 'transaction', 'filter' => true, 'wallet' => 1]) }}"><i class="icon-bag mr-2"></i>Transactions</a>
                            <a class="dropdown-item" href="{{ route('finance.wallet.create') }}"><i class="icon-note mr-2"></i>Edit Wallet</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection