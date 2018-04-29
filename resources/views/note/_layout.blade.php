@extends('layouts.dashboard')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">
                <a href="javascript:void(0)" onclick="window.history.back();" class="link-natural">
                    <i class="icon-arrow-left-circle"></i>
                </a>Note @if(!empty(Request::segment(3))) <span class="small text-muted"> / {{ Request::segment(3) }}</span> @endif
            </h4>
            <small class="text-muted d-none d-sm-inline-block">
                @yield('note_description')
            </small>
        </div>
        <div>
            @if(Route::current()->getName() == 'note.notebook')
                <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                    <i class="icon-note mr-2 d-none d-sm-inline-block"></i>Create Notebook
                </a>
            @endif

            @if(Route::current()->getName() == 'note.category')
                <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                    <i class="icon-note mr-2 d-none d-sm-inline-block"></i>New Category
                </a>
            @endif

            @if(Route::current()->getName() == 'note.note')
                <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                    <i class="icon-note mr-2 d-none d-sm-inline-block"></i>Create Note
                </a>
            @endif

            @if(Route::current()->getName() == 'note.todo')
                <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                    <i class="icon-note mr-2 d-none d-sm-inline-block"></i>New Task
                </a>
            @endif
        </div>
    </div>

    <div class="section-content">
        @yield('note_content')
    </div>
@endsection