@extends('layouts.blog')

@section('title', 'Blog Title')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ Storage::url('layouts/header.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>Man must explore, and this is exploration at its greatest</h1>
                        <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                        <span class="meta">Posted by <a href="#">Angga Ari Wijaya</a> on August 24, 2018</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>

                    <p>Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.</p>

                    <p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>

                    <p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>

                    <pre>
                <code class="language-javascript line-numbers">
        var _self = (typeof window !== 'undefined') ? window   // if in browser : (
            (typeof WorkerGlobalScope !== 'undefined' && self instanceof WorkerGlobalScope)
            ? self // if in worker
            : {}   // if in node js
        );</code>
                    </pre>

                    <p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.</p>

                    <h3 class="section-heading">The Final Frontier</h3>

                    <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>

                    <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>

                    <blockquote class="blockquote">The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>

                    <p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>

                    <h3 class="section-heading">Reaching for the Stars</h3>

                    <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>

                    <a href="#">
                        <img class="img-fluid" src="img/post-sample-image.jpg" alt="">
                    </a>
                    <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>

                    <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>

                    <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>

                    <p>Placeholder text by
                        <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by
                        <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>
                </div>
            </div>
        </div>
    </article>

    <div class="container mt-3">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="row">
                <div class="addthis_inline_share_toolbox"></div>
            </div>
        </div>
    </div>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading">Related Articles</h3>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
                    <div class="post-preview">
                        <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}">
                            <img src="{{ Storage::url('showcases/thumbnails/1.jpg') }}" class="img-fluid mb-3" alt="">
                            <h2 class="post-title">
                                How often should you tweet?
                            </h2>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Angga Ari Wijaya</a> on July 8, 2018</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
                    <div class="post-preview">
                        <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}">
                            <img src="{{ Storage::url('showcases/thumbnails/2.jpg') }}" class="img-fluid mb-3" alt="">
                            <h2 class="post-title">
                                Failure is not an option
                            </h2>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Angga Ari Wijaya</a> on July 8, 2018</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
                    <div class="post-preview">
                        <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}">
                            <img src="{{ Storage::url('showcases/thumbnails/3.jpg') }}" class="img-fluid mb-3" alt="">
                            <h2 class="post-title">
                                Science has not yet mastered
                            </h2>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Angga Ari Wijaya</a> on July 8, 2018</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div id="disqus_thread"></div>

                <script>
                    var disqus_config = function () {
                        this.page.url = 'http://127.0.0.1:8000/blog/2018/03/how-ofter-should-you-tweet';  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = 'how-ofter-should-you-tweet'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };

                    (function() {
                        var d = document, s = d.createElement('script');
                        s.src = 'https://angga-web-blog.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

            </div>
        </div>
    </div>

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5aca2cea42e314f6"></script>
@endsection