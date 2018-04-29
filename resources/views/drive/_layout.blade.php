@extends('layouts.dashboard')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">
            <a href="javascript:void(0)" onclick="window.history.back();" class="link-natural">
                <i class="icon-arrow-left-circle"></i>
            </a>Drive @if(!empty(Request::segment(3))) <span class="small text-muted"> / {{ Request::segment(3) }}</span> @endif

            @if(Route::current()->getName() == 'drive.browser')
                <div class="float-right">
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
                    <a href="#" class="btn btn-sm btn-primary">
                        <i class="icon-cloud-upload mr-2"></i>Upload File
                    </a>
                </div>
            @endif

            @if(Route::current()->getName() == 'drive.album')
                <a href="#" class="btn btn-sm btn-primary float-right">
                    <i class="icon-note mr-2"></i>New Album
                </a>
            @endif

            @if(Route::current()->getName() == 'drive.trash')
                <a href="#" class="btn btn-sm btn-primary float-right">
                    <i class="icon-trash mr-2"></i>Empty Trash
                </a>
            @endif

        </h4>
        <small class="text-muted">
            @yield('drive_description')
        </small>
    </div>

    <div class="section-content pt-0">
        @yield('drive_content')
    </div>
@endsection