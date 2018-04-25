@extends('layouts.dashboard')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">
            <a href="javascript:void(0)" onclick="window.history.back();" class="link-natural">
                <i class="icon-arrow-left-circle"></i>
            </a>Blog @if(!empty(Request::segment(3))) <span class="small text-muted"> / {{ Request::segment(3) }}</span> @endif

            @if(Route::current()->getName() == 'blog.post')
                <a href="#" class="btn btn-sm btn-primary float-right">
                    <i class="icon-note mr-2"></i>New Post
                </a>
            @endif

            @if(Route::current()->getName() == 'blog.category')
                <a href="#" class="btn btn-sm btn-primary float-right">
                    <i class="icon-note mr-2"></i>New Category
                </a>
            @endif

        </h4>
        <small class="text-muted">
            @yield('blog_description')
        </small>
    </div>

    <div class="section-content">
        @yield('blog_content')
    </div>
@endsection