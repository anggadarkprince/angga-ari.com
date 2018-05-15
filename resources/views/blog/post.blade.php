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
    <div class="row">
        <div class="col-lg-12">

            <div class="card box-shadow mb-5">
                <div class="card-img-top" style="height: 200px; background: url({{ Storage::url('showcases/thumbnails/1.jpg') }}) no-repeat center center / cover;"></div>
                <div class="card-body">
                    <h4 class="card-title mb-1"><a href="#">Man must explore, and this is exploration at its greatest </a></h4>
                    <p class="card-text mb-2 text-primary d-none d-sm-block">Problems look mighty small from 150 miles up</p>

                    <p class="text-muted small mb-0">
                        Posted <span class="d-none d-sm-inline-block">by <a href="{{ route('blog.author', ['username' => 'angga-ari-wijaya']) }}">Angga Ari Wijaya</a></span>
                        on September 24, 2018
                    </p>

                    <p class="card-text mb-1 mt-2 d-none d-sm-block">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dignissimos eaque molestias
                        nesciunt officia recusandae repellat ullam voluptas voluptate voluptatem! A cumque dolorum
                        inventore ipsam laboriosam laborum possimus sequi, soluta.
                    </p>
                </div>
                <div class="card-footer small text-muted d-flex justify-content-sm-between">
                    <ul class="list-inline mb-0 d-none d-sm-inline-block">
                        <li class="list-inline-item">
                            <i class="icon-eye mr-2"></i>334K
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-bubbles mr-2"></i>54K
                        </li>
                    </ul>
                    <div class="list-inline mb-0 d-flex d-sm-inline-block justify-content-around w-sm-auto w-100">
                        <div class="list-inline-item">
                            <a href="#" class="link-natural"><i class="icon-doc mr-2"></i>View</a>
                        </div>
                        <div class="list-inline-item">
                            <a href="#" class="link-natural"><i class="icon-note mr-2"></i>Edit</a>
                        </div>
                        <div class="list-inline-item">
                            <a href="#" class="link-natural"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card box-shadow mb-4">
                <div class="card-img-top" style="height: 200px; background: url({{ Storage::url('showcases/thumbnails/2.jpg') }}) no-repeat center center / cover;"></div>
                <div class="card-body">
                    <h4 class="card-title mb-1"><a href="#">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</a></h4>

                    <p class="text-muted small mb-0">
                        Posted <span class="d-none d-sm-inline-block">by <a href="{{ route('blog.author', ['username' => 'angga-ari-wijaya']) }}">Angga Ari Wijaya</a></span>
                        on September 24, 2018
                    </p>

                    <p class="card-text mb-1 mt-2 d-none d-sm-block">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dignissimos eaque molestias
                        nesciunt officia recusandae repellat ullam voluptas voluptate voluptatem! A cumque dolorum
                        inventore ipsam laboriosam laborum possimus sequi, soluta.
                    </p>
                </div>
                <div class="card-footer small text-muted d-flex justify-content-sm-between">
                    <ul class="list-inline mb-0 d-none d-sm-inline-block">
                        <li class="list-inline-item">
                            <i class="icon-eye mr-2"></i>334K
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-bubbles mr-2"></i>54K
                        </li>
                    </ul>
                    <div class="list-inline mb-0 d-flex d-sm-inline-block justify-content-around w-sm-auto w-100">
                        <div class="list-inline-item">
                            <a href="#" class="link-natural"><i class="icon-doc mr-2"></i>View</a>
                        </div>
                        <div class="list-inline-item">
                            <a href="#" class="link-natural"><i class="icon-note mr-2"></i>Edit</a>
                        </div>
                        <div class="list-inline-item">
                            <a href="#" class="link-natural"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-5 w-100">
                <a href="#">&larr; Newer<span class="d-none d-sm-inline-block"> Posts</span></a>
                <span class="small text-muted p-1">Page 1 of 6</span>
                <a href="#">Older<span class="d-none d-sm-inline-block"> Posts</span> &rarr;</a>
            </div>

        </div>
    </div>
@endsection