@extends('layouts.dashboard')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">
                <a href="javascript:void(0)" onclick="window.history.back();" class="link-natural d-none d-sm-inline-block">
                    <i class="icon-arrow-left-circle"></i>
                </a>Drive @if(!empty(Request::segment(3))) <span class="small text-muted"> / {{ Request::segment(3) }}</span> @endif
            </h4>
            <small class="text-muted">
                @yield('drive_description')
            </small>
        </div>
        <div>
            @if(Route::current()->getName() == 'drive.browser')
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
                <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                    <i class="icon-cloud-upload mr-2 d-none d-sm-inline-block"></i>Upload File
                </a>
            @endif

            @if(Route::current()->getName() == 'drive.album')
                <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                    <i class="icon-note mr-2 d-none d-sm-inline-block"></i>New Album
                </a>
            @endif

            @if(Route::current()->getName() == 'drive.analyzer')
                <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                    <i class="icon-magnifier mr-2 d-none d-sm-inline-block"></i>Analyze
                </a>
            @endif

            @if(Route::current()->getName() == 'drive.trash')
                <a href="#" class="btn btn-sm btn-secondary d-block d-sm-inline-block">
                    <i class="icon-trash mr-2 d-none d-sm-inline-block"></i>Empty Trash
                </a>
            @endif
        </div>
    </div>

    <div class="section-content pt-0">
        @yield('drive_content')
    </div>
@endsection