@extends('drive._layout')

@section('title', 'Drive - Disk Analyzer')

@section('drive_description', 'Analyze your files into categorize and calculate them.')

@section('drive_content')
    <div class="row justify-content-center">
        <div class="col-lg-11">

            <ul class="list-group">
                <li class="list-group-item active">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-0">Storage</h5>
                        <p class="mb-0">9.7 GB used / 10 GB</p>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <p class="mb-2"><i class="icon-picture mr-3"></i>Images</p>
                        <small>3.5 GB / 5.446 Files</small>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <p class="mb-2"><i class="icon-film mr-3"></i>Videos</p>
                        <small>189 MB / 3 Files</small>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <p class="mb-2"><i class="icon-docs mr-3"></i>Documents</p>
                        <small>170 MB / 56 Files</small>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <p class="mb-2"><i class="icon-puzzle mr-3"></i>Raw & Others</p>
                        <small>104 MB / 43 Files</small>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                        <p class="mb-2"><i class="icon-music-tone-alt mr-3"></i>Musics</p>
                        <small>36 MB / 7 Files</small>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
            </ul>

        </div>
    </div>
@endsection