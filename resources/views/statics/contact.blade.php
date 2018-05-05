@extends('layouts.app')

@section('title', 'Contact Us')

@section('main')
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-6 text-center mb-4">
                <h4 class="section-heading">Contact With Real Human</h4>
                <p class="text-muted">Ask help and support with our communities</p>
                <hr class="my-4">

                @include('components.contact')
            </div>
        </div>
    </div>
@endsection