@extends('blog._layout')

@section('title', 'Blog Journal')

@section('blog_description', 'Personal journal and articles')

@section('showcase_content')
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card box-shadow mb-4">
                <div class="card-img-top" style="height: 200px; background: url({{ Storage::url('showcases/thumbnails/1.jpg') }}) no-repeat center center / cover;"></div>
                <div class="card-body">
                    <h4 class="card-title mb-1"><a href="#">Man must explore, and this is exploration at its greatest </a></h4>
                    <p class="card-text mb-2 text-primary">Problems look mighty small from 150 miles up</p>

                    <p class="text-muted small">
                        Posted by <a href="{{ route('blog.author', ['username' => 'angga-ari-wijaya']) }}">Angga Ari Wijaya</a> on September 24, 2018
                    </p>

                    <p class="card-text mb-1">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dignissimos eaque molestias
                        nesciunt officia recusandae repellat ullam voluptas voluptate voluptatem! A cumque dolorum
                        inventore ipsam laboriosam laborum possimus sequi, soluta.
                    </p>
                </div>
                <div class="card-footer small text-uppercase text-muted">
                    <ul class="list-inline mb-0 float-right d-none d-sm-inline-block">
                        <li class="list-inline-item">
                            <i class="icon-eye mr-2"></i>334K
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-bubbles mr-2"></i>54K
                        </li>
                    </ul>
                    <ul class="list-inline mb-0 d-flex d-sm-block justify-content-sm-around">
                        <li class="list-inline-item">
                            <a href="#" class="link-natural"><i class="icon-doc mr-2"></i>Preview</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="link-natural"><i class="icon-note mr-2"></i>Edit</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="link-natural"><i class="icon-trash mr-2"></i>Delete</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card box-shadow mb-4">
                <div class="card-img-top" style="height: 200px; background: url({{ Storage::url('showcases/thumbnails/2.jpg') }}) no-repeat center center / cover;"></div>
                <div class="card-body">
                    <h4 class="card-title mb-1"><a href="#">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</a></h4>

                    <p class="text-muted small">
                        Posted by <a href="{{ route('blog.author', ['username' => 'angga-ari-wijaya']) }}">Angga Ari Wijaya</a> on September 24, 2018
                    </p>

                    <p class="card-text mb-1">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dignissimos eaque molestias
                        nesciunt officia recusandae repellat ullam voluptas voluptate voluptatem! A cumque dolorum
                        inventore ipsam laboriosam laborum possimus sequi, soluta.
                    </p>
                </div>
                <div class="card-footer small text-uppercase text-muted">
                    <ul class="list-inline mb-0 float-right d-none d-sm-inline-block">
                        <li class="list-inline-item">
                            <i class="icon-eye mr-2"></i>334K
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-bubbles mr-2"></i>54K
                        </li>
                    </ul>
                    <ul class="list-inline mb-0 d-flex d-sm-block justify-content-sm-around">
                        <li class="list-inline-item">
                            <a href="#" class="link-natural"><i class="icon-doc mr-2"></i>Preview</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="link-natural"><i class="icon-note mr-2"></i>Edit</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="link-natural"><i class="icon-trash mr-2"></i>Delete</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="clearfix mt-5">
                <a class="float-left" href="#">&larr; Newer Posts</a>
                <a class="float-right" href="#">Older Posts &rarr;</a>
            </div>

        </div>
    </div>
@endsection