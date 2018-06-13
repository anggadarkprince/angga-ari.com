<section id="blog" class="text-gray-700">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center sr-profile">
                <h3 class="section-heading">Recent Articles</h3>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item sr-show-up">
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}">
                            <img class="img-fluid d-block lazy loading" style="min-height: 190px" data-src="{{ asset('storage/showcases/thumbnails/1.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <div class="meta-tags">
                            <span class="date"><i class="icon-clock"></i>2 Days Ago</span>
                            <span class="comments"><a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}#comment"><i class="icon-bubble"></i> 24 Comments</a></span>
                        </div>
                        <h3>
                            <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}">How often should you tweet?</a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                        </p>
                        <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}" class="link-muted">
                            READ MORE <i class="ml-2 icon-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item sr-show-up">
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'content-is-still-king']) }}">
                            <img class="img-fluid d-block lazy loading" style="min-height: 190px" data-src="{{ asset('storage/showcases/thumbnails/2.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <div class="meta-tags">
                            <span class="date"><i class="icon-clock"></i>2 Days Ago</span>
                            <span class="comments"><a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'content-is-still-king']) }}#comment"><i class="icon-bubble"></i> 24 Comments</a></span>
                        </div>
                        <h3>
                            <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'content-is-still-king']) }}">Content is still king</a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                        </p>
                        <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'content-is-still-king']) }}" class="link-muted">
                            READ MORE <i class="ml-1 icon-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item sr-show-up">
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'social-media-at-work']) }}">
                            <img class="img-fluid d-block lazy loading" style="min-height: 190px" data-src="{{ asset('storage/showcases/thumbnails/3.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <div class="meta-tags">
                            <span class="date"><i class="icon-clock"></i>2 Days Ago</span>
                            <span class="comments"><a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'social-media-at-work']) }}#comment"><i class="icon-bubble"></i> 24 Comments</a></span>
                        </div>
                        <h3>
                            <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'social-media-at-work']) }}">Social media at work</a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                        </p>
                        <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'social-media-at-work']) }}" class="link-muted">
                            READ MORE <i class="ml-1 icon-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a class="btn btn-primary btn-pill btn-lg mt-5 sr-profile" href="{{ route('blog') }}">
                VISIT MY BLOG
            </a>
        </div>

    </div>
</section>