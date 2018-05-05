@extends('layouts.app')

@section('title', 'Subscribe')

@section('main')
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-12 text-center mb-4">
                <h4 class="section-heading">
                    <i class="icon-energy"></i>
                    <span class="d-block">Go Premium</span>
                </h4>
                <p class="text-muted">Kick out the ads and get friendly support</p>
                <hr class="my-4">
            </div>
            <div class="col-md-8">

                <div class="card-group">
                    <div class="card card-pricing text-center">
                        <div class="card-body">
                            <h1 class="my-2"><i class="icon-paper-plane"></i></h1>
                            <h5 class="card-title">Starter</h5>
                            <p class="card-text">Everything you need for simplicity and good start.</p>
                            <h5 class="mb-0 price text-primary">IDR 10.000</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">No Annoying Ads</li>
                            <li class="list-group-item">Priority Support</li>
                            <li class="list-group-item">2 Extension Apps</li>
                            <li class="list-group-item">1 GB Storage</li>
                        </ul>
                        <div class="card-footer">
                            <a href="#" class="btn btn-block btn-primary">SUBSCRIBE</a>
                        </div>
                    </div>
                    <div class="card card-pricing featured text-center">
                        <div class="card-body">
                            <h1 class="my-2"><i class="icon-heart"></i></h1>
                            <h5 class="card-title">Premium</h5>
                            <p class="card-text">More premium privilege and app access.</p>
                            <h4 class="mb-0 price">IDR 50.000</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">No Annoying Ads</li>
                            <li class="list-group-item">Mid Priority Support</li>
                            <li class="list-group-item">3 Extension Apps</li>
                            <li class="list-group-item">2 GB Storage</li>
                        </ul>
                        <div class="card-footer">
                            <a href="#" class="btn btn-block btn-light">SUBSCRIBE</a>
                        </div>
                    </div>
                    <div class="card card-pricing text-center">
                        <div class="card-body">
                            <h1 class="my-2"><i class="icon-plane"></i></h1>
                            <h5 class="card-title">Awesome</h5>
                            <p class="card-text">You're fully supported and have best experience.</p>
                            <h5 class="mb-0 price text-primary">IDR 100.000</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">No annoying Ads</li>
                            <li class="list-group-item">Most Priority Support</li>
                            <li class="list-group-item">Full feature</li>
                            <li class="list-group-item">5 GB Storage</li>
                        </ul>
                        <div class="card-footer">
                            <a href="#" class="btn btn-block btn-primary">SUBSCRIBE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection