@extends('layouts.dashboard')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">
            <a href="javascript:void(0)" onclick="window.history.back();" class="link-natural">
                <i class="icon-arrow-left-circle"></i>
            </a>Note @if(!empty(Request::segment(3))) <span class="small text-muted"> / {{ Request::segment(3) }}</span> @endif

            @if(Route::current()->getName() == 'note.notebook')
                <a href="#" class="btn btn-sm btn-primary float-right">
                    <i class="icon-note mr-2"></i>Create Notebook
                </a>
            @endif

            @if(Route::current()->getName() == 'note.note')
                <a href="#" class="btn btn-sm btn-primary float-right">
                    <i class="icon-note mr-2"></i>Create Note
                </a>
            @endif

            @if(Route::current()->getName() == 'note.todo')
                <a href="#" class="btn btn-sm btn-primary float-right">
                    <i class="icon-note mr-2"></i>New Task
                </a>
            @endif

        </h4>
        <small class="text-muted">
            @yield('note_description')
        </small>
    </div>

    <div class="section-content">
        @yield('note_content')
    </div>
@endsection