<section class="p-0" id="showcases">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            @foreach($portfolios as $portfolio)
                <div class="col-lg-4 col-sm-6 sr-icons">
                    <a class="portfolio-box" href="{{ route('showcase.view', ['slug' => $portfolio->slug]) }}">
                        <img class="img-fluid d-block lazy loading" style="min-height: 232px" data-src="{{ asset('storage/' . get_small_version($portfolio->cover)) }}">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    {{ $portfolio->field }}
                                </div>
                                <div class="project-name">
                                    {{ $portfolio->title }}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>