<header class="masthead full-height text-center text-white d-flex" style="background: url('{{ Storage::url('layouts/header-2.jpg') }}') no-repeat bottom center scroll;">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-5 mx-auto sr-show-up">
                <img src="{{ Storage::url(($user->avatar ? $user->avatar : 'avatars/noavatar.jpg')) }}" alt="Angga" class="mb-3 rounded-circle">
            </div>
            <div class="col-lg-10 text-uppercase mx-auto">
                <h1 class="text-uppercase sr-show-up">
                    <strong class="text-stronger">{{ $user->setting('showcase.tagline') }}</strong>
                </h1>
                <h3 class="text-wide sr-show-up">{{ $user->name }}</h3>
                <hr class="sr-show-up">
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5 sr-show-up">{{ $user->setting('showcase.subtagline') }}</p>
                <a class="btn btn-primary btn-xl btn-pill js-scroll-trigger sr-profile" href="#about">Find Out More</a>
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
                    {{ $user->setting('showcase.identity') }}
                </p>
                <a class="btn btn-light btn-lg js-scroll-trigger sr-profile" href="#profile">
                    Meet him personally
                </a>
            </div>
        </div>
    </div>
</section>