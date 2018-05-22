@extends('layouts.app')

@section('title', 'Contact Us')

@section('main')
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-6 mb-4">
                <div class="text-center">
                    <h4 class="section-heading">Contact With Real Human</h4>
                    <p class="text-muted">Ask help and support with our communities</p>
                    <hr class="my-4">
                </div>

                @include('components._contact')
            </div>
        </div>
    </div>
@endsection