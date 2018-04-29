<ul class="d-flex d-lg-block justify-content-between">
    <li{{ Route::current()->getName() == 'drive.browser' ? ' class=active' : '' }}><a href="{{ route('drive.browser') }}"><i class="icon-folder d-none d-md-inline-block"></i>Browser</a></li>
    <li{{ Route::current()->getName() == 'drive.album' ? ' class=active' : '' }}><a href="{{ route('drive.album') }}"><i class="icon-picture d-none d-md-inline-block"></i>Album</a></li>
    <li{{ Route::current()->getName() == 'drive.analyzer' ? ' class=active' : '' }}><a href="{{ route('drive.analyzer') }}"><i class="icon-pie-chart d-none d-md-inline-block"></i>Analyzer</a></li>
    <li{{ Route::current()->getName() == 'drive.trash' ? ' class=active' : '' }}><a href="{{ route('drive.trash') }}"><i class="icon-trash d-none d-md-inline-block"></i>Trash</a></li>
</ul>