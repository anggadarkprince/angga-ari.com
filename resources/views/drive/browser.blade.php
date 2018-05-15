@extends('layouts.dashboard')

@section('title', 'Drive - Cloud storage sharing')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">Browser</h4>
            <small class="text-muted">Cloud file explorer</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <div class="d-none d-sm-inline-block">
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-sm btn-secondary mb-0 active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked>
                        <i class="icon-grid mr-0"></i>
                    </label>
                    <label class="btn btn-sm btn-secondary mb-0">
                        <input type="radio" name="options" id="option2" autocomplete="off">
                        <i class="icon-menu mr-0"></i>
                    </label>
                </div>
            </div>
            <a href="#" class="btn btn-sm btn-info d-block d-sm-inline-block mb-2 mb-sm-0">
                New Folder
            </a>
            <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                Upload
            </a>
        </div>
    </div>
    <ol class="breadcrumb small mb-4">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active">My Data</li>
    </ol>
    <div class="row">
        <div class="col-lg-3 col-sm-4">
            <div class="card card-drive directory text-center">
                <div class="dropdown drive-control">
                    <a href="#" class="text-gray-400" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-options-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <h6 class="dropdown-header">Action</h6>
                        <a class="dropdown-item" href="#"><i class="icon-share-alt mr-2"></i>Share</a>
                        <a class="dropdown-item" href="{{ route('drive.view', ['token' => 'hsd4fih2o526245h235hk2']) }}"><i class="icon-cloud-download mr-2"></i>Zip & Download</a>
                        <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Move to Trash</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="icon-info mr-2"></i>Properties</a>
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{ Storage::url('layouts/folder/folder-open-empty.svg') }}" class="svg w-50">
                    <p class="file-name mb-0 small">Workspace</p>
                    <small class="text-gray-500 mb-0">23 Items</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-4">
            <div class="card card-drive directory text-center">
                <div class="dropdown drive-control">
                    <a href="#" class="text-gray-400" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-options-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <h6 class="dropdown-header">Action</h6>
                        <a class="dropdown-item" href="#"><i class="icon-share-alt mr-2"></i>Share</a>
                        <a class="dropdown-item" href="#"><i class="icon-cloud-download mr-2"></i>Zip & Download</a>
                        <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Move to Trash</a>
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{ Storage::url('layouts/folder/folder-open-full.svg') }}" class="svg w-50">
                    <p class="file-name mb-0 small">Data</p>
                    <small class="text-gray-500 mb-0">62 Items</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-4">
            <div class="card card-drive directory text-center">
                <div class="dropdown drive-control">
                    <a href="#" class="text-gray-400" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-options-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <h6 class="dropdown-header">Action</h6>
                        <a class="dropdown-item" href="#"><i class="icon-share-alt mr-2"></i>Share</a>
                        <a class="dropdown-item" href="#"><i class="icon-cloud-download mr-2"></i>Zip & Download</a>
                        <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Move to Trash</a>
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{ Storage::url('layouts/folder/folder-open-full.svg') }}" class="svg w-50">
                    <p class="file-name mb-0 small">Web Design & Photo Project</p>
                    <small class="text-gray-500 mb-0">7 Items</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-4">
            <div class="card card-drive directory text-center">
                <div class="card-body">
                    <img src="{{ Storage::url('layouts/folder/folder-reserved.svg') }}" class="svg w-50">
                    <p class="file-name mb-0 small text-muted">Blog-data [reserved]</p>
                    <small class="text-gray-500 mb-0">7 Items</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-4">
            <div class="card card-drive directory text-center">
                <div class="card-body">
                    <img src="{{ Storage::url('layouts/folder/folder-reserved.svg') }}" class="svg w-50">
                    <p class="file-name mb-0 small text-muted">Showcase-data [reserved]</p>
                    <small class="text-gray-500 mb-0">7 Items</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-4">
            <div class="card card-drive text-center">
                <div class="dropdown drive-control">
                    <a href="#" class="text-gray-400" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-options-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <h6 class="dropdown-header">Action</h6>
                        <a class="dropdown-item" href="#"><i class="icon-share-alt mr-2"></i>Share</a>
                        <a class="dropdown-item" href="#"><i class="icon-cloud-download mr-2"></i>Download</a>
                        <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Move to Trash</a>
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{ Storage::url('layouts/filetype/pdf.svg') }}" class="svg w-50 mb-1">
                    <p class="file-name mb-0 small">High Performance MySQL v2.0.pdf</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-4">
            <div class="card card-drive text-center">
                <div class="dropdown drive-control">
                    <a href="#" class="text-gray-400" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-options-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <h6 class="dropdown-header">Action</h6>
                        <a class="dropdown-item" href="#"><i class="icon-share-alt mr-2"></i>Share</a>
                        <a class="dropdown-item" href="#"><i class="icon-cloud-download mr-2"></i>Download</a>
                        <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Move to Trash</a>
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{ Storage::url('layouts/filetype/file.svg') }}" class="svg w-50 mb-1">
                    <p class="file-name mb-0 small">OOP Programming.pub</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-4">
            <div class="card card-drive text-center">
                <div class="dropdown drive-control">
                    <a href="#" class="text-gray-400" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-options-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <h6 class="dropdown-header">Action</h6>
                        <a class="dropdown-item" href="#"><i class="icon-share-alt mr-2"></i>Share</a>
                        <a class="dropdown-item" href="#"><i class="icon-cloud-download mr-2"></i>Download</a>
                        <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Move to Trash</a>
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{ Storage::url('layouts/filetype/txt.svg') }}" class="svg w-50 mb-1">
                    <p class="file-name mb-0 small">Illusion of numbers and letters (Published at 2018).txt</p>
                </div>
            </div>
        </div>
    </div>
@endsection