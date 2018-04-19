@extends('showcase._layout')

@section('title', 'Showcase')

@section('showcase_description', 'Your professional profile')

@section('showcase_content')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div>
                <p>
                    Hey, I am Angga Ari Wijaya a boy with quarter century of age, just call me Angga, I'm a rookie software engineer, I used to live in Gresik - East Java, Indonesia.
                    Half workaholic, sometimes playing games, less sleep, build something like application or software. I practice everyday by the way and I think I'm good at it as well.</p>
                <p>
                    Welcome to my personal website, here you can found my latest works, achievement, history, papers
                    and blog posts. Presently I am working at Transcon Indonesia a logistic company in Surabaya, Indonesia since 2017.
                </p>
            </div>

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
                    <p>
                        <a href="mailto:angga.aw92@gmail.com" class="link-natural">
                            angga.aw92@gmail.com
                        </a>
                    </p>
                </div>
            </div>

            <div class="row">
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

            <p class="text-center text-sm-left text-wide mt-4">
                <a href="#"><i class="fab fa-facebook-f fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fab fa-linkedin-in fa-2x"></i></a>
                <a href="#"><i class="fab fa-google-plus-g fa-2x"></i></a>
                <a href="#"><i class="fab fa-behance fa-2x"></i></a>
                <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
            </p>

            <a href="{{ route('setting.profile') }}" class="btn btn-primary btn-wide mt-5">Update Setting</a>
        </div>
    </div>

@endsection