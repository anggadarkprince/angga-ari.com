<ul class="d-flex d-lg-block justify-content-between">
    <li{{ Route::current()->getName() == 'blog.post' ? ' class=active' : '' }}><a href="{{ route('blog.post') }}"><i class="icon-docs d-none d-md-inline-block"></i>Article</a></li>
    <li{{ Route::current()->getName() == 'blog.category' ? ' class=active' : '' }}><a href="{{ route('blog.category') }}"><i class="icon-grid d-none d-md-inline-block"></i>Category</a></li>
    <li{{ Route::current()->getName() == 'blog.taxonomy' ? ' class=active' : '' }}><a href="{{ route('blog.taxonomy') }}"><i class="icon-tag d-none d-md-inline-block"></i>Taxonomy</a></li>
    <li{{ Route::current()->getName() == 'blog.preference' ? ' class=active' : '' }}><a href="{{ route('blog.preference') }}"><i class="icon-settings d-none d-md-inline-block"></i>Preference</a></li>
</ul>