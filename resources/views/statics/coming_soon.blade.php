@extends('layouts.app')

@section('title', 'Coming Soon')

@section('content')

    <div class="container">

        <p class="text-center text-primary">Still not find an answer?</p>

        <div class="row">
            <div class="col-lg-12 text-center">
                <h4 class="section-heading">Contact With Real Human</h4>
                <p class="text-muted">Ask help and support with our communities</p>
                <hr class="my-4">
            </div>
        </div>
    </div>
    @include('components.contact')
@endsection