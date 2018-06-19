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
            @foreach($posts as $post)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item sr-show-up">
                    <div class="blog-item-wrapper">
                        <a href="{{ $post->url }}">
                            <div class="blog-item-img lazy loading" style="min-height: 190px; background: no-repeat center center / cover;"
                                 data-src="{{ $post->cover_small_url }}">
                            </div>
                        </a>
                        <div class="blog-item-text">
                            <div class="meta-tags">
                                <span class="date">
                                    <i class="icon-clock"></i>
                                    {{ $post->published_at->diffForHumans() }}
                                </span>
                                <span class="comments">
                                    <a href="{{ $post->url }}#comment">
                                        <i class="icon-bubble"></i>
                                        {{ $post->comments }} {{ str_plural('Comment', $post->comments) }}
                                    </a>
                                </span>
                            </div>
                            <h3><a href="{{ $post->url }}">{{ $post->title }}</a></h3>
                            <p>{{ $post->getPreview() }}</p>
                            <a href="{{ $post->url }}" class="link-muted">READ MORE</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center">
            <a class="btn btn-primary btn-pill btn-lg mt-5 sr-profile" href="{{ route('blog') }}">
                VISIT MY BLOG
            </a>
        </div>

    </div>
</section>