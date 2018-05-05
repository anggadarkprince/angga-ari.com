@extends('layouts.app')

@section('title', 'Coming Soon')

@section('main')
    <div class="container">
        <div class="text-center">
            <h1><i class="icon-wrench"></i></h1>
            <h3>Coming Soon</h3>
            <p class="mb-5">We're on building something awesome</p>

            <p class="mb-4">Find more information? <a href="{{ route('contact') }}">Click Here</a></p>
        </div>
    </div>
@endsection