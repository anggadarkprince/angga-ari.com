@extends('drive._layout')

@section('title', 'Drive - Trash')

@section('drive_description', 'Temporary deleted files')

@section('drive_content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb small mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('drive.browser') }}">Browser</a></li>
                        <li class="breadcrumb-item active">Trash</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card card-drive directory text-center">
                        <div class="dropdown drive-control">
                            <a href="#" class="text-gray-400" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header">Action</h6>
                                <a class="dropdown-item" href="#"><i class="icon-action-undo mr-2"></i>Restore</a>
                                <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete Forever</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="icon-info mr-2"></i>Properties</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <img src="{{ Storage::url('layouts/folder/folder-open-full.svg') }}" class="svg w-50">
                            <p class="file-name mb-0 small">Workspace</p>
                            <small class="text-gray-500 mb-0">23 Items</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-drive text-center">
                        <div class="dropdown drive-control">
                            <a href="#" class="text-gray-400" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header">Action</h6>
                                <a class="dropdown-item" href="#"><i class="icon-action-undo mr-2"></i>Restore</a>
                                <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete Forever</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="icon-info mr-2"></i>Properties</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <img src="{{ Storage::url('layouts/filetype/pdf.svg') }}" class="svg w-50 mb-1">
                            <p class="file-name mb-0 small">High Performance MySQL v2.0.pdf</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-drive text-center">
                        <div class="dropdown drive-control">
                            <a href="#" class="text-gray-400" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header">Action</h6>
                                <a class="dropdown-item" href="#"><i class="icon-action-undo mr-2"></i>Restore</a>
                                <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete Forever</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="icon-info mr-2"></i>Properties</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <img src="{{ Storage::url('layouts/filetype/txt.svg') }}" class="svg w-50 mb-1">
                            <p class="file-name mb-0 small">Illusion of numbers and letters (Published at 2018).txt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection