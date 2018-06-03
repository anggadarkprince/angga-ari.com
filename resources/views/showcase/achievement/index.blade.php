@extends('layouts.dashboard')

@section('title', 'Showcase - Story & Achievement')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">Story & Achievement</h4>
            <small class="text-muted">Experience and story of life</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="#modal-form-achievement" data-toggle="modal"
               class="btn btn-sm btn-primary d-block d-sm-inline-block">
                New Achievement
            </a>
        </div>
    </div>

    @include('errors._general')
    @include('errors._message')

    <div class="mb-5">
        <p class="text-primary mb-4">
            <strong>EDUCATIONS</strong>
            <a href="#modal-form-education" class="float-right link-muted small mt-1" data-toggle="modal">
                <strong>ADD NEW</strong>
            </a>
        </p>
        <div>

            @include('showcase.achievement._educations')

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

            @include('showcase.achievement._experiences')

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

            @include('showcase.achievement._awards')

            <a href="#modal-form-award" data-toggle="modal" class="card card-empty mb-4">
                <div class="card-body text-center d-flex align-items-center justify-content-center">
                    <h6 class="mb-0"><i class="icon-plus mr-2"></i> ADD NEW AWARD</h6>
                </div>
            </a>
        </div>
    </div>

    @include('showcase.achievement.modals._achievement')
    @include('showcase.achievement.modals._education')
    @include('showcase.achievement.modals._experience')
    @include('showcase.achievement.modals._award')
    @include('components.modals._delete')

@endsection