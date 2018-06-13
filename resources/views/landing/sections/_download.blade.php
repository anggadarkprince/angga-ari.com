<section class="bg-dark text-white">
    <div class="container text-center">
        <h3 class="mb-2 sr-profile">Download My Professional CV</h3>
        <p class="mb-5 sr-profile">Generated PDF file</p>

        <a class="btn btn-light btn-xl sr-profile mb-5"
           href="{{ route('showcase.generate', ['user' => $user->username]) }}">Download Now</a>

        <p class="sr-profile">
            Or visit my another website
            <a href="{{ $user->setting('showcase.website', $user->website) }}">
                {{ $user->setting('showcase.website', $user->website) }}
            </a>
        </p>
    </div>
</section>