@extends('layouts.dashboard')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between{{ Route::current()->getName() == 'finance.report' ? ' mb-0 mb-sm-3' : '' }}">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">
                <a href="javascript:void(0)" onclick="window.history.back();" class="link-natural d-none d-sm-inline-block">
                    <i class="icon-arrow-left-circle"></i>
                </a>Finance @if(!empty(Request::segment(3))) <span class="small text-muted"> / {{ Request::segment(3) }}</span> @endif
            </h4>
            <small class="text-muted">
                @yield('finance_description')
            </small>
        </div>
        <div>
            @if(Route::current()->getName() == 'finance.transaction')
                <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                    <i class="icon-note mr-2 d-none d-sm-inline-block"></i>New Transaction
                </a>
            @endif

            @if(Route::current()->getName() == 'finance.wallet')
                <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                    <i class="icon-note mr-2 d-none d-sm-inline-block"></i>New Wallet
                </a>
            @endif

            @if(Route::current()->getName() == 'finance.category')
                <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                    <i class="icon-note mr-2 d-none d-sm-inline-block"></i>New Category
                </a>
            @endif
        </div>
    </div>

    <div class="section-content{{ Route::current()->getName() == 'finance.report' ? ' pt-0 pt-sm-3' : '' }}">
        @yield('finance_content')
    </div>
@endsection