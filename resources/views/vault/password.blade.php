@extends('layouts.dashboard')

@section('title', 'Vault - Password Collection')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">Vault</h4>
            <small class="text-muted">Secured password collection</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="{{ route('vault.password.create') }}" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                <i class="icon-note mr-2 d-none d-sm-inline-block"></i>New Password
            </a>
        </div>
    </div>
    <div>
        <div class="card box-shadow mb-4">
            <div class="card-body">
                <small class="card-subtitle mb-1 mt-0 text-muted d-block">
                    <a href="#" class="link-muted">PASSWORD</a>
                </small>
                <h5 class="card-title mb-1"><a href="#">Facebook</a></h5>
                <div class="text-muted d-flex w-100 justify-content-between">
                    <div>
                        <small class="mr-4 d-block d-sm-inline-block"><i class="icon-lock mr-2"></i>SHA 512 encryption</small>
                        <small class="mr-4 d-block d-sm-inline-block"><i class="icon-info mr-2"></i>Asymmetric Key</small>
                        <small class="mr-4 d-block d-sm-inline-block"><i class="icon-clock mr-2"></i>Never Expired</small>
                    </div>
                    <div class="dropdown align-self-end small">
                        <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-lock-open mr-2"></i>Reveal Password</a>
                            <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Password</a>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4">
            <div class="card-body">
                <small class="card-subtitle mb-1 mt-0 text-muted d-block">
                    <a href="#" class="link-muted">TOKEN</a>
                </small>
                <h5 class="card-title mb-1"><a href="#">Mandiri Mobile Banking</a></h5>
                <div class="text-muted d-flex w-100 justify-content-between">
                    <div>
                        <small class="mr-4 d-block d-sm-inline-block"><i class="icon-lock mr-2"></i>SHA 256 encryption</small>
                        <small class="mr-4 d-block d-sm-inline-block"><i class="icon-info mr-2"></i>No secret Key</small>
                        <small class="mr-4 d-block d-sm-inline-block text-warning"><i class="icon-clock mr-2"></i>Expired in 6 days</small>
                    </div>
                    <div class="dropdown align-self-end small">
                        <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-lock-open mr-2"></i>Reveal Password</a>
                            <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Password</a>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4">
            <div class="card-body">
                <small class="card-subtitle mb-1 mt-0 text-muted d-block">
                    <a href="#" class="link-muted">PIN</a>
                </small>
                <h5 class="card-title mb-1"><a href="#">E-Pay</a></h5>
                <div class="text-muted d-flex w-100 justify-content-between">
                    <div>
                        <small class="mr-4 d-block d-sm-inline-block"><i class="icon-lock mr-2"></i>SHA 256 encryption</small>
                        <small class="mr-4 d-block d-sm-inline-block"><i class="icon-info mr-2"></i>No secret Key</small>
                        <small class="mr-4 d-block d-sm-inline-block text-danger"><i class="icon-clock mr-2"></i>Expired in 3 days</small>
                    </div>
                    <div class="dropdown align-self-end small">
                        <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-lock-open mr-2"></i>Reveal Password</a>
                            <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Password</a>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4">
            <div class="card-body">
                <small class="card-subtitle mb-1 mt-0 text-muted d-block">
                    <a href="#" class="link-muted">PASSWORD</a>
                </small>
                <h5 class="card-title mb-1"><a href="#">Instagram</a></h5>
                <div class="text-muted d-flex w-100 justify-content-between">
                    <div>
                        <small class="mr-4 d-block d-sm-inline-block"><i class="icon-lock mr-2"></i>SHA 256 encryption</small>
                        <small class="mr-4 d-block d-sm-inline-block"><i class="icon-info mr-2"></i>No secret Key</small>
                        <small class="mr-4 d-block d-sm-inline-block"><i class="icon-clock mr-2"></i>Expired in 60 days</small>
                    </div>
                    <div class="dropdown align-self-end small">
                        <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-lock-open mr-2"></i>Reveal Password</a>
                            <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Password</a>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection