@extends('layouts.dashboard')

@section('title', 'Showcase - Story & Achievement')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">Story & Achievement</h4>
            <small class="text-muted">Experience and story of life</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="#modal-form-achievement" data-toggle="modal" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                <i class="icon-note mr-2 d-none d-sm-inline-block"></i>New Achievement
            </a>
        </div>
    </div>
    <div class="mb-5">
        <p class="text-primary mb-4">
            <strong>EDUCATIONS</strong>
            <a href="#modal-form-education" class="float-right link-muted small mt-1" data-toggle="modal">
                <strong>ADD NEW</strong>
            </a>
        </p>
        <div>
            <div class="card box-shadow mb-4">
                <div class="card-body d-flex justify-content-start pr-3">
                    <img src="{{ Storage::url('layouts/icons/book.svg') }}" class="pr-3 mr-3 border-right d-none d-sm-block" style="width: 70px">
                    <div class="w-100">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="text-strong mb-1">Bachelor Degree</a>
                            <div class="dropdown">
                                <a href="#" class="link-muted small" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-options-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit School</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                        <p class="card-text mb-0">University of Jember - Information System</p>
                        <small class="text-muted mb-0">Jember, Indonesia in 2015 - 2018</small>
                    </div>
                </div>
            </div>
            <div class="card box-shadow mb-4">
                <div class="card-body d-flex justify-content-start pr-3">
                    <img src="{{ Storage::url('layouts/icons/book.svg') }}" class="pr-3 mr-3 border-right d-none d-sm-block" style="width: 70px">
                    <div class="w-100">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="text-strong mb-1">High School Degree</a>
                            <div class="dropdown">
                                <a href="#" class="link-muted small" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-options-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit School</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                        <p class="card-text mb-0">SMK Semen Gresik - Mechanic Automotive</p>
                        <small class="text-muted mb-0">Gresik, Indonesia in 2007 - 2010</small>
                    </div>
                </div>
            </div>
            <a href="#modal-form-education" data-toggle="modal" class="card card-empty mb-4">
                <div class="card-body text-center d-flex align-items-center justify-content-center">
                    <h6 class="mb-0"><i class="icon-plus mr-2"></i> ADD NEW SCHOOL</h6>
                </div>
            </a>
        </div>
    </div>

    <div class="mb-5">
        <p class="text-primary mb-4">
            <strong>EXPERIENCES</strong>
            <a href="#modal-form-experience" class="float-right link-muted small mt-1" data-toggle="modal">
                <strong>ADD NEW</strong>
            </a>
        </p>
        <div>
            <div class="card box-shadow mb-4">
                <div class="card-body d-flex justify-content-start pr-3">
                    <img src="{{ Storage::url('layouts/icons/note-check.svg') }}" class="pr-3 mr-3 border-right align-self-start d-none d-sm-block" style="height: 50px">
                    <div class="w-100">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="text-strong mb-1">Remote Job</a>
                            <div class="dropdown">
                                <a href="#" class="link-muted small" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-options-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Experience</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                        <p class="card-text text-muted mb-1">Freelance Programmer</p>
                        <p class="card-text mb-1">
                            I worked remotely for many client that required to build web, desktop, and mobile application
                            in small and medium size. I used many frameworks and face a lot of technical issue alone...
                        </p>
                        <small class="text-muted mb-0">Jakarta, Indonesia in 2015 - 2018</small>
                    </div>
                </div>
            </div>
            <div class="card box-shadow mb-4">
                <div class="card-body d-flex justify-content-start pr-3">
                    <img src="{{ Storage::url('layouts/icons/note-check.svg') }}" class="pr-3 mr-3 border-right align-self-start d-none d-sm-block" style="height: 50px">
                    <div class="w-100">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="text-strong mb-1">Internship: Ministry of Transmigration and Manpower of RI</a>
                            <div class="dropdown">
                                <a href="#" class="link-muted small" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-options-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Experience</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                        <p class="card-text text-muted mb-1">Temporary Junior Programmer</p>
                        <p class="card-text mb-1">
                            Translate, design and developing government IT business as Internship Programme Project.
                            I developed task scheduler in android with Java and hybrid app for iPad...
                        </p>
                        <small class="text-muted mb-0">Jakarta, Indonesia in 2015 - 2015</small>
                    </div>
                </div>
            </div>
            <div class="card box-shadow mb-4">
                <div class="card-body d-flex justify-content-start pr-3">
                    <img src="{{ Storage::url('layouts/icons/note-check.svg') }}" class="pr-3 mr-3 border-right align-self-start d-none d-sm-block" style="height: 50px">
                    <div class="w-100">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="text-strong mb-1">Lab Assistance</a>
                            <div class="dropdown">
                                <a href="#" class="link-muted small" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-options-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Experience</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                        <p class="card-text text-muted mb-1">Programming Assistance</p>
                        <p class="card-text mb-1">
                            Lab is one of my favorite place in University, try to share my knowledge by teaching another students.
                            Improve skills in daily basis, managed programming event and course...
                        </p>
                        <small class="text-muted mb-0">Jember, Indonesia in 2012 - 2014</small>
                    </div>
                </div>
            </div>
            <a href="#modal-form-experience" data-toggle="modal" class="card card-empty mb-4">
                <div class="card-body text-center d-flex align-items-center justify-content-center">
                    <h6 class="mb-0"><i class="icon-plus mr-2"></i> ADD NEW EXPERIENCE</h6>
                </div>
            </a>
        </div>
    </div>

    <div class="mb-5">
        <p class="text-primary mb-4">
            <strong>AWARDS</strong>
            <a href="#modal-form-award" class="float-right link-muted small mt-1" data-toggle="modal">
                <strong>ADD NEW</strong>
            </a>
        </p>
        <div>
            <div class="card box-shadow mb-4">
                <div class="card-body d-flex justify-content-start pr-3">
                    <img src="{{ Storage::url('layouts/icons/trophy.svg') }}" class="pr-3 mr-3 border-right d-none d-sm-block" style="width: 70px">
                    <div class="w-100">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="text-strong mb-1">Discovery National Event</a>
                            <div class="dropdown">
                                <a href="#" class="link-muted small" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-options-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Award</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                        <p class="card-text mb-0">4th application discovery</p>
                        <small class="text-muted mb-0">Jember, 2014</small>
                    </div>
                </div>
            </div>
            <div class="card box-shadow mb-4">
                <div class="card-body d-flex justify-content-start pr-3">
                    <img src="{{ Storage::url('layouts/icons/trophy.svg') }}" class="pr-3 mr-3 border-right d-none d-sm-block" style="width: 70px">
                    <div class="w-100">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="text-strong mb-1">HIMASIF Friendship Competition</a>
                            <div class="dropdown">
                                <a href="#" class="link-muted small" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-options-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View In Showcase</a>
                                    <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Award</a>
                                    <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                        <p class="card-text mb-0">1th algorithm category</p>
                        <small class="text-muted mb-0">Jember, 2014</small>
                    </div>
                </div>
            </div>
            <a href="#modal-form-award" data-toggle="modal" class="card card-empty mb-4">
                <div class="card-body text-center d-flex align-items-center justify-content-center">
                    <h6 class="mb-0"><i class="icon-plus mr-2"></i> ADD NEW AWARD</h6>
                </div>
            </a>
        </div>
    </div>

    @include('showcase.modals._achievement')
    @include('showcase.modals._education')
    @include('showcase.modals._experience')
    @include('showcase.modals._award')

@endsection