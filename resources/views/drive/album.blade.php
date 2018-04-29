@extends('drive._layout')

@section('title', 'Drive - Photo albums')

@section('drive_description', 'Organize your photo and image into simple frame group.')

@section('drive_content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
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
                            <h1 class="display-3 mb-0"><i class="icon-camera"></i></h1>
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
                            <h1 class="display-3 mb-0"><i class="icon-camera"></i></h1>
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
                            <h1 class="display-3 mb-0"><i class="icon-camera"></i></h1>
                            <p class="file-name mb-0 small">Bali and lombok at once</p>
                            <small class="text-gray-500 mb-0">7423 Pictures</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection