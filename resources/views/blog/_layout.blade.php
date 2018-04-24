@extends('layouts.dashboard')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">
            <a href="{{ route('home') }}" class="link-natural">
                <i class="icon-arrow-left-circle"></i>
            </a>Blog
            <a href="{{ route('blog') }}" class="btn btn-sm btn-primary float-right">
                <i class="icon-note mr-2"></i>New Post
            </a>
        </h4>
        <small class="text-muted">
            @yield('blog_description')
        </small>
    </div>

    <div class="section-content">
        @yield('showcase_content')
    </div>
@endsection