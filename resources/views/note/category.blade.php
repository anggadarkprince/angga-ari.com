@extends('note._layout')

@section('title', 'Note - Group of category')

@section('note_description', 'Note and task category')

@section('note_content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card box-shadow mb-4">
                        <div class="card-body">
                            <p class="card-title mb-0"><strong>General</strong></p>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="mb-0">
                                    <a href="#" class="small mr-2">23 Notes</a>
                                    <a href="#" class="small">3 Tasks</a>
                                </p>
                                <div class="dropdown small mt-1">
                                    <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-options-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <h6 class="dropdown-header">Action</h6>
                                        <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>Notes</a>
                                        <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Category</a>
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
                                        <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Category</a>
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
                            <p class="card-title mb-0"><strong>Personal</strong></p>
                            <div class="d-flex w-100 justify-content-between">
                                <p class="mb-0">
                                    <a href="#" class="small mr-2">3 Notes</a>
                                </p>
                                <div class="dropdown small mt-1">
                                    <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-options-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <h6 class="dropdown-header">Action</h6>
                                        <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>Notes</a>
                                        <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Category</a>
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
                                        <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Category</a>
                                        <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection