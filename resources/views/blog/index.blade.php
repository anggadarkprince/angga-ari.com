@extends('layouts.blog')

@section('title', 'Blog Page')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ Storage::url('layouts/header.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1 class="sr-show-up">Craft Things, Share Ideas</h1>
                        <span class="subheading sr-show-up">A simple blog post about nerdy and tech stuff</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 mr-auto">
                <div class="post-preview">
                    <div class="mb-3" style="height: 300px; background: url({{ Storage::url('showcases/thumbnails/1.jpg') }}) no-repeat center center / cover;"></div>
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

                <div class="post-preview">
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

                <div class="post-preview">
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

                <div class="post-preview">
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
                <div class="clearfix mb-5">
                    <a class="float-left" href="#">&larr; Newer Posts</a>
                    <a class="float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="post-sidebar">
                    <div class="widget">
                        <p class="widget-title">
                            Search
                        </p>
                        <form action="#">
                            <input type="search" name="q" class="form-control" placeholder="Search article...">
                        </form>
                    </div>
                    <div class="widget">
                        <p class="widget-title">
                            Categories
                        </p>
                        <ul class="widget-list">
                            <li><a href="#">Computer <span>(23)</span></a></li>
                            <li><a href="#">Programming <span>(633)</span></a>
                                <ul>
                                    <li><a href="#">Java <span>(34)</span></a></li>
                                    <li><a href="#">PHP <span>(71)</span></a></li>
                                    <li><a href="#">Javascript <span>(62)</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#">Codeigniter <span>(5)</span></a></li>
                            <li><a href="#">Laravel <span>(73)</span></a></li>
                            <li><a href="#">SQL <span>(62)</span></a>
                                <ul>
                                    <li><a href="#">MySQL <span>(72)</span></a></li>
                                    <li><a href="#">PostgreSQL <span>(26)</span></a></li>
                                    <li><a href="#">SQL Server <span>(12)</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#">CSS <span>(6)</span></a></li>
                            <li><a href="#">Uncategories <span>(81)</span></a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <p class="widget-title">
                            Archive
                        </p>
                        <ul class="widget-list">
                            <li><a href="#">March 2018 <span>(234)</span></a></li>
                            <li><a href="#">February 2018 <span>(342)</span></a></li>
                            <li><a href="#">January 2018 <span>(52)</span></a></li>
                            <li><a href="#">December 2017 <span>(33)</span></a></li>
                            <li><a href="#">November 2017 <span>(532)</span></a></li>
                            <li><a href="#">October 2017 <span>(623)</span></a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <p class="widget-title">
                            Popular Article
                        </p>
                        <ul class="widget-list">
                            <li><a href="#">How to code React.js</a></li>
                            <li><a href="#">Improve your workflow with gulp and grunt</a></li>
                            <li><a href="#">Mix in Laravel 5.6</a></li>
                            <li><a href="#">Bringing your web development process life again</a></li>
                            <li><a href="#">Tutorial using NPM properly</a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <p class="widget-title">
                            Socials
                        </p>
                        <p>Let's get in touch</p>
                        <div class="widget-list text-wide">
                            <a href="https://facebook.com/sharer/sharer.php?u={{ url()->full() }}">
                                <img src="{{ Storage::url('layouts/social/facebook.svg') }}"
                                     class="mr-2" style="width: 35px" alt="Facebook">
                            </a>
                            <a href="https://twitter.com/home?status={{ urlencode('Hey check this awesome article on ' . url()->full()) }}">
                                <img src="{{ Storage::url('layouts/social/twitter.svg') }}"
                                     class="mr-2" style="width: 35px" alt="Twitter">
                            </a>
                            <a href="https://plus.google.com/share?url={{ url()->full() }}">
                                <img src="{{ Storage::url('layouts/social/google-plus.svg') }}"
                                     class="mr-2" style="width: 35px" alt="Google">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
