<div class="bg-primary text-white">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb main text-uppercase">
                <?php $routeName = Route::current()->getName() ?>
                @if($routeName != 'home')
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                            <svg version="1.1" class="mr-2" viewBox="0 0 438.533 438.533"
                                 style="width: 15px; height: 15px; fill: white; vertical-align: middle; line-height: 1.1; margin-bottom: 2px">
                                <g>
                                    <path d="M409.133,109.203c-19.608-33.592-46.205-60.189-79.798-79.796C295.736,9.801,259.058,0,219.273,0
                                        c-39.781,0-76.47,9.801-110.063,29.407c-33.595,19.604-60.192,46.201-79.8,79.796C9.801,142.8,0,179.489,0,219.267
                                        c0,39.78,9.804,76.463,29.407,110.062c19.607,33.592,46.204,60.189,79.799,79.798c33.597,19.605,70.283,29.407,110.063,29.407
                                        s76.47-9.802,110.065-29.407c33.593-19.602,60.189-46.206,79.795-79.798c19.603-33.596,29.403-70.284,29.403-110.062
                                        C438.533,179.485,428.732,142.795,409.133,109.203z M365.446,237.539c0,4.948-1.808,9.236-5.421,12.847
                                        c-3.621,3.614-7.898,5.431-12.847,5.431H203.855l53.958,53.958c3.429,3.425,5.14,7.703,5.14,12.847c0,5.14-1.711,9.418-5.14,12.847
                                        l-25.981,25.98c-3.426,3.423-7.712,5.141-12.849,5.141c-5.136,0-9.419-1.718-12.847-5.141L102.783,258.093l-25.979-25.981
                                        c-3.427-3.429-5.142-7.707-5.142-12.845c0-5.14,1.714-9.42,5.142-12.847l25.979-25.981L206.136,77.083
                                        c3.428-3.425,7.707-5.137,12.847-5.137c5.141,0,9.423,1.711,12.849,5.137l25.981,25.981c3.617,3.617,5.428,7.902,5.428,12.851
                                        c0,4.948-1.811,9.231-5.428,12.847l-53.958,53.959h143.324c4.948,0,9.226,1.809,12.847,5.426c3.613,3.615,5.421,7.898,5.421,12.847
                                        V237.539z"/>
                                </g>
                            </svg>Apps
                        </a>
                    </li>
                    @if(empty(Request::segment(2)))
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ ucfirst(Request::segment(1)) }}
                        </li>
                    @else
                        <li class="breadcrumb-item" aria-current="page">
                            <a href="{{ url('/' . Request::segment(1)) }}">
                                {{ ucfirst(Request::segment(1)) }}
                            </a>
                        </li>
                    @endif

                    @if(!empty(Request::segment(1)) && !empty(Request::segment(2)))
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
                    @endif
                    @if(!empty(Request::segment(3)))
                        <li class="breadcrumb-item active d-none d-sm-inline-block" aria-current="page">
                            {{ ucfirst(Request::segment(3)) }}
                        </li>
                    @endif
                @else
                    <li class="breadcrumb-item d-flex w-100 justify-content-between">
                        <a href="{{ route('home') }}">All Applications</a>
                        <a href="javascript:void(0)" class="app-display-setting">
                            Show As <i class="icon-menu ml-2"></i>
                        </a>
                    </li>
                @endif

                @if($routeName == 'app')
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