@extends('layouts.dashboard')

@section('title', 'Blog - Tag and Keywords')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">Tags and Keywords</h4>
        <small class="text-muted">Keywords and article tags</small>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="card box-shadow mb-4">
                <div class="card-body d-flex justify-content-between w-100">
                    <p class="mb-0">#framework
                        <span class="badge badge-primary badge-pill">733</span>
                    </p>
                    <div class="dropdown small mt-1">
                        <a href="#" class="link-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>View Articles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card box-shadow mb-4">
                <div class="card-body d-flex justify-content-between w-100">
                    <p class="mb-0">#server
                        <span class="badge badge-primary badge-pill">34</span>
                    </p>
                    <div class="dropdown small mt-1">
                        <a href="#" class="link-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>View Articles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card box-shadow mb-4">
                <div class="card-body d-flex justify-content-between w-100">
                    <p class="mb-0">#programming-language
                        <span class="badge badge-primary badge-pill">733</span>
                    </p>
                    <div class="dropdown small mt-1">
                        <a href="#" class="link-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>View Articles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card box-shadow mb-4">
                <div class="card-body d-flex justify-content-between w-100">
                    <p class="mb-0">#app
                        <span class="badge badge-primary badge-pill">733</span>
                    </p>
                    <div class="dropdown small mt-1">
                        <a href="#" class="link-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>View Articles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card box-shadow mb-4">
                <div class="card-body d-flex justify-content-between w-100">
                    <p class="mb-0">#software
                        <span class="badge badge-primary badge-pill">62</span>
                    </p>
                    <div class="dropdown small mt-1">
                        <a href="#" class="link-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>View Articles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection