@extends('layouts.app')

@section('title', 'Coming Soon')

@section('content')

    <div class="container">

        <div class="text-center mb-5">
            <h1><i class="icon-wrench"></i></h1>
            <h3>Coming Soon</h3>
            <p>We're on building something awesome</p>
        </div>

        <p class="text-center text-primary">Find more information?</p>
    </div>
    @include('components.contact')
@endsection