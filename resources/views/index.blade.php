@extends('layouts.landing')

@section('title', 'Home Page')

@section('content')
    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <img src="{{ Storage::url('avatars/2018040600001/avatar.jpg') }}" alt="Angga" class="mb-3 rounded-circle">
                </div>
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
                        <strong>NERD SOFTWARE ARCHITECT</strong>
                    </h1>
                    <h3 class="wide-text">ANGGA ARI WIJAYA</h3>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5">An introvert web programmer who tried to change his small world, craft things with his keyboard and papers, love warm rice and coffee!</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-black" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h2 class="section-heading text-white">Who the hell am I?</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-5">
                        I'm a software developer who has been freelancing for 2 years, currently have full time job and focus on web development.
                        Basically I am a calm and quite type of person, common engineer trait and personality.
                        I am very passionate about programming and new technology. Moreover I am very ease and ready to be self learner.
                        I force my self to keep persistent and discipline. I love working with my passion and been wanting to another challenge if there is an opportunity.
                    </p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Meet him personally</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <section id="profile" class="text-gray-700">
            <div class="row justify-content-sm-between">
                <div class="col-xs-4 col-sm-3 mb-3 text-center text-sm-right">
                    <p class="mb-0 text-title"><strong>PROFILE</strong></p>
                    <small class="text-muted">What I am all about</small>
                </div>
                <div class="col-xs-8 col-sm-8">
                    <p>
                        Hey, I am Angga Ari Wijaya a boy with quarter century of age, just call me Angga, I'm a rookie software engineer, I used to live in Gresik - East Java, Indonesia.
                        Half workaholic, sometimes playing games, less sleep, build something like application or software. I practice everyday by the way and I think I'm good at it as well.</p>
                    <p>
                        Welcome to my personal website, here you can found my latest works, achievement, history, papers
                        and blog posts. Presently I am working at Transcon Indonesia a logistic company in Surabaya, Indonesia since 2017.
                    </p>

                    <div class="row">
                        <div class="col-sm-4">
                            <p class="mb-1 mb-sm-2"><strong>Full Name</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>Angga Ari Wijaya</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <p class="mb-1 mb-sm-2"><strong>Contact</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>(+62) 85655479868</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <p class="mb-1 mb-sm-2"><strong>Email</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>angga.aw92@gmail.com</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <p class="mb-1 mb-sm-2"><strong>Blog</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>anggadarkprince.wordpress.com</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <p class="mb-1 mb-sm-2"><strong>Day of Birth</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>May 26, 1992</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <p class="mb-1 mb-sm-2"><strong>Location</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>Gresik, East Java Indonesia 61122</p>
                        </div>
                    </div>

                    <p class="text-center text-sm-left wide-text mt-4 mb-0">
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

        <section id="experiences" class="text-gray-700">
            <div class="row justify-content-sm-between">
                <div class="col-xs-4 col-sm-3 mb-3 text-center text-sm-right">
                    <p class="mb-0 text-title"><strong>JOURNEY</strong></p>
                    <small class="text-muted">Education and experiences</small>
                </div>
                <div class="col-xs-8 col-sm-8">
                    <div class="mb-5">
                        <p class="text-primary"><strong>EDUCATIONS</strong></p>
                        <ul class="list-unstyled">
                            <li>
                                <div class="row">
                                    <div class="col-md-7">
                                        <p class="mb-1"><strong>Bachelor Degree</strong></p>
                                        <p class="text-muted">University of Jember - Information System</p>
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <p class="mb-1"><strong>2010 - 2016</strong></p>
                                        <p>Jember, Indonesia</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-7">
                                        <p class="mb-1"><strong>High School</strong></p>
                                        <p class="text-muted">SMK Semen Gresik - Mechanic Automotive</p>
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <p class="mb-1"><strong>2007 - 2010</strong></p>
                                        <p>Gresik, Indonesia</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-5">
                        <p class="text-primary"><strong>EXPERIENCES</strong></p>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="mb-1"><strong>Remote Job</strong></p>
                                        <p class="mb-1 text-primary">Freelance Programmer</p>
                                    </div>
                                    <div class="col-md-4 text-right">
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
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="mb-1"><strong>Internship: Ministry of Transmigration and Manpower of RI</strong></p>
                                        <p class="mb-1 text-primary">Temporary Junior Programmer</p>
                                    </div>
                                    <div class="col-md-4 text-right">
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
                            <li>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="mb-1"><strong>Lab Assistance</strong></p>
                                        <p class="mb-1 text-primary">Programming Assistance</p>
                                    </div>
                                    <div class="col-md-4 text-right">
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
                    <div class="mb-3">
                        <p class="text-primary"><strong>ACHIEVEMENTS</strong></p>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="mb-1"><strong>Discovery National Event</strong></p>
                                        <p class="mb-1 text-primary">4th application discovery</p>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <p class="mb-1"><strong>Jember, 2014</strong></p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="mb-1"><strong>HIMASIF Friendship Competition</strong></p>
                                        <p class="mb-1 text-primary">1th algorithm category</p>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <p class="mb-1"><strong>Jember, 2014</strong></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="text-gray-700">
            <div class="row justify-content-sm-between">
                <div class="col-xs-4 col-sm-3 mb-3 text-center text-sm-right">
                    <p class="mb-0 text-title"><strong>EXPERTISE</strong></p>
                    <small class="text-muted">Every detail of skills</small>
                </div>
                <div class="col-xs-8 col-sm-8">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-1">
                                    <strong class="text-gray-400">01</strong>
                                </div>
                                <div class="col-11">
                                    <p><strong>ADVANCED CSS</strong></p>
                                    <p class="skill-content">We're entering the deepest realms of CSS3 now, using gulp stack and webpack automate front end builder.</p>
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
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-1">
                                    <strong class="text-gray-400">02</strong>
                                </div>
                                <div class="col-11">
                                    <p><strong>FRONT END DESIGN</strong></p>
                                    <p class="skill-content">Involves creating the HTML, CSS, and presentational JavaScript code that makes up a user interface.</p>
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
                        <div class="w-100 mb-5"></div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-1">
                                    <strong class="text-gray-400">03</strong>
                                </div>
                                <div class="col-11">
                                    <p><strong>VERSION CONTROL</strong></p>
                                    <p class="skill-content">GIT version control software to track every modification my code in a special kind of database.</p>
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
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-1">
                                    <strong class="text-gray-400">04</strong>
                                </div>
                                <div class="col-11">
                                    <p><strong>WEB PROGRAMMING</strong></p>
                                    <p class="skill-content">I'm using Laravel, code igniter mostly (based PHP language), little Java EE, rails and django.</p>
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
                        <div class="w-100 mb-5"></div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-1">
                                    <strong class="text-gray-400">05</strong>
                                </div>
                                <div class="col-11">
                                    <p><strong>DATABASE / PL</strong></p>
                                    <p class="skill-content">Using MySql in daily basis, some project with PostgreSQL, maintain basic query and procedure.</p>
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
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-1">
                                    <strong class="text-gray-400">06</strong>
                                </div>
                                <div class="col-11">
                                    <p><strong>JAVASCRIPT / JQUERY</strong></p>
                                    <p class="skill-content">Some UI libraries and selector fancy jQuery in many project that I have been done, little angular and react.</p>
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
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Let's Work Together</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-3 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-code text-primary mb-3 sr-icons"></i>
                        <h4 class="mb-3">Website Project</h4>
                        <p class="text-muted mb-0">Share your idea to the world when everyone could access!</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-mobile-alt text-primary mb-3 sr-icons"></i>
                        <h4 class="mb-3">Mobile App</h4>
                        <p class="text-muted mb-0">Everything goes simple right in your hand, a handheld app!</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-paint-brush text-primary mb-3 sr-icons"></i>
                        <h4 class="mb-3">UI/UX Design</h4>
                        <p class="text-muted mb-0">You have to make your interface with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
            <h3 class="mb-2">Download My Professional CV</h3>
            <p class="mb-5">Generated PDF file</p>
            <a class="btn btn-light btn-xl sr-button mb-5" href="#">Download Now</a>
            <p>
                Or visit my old profile <a href="https://anggadarkprince.github.io">
                    anggadarkprince.github.io</a>
            </p>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="my-4">
                    <p class="mb-5">Ready to start your next project with me? That's great! Give me a call or send me an email and I will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center">
                    <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                    <p>(+62) 85655479868</p>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fa fa-envelope fa-3x mb-3 sr-contact"></i>
                    <p>
                        <a href="mailto:me@angga-ari.com">me@angga-ari.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map" class="mb-3" style="height: 250px"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} all rights reserved, made with love & coffee</p>
        </div>
    </footer>

    <script>
        function initMap() {
            var home = {lat: -7.1760619, lng: 112.6574068};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: home,
                styles: [
                    {
                        "featureType": "all",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "saturation": 36
                            },
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ],
                // Disables the default Google Maps UI components
                disableDefaultUI: true,
                scrollwheel: true,
                draggable: true,
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