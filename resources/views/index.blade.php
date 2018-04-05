@extends('layouts.landing')

@section('title', 'Home Page')

@section('content')
    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
                        <strong>NERD SOFTWARE ARCHITECT</strong>
                    </h1>
                    <h3>ANGGA ARI WIJAYA</h3>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5">An introvert web programmer who tried to change the small world, craft things with his keyboard typing, love warm rice and coffee!</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading text-white">Who the hell am I?</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-4">
                        I'm a software developer who has been freelancing for 2 years currently focus on web programming,
                        Basically I am a calm and quite type of person, common engineer trait and personality.
                        I am very passionate about my work and new technology. Moreover I am at very ease when working in a
                        collaboration as team, and ready to be self learner. I force my self to keep persistent and discipline.
                        My weakness is public speaking, my communication skills which I am trying to improve day by day but
                        I am working on it. It may be also positive sometimes. I love working with my passion about
                        design and programming and been wanting to jump into it if there is a big opportunity.
                    </p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Meet him personally!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="experiences">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-gem text-primary mb-3 sr-icons"></i>
                        <h3 class="mb-3">Sturdy Templates</h3>
                        <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
                        <h3 class="mb-3">Ready to Ship</h3>
                        <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-newspaper text-primary mb-3 sr-icons"></i>
                        <h3 class="mb-3">Up to Date</h3>
                        <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
                        <h3 class="mb-3">Made with Love</h3>
                        <p class="text-muted mb-0">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills"></section>

    <section class="p-0" id="showcases">
        <div class="container-fluid p-0">
            <div class="row no-gutters popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
                        <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
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
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
                        <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
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
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
                        <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
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
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
                        <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
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
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
                        <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
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
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
                        <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
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
    </section>

    <section class="bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
            <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="my-4">
                    <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center">
                    <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fa fa-envelope fa-3x mb-3 sr-contact"></i>
                    <p>
                        <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection