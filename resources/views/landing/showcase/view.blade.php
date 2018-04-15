@extends('layouts.landing', ['backToProfile' => false])

@section('title', 'Showcase view')

@section('content')
    <header class="masthead full-height overlay text-center text-white d-flex" style="background: url('{{ Storage::url('/layouts/header-2.jpg') }}') no-repeat bottom center scroll;">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="text-wide">ORION MANAGEMENT SYSTEM</h2>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5">
                        A management system is the framework of policies, processes and procedures used by an
                        organization to ensure that it can fulfill all the tasks required to achieve its objectives.
                    </p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#content">Show Me Details</a>
                </div>
            </div>
        </div>
    </header>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 order-lg-6 ml-lg-auto">
                    <div class="showcase-content">
                        <h3 class="showcase-title">
                            Orion Management System
                        </h3>
                        <p class="text-muted">Created By <a href="#">Angga Ari Wijaya</a></p>
                        <div class="showcase-description">
                            <p>
                                A management system is the framework of policies, processes and procedures used by an
                                organization to ensure that it can fulfill all the tasks required to achieve its objectives. These objectives will be a
                                mix covering many aspects of the organization's operations (including financial success, safe
                                operation, product quality.
                            </p>
                            <p>
                                A management system is the framework of policies, processes and procedures used by an
                                organization to ensure that it can fulfill all the tasks required to achieve its objectives. These objectives will be a
                                mix covering many aspects of the organization's operations (including financial success, safe
                                operation, product quality.
                            </p>
                        </div>
                        <div class="showcase-information">
                            <div class="row">
                                <div class="col-3 col-md-4">
                                    <p class="mb-1"><strong>Category</strong></p>
                                </div>
                                <div class="col-9 col-md-8">
                                    <p class="text-muted mb-3">Design and Programming</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 col-md-4">
                                    <p class="mb-1"><strong>Platform</strong></p>
                                </div>
                                <div class="col-9 col-md-8">
                                    <p class="text-muted mb-3">Website</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 col-md-4">
                                    <p class="mb-1"><strong>Date</strong></p>
                                </div>
                                <div class="col-9 col-md-8">
                                    <p class="text-muted mb-3">October, 2018</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 col-md-4">
                                    <p class="mb-1"><strong>Team</strong></p>
                                </div>
                                <div class="col-9 col-md-8">
                                    <p class="text-muted mb-3">IT Dev Team</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 col-md-4">
                                    <p class="mb-1"><strong>Company</strong></p>
                                </div>
                                <div class="col-9 col-md-8">
                                    <p class="text-muted mb-3">Sketch Project Studio</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 col-md-4">
                                    <p class="mb-1"><strong>Tools</strong></p>
                                </div>
                                <div class="col-9 col-md-8">
                                    <p class="text-muted mb-3">Adobe Illustrator, PHP, Codeigniter, MySQL, PHPStorm</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 col-md-4">
                                    <p class="mb-1"><strong>Url</strong></p>
                                </div>
                                <div class="col-9 col-md-8">
                                    <p class="text-muted mb-3">https://www.orion.com</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 col-md-4">
                                    <p class="mb-1"><strong>Licence</strong></p>
                                </div>
                                <div class="col-9 col-md-8">
                                    <p class="text-muted mb-3">(GNU) General</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 col-md-4">
                                    <p class="mb-1"><strong>Keywords</strong></p>
                                </div>
                                <div class="col-9 col-md-8 text-uppercase">
                                    <span class="badge badge-pill badge-primary">design</span>
                                    <span class="badge badge-pill badge-primary">programming</span>
                                    <span class="badge badge-pill badge-primary">website</span>
                                    <span class="badge badge-pill badge-primary">app</span>
                                    <span class="badge badge-pill badge-primary">landing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-5">
                    <div class="showcase-gallery">
                        <a href="{{ Storage::url('showcases/thumbnails/1.jpg') }}" title="Thumbnails 1">
                            <img class="mb-3" src="{{ Storage::url('showcases/thumbnails/1.jpg') }}">
                        </a>
                        <a href="{{ Storage::url('showcases/thumbnails/2.jpg') }}" title="Thumbnails 2">
                            <img class="mb-3" src="{{ Storage::url('showcases/thumbnails/2.jpg') }}">
                        </a>
                        <a href="{{ Storage::url('showcases/thumbnails/3.jpg') }}" title="Thumbnails 3">
                            <img class="mb-3" src="{{ Storage::url('showcases/thumbnails/3.jpg') }}">
                        </a>
                        <a href="{{ Storage::url('showcases/thumbnails/4.jpg') }}" title="Thumbnails 4">
                            <img class="mb-3" src="{{ Storage::url('showcases/thumbnails/4.jpg') }}">
                        </a>
                        <a href="{{ Storage::url('showcases/thumbnails/5.jpg') }}" title="Thumbnails 5">
                            <img class="mb-3" src="{{ Storage::url('showcases/thumbnails/5.jpg') }}">
                        </a>
                        <a href="{{ Storage::url('showcases/thumbnails/6.jpg') }}" title="Thumbnails 6">
                            <img class="mb-3" src="{{ Storage::url('showcases/thumbnails/6.jpg') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection