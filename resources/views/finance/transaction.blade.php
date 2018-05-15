@extends('layouts.dashboard')

@section('title', 'Finance - Personal finance management')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">Transaction</h4>
            <small class="text-muted">Latest transaction history</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="{{ route('finance.transaction.create') }}" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                Create Transaction
            </a>
        </div>
    </div>
    <div>
        <div class="card box-shadow mb-4">
            <div class="card-body">
                <div class="text-muted d-flex w-100 justify-content-between mb-1">
                    <a href="#" class="link-muted small">BANK MANDIRI</a>
                    <span class="badge badge-success badge-pill my-0">IN<span class="d-none d-sm-inline-block">COME</span></span>
                </div>
                <h5 class="card-title mb-1"><a href="#" class="text-success">IDR 5.400.000</a></h5>
                <p class="card-text mb-2 small">Monthly salary from company</p>
                <div class="text-muted d-flex w-100 justify-content-between">
                    <ul class="list-inline mb-0 small">
                        <li class="list-inline-item">
                            <i class="icon-grid mr-2"></i>Food
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-clock mr-2"></i>May 26, 2018
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-location-pin mr-2"></i>Gresik, Indonesia
                        </li>
                    </ul>
                    <div class="dropdown align-self-end small">
                        <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="{{ route('finance.transaction.view') }}"><i class="icon-eye mr-2"></i>View Transaction</a>
                            <a class="dropdown-item" href="{{ route('finance.transaction.create') }}"><i class="icon-note mr-2"></i>Edit Transaction</a>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4">
            <div class="card-body">
                <div class="text-muted d-flex w-100 justify-content-between mb-1">
                    <a href="#" class="link-muted small">MY CASH</a>
                    <span class="badge badge-danger badge-pill my-0">OUT<span class="d-none d-sm-inline-block">COME</span></span>
                </div>
                <h5 class="card-title mb-1"><a href="#" class="text-danger">IDR 200.000</a></h5>
                <p class="card-text mb-2 small">Hang out with my friends</p>
                <div class="text-muted d-flex w-100 justify-content-between">
                    <ul class="list-inline mb-0 small">
                        <li class="list-inline-item">
                            <i class="icon-grid mr-2"></i>Coffee
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-clock mr-2"></i>May 16, 2018
                        </li>
                    </ul>
                    <div class="dropdown align-self-end small">
                        <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="{{ route('finance.transaction.view') }}"><i class="icon-eye mr-2"></i>View Transaction</a>
                            <a class="dropdown-item" href="{{ route('finance.transaction.create') }}"><i class="icon-note mr-2"></i>Edit Transaction</a>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4">
            <div class="card-body">
                <div class="text-muted d-flex w-100 justify-content-between mb-1">
                    <a href="#" class="link-muted small">DIGITAL CASH</a>
                    <span class="badge badge-success badge-pill my-0">IN<span class="d-none d-sm-inline-block">COME</span></span>
                </div>
                <h5 class="card-title mb-1"><a href="#" class="text-success">IDR 340.000</a></h5>
                <p class="card-text mb-2 small">Deposit my account</p>
                <div class="text-muted d-flex w-100 justify-content-between">
                    <ul class="list-inline mb-0 small">
                        <li class="list-inline-item">
                            <i class="icon-grid mr-2"></i>Deposit
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-clock mr-2"></i>May 12, 2018
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-location-pin mr-2"></i>Gresik, Indonesia
                        </li>
                    </ul>
                    <div class="dropdown align-self-end small">
                        <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="{{ route('finance.transaction.view') }}"><i class="icon-eye mr-2"></i>View Transaction</a>
                            <a class="dropdown-item" href="{{ route('finance.transaction.create') }}"><i class="icon-note mr-2"></i>Edit Transaction</a>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4">
            <div class="card-body">
                <div class="text-muted d-flex w-100 justify-content-between mb-1">
                    <a href="#" class="link-muted small">MY CASH</a>
                    <span class="badge badge-danger badge-pill my-0">OUT<span class="d-none d-sm-inline-block">COME</span></span>
                </div>
                <h5 class="card-title mb-1"><a href="#" class="text-danger">IDR 12.000</a></h5>
                <p class="card-text mb-2 small">Visit night life hotel</p>
                <div class="text-muted d-flex w-100 justify-content-between">
                    <ul class="list-inline mb-0 small">
                        <li class="list-inline-item">
                            <i class="icon-grid mr-2"></i>Night Life
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-clock mr-2"></i>January 11, 2018
                        </li>
                    </ul>
                    <div class="dropdown align-self-end small">
                        <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="{{ route('finance.transaction.view') }}"><i class="icon-eye mr-2"></i>View Transaction</a>
                            <a class="dropdown-item" href="{{ route('finance.transaction.create') }}"><i class="icon-note mr-2"></i>Edit Transaction</a>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection