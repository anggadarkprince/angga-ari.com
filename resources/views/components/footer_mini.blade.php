<!-- Footer -->
<footer>
    <div class="container d-block d-md-flex justify-content-between text-center text-md-left">
        <div>
            <p class="mb-0">
                <span class="d-none d-lg-inline-block">All copyrights reserved </span>
                &copy; {{ date('Y') }} Designed & Developed by Angga
            </p>
            <small class="text-muted">Made with Love and Coffee</small>
        </div>
        <ul class="list-inline mb-0 mt-1 mt-md-0">
            <li class="list-inline-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="list-inline-item"><a href="{{ route('privacy') }}">Privacy</a></li>
            <li class="list-inline-item"><a href="{{ route('agreement') }}">Agreement</a></li>
            <li class="list-inline-item"><a href="{{ route('cookie') }}">Cookie</a></li>
        </ul>
    </div>
</footer>