@extends('layouts.dashboard')

@section('title', 'Drive - Albums')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">Album</h4>
            <small class="text-muted">Organize your photo into simple frame group</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                Create Album
            </a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3">
            <div class="card card-drive directory text-center">
                <div class="dropdown drive-control">
                    <a href="#" class="text-gray-400" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-options-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <h6 class="dropdown-header">Action</h6>
                        <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Rename</a>
                        <a class="dropdown-item" href="#"><i class="icon-share-alt mr-2"></i>Share</a>
                        <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete Album</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="icon-info mr-2"></i>Properties</a>
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{ Storage::url('layouts/folder/folder-album.svg') }}" class="svg w-50 mb-2">
                    <p class="file-name mb-0 small">Vacation on Monday</p>
                    <small class="text-gray-500 mb-0">23 Pictures</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-drive directory text-center">
                <div class="dropdown drive-control">
                    <a href="#" class="text-gray-400" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-options-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <h6 class="dropdown-header">Action</h6>
                        <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Rename</a>
                        <a class="dropdown-item" href="#"><i class="icon-share-alt mr-2"></i>Share</a>
                        <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete Album</a>
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{ Storage::url('layouts/folder/folder-album.svg') }}" class="svg w-50 mb-2">
                    <p class="file-name mb-0 small">Graduation</p>
                    <small class="text-gray-500 mb-0">535 Pictures</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-drive directory text-center">
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
                    <img src="{{ Storage::url('layouts/folder/folder-album.svg') }}" class="svg w-50 mb-2">
                    <p class="file-name mb-0 small">Bali and lombok at once</p>
                    <small class="text-gray-500 mb-0">7423 Pictures</small>
                </div>
            </div>
        </div>
    </div>
@endsection