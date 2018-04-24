<ul>
    <li{{ Route::current()->getName() == 'blog.post' ? ' class=active' : '' }}><a href="{{ route('blog.post') }}"><i class="icon-docs"></i>Post</a></li>
    <li{{ Route::current()->getName() == 'blog.category' ? ' class=active' : '' }}><a href="{{ route('blog.category') }}"><i class="icon-grid"></i>Category</a></li>
    <li{{ Route::current()->getName() == 'blog.taxonomy' ? ' class=active' : '' }}><a href="{{ route('blog.taxonomy') }}"><i class="icon-tag"></i>Taxonomy</a></li>
</ul>