<ul>
    <li{{ Route::current()->getName() == 'showcase.portfolio' ? ' class=active' : '' }}><a href="{{ route('showcase.portfolio') }}"><i class="icon-notebook"></i>Portfolio</a></li>
    <li{{ Route::current()->getName() == 'showcase.skill' ? ' class=active' : '' }}><a href="{{ route('showcase.skill') }}"><i class="icon-energy"></i>Expertise</a></li>
    <li{{ Route::current()->getName() == 'showcase.achievement' ? ' class=active' : '' }}><a href="{{ route('showcase.achievement') }}"><i class="icon-trophy"></i>Achievement</a></li>
    <li{{ Route::current()->getName() == 'showcase.profile' ? ' class=active' : '' }}><a href="{{ route('showcase.profile') }}"><i class="icon-user"></i>Profile</a></li>
</ul>