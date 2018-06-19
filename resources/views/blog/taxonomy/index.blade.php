@extends('layouts.dashboard')

@section('title', 'Blog - Tag and Keywords')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">Tags and Keywords</h4>
        <small class="text-muted">Keywords and article tags</small>
    </div>
    <div class="row">
        @foreach($tags as $tag)
            <div class="col-sm-6">
                <div class="card box-shadow mb-4">
                    <div class="card-body d-flex justify-content-between w-100">
                        <a href="{{ route('blog.tag', ['slug' => $tag->slug]) }}" class="link-natural">
                            <strong>#{{ $tag->term }}</strong>
                        </a>
                        <span class="badge badge-primary badge-pill ml-2 align-self-center">
                            {{ $tag->posts()->count() }} {{ str_plural('Post', $tag->posts()->count()) }}
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection