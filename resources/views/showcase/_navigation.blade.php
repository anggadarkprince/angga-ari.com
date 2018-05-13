<?php
$routeName = Route::current()->getName();
$activePortfolio = preg_match('/^showcase.portfolio/', $routeName) ? ' class=active' : '';
$activeSkill = $routeName == 'showcase.skill' ? ' class=active' : '';
$activeAchievement = $routeName == 'showcase.achievement' ? ' active' : '';
$activeProfile = $routeName == 'showcase.profile' ? ' active' : '';
$activeMore = $routeName == 'showcase.achievement' || $routeName == 'showcase.profile';
?>
<ul class="d-flex d-lg-block justify-content-between">
    <li{{ $activePortfolio }}><a href="{{ route('showcase.portfolio') }}"><i class="icon-notebook d-none d-md-inline-block"></i>Portfolio</a></li>
    <li{{ $activeSkill }}><a href="{{ route('showcase.skill') }}"><i class="icon-energy d-none d-md-inline-block"></i>Expertise</a></li>
    <li class="d-none d-sm-inline-block d-lg-block{{ $activeAchievement }}"><a href="{{ route('showcase.achievement') }}"><i class="icon-trophy d-none d-md-inline-block"></i>Achievement</a></li>
    <li class="d-none d-sm-inline-block d-lg-block{{ $activeProfile }}"><a href="{{ route('showcase.profile') }}"><i class="icon-briefcase d-none d-md-inline-block"></i>Profile</a></li>
    <li class="d-inline-block d-sm-none{{ $activeMore ? ' active' : '' }}">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            More
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item{{ $activeAchievement }}" href="{{ route('showcase.achievement') }}">
                Achievement
            </a>
            <a class="dropdown-item{{ $activeProfile }}" href="{{ route('showcase.profile') }}">
                Profile
            </a>
        </div>
    </li>
</ul>