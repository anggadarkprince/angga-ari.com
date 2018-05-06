<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-7 col-md-5">
                <h5 class="text-primary">Angga.web</h5>
                <p class="mb-0">
                    &copy; {{ date('Y') }} <span class="d-none d-sm-inline-block">Designed & Developed</span> by Angga
                </p>
                <small class="text-muted">Made with Love and Coffee</small>

                <p class="mt-3 small">Icon made by Designers from <a href="#" class="flaticon.com">flaticon.com</a></p>
            </div>
            <div class="col-5 col-md">
                <ul class="list-unstyled">
                    <li class="text-strong mb-2">Apps</li>
                    <li><a href="{{ route('showcase.portfolio') }}" class="link-muted">Showcase</a></li>
                    <li><a href="{{ route('blog.post') }}" class="link-muted">Blog</a></li>
                    <li><a href="{{ route('drive.browser') }}" class="link-muted">Drive</a></li>
                    <li class="d-none d-sm-block"><a href="{{ route('note.notebook') }}" class="link-muted">Note</a></li>
                    <li class="d-none d-sm-block"><a href="{{ route('finance.transaction') }}" class="link-muted">Finance</a></li>
                    <li class="d-none d-sm-block"><a href="{{ route('vault.password') }}" class="link-muted">Password Vault</a></li>
                    <li class="d-block d-sm-none"><a href="{{ route('home') }}" class="link-muted">More...</a></li>
                </ul>
            </div>
            <div class="col-7 col-md">
                <ul class="list-unstyled">
                    <li class="text-strong mb-2">About</li>
                    <li><a href="{{ route('privacy') }}" class="link-muted">Privacy</a></li>
                    <li><a href="{{ route('agreement') }}" class="link-muted">Agreement</a></li>
                    <li><a href="{{ route('cookie') }}" class="link-muted">Cookie</a></li>
                    <li><a href="{{ route('help') }}" class="link-muted">Help & Support</a></li>
                    <li><a href="{{ route('contact') }}" class="link-muted">Contact</a></li>
                </ul>
            </div>
            <div class="col-5 col-md">
                <ul class="list-unstyled">
                    <li class="text-strong mb-2">Socials</li>
                    <li><a href="#" class="link-muted">Twitter</a></li>
                    <li><a href="#" class="link-muted">Facebook</a></li>
                    <li><a href="#" class="link-muted">Google+</a></li>
                    <li><a href="#" class="link-muted">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>