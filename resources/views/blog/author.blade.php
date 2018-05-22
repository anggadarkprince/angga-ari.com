@extends('layouts.blog')

@section('title', 'Blog Author')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ Storage::url('layouts/header.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-author">
                        <img src="{{ Storage::url('avatars/2018040600001/avatar.jpg') }}" alt="Angga" class="mb-3 rounded-circle sr-show-up">
                        <h1 class="post-author-name text-uppercase text-wide sr-show-up">Angga Ari Wijaya</h1>
                        <p class="text-faded sr-show-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, delectus distinctio dolores ducimus earum esse est facilis incidunt.</p>
                        <ul class="list-inline text-center text-uppercase post-author-stats">
                            <li class="list-inline-item sr-show-up">
                                <span class="d-block d-md-inline-block">234</span> {{ str_plural('Post', 234) }}
                            </li><li class="list-inline-item sr-show-up">
                                <span class="d-block d-md-inline-block">13</span> {{ str_plural('Tag', 13) }}
                            </li><li class="list-inline-item sr-show-up">
                                <span class="d-block d-md-inline-block">463K</span> {{ str_plural('View', 463000) }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container content-wrapper">

        <div class="row">
            <div class="col-sm-11 col-md-9 col-lg-7 mx-auto">
                <div class="mb-5">
                    <div class="dropdown sr-show-up">
                        <button class="btn btn-outline-primary btn-wide btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Popular
                        </button>
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header">Method</h6>
                            <a class="dropdown-item" href="#">
                                <i class="icon-calendar mr-1"></i> Latest
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="icon-trophy mr-1"></i> Popular
                            </a>
                        </div>
                    </div>
                </div>

                <div class="post-preview sr-show-up">
                    <div class="mb-3 rounded" style="height: 300px; background: url({{ Storage::url('showcases/thumbnails/1.jpg') }}) no-repeat center center / cover;"></div>
                    <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}">
                        <h2 class="post-title">
                            Man must explore, and this is exploration at its greatest
                        </h2>
                        <h3 class="post-subtitle">
                            Problems look mighty small from 150 miles up
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="{{ route('blog.author', ['username' => 'angga.ari']) }}">Angga Ari Wijaya</a> on September 24, 2018</p>
                    <p class="post-summary">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dignissimos eaque molestias
                        nesciunt officia recusandae repellat ullam voluptas voluptate voluptatem! A cumque dolorum
                        inventore ipsam laboriosam laborum possimus sequi, soluta.
                    </p>
                    <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}" class="link-muted">Read More &rarr;</a>
                </div>

                <div class="post-preview sr-show-up">
                    <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}">
                        <h2 class="post-title">
                            I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                        </h2>
                    </a>
                    <p class="post-meta">Posted by <a href="{{ route('blog.author', ['username' => 'angga.ari']) }}">Hallen Mirai</a> on September 18, 2018</p>
                    <p class="post-summary">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, rerum, totam. Adipisci
                        blanditiis deleniti dignissimos, error est exercitationem illo laudantium libero magnam nihil
                        nobis, quibusdam velit voluptas. Enim, sit, sunt.
                    </p>
                    <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}" class="link-muted">Read More &rarr;</a>
                </div>
                <div class="post-preview sr-show-up">
                    <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}">
                        <h2 class="post-title">
                            Science has not yet mastered prophecy
                        </h2>
                        <h3 class="post-subtitle">
                            We predict too much for the next year and yet far too little for the next ten.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="{{ route('blog.author', ['username' => 'angga.ari']) }}">Imelda Agustine</a> on August 24, 2018</p>
                    <p class="post-summary">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid, autem deleniti dolor
                        eius, facilis iste itaque laborum magnam maiores minus officiis optio pariatur quidem
                        repellendus sint tenetur voluptate. Architecto!
                    </p>
                    <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}" class="link-muted">Read More &rarr;</a>
                </div>

                <div class="post-preview sr-show-up">
                    <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}">
                        <h2 class="post-title">
                            Failure is not an option
                        </h2>
                        <h3 class="post-subtitle">
                            Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="{{ route('blog.author', ['username' => 'angga.ari']) }}">Angga Ari Wijaya</a> on July 8, 2018</p>
                    <p class="post-summary">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam aperiam,
                        aspernatur at aut consequatur cum dicta dolor dolore dolorem doloremque, dolores explicabo harum
                        natus non perferendis perspiciatis quam, tempora.
                    </p>
                    <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}" class="link-muted">Read More &rarr;</a>
                </div>

                <!-- Pager -->
                <div class="clearfix mb-5 sr-show-up">
                    <a class="float-left" href="#">&larr; Newer Posts</a>
                    <a class="float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>

    </div>
@endsection