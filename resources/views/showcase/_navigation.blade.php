<ul class="d-flex d-lg-block justify-content-between">
    <li{{ Route::current()->getName() == 'showcase.portfolio' ? ' class=active' : '' }}><a href="{{ route('showcase.portfolio') }}"><i class="icon-notebook d-none d-md-inline-block"></i>Portfolio</a></li>
    <li{{ Route::current()->getName() == 'showcase.skill' ? ' class=active' : '' }}><a href="{{ route('showcase.skill') }}"><i class="icon-energy d-none d-md-inline-block"></i>Expertise</a></li>
    <li{{ Route::current()->getName() == 'showcase.achievement' ? ' class=active' : '' }}><a href="{{ route('showcase.achievement') }}"><i class="icon-trophy d-none d-md-inline-block"></i>Achievement</a></li>
    <li{{ Route::current()->getName() == 'showcase.profile' ? ' class=active' : '' }}><a href="{{ route('showcase.profile') }}"><i class="icon-user d-none d-md-inline-block"></i>Profile</a></li>
</ul>