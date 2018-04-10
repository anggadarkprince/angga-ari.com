@extends('layouts.showcase')

@section('title', 'Showcase index')

@section('content')
    <header class="masthead overlay text-center text-white d-flex" style="background: url('{{ Storage::url('/layouts/header-2.jpg') }}') no-repeat bottom center scroll;">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="text-wide">SHOWCASES</h2>
                    <p>Portfolio I've ever made</p>
                    <hr class="mb-0">
                </div>
            </div>
        </div>
    </header>

    <section id="content">
        <div class="container">
            <!-- Portfolio Controller/Buttons -->
            <div class="mb-5 text-center showcase-control">
                <button class="filter btn btn-sm btn-outline-primary" data-filter="all">
                    All
                </button>
                <button class="filter btn btn-sm btn-outline-primary" data-filter=".design">
                    Design
                </button>
                <button class="filter btn btn-sm btn-outline-primary" data-filter=".development">
                    Development
                </button>
                <button class="filter btn btn-sm btn-outline-primary" data-filter=".print">
                    Print
                </button>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->

            <div id="showcases">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mix design print">
                        <a class="portfolio-box" href="{{ Storage::url('showcases/thumbnails/1.jpg') }}">
                            <img class="img-fluid" src="{{ Storage::url('showcases/thumbnails/1.jpg') }}" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 mix development">
                        <a class="portfolio-box" href="{{ Storage::url('showcases/thumbnails/2.jpg') }}">
                            <img class="img-fluid" src="{{ Storage::url('showcases/thumbnails/2.jpg') }}" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 mix design">
                        <a class="portfolio-box" href="{{ Storage::url('showcases/thumbnails/3.jpg') }}">
                            <img class="img-fluid" src="{{ Storage::url('showcases/thumbnails/3.jpg') }}" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 mix development print">
                        <a class="portfolio-box" href="{{ Storage::url('showcases/thumbnails/4.jpg') }}">
                            <img class="img-fluid" src="{{ Storage::url('showcases/thumbnails/4.jpg') }}" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 mix print">
                        <a class="portfolio-box" href="{{ Storage::url('showcases/thumbnails/5.jpg') }}">
                            <img class="img-fluid" src="{{ Storage::url('showcases/thumbnails/5.jpg') }}" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 mix design development print">
                        <a class="portfolio-box" href="{{ Storage::url('showcases/thumbnails/6.jpg') }}">
                            <img class="img-fluid" src="{{ Storage::url('showcases/thumbnails/6.jpg') }}" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Category
                                    </div>
                                    <div class="project-name">
                                        Project Name
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection