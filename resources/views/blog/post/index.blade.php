@extends('layouts.dashboard')

@section('title', 'Blog - Post')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">Post</h4>
            <small class="text-muted">Personal blog article</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="{{ route('blog.post.create') }}" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                New Post
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-11">

            @include('errors._global')

            @foreach($posts as $post)
                <div class="card box-shadow mb-5">
                    <div class="card-img-top" {!! cover_background($post->cover_small_url, ['height' => '200px']) !!}></div>
                    <div class="card-body">
                        <h4 class="card-title mb-1">
                            <a href="{{ $post->url }}">{{ $post->title }}</a>
                        </h4>
                        @if(!empty($post->subtitle))
                            <p class="card-text mb-2 text-primary d-none d-sm-block">
                                {{ $post->subtitle }}
                            </p>
                        @endempty

                        <p class="text-muted small mb-0">
                            Posted
                            <span class="d-none d-sm-inline-block">by
                                <a href="{{ route('blog.author', ['username' => $post->user->username]) }}">
                                    {{ $post->user->name }}
                                </a>
                            </span>
                            on {{ $post->published_at->format('F d, Y') }}
                        </p>

                        <p class="card-text mb-1 mt-2 d-none d-sm-block">
                            {{ $post->getPreview(45) }}
                        </p>
                    </div>
                    <div class="card-footer small text-muted d-flex justify-content-sm-between">
                        <ul class="list-inline mb-0 d-none d-sm-inline-block">
                            <li class="list-inline-item">
                                <i class="icon-eye mr-2"></i>{{ $post->views }}
                            </li>
                            <li class="list-inline-item">
                                <i class="icon-bubbles mr-2"></i>{{ $post->comments }}
                            </li>
                        </ul>
                        <div class="list-inline mb-0 d-flex d-sm-inline-block justify-content-around w-sm-auto w-100">
                            <div class="list-inline-item">
                                <a href="{{ $post->url }}" class="link-natural">
                                    <i class="icon-doc mr-2"></i>View
                                </a>
                            </div>
                            <div class="list-inline-item">
                                <a href="{{ route('blog.post.edit', ['post' => $post->slug]) }}" class="link-natural">
                                    <i class="icon-note mr-2"></i>Edit
                                </a>
                            </div>
                            <div class="list-inline-item">
                                <a href="#modal-delete" data-toggle="modal" class="btn-delete link-natural"
                                   data-id="{{ $post->id }}" data-label="{{ $post->title }}"
                                   data-title="Post"
                                   data-url="{{ route('blog.post.destroy', ['post' => $post->slug]) }}">
                                    <i class="icon-trash mr-2"></i>Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{ $posts->links('components.pagination.compact', ['title' => 'Posts']) }}
        </div>
    </div>

    @include('components.modals._delete')
@endsection