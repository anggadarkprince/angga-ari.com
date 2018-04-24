@extends('showcase._layout')

@section('title', 'Showcase Portfolio')

@section('showcase_description', 'Portfolio and galleries')

@section('showcase_content')
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="card card-portfolio box-shadow">
                <img class="card-img-top" src="{{ Storage::url('showcases/thumbnails/1.jpg') }}" alt="Portfolio 1">
                <div class="card-body">
                    <h3 class="card-title mb-2"><a href="#">Website Orion Management v2.8</a></h3>
                    <p class="card-text small mb-1 text-uppercase">WEB DESIGN</p>
                    <p class="text-muted small mb-0">Sketch Project Studio</p>
                </div>
                <div class="card-footer small text-muted">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <i class="icon-eye mr-2"></i>334K
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-bubbles mr-2"></i>54K
                        </li>
                        <li class="list-inline-item float-right">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Portfolio</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card card-portfolio box-shadow">
                <img class="card-img-top" src="{{ Storage::url('showcases/thumbnails/2.jpg') }}" alt="Portfolio 1">
                <div class="card-body">
                    <h3 class="card-title mb-2"><a href="#">Dark Story and Pen</a></h3>
                    <p class="card-text small mb-1 text-uppercase">WRITING</p>
                    <p class="text-muted small mb-0">Blanc et Noir</p>
                </div>
                <div class="card-footer small text-muted">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <i class="icon-eye mr-2"></i>45
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-bubbles mr-2"></i>12
                        </li>
                        <li class="list-inline-item float-right">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Portfolio</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card card-portfolio box-shadow">
                <img class="card-img-top" src="{{ Storage::url('showcases/thumbnails/3.jpg') }}" alt="Portfolio 1">
                <div class="card-body">
                    <h3 class="card-title mb-2"><a href="#">The Photograph</a></h3>
                    <p class="card-text small mb-1 text-uppercase">COVER DESIGN</p>
                    <p class="text-muted small mb-0">Blanc et Noir</p>
                </div>
                <div class="card-footer small text-muted">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <i class="icon-eye mr-2"></i>63
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-bubbles mr-2"></i>732
                        </li>
                        <li class="list-inline-item float-right">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Portfolio</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card card-portfolio box-shadow">
                <img class="card-img-top" src="{{ Storage::url('showcases/thumbnails/4.jpg') }}" alt="Portfolio 1">
                <div class="card-body">
                    <h3 class="card-title mb-2"><a href="#">Foody Maximum</a></h3>
                    <p class="card-text small mb-1 text-uppercase">Application Design</p>
                    <p class="text-muted small mb-0">Berbeque Rion</p>
                </div>
                <div class="card-footer small text-muted">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <i class="icon-eye mr-2"></i>734K
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-bubbles mr-2"></i>42K
                        </li>
                        <li class="list-inline-item float-right">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Portfolio</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card card-portfolio box-shadow">
                <img class="card-img-top" src="{{ Storage::url('showcases/thumbnails/5.jpg') }}" alt="Portfolio 1">
                <div class="card-body">
                    <h3 class="card-title mb-2"><a href="#">Microsoft Redesign Website</a></h3>
                    <p class="card-text small mb-1 text-uppercase">Web Design</p>
                    <p class="text-muted small mb-0">Microsoft</p>
                </div>
                <div class="card-footer small text-muted">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <i class="icon-eye mr-2"></i>734K
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-bubbles mr-2"></i>42K
                        </li>
                        <li class="list-inline-item float-right">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Portfolio</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card card-portfolio box-shadow">
                <img class="card-img-top" src="{{ Storage::url('showcases/thumbnails/6.jpg') }}" alt="Portfolio 1">
                <div class="card-body">
                    <h3 class="card-title mb-2"><a href="#">Curfy Blazzer Exotic Maniacs</a></h3>
                    <p class="card-text small mb-1 text-uppercase">AIRCRAFT AND PLOT</p>
                    <p class="text-muted small mb-0">Sketch Project Studio</p>
                </div>
                <div class="card-footer small text-muted">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <i class="icon-eye mr-2"></i>234K
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-bubbles mr-2"></i>622
                        </li>
                        <li class="list-inline-item float-right">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Portfolio</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card card-portfolio box-shadow">
                <img class="card-img-top" src="{{ Storage::url('showcases/thumbnails/2.jpg') }}" alt="Portfolio 1">
                <div class="card-body">
                    <h3 class="card-title mb-2"><a href="#">Wealthy Moriona Zona 345</a></h3>
                    <p class="card-text small mb-1 text-uppercase">Application Design</p>
                    <p class="text-muted small mb-0">Sketch Project Studio</p>
                </div>
                <div class="card-footer small text-muted">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <i class="icon-eye mr-2"></i>36
                        </li>
                        <li class="list-inline-item">
                            <i class="icon-bubbles mr-2"></i>62
                        </li>
                        <li class="list-inline-item float-right">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Portfolio</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <a href="#" class="card card-portfolio card-empty">
                <div class="card-body text-center d-flex align-items-center justify-content-center">
                    <div>
                        <h3 class="mb-2"><i class="icon-plus"></i></h3>
                        <h4>ADD NEW PORTFOLIO</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection