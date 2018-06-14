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
                New Skill
            </a>
        </div>
    </div>

    @include('errors._general')
    @include('errors._message')

    <div class="row">
        <div class="col-md-12 skill-wrapper">
            @foreach($skills as $skill)
                <div class="card box-shadow mb-4 skill-item cursor-pointer">
                    <div class="card-body d-flex justify-content-start pr-3">
                        <img src="{{ Storage::url('layouts/icons/footwear.svg') }}"
                             class="pr-3 mr-3 border-right align-self-start d-none d-sm-block" style="width: 100px">
                        <div class="w-100">
                            <p class="card-title text-strong mb-1">
                                <a href="#modal-form-skill" data-toggle="modal"
                                   data-url="{{ route('showcase.skills.update', ['skill' => $skill->id]) }}">{{ $skill->expertise }}</a>
                            </p>
                            <p class="text-muted small text-uppercase mb-1">{{ $skill->field }}</p>
                            <p class="card-text mb-2">
                                {{ $skill->description }}
                            </p>
                            <div class="d-flex flex-row align-items-center">
                                <div class="progress w-100">
                                    <div class="progress-bar" role="progressbar"
                                         style="width: {{ $skill->proficiency_level }}%"
                                         aria-valuenow="{{ $skill->proficiency_level }}" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <small class="text-center" style="width: 100px"><strong
                                            class="text-primary">{{ $skill->proficiency_level }} / 100</strong></small>
                                <div class="dropdown">
                                    <a href="#" class="link-muted small" type="button" id="dropdownMenuButton"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-options-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <h6 class="dropdown-header">Action</h6>
                                        <a class="dropdown-item btn-edit" href="#modal-form-skill" data-toggle="modal"
                                           data-url="{{ route('showcase.skills.update', ['skill' => $skill->id]) }}">
                                            <i class="icon-note mr-2"></i>Edit Experience
                                        </a>
                                        <a class="dropdown-item btn-delete" href="#modal-delete" data-toggle="modal"
                                           data-id="{{ $skill->id }}" data-label="{{ $skill->expertise }}"
                                           data-title="{{ $skill->field }}"
                                           data-url="{{ route('showcase.skills.destroy', ['skill' => $skill->id]) }}">
                                            <i class="icon-trash mr-2"></i>Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <a href="#modal-form-skill" data-toggle="modal" class="card card-empty mb-4">
        <div class="card-body text-center d-flex align-items-center justify-content-center">
            <h6 class="mb-0"><i class="icon-plus mr-3"></i> ADD NEW SKILL</h6>
        </div>
    </a>

    @include('showcase.skill.modals._skill')
    @include('components.modals._delete')
@endsection