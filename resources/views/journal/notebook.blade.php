@extends('layouts.dashboard')

@section('title', 'Journal - Journal notes and todos')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">Notebook</h4>
            <small class="text-muted">Journal note keeper</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="#modal-form-notebook" data-toggle="modal" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                Create Notebook
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="card box-shadow mb-4">
                <div class="card-body text-center">
                    <img src="{{ Storage::url('layouts/folder/notebook.svg') }}" class="w-50 mb-2">
                    <a href="{{ route('journal.note') }}" class="d-block text-truncate"><strong>My Personal Journal</strong></a>
                    <span class="text-muted small">23 days ago</span>
                </div>
                <div class="card-footer pr-3">
                    <ul class="list-inline mb-0 small">
                        <li class="list-inline-item">
                            36 NOTES
                        </li>
                        <li class="list-inline-item float-right">
                            <div class="dropdown">
                                <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-options-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View Notes</a>
                                    <a class="dropdown-item" href="#modal-form-notebook" data-toggle="modal" data-id="1"><i class="icon-note mr-2"></i>Edit Notebook</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-delete" data-title="Notebook" data-label="My Personal Notebook" href="#modal-delete" data-toggle="modal"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="card box-shadow mb-4">
                <div class="card-body text-center">
                    <img src="{{ Storage::url('layouts/folder/notebook.svg') }}" class="w-50 mb-2">
                    <a href="{{ route('journal.note') }}" class="d-block text-truncate"><strong>Projects</strong></a>
                    <span class="text-muted small">3 minutes ago</span>
                </div>
                <div class="card-footer pr-3">
                    <ul class="list-inline mb-0 small">
                        <li class="list-inline-item">
                            12 NOTES
                        </li>
                        <li class="list-inline-item float-right">
                            <div class="dropdown">
                                <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-options-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <h6 class="dropdown-header">Action</h6>
                                    <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View Notes</a>
                                    <a class="dropdown-item" href="#modal-form-notebook" data-toggle="modal" data-id="2"><i class="icon-note mr-2"></i>Edit Notebook</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-delete" data-title="Notebook" data-label="Project" href="#modal-delete" data-toggle="modal"><i class="icon-trash mr-2"></i>Delete</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('journal.modals._notebook')
    @include('components.modals._delete')
@endsection