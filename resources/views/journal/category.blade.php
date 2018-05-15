@extends('layouts.dashboard')

@section('title', 'Journal - Category')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">Category</h4>
            <small class="text-muted">Note and task category</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="#modal-form-category" data-toggle="modal" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                Create Category
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="card box-shadow mb-4">
                <div class="card-body">
                    <p class="card-title mb-0"><strong>General</strong></p>
                    <div class="d-flex w-100 justify-content-between">
                        <p class="mb-0">
                            <a href="#" class="small mr-1">23 Notes</a>
                            <a href="#" class="small">3 Tasks</a>
                        </p>
                        <div class="dropdown small mt-1">
                            <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header">Action</h6>
                                <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>Notes</a>
                                <a class="dropdown-item" href="#modal-form-category" data-toggle="modal" data-id="1"><i class="icon-note mr-2"></i>Edit Category</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn-delete" href="#modal-delete" data-toggle="modal" data-title="Note Category" data-label="General"><i class="icon-trash mr-2"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card box-shadow mb-4">
                <div class="card-body">
                    <p class="card-title mb-0"><strong>Project</strong></p>
                    <div class="d-flex w-100 justify-content-between">
                        <p class="mb-0">
                            <span class="small text-muted">Empty Category</span>
                        </p>
                        <div class="dropdown small mt-1">
                            <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header">Action</h6>
                                <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>Notes</a>
                                <a class="dropdown-item" href="#modal-form-category" data-toggle="modal" data-id="2"><i class="icon-note mr-2"></i>Edit Category</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn-delete" href="#modal-delete" data-toggle="modal" data-title="Note Category" data-label="Project"><i class="icon-trash mr-2"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card box-shadow mb-4">
                <div class="card-body">
                    <p class="card-title mb-0"><strong>Personal</strong></p>
                    <div class="d-flex w-100 justify-content-between">
                        <p class="mb-0">
                            <a href="#" class="small mr-1">3 Notes</a>
                        </p>
                        <div class="dropdown small mt-1">
                            <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header">Action</h6>
                                <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>Notes</a>
                                <a class="dropdown-item" href="#modal-form-category" data-toggle="modal" data-id="3"><i class="icon-note mr-2"></i>Edit Category</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn-delete" href="#modal-delete" data-toggle="modal" data-title="Note Category" data-label="Personal"><i class="icon-trash mr-2"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card box-shadow mb-4">
                <div class="card-body">
                    <p class="card-title mb-0"><strong>Workshop & Job</strong></p>
                    <div class="d-flex w-100 justify-content-between">
                        <p class="mb-0">
                            <a href="#" class="small">12 Tasks</a>
                        </p>
                        <div class="dropdown small mt-1">
                            <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header">Action</h6>
                                <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>Notes</a>
                                <a class="dropdown-item" href="#modal-form-category" data-toggle="modal" data-id="4"><i class="icon-note mr-2"></i>Edit Category</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn-delete" href="#modal-delete" data-toggle="modal" data-title="Note Category" data-label="Workshop & Job"><i class="icon-trash mr-2"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('journal.modals._category')
    @include('components.modals._delete')
@endsection