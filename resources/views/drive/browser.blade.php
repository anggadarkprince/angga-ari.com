@extends('drive._layout')

@section('title', 'Drive online file sharing')

@section('drive_description', 'File and directory browser')

@section('drive_content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb small mb-4">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active">My Data</li>
                    </ol>
                </div>
            </div>
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
                            <h1 class="display-3 mb-0"><i class="icon-folder-alt"></i></h1>
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
                            <h1 class="display-3 mb-0"><i class="icon-folder-alt"></i></h1>
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
                            <h1 class="display-3 mb-0"><i class="icon-folder-alt"></i></h1>
                            <p class="file-name mb-0 small">Web Design & Photo Project</p>
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
                            <h1 class="display-3 mb-0"><i class="icon-doc"></i></h1>
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
                            <h1 class="display-3 mb-0"><i class="icon-doc"></i></h1>
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
                            <h1 class="display-3 mb-0"><i class="icon-doc"></i></h1>
                            <p class="file-name mb-0 small">Illusion of numbers and letters (Published at 2018).txt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection