@extends('layouts.landing')

@section('title', 'Home Page')

@section('content')
    <header class="masthead full-height text-center text-white d-flex" style="background: url('{{ Storage::url('/layouts/header-2.jpg') }}') no-repeat bottom center scroll;">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-5 mx-auto sr-show-up">
                    <img src="{{ Storage::url('avatars/2018040600001/avatar.jpg') }}" alt="Angga" class="mb-3 rounded-circle">
                </div>
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase sr-show-up">
                        <strong class="text-stronger">NERD SOFTWARE ARCHITECT</strong>
                    </h1>
                    <h3 class="text-wide sr-show-up">ANGGA ARI WIJAYA</h3>
                    <hr class="sr-show-up">
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5 sr-show-up">An introvert web programmer who tried to change his small world, craft things with his keyboard and papers, love warm rice and coffee!</p>
                    <a class="btn btn-primary btn-xl btn-pill js-scroll-trigger sr-button" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-black" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h2 class="section-heading text-white sr-icons">Who the hell am I?</h2>
                    <hr class="light my-4 sr-icons">
                    <p class="text-faded mb-5 sr-icons">
                        I'm a software developer who has been freelancing for 2 years, currently I have full time job and focus on web development.
                        Basically I am a calm and quite type of person, common engineer trait and personality.
                        I am very passionate about programming and new technology. Moreover I am very ease and ready to be self learner.
                        I force my self to keep persistent and discipline. I love working with my passion and been wanting to another challenge if there is an opportunity.
                    </p>
                    <a class="btn btn-light btn-lg js-scroll-trigger sr-button" href="#profile">Meet him personally</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <section id="profile">
            <div class="row justify-content-sm-between">
                <div class="col-md-3 mb-3 text-center text-md-right sr-profile">
                    <p class="mb-0 section-heading-group"><strong>PROFILE</strong></p>
                    <small class="text-muted">What I am all about</small>
                </div>
                <div class="col-md-8 text-center text-sm-left">
                    <div class="sr-profile">
                        <p>
                            Hey, I am Angga Ari Wijaya a boy with quarter century of age, just call me Angga, I'm a rookie software engineer, I used to live in Gresik - East Java, Indonesia.
                            Half workaholic, sometimes playing games, less sleep, build something like application or software. I practice everyday by the way and I think I'm good at it as well.</p>
                        <p>
                            Welcome to my personal website, here you can found my latest works, achievement, history, papers
                            and blog posts. Presently I am working at Transcon Indonesia a logistic company in Surabaya, Indonesia since 2017.
                        </p>
                    </div>

                    <div class="row sr-profile">
                        <div class="col-sm-4">
                            <p class="mb-1 mb-sm-2"><strong>Full Name</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>Angga Ari Wijaya</p>
                        </div>
                    </div>

                    <div class="row sr-profile">
                        <div class="col-sm-4">
                            <p class="mb-1 mb-sm-2"><strong>Contact</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>(+62) 85655479868</p>
                        </div>
                    </div>

                    <div class="row sr-profile">
                        <div class="col-sm-4">
                            <p class="mb-1 mb-sm-2"><strong>Email</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>
                                <a href="mailto:angga.aw92@gmail.com" class="link-natural">
                                    angga.aw92@gmail.com
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="row sr-profile">
                        <div class="col-sm-4">
                            <p class="mb-1 mb-sm-2"><strong>Website</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>
                                <a href="http://anggadarkprince.wordpress.com" class="link-natural">
                                    http://anggadarkprince.wordpress.com
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="row sr-profile">
                        <div class="col-sm-4">
                            <p class="mb-1 mb-sm-2"><strong>Day of Birth</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>May 26, 1992</p>
                        </div>
                    </div>

                    <div class="row sr-profile">
                        <div class="col-sm-4">
                            <p class="mb-1 mb-sm-2"><strong>Location</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>Gresik, East Java Indonesia 61122</p>
                        </div>
                    </div>

                    <p class="text-center text-sm-left text-wide mt-4 mb-0 sr-profile">
                        <a href="#"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in fa-2x"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g fa-2x"></i></a>
                        <a href="#"><i class="fab fa-behance fa-2x"></i></a>
                        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                    </p>
                </div>
            </div>
        </section>

        <section id="experiences">
            <div class="row justify-content-sm-between">
                <div class="col-sm-3 mb-3 text-center text-sm-right sr-profile">
                    <p class="mb-0 section-heading-group"><strong>JOURNEY</strong></p>
                    <small class="text-muted">Education and experiences</small>
                </div>
                <div class="col-sm-8 text-center text-sm-left">
                    <div class="mb-4">
                        <p class="text-primary sr-profile"><strong>EDUCATIONS</strong></p>
                        <ul class="list-unstyled">
                            <li class="sr-profile">
                                <div class="row">
                                    <div class="col-md-7">
                                        <p class="mb-1"><strong>Bachelor Degree</strong></p>
                                        <p class="text-muted mb-1 mb-md-3">University of Jember - Information System</p>
                                    </div>
                                    <div class="col-md-5 text-md-right">
                                        <p class="mb-1"><strong>2010 - 2016</strong></p>
                                        <p class="mb-4 mb-md-3">Jember, Indonesia</p>
                                    </div>
                                </div>
                            </li>
                            <li class="sr-profile">
                                <div class="row">
                                    <div class="col-md-7">
                                        <p class="mb-1"><strong>High School</strong></p>
                                        <p class="text-muted mb-1 mb-md-3">SMK Semen Gresik - Mechanic Automotive</p>
                                    </div>
                                    <div class="col-md-5 text-md-right">
                                        <p class="mb-1"><strong>2007 - 2010</strong></p>
                                        <p class="mb-4 mb-md-3">Gresik, Indonesia</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <p class="text-primary sr-profile"><strong>EXPERIENCES</strong></p>
                        <ul class="list-unstyled">
                            <li class="mb-3 sr-profile">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="mb-1"><strong>Remote Job</strong></p>
                                        <p class="mb-1 text-primary">Freelance Programmer</p>
                                    </div>
                                    <div class="col-md-4 text-md-right">
                                        <p class="mb-1"><strong>2015 - 2018</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="text-muted">
                                            I worked remotely for many client that required to build web, desktop, and mobile application
                                            in small and medium size. I used many frameworks and face a lot of technical issue alone, sometime
                                            work with partner together. I build from scratch the modules with Laravel or Codeigniter for web application,
                                            Java Android for mobile app, and Adobe AIR or Flash for games. Wrote query in MySQL or Postgre DBMS and deployment through Apache or NginX in VPS with basic configurations.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3 sr-profile">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="mb-1"><strong>Internship: Ministry of Transmigration and Manpower of RI</strong></p>
                                        <p class="mb-1 text-primary">Temporary Junior Programmer</p>
                                    </div>
                                    <div class="col-md-4 text-md-right">
                                        <p class="mb-1"><strong>Jakarta, 2015 - 2015</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="text-muted">
                                            Translate, design and developing government IT business as Internship Programme Project.
                                            I developed task scheduler in android with Java and hybrid app for iPad. Also
                                            I built simple office letter management for daily basis usage (intranet-based website).
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3 sr-profile">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="mb-1"><strong>Lab Assistance</strong></p>
                                        <p class="mb-1 text-primary">Programming Assistance</p>
                                    </div>
                                    <div class="col-md-4 text-md-right">
                                        <p class="mb-1"><strong>Jember, 2012 - 2014</strong></p>
                                    </div>
                                    <div class="col">
                                        <p class="text-muted">
                                            Lab is one of my favorite place in University, try to share my knowledge by teaching another students.
                                            Improve skills in daily basis, managed programming event and course, engaged with lecture project and maintained
                                            computers also any equipment inside.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <p class="text-primary sr-profile"><strong>ACHIEVEMENTS</strong></p>
                        <ul class="list-unstyled">
                            <li class="mb-3 sr-profile">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="mb-1"><strong>Discovery National Event</strong></p>
                                        <p class="mb-1 text-primary">4th application discovery</p>
                                    </div>
                                    <div class="col-md-4 text-md-right">
                                        <p class="mb-1"><strong>Jember, 2014</strong></p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3 sr-profile">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="mb-1"><strong>HIMASIF Friendship Competition</strong></p>
                                        <p class="mb-1 text-primary">1th algorithm category</p>
                                    </div>
                                    <div class="col-md-4 text-md-right">
                                        <p class="mb-1"><strong>Jember, 2014</strong></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills">
            <div class="row justify-content-sm-between">
                <div class="col-sm-3 mb-3 text-center text-sm-right sr-skill">
                    <p class="mb-0 section-heading-group"><strong>EXPERTISE</strong></p>
                    <small class="text-muted">Every detail of skills</small>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-lg-6 mb-5">
                            <div class="row sr-skill">
                                <div class="col-1">
                                    <strong class="text-gray-400">01</strong>
                                </div>
                                <div class="col-11">
                                    <p><strong>ADVANCED CSS</strong></p>
                                    <p class="skill-description">We're entering the deepest realms of CSS3 now, using gulp stack and webpack automate front end builder.</p>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <strong class="text-primary">70%</strong>
                                        </div>
                                        <div class="col-10">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="row sr-skill">
                                <div class="col-1">
                                    <strong class="text-gray-400">02</strong>
                                </div>
                                <div class="col-11">
                                    <p><strong>FRONT END DESIGN</strong></p>
                                    <p class="skill-description">Involves creating the HTML, CSS, and presentational JavaScript code that makes up a user interface.</p>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2 col-sm-4 col-md-2">
                                            <strong class="text-primary">50%</strong>
                                        </div>
                                        <div class="col-10 col-sm-8 col-md-10">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-lg-6 mb-5">
                            <div class="row sr-skill">
                                <div class="col-1">
                                    <strong class="text-gray-400">03</strong>
                                </div>
                                <div class="col-11">
                                    <p><strong>VERSION CONTROL</strong></p>
                                    <p class="skill-description">GIT version control software to track every modification my code in a special kind of database.</p>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <strong class="text-primary">30%</strong>
                                        </div>
                                        <div class="col-10">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="row sr-skill">
                                <div class="col-1">
                                    <strong class="text-gray-400">04</strong>
                                </div>
                                <div class="col-11">
                                    <p><strong>WEB PROGRAMMING</strong></p>
                                    <p class="skill-description">I'm using Laravel, codeigniter mostly (based PHP language), little Yii, Java EE, Rails and Django.</p>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <strong class="text-primary">85%</strong>
                                        </div>
                                        <div class="col-10">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-lg-6 mb-5">
                            <div class="row sr-skill">
                                <div class="col-1">
                                    <strong class="text-gray-400">05</strong>
                                </div>
                                <div class="col-11">
                                    <p><strong>DATABASE / PL</strong></p>
                                    <p class="skill-description">Using MySql in daily basis, some project with PostgreSQL, maintain basic query and procedure.</p>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <strong class="text-primary">45%</strong>
                                        </div>
                                        <div class="col-10">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="row sr-skill">
                                <div class="col-1">
                                    <strong class="text-gray-400">06</strong>
                                </div>
                                <div class="col-11">
                                    <p><strong>JAVASCRIPT / JQUERY</strong></p>
                                    <p class="skill-description">Some UI libraries and selector fancy jQuery in many project that I have been done, little angular and react.</p>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <strong class="text-primary">50%</strong>
                                        </div>
                                        <div class="col-10">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center sr-profile">
                    <h3 class="section-heading">Let's Work Together</h3>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-3 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-code text-primary mb-3 sr-icons"></i>
                        <h4 class="mb-3 sr-showcase">Website Project</h4>
                        <p class="text-muted mb-0 sr-showcase">Share your idea to the world when everyone could access!</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-mobile-alt text-primary mb-3 sr-icons"></i>
                        <h4 class="mb-3 sr-showcase">Mobile App</h4>
                        <p class="text-muted mb-0 sr-showcase">Everything goes simple right in your hand, a handheld app!</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-paint-brush text-primary mb-3 sr-icons"></i>
                        <h4 class="mb-3 sr-showcase">UI/UX Design</h4>
                        <p class="text-muted mb-0 sr-showcase">You have to make your interface with love these days!</p>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a class="btn btn-primary btn-pill btn-lg mt-5 sr-showcase" href="{{ route('showcase') }}">SHOW ALL MY SHOWCASES</a>
            </div>
        </div>
    </section>

    <section class="p-0" id="showcases">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4 col-sm-6 sr-showcase">
                    <a class="portfolio-box" href="{{ route('showcase.view', ['slug' => 'website-orion-management']) }}">
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
                <div class="col-lg-4 col-sm-6 sr-showcase">
                    <a class="portfolio-box" href="{{ route('showcase.view', ['slug' => 'website-orion-management']) }}">
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
                <div class="col-lg-4 col-sm-6 sr-showcase">
                    <a class="portfolio-box" href="{{ route('showcase.view', ['slug' => 'website-orion-management']) }}">
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
                <div class="col-lg-4 col-sm-6 sr-showcase">
                    <a class="portfolio-box" href="{{ route('showcase.view', ['slug' => 'website-orion-management']) }}">
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
                <div class="col-lg-4 col-sm-6 sr-showcase">
                    <a class="portfolio-box" href="{{ route('showcase.view', ['slug' => 'website-orion-management']) }}">
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
                <div class="col-lg-4 col-sm-6 sr-showcase">
                    <a class="portfolio-box" href="{{ route('showcase.view', ['slug' => 'website-orion-management']) }}">
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
    </section>

    <section class="bg-dark text-white">
        <div class="container text-center">
            <h3 class="mb-2 sr-profile">Download My Professional CV</h3>
            <p class="mb-5 sr-profile">Generated PDF file</p>
            <a class="btn btn-light btn-xl sr-button mb-5" href="#">Download Now</a>
            <p class="sr-profile">
                Or visit my old profile <a href="https://anggadarkprince.github.io">anggadarkprince.github.io</a>
            </p>
        </div>
    </section>

    <section id="blog" class="text-gray-700">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center sr-blog">
                    <h3 class="section-heading">Recent Articles</h3>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item sr-blog">
                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'how-ofter-should-you-tweet']) }}">
                                <img src="{{ Storage::url('showcases/thumbnails/1.jpg') }}" alt="">
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

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item sr-blog">
                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'content-is-still-king']) }}">
                                <img src="{{ Storage::url('showcases/thumbnails/2.jpg') }}" alt="">
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

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item sr-blog">
                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="{{ route('blog.article', ['year' => '2018', 'month' => '03', 'slug' => 'social-media-at-work']) }}">
                                <img src="{{ Storage::url('showcases/thumbnails/3.jpg') }}" alt="">
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
                <a class="btn btn-primary btn-pill btn-lg mt-5 sr-button" href="{{ route('blog') }}">VISIT MY BLOG</a>
            </div>

        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h3 class="section-heading sr-show-up">Let's Get In Touch!</h3>
                    <hr class="my-4 sr-show-up">
                    <p class="mb-5 sr-show-up">
                        Ready to start your next project with me? That's great! Give me a call or send me an
                        email and I will get back to you as soon as possible!
                    </p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-6 col-md-3 ml-auto">
                    <i class="icon-screen-smartphone fa-3x mb-3 d-inline-block sr-contact"></i>
                    <p class="sr-show-up">(+62) 85655479868</p>
                </div>
                <div class="col-6 col-md-3 mr-auto mr-md-0">
                    <i class="icon-envelope-open fa-3x mb-3 d-inline-block sr-contact"></i>
                    <p class="sr-show-up">
                        <a href="mailto:me@angga-ari.com" class="link-natural">me@angga-ari.com</a>
                    </p>
                </div>
                <div class="col-12 col-md-3 mr-auto d-none d-md-block">
                    <i class="icon-social-twitter fa-3x mb-3 d-inline-block sr-contact"></i>
                    <p class="sr-show-up">
                        <a href="https://twitter.com/anggadarkprince" class="link-natural">
                            @anggadarkprince
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map" class="mb-3"></div>

    <section class="sr-contact-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading">Contact With Me</h3>
                    <p class="text-muted">Let's chat or buy me a cup of coffee, I like latte by the way</p>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    @include('components.contact')
                </div>
            </div>
        </div>
    </section>

    <script>
        function initMap() {
            var home = {lat: -7.1760619, lng: 112.6574068};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: home,
                styles: [
                    {
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#212121"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#212121"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#bdbdbd"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#181818"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#1b1b1b"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#2c2c2c"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#8a8a8a"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#373737"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#3c3c3c"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway.controlled_access",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#4e4e4e"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#3d3d3d"
                            }
                        ]
                    }
                ],
                draggable: true,
                disableDefaultUI: true
            });
            var marker = new google.maps.Marker({
                position: home,
                map: map,
                icon: 'storage/layouts/map-marker.svg'
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCT-r6OXHg5idQfA8x5vLAlMb8Pul4QE6Q&callback=initMap">
    </script>

@endsection