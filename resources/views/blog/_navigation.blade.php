<?php
$routeName = Route::current()->getName();
$activePost = preg_match('/^blog.post/', $routeName) ? ' class=active' : '';
$activeTaxonomy = $routeName == 'blog.taxonomy' ? ' active' : '';
$activePreference = $routeName == 'blog.preference' ? ' active' : '';
$activeMore = $routeName == 'blog.taxonomy' || $routeName == 'blog.preference';
?>
<ul class="d-flex d-lg-block justify-content-between">
    <li{{ $activePost }}><a href="{{ route('blog.post') }}"><i class="icon-docs d-none d-md-inline-block"></i>Article</a></li>
    <li{{ Route::current()->getName() == 'blog.category' ? ' class=active' : '' }}><a href="{{ route('blog.category') }}"><i class="icon-grid d-none d-md-inline-block"></i>Category</a></li>
    <li class="d-none d-sm-inline-block d-lg-block{{ $activeTaxonomy ? ' active' : '' }}"><a href="{{ route('blog.taxonomy') }}"><i class="icon-tag d-none d-md-inline-block"></i>Taxonomy</a></li>
    <li class="d-none d-sm-inline-block d-lg-block{{ $activePreference ? ' active' : '' }}"><a href="{{ route('blog.preference') }}"><i class="icon-settings d-none d-md-inline-block"></i>Preference</a></li>
    <li class="d-inline-block d-sm-none{{ $activeMore ? ' active' : '' }}">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            More
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item{{ $activeTaxonomy }}" href="{{ route('blog.taxonomy') }}">
                Taxonomy
            </a>
            <a class="dropdown-item{{ $activePreference }}" href="{{ route('blog.preference') }}">
                Preference
            </a>
        </div>
    </li>
</ul>