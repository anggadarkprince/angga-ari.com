@extends('layouts.app')

@section('sub_header')
    @include('components._breadcrumb')
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('components._sidebar')
            </div>
            <div class="col-lg-9">
                @yield('content')
            </div>
        </div>
    </div>
@endsection