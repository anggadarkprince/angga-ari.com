@extends('showcase._layout')

@section('title', 'Showcase Skill')

@section('showcase_description', 'Advanced knowledge in yourself')

@section('showcase_content')
    <div class="row">
        <div class="col-md-12">
            <a href="#" class="card card-empty mb-4">
                <div class="card-body text-center d-flex align-items-center justify-content-center">
                    <h5 class="mb-0"><i class="icon-plus mr-3"></i> ADD NEW SKILL</h5>
                </div>
            </a>
            <div class="card box-shadow mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-2"><a href="#">ADVANCED CSS</a></h5>
                    <p class="card-text mb-2">
                        We're entering the deepest realms of CSS3 now, using gulp stack and webpack automate builder.
                    </p>
                    <p class="text-muted small text-uppercase mb-1">Front End</p>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item w-75">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <small><strong class="text-primary">75 / 100</strong></small>
                        </li>
                        <li class="list-inline-item float-right">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Skill</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card box-shadow mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-2"><a href="#">FRONT END DESIGN</a></h5>
                    <p class="card-text mb-2">
                        Involves creating the HTML, CSS, and presentational JavaScript code that makes up a user interface.
                    </p>
                    <p class="text-muted small text-uppercase mb-1">Front End</p>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item w-75">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <small><strong class="text-primary">50 / 100</strong></small>
                        </li>
                        <li class="list-inline-item float-right">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Skill</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card box-shadow mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-2"><a href="#">VERSION CONTROL</a></h5>
                    <p class="card-text mb-2">
                        GIT version control software to track every modification my code in a special kind of database.
                    </p>
                    <p class="text-muted small text-uppercase mb-1">Front End</p>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item w-75">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <small><strong class="text-primary">33 / 100</strong></small>
                        </li>
                        <li class="list-inline-item float-right">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Skill</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection