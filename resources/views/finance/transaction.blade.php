@extends('finance._layout')

@section('title', 'Personal finance management')

@section('finance_description', 'Transaction history')

@section('finance_content')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card box-shadow mb-4">
                <div class="card-body">
                    <small class="card-subtitle mb-1 mt-0 text-muted d-block">
                        <a href="#" class="link-muted">BANK MANDIRI</a>
                    </small>
                    <span class="badge badge-success badge-pill mb-2 mt-0 float-right">IN<span class="d-none d-sm-inline-block">COME</span></span>
                    <h5 class="card-title mb-1"><a href="#" class="text-success">IDR 5.400.000</a></h5>
                    <p class="small mb-2"><strong>Salary</strong> at 18 hours ago</p>
                    <div class="text-muted d-flex w-100 justify-content-between">
                        <div>
                            <small class="mr-4 d-block d-sm-inline-block"><i class="icon-info mr-2"></i>Monthly salary from company</small>
                            <small class="mr-4 d-block d-sm-inline-block"><i class="icon-location-pin mr-2"></i>Gresik, Indonesia</small>
                        </div>
                        <div class="dropdown align-self-end small">
                            <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header">Action</h6>
                                <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View Transaction</a>
                                <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Transaction</a>
                                <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card box-shadow mb-4">
                <div class="card-body">
                    <small class="card-subtitle mb-1 mt-0 text-muted d-block">
                        <a href="#" class="link-muted">MY CASH</a>
                    </small>
                    <span class="badge badge-danger badge-pill mb-2 mt-0 float-right">OUT<span class="d-none d-sm-inline-block">COME</span></span>
                    <h5 class="card-title mb-1"><a href="#" class="text-danger">IDR 200.000</a></h5>
                    <p class="small mb-2"><strong>Food</strong> at 2 days ago</p>
                    <div class="text-muted d-flex w-100 justify-content-between">
                        <div>
                            <small class="mr-4 d-block d-sm-inline-block"><i class="icon-info mr-2"></i>Hang out with friends</small>
                        </div>
                        <div class="dropdown align-self-end small">
                            <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header">Action</h6>
                                <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View Transaction</a>
                                <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Transaction</a>
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
                    </small>
                    <span class="badge badge-success badge-pill mb-2 mt-0 float-right">IN<span class="d-none d-sm-inline-block">COME</span></span>
                    <h5 class="card-title mb-1"><a href="#" class="text-success">IDR 10.000</a></h5>
                    <span class="small mb-2"><strong>Deposit</strong> at 4 days ago</span>
                    <div class="text-muted d-flex w-100 justify-content-between">
                        <div>
                            <small>No detail available</small>
                        </div>
                        <div class="dropdown align-self-end small">
                            <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header">Action</h6>
                                <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View Transaction</a>
                                <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Transaction</a>
                                <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card box-shadow mb-4">
                <div class="card-body">
                    <small class="card-subtitle mb-1 mt-0 text-muted d-block">
                        <a href="#" class="link-muted">CASH</a>
                    </small>
                    <span class="badge badge-danger badge-pill mb-2 mt-0 float-right">OUT<span class="d-none d-sm-inline-block">COME</span></span>
                    <h5 class="card-title mb-1"><a href="#" class="text-danger">IDR 12.000</a></h5>
                    <p class="small mb-2"><strong>Coffee</strong> at 18 April 2018</p>
                    <div class="text-muted d-flex w-100 justify-content-between">
                        <div>
                            <small class="mr-4 d-block d-sm-inline-block"><i class="icon-location-pin mr-2"></i>Starbuck Surabaya</small>
                        </div>
                        <div class="dropdown align-self-end small">
                            <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header">Action</h6>
                                <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View Transaction</a>
                                <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Transaction</a>
                                <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection