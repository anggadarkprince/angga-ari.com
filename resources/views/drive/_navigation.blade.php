<ul>
    <li{{ Route::current()->getName() == 'drive.browser' ? ' class=active' : '' }}><a href="{{ route('drive.browser') }}"><i class="icon-folder"></i>Browser</a></li>
    <li{{ Route::current()->getName() == 'drive.album' ? ' class=active' : '' }}><a href="{{ route('drive.album') }}"><i class="icon-picture"></i>Album</a></li>
    <li{{ Route::current()->getName() == 'drive.analyzer' ? ' class=active' : '' }}><a href="{{ route('drive.analyzer') }}"><i class="icon-pie-chart"></i>Analyzer</a></li>
    <li{{ Route::current()->getName() == 'drive.trash' ? ' class=active' : '' }}><a href="{{ route('drive.trash') }}"><i class="icon-trash"></i>Trash</a></li>
</ul>