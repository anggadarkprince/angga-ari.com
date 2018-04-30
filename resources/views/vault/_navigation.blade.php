<ul class="d-flex d-lg-block justify-content-between">
    <li{{ Route::current()->getName() == 'vault.password' ? ' class=active' : '' }}><a href="{{ route('vault.password') }}"><i class="icon-lock d-none d-md-inline-block"></i>Password</a></li>
    <li{{ Route::current()->getName() == 'vault.activity' ? ' class=active' : '' }}><a href="{{ route('vault.activity') }}"><i class="icon-reload d-none d-md-inline-block"></i>Activity</a></li>
    <li{{ Route::current()->getName() == 'vault.preference' ? ' class=active' : '' }}><a href="{{ route('vault.preference') }}"><i class="icon-settings d-none d-md-inline-block"></i>Preference</a></li>
</ul>