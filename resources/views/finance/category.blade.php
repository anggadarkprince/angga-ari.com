@extends('finance._layout')

@section('title', 'Finance - Transaction Category')

@section('finance_description', 'Digital account and cash wallet')

@section('finance_content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card box-shadow mb-4">
                        <div class="card-body">
                            <p class="card-title mb-0">General</p>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="mb-0">
                                    <a href="{{ route('finance.transaction', ['transaction' => 'transaction', 'filter' => true, 'category' => 1]) }}" class="small">345 Transactions</a>
                                </p>
                                <div class="dropdown small mt-1">
                                    <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-options-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <h6 class="dropdown-header">Action</h6>
                                        <a class="dropdown-item" href="{{ route('finance.transaction', ['transaction' => 'transaction', 'filter' => true, 'category' => 1]) }}"><i class="icon-bag mr-2"></i>Transactions</a>
                                        <a class="dropdown-item" href="{{ route('finance.category.create') }}"><i class="icon-note mr-2"></i>Edit Wallet</a>
                                        <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card box-shadow mb-4">
                        <div class="card-body">
                            <p class="card-title mb-0">Food</p>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="mb-0">
                                    <a href="{{ route('finance.transaction', ['transaction' => 'transaction', 'filter' => true, 'category' => 1]) }}" class="small">51 Transactions</a>
                                </p>
                                <div class="dropdown small mt-1">
                                    <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-options-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <h6 class="dropdown-header">Action</h6>
                                        <a class="dropdown-item" href="{{ route('finance.transaction', ['transaction' => 'transaction', 'filter' => true, 'category' => 1]) }}"><i class="icon-bag mr-2"></i>Transactions</a>
                                        <a class="dropdown-item" href="{{ route('finance.category.create') }}"><i class="icon-note mr-2"></i>Edit Category</a>
                                        <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card box-shadow mb-4">
                        <div class="card-body">
                            <p class="card-title mb-0">Drink</p>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="mb-0">
                                    <a href="{{ route('finance.transaction', ['transaction' => 'transaction', 'filter' => true, 'category' => 1]) }}" class="small">4 Transactions</a>
                                </p>
                                <div class="dropdown small mt-1">
                                    <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-options-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <h6 class="dropdown-header">Action</h6>
                                        <a class="dropdown-item" href="{{ route('finance.transaction', ['transaction' => 'transaction', 'filter' => true, 'category' => 1]) }}"><i class="icon-bag mr-2"></i>Transactions</a>
                                        <a class="dropdown-item" href="{{ route('finance.category.create') }}"><i class="icon-note mr-2"></i>Edit Category</a>
                                        <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card box-shadow mb-4">
                        <div class="card-body">
                            <p class="card-title mb-0">Coffee</p>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="mb-0">
                                    <a href="{{ route('finance.transaction', ['transaction' => 'transaction', 'filter' => true, 'category' => 1]) }}" class="small">23 Transactions</a>
                                </p>
                                <div class="dropdown small mt-1">
                                    <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-options-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <h6 class="dropdown-header">Action</h6>
                                        <a class="dropdown-item" href="{{ route('finance.transaction', ['transaction' => 'transaction', 'filter' => true, 'category' => 1]) }}"><i class="icon-bag mr-2"></i>Transactions</a>
                                        <a class="dropdown-item" href="{{ route('finance.category.create') }}"><i class="icon-note mr-2"></i>Edit Category</a>
                                        <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card box-shadow mb-4">
                        <div class="card-body">
                            <p class="card-title mb-0">Electricity</p>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="mb-0">
                                    <a href="{{ route('finance.transaction', ['transaction' => 'transaction', 'filter' => true, 'category' => 1]) }}" class="small">345 Transactions</a>
                                </p>
                                <div class="dropdown small mt-1">
                                    <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-options-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <h6 class="dropdown-header">Action</h6>
                                        <a class="dropdown-item" href="{{ route('finance.transaction', ['transaction' => 'transaction', 'filter' => true, 'category' => 1]) }}"><i class="icon-bag mr-2"></i>Transactions</a>
                                        <a class="dropdown-item" href="{{ route('finance.category.create') }}"><i class="icon-note mr-2"></i>Edit Category</a>
                                        <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>
@endsection