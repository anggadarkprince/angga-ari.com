<ul class="d-flex d-lg-block justify-content-between">
    <li class="{{ Route::current()->getName() == 'finance.transaction' ? ' active' : '' }}"><a href="{{ route('finance.transaction') }}"><i class="icon-bag d-none d-md-inline-block"></i>Transaction</a></li>
    <li class="{{ Route::current()->getName() == 'finance.wallet' ? ' active' : '' }}"><a href="{{ route('finance.wallet') }}"><i class="icon-wallet d-none d-md-inline-block"></i>Wallet</a></li>
    <li class="{{ Route::current()->getName() == 'finance.category' ? ' active' : '' }}"><a href="{{ route('finance.category') }}"><i class="icon-grid d-none d-md-inline-block"></i>Category</a></li>
    <li class="{{ Route::current()->getName() == 'finance.report' ? ' active' : '' }}"><a href="{{ route('finance.report') }}"><i class="icon-graph d-none d-md-inline-block"></i>Report</a></li>
    <li class="d-none d-sm-inline-block{{ Route::current()->getName() == 'finance.preference' ? ' active' : '' }}"><a href="{{ route('finance.preference') }}"><i class="icon-settings d-none d-md-inline-block"></i>Preference</a></li>
</ul>