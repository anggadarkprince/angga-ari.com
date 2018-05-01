<div class="bg-primary text-white">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb main text-uppercase">

                @if(Request::segment(1) == 'app')
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                            <i class="fa fa-arrow-circle-left mr-2"></i>Apps
                        </a>
                    </li>
                @else
                    <li class="breadcrumb-item d-flex w-100 justify-content-between">
                        <a href="{{ route('home') }}">
                            All Applications
                        </a>
                        <a href="#" class="app-display-setting">
                            Show As <i class="icon-menu ml-2"></i>
                        </a>
                    </li>
                @endif

                @if(Request::segment(1) == 'app')
                    @if(empty(Request::segment(3)))
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ ucfirst(Request::segment(2)) }}
                        </li>
                    @else
                        <li class="breadcrumb-item" aria-current="page">
                            <a href="{{ url('/' . Request::segment(1) . '/' . Request::segment(2)) }}">
                                {{ ucfirst(Request::segment(2)) }}
                            </a>
                        </li>
                    @endif

                    @if(!empty(Request::segment(2)) && !empty(Request::segment(3)))
                        @if(empty(Request::segment(4)))
                            <li class="breadcrumb-item active d-none d-sm-inline-block" aria-current="page">
                                {{ ucfirst(Request::segment(3)) }}
                            </li>
                        @else
                            <li class="breadcrumb-item" aria-current="page">
                                <a href="{{ url('/' . Request::segment(1) . '/' . Request::segment(2) . '/' . Request::segment(3)) }}">
                                    {{ ucfirst(Request::segment(3)) }}
                                </a>
                            </li>
                        @endif
                    @endif


                    @if(!empty(Request::segment(2)) && !empty(Request::segment(3)) && !empty(Request::segment(4)))
                        <li class="breadcrumb-item active d-none d-sm-inline-block" aria-current="page">
                            {{ ucfirst(Request::segment(4)) }}
                        </li>
                    @endif
                @endif
            </ol>
        </nav>
    </div>
</div>