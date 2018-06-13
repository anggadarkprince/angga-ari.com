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
            <div class="col-sm-6 col-md-3 ml-auto">
                <i class="icon-screen-smartphone display-4 mb-3 d-inline-block sr-show-up"></i>
                <p class="sr-show-up">{{ $user->setting('showcase.contact', $user->contact) }}</p>
            </div>
            <div class="col-sm-6 col-md-3 mr-auto mr-md-0">
                <i class="icon-envelope-open display-4 mb-3 d-inline-block sr-show-up"></i>
                <p class="sr-show-up">
                    <a href="mailto:me@angga-ari.com" class="link-natural">
                        {{ $user->setting('showcase.email', $user->email) }}
                    </a>
                </p>
            </div>
            @if($twitter)
                <div class="col-12 col-md-3 mr-auto d-none d-md-block">
                    <i class="icon-social-twitter display-4 mb-3 d-inline-block sr-show-up"></i>
                    <p class="sr-show-up">
                        <a href="https://twitter.com/{{ $twitter->getNickname() }}" class="link-natural">
                            {{ '@' . $twitter->getNickname() }}
                        </a>
                    </p>
                </div>
            @endif
        </div>
    </div>
</section>

<div id="map" class="mb-3"></div>

<section class="sr-profile">
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
            <div class="col-md-6 mx-auto">
                @include('components._contact')
            </div>
        </div>
    </div>
</section>