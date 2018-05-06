@extends('layouts.dashboard')

@section('title', 'Showcase - Skill')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">Expertise</h4>
            <small class="text-muted">Advanced knowledge in yourself</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="#modal-form-skill" data-toggle="modal" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                <i class="icon-note mr-2 d-none d-sm-inline-block"></i>New Skill
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card box-shadow mb-4">
                <div class="card-body d-flex justify-content-start pr-3">
                    <img src="{{ Storage::url('layouts/icons/footwear.svg') }}" class="pr-3 mr-3 border-right align-self-start d-none d-sm-block" style="width: 100px">
                    <div class="w-100">
                        <p class="card-title text-strong mb-1"><a href="#">Advanced CSS</a></p>
                        <p class="text-muted small text-uppercase mb-1">Front End</p>
                        <p class="card-text mb-2">
                            We're entering the deepest realms of CSS3 now, using gulp stack and webpack automate builder.
                        </p>
                        <div class="d-flex flex-row align-items-center">
                            <div class="progress w-100">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-center" style="width: 100px"><strong class="text-primary">75 / 100</strong></small>
                            <div class="dropdown">
                                <a href="#" class="link-muted small" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-options-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal"><i class="icon-note mr-2"></i>Edit Skill</a>
                                    <a class="dropdown-item btn-delete" href="#modal-delete" data-toggle="modal"
                                       data-id="1" data-label="Advanced CSS" data-title="Skill" data-url="{{ route('showcase.skill') }}">
                                        <i class="icon-trash mr-2"></i>Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card box-shadow mb-4">
                <div class="card-body d-flex justify-content-start pr-3">
                    <img src="{{ Storage::url('layouts/icons/headphones.svg') }}" class="pr-3 mr-3 border-right align-self-start d-none d-sm-block" style="width: 100px">
                    <div class="w-100">
                        <p class="card-title text-strong mb-1"><a href="#">Front End Design</a></p>
                        <p class="text-muted small text-uppercase mb-1">Front End</p>
                        <p class="card-text mb-2">
                            Involves creating the HTML, CSS, and presentational JavaScript code that makes up a user interface.
                        </p>
                        <div class="d-flex flex-row align-items-center">
                            <div class="progress w-100">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-center" style="width: 100px"><strong class="text-primary">50 / 100</strong></small>
                            <div class="dropdown">
                                <a href="#" class="link-muted small" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-options-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#modal-form-skill" data-toggle="modal"><i class="icon-note mr-2"></i>Edit Skill</a>
                                    <a class="dropdown-item btn-delete" href="#modal-delete" data-toggle="modal"
                                       data-id="2" data-label="Front End Design" data-title="Skill" data-url="{{ route('showcase.skill') }}">
                                        <i class="icon-trash mr-2"></i>Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card box-shadow mb-4">
                <div class="card-body d-flex justify-content-start pr-3">
                    <img src="{{ Storage::url('layouts/icons/camera.svg') }}" class="pr-3 mr-3 border-right align-self-start d-none d-sm-block" style="width: 100px">
                    <div class="w-100">
                        <p class="card-title text-strong mb-1"><a href="#">Version Control</a></p>
                        <p class="text-muted small text-uppercase mb-1">Programming</p>
                        <p class="card-text mb-2">
                            GIT version control software to track every modification my code in a special kind of database.
                        </p>
                        <div class="d-flex flex-row align-items-center">
                            <div class="progress w-100">
                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-center" style="width: 100px"><strong class="text-primary">75 / 100</strong></small>
                            <div class="dropdown">
                                <a href="#" class="link-muted small" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-options-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#modal-form-skill" data-toggle="modal"><i class="icon-note mr-2"></i>Edit Skill</a>
                                    <a class="dropdown-item btn-delete" href="#modal-delete" data-toggle="modal"
                                       data-id="3" data-label="Front End Design" data-title="Skill" data-url="{{ route('showcase.skill') }}">
                                        <i class="icon-trash mr-2"></i>Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#modal-form-skill" data-toggle="modal" class="card card-empty mb-4">
                <div class="card-body text-center d-flex align-items-center justify-content-center">
                    <h6 class="mb-0"><i class="icon-plus mr-3"></i> ADD NEW SKILL</h6>
                </div>
            </a>
        </div>
    </div>

    @include('showcase.modals._skill')
    @include('components.modals._delete')
@endsection