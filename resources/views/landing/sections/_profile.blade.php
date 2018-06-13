<section id="profile" class="pb-0">
    <div class="row justify-content-sm-between">
        <div class="col-md-3 mb-3 text-center text-md-right sr-profile">
            <p class="mb-0 section-heading-group"><strong>PROFILE</strong></p>
            <small class="text-muted">What I am all about</small>
        </div>

        <div class="col-md-8 text-center text-sm-left">
            <div class="sr-profile mb-4">
                {{ $user->setting('showcase.profile') }}
            </div>

            <div class="row sr-profile">
                <div class="col-sm-4">
                    <p class="mb-1 mb-sm-2"><strong>Full Name</strong></p>
                </div>
                <div class="col-sm-8">
                    <p>{{ $user->name }}</p>
                </div>
            </div>

            <div class="row sr-profile">
                <div class="col-sm-4">
                    <p class="mb-1 mb-sm-2"><strong>Contact</strong></p>
                </div>
                <div class="col-sm-8">
                    <p>{{ $user->contact }}</p>
                </div>
            </div>

            <div class="row sr-profile">
                <div class="col-sm-4">
                    <p class="mb-1 mb-sm-2"><strong>Email</strong></p>
                </div>
                <div class="col-sm-8">
                    <p>
                        <a href="mailto:{{ $user->email }}" class="link-natural">
                            {{ $user->email }}
                        </a>
                    </p>
                </div>
            </div>

            <div class="row sr-profile">
                <div class="col-sm-4">
                    <p class="mb-1 mb-sm-2"><strong>Website</strong></p>
                </div>
                <div class="col-sm-8">
                    <p>
                        <a href="{{ $user->website }}" class="link-natural">
                            {{ $user->website }}
                        </a>
                    </p>
                </div>
            </div>

            <div class="row sr-profile">
                <div class="col-sm-4">
                    <p class="mb-1 mb-sm-2"><strong>Day of Birth</strong></p>
                </div>
                <div class="col-sm-8">
                    <p>{{ format_date($user->birthday, 'F d, Y') }}</p>
                </div>
            </div>

            <div class="row sr-profile">
                <div class="col-sm-4">
                    <p class="mb-1 mb-sm-2"><strong>Location</strong></p>
                </div>
                <div class="col-sm-8">
                    <p>{{ $user->location }}</p>
                </div>
            </div>

            <p class="text-center text-sm-left text-wide mb-0 mt-4 sr-profile">
                @if($facebook)
                    <a href="https://facebook.com/{{ $facebook->getId() }}">
                        <img src="{{ asset('storage/layouts/social/facebook.svg') }}"
                             class="mr-2" style="width: 35px" alt="Facebook">
                    </a>
                @endif
                @if($twitter)
                    <a href="https://twitter.com/{{ $twitter->getNickname() }}">
                        <img src="{{ asset('storage/layouts/social/twitter.svg') }}"
                             class="mr-2" style="width: 35px" alt="Twitter">
                    </a>
                @endif
                @if($google)
                    <a href="https://google.com/{{ $google->getNickname() }}">
                        <img src="{{ asset('storage/layouts/social/google-plus.svg') }}"
                             class="mr-2" style="width: 35px" alt="Google">
                    </a>
                @endif
            </p>
        </div>
    </div>
</section>