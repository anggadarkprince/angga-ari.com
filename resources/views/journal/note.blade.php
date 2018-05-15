@extends('layouts.dashboard')

@section('title', 'Journal - Recent notes')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">Note</h4>
            <small class="text-muted">Your recent note list</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="{{ route('journal.note.create') }}" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                Create Note
            </a>
        </div>
    </div>
    <div>
        <div class="card box-shadow mb-4">
            <div class="card-body">
                <div class="card-subtitle text-muted mb-2 mt-0 d-flex justify-content-between">
                    <small class="d-block">
                        <a href="#" class="link-muted">My Personal Journal</a>
                    </small>
                    <small>3 hours ago</small>
                </div>
                <h5 class="card-title mb-1"><a href="#">Shopping list weekly</a></h5>
                <p class="card-text mb-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="small text-uppercase">
                    <a href="#" class="card-link link-muted">View Note</a>
                    <a href="#" class="card-link link-muted">Edit</a>
                    <a href="#modal-delete" data-toggle="modal" data-title="Note" data-label="Shopping list weekly" class="card-link link-muted btn-delete">Delete</a>
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4">
            <div class="card-body">
                <div class="card-subtitle text-muted mb-2 mt-0 d-flex justify-content-between">
                    <small class="d-block">
                        <a href="#" class="link-muted">Project</a>
                    </small>
                    <small>2 months ago</small>
                </div>
                <h5 class="card-title mb-1"><a href="#">Orion design and plan</a></h5>
                <p class="card-text mb-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="small text-uppercase">
                    <a href="#" class="card-link link-muted">View Note</a>
                    <a href="#" class="card-link link-muted">Edit</a>
                    <a href="#modal-delete" data-toggle="modal" data-title="Note" data-label="Orion design and plan" class="card-link link-muted btn-delete">Delete</a>
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4">
            <div class="card-body">
                <div class="card-subtitle text-muted mb-2 mt-0 d-flex justify-content-between">
                    <small class="d-block">
                        <a href="#" class="link-muted">Project</a>
                    </small>
                    <small>2 months ago</small>
                </div>
                <h5 class="card-title mb-1"><a href="#">Warehouse system</a></h5>
                <p class="card-text mb-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="small text-uppercase">
                    <a href="#" class="card-link link-muted">View Note</a>
                    <a href="#" class="card-link link-muted">Edit</a>
                    <a href="#modal-delete" data-toggle="modal" data-title="Note" data-label="Warehouse system" class="card-link link-muted btn-delete">Delete</a>
                </div>
            </div>
        </div>
        <div class="card box-shadow mb-4">
            <div class="card-body">
                <div class="card-subtitle text-muted mb-2 mt-0 d-flex justify-content-between">
                    <small class="d-block">
                        <a href="#" class="link-muted">Project</a>
                    </small>
                    <small>2 months ago</small>
                </div>
                <h5 class="card-title mb-1"><a href="#">Vocabulary and contraction</a></h5>
                <p class="card-text mb-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="small text-uppercase">
                    <a href="#" class="card-link link-muted">View Note</a>
                    <a href="#" class="card-link link-muted">Edit</a>
                    <a href="#modal-delete" data-toggle="modal" data-title="Note" data-label="Vocabulary and contraction" class="card-link link-muted btn-delete">Delete</a>
                </div>
            </div>
        </div>
    </div>

    @include('components.modals._delete')
@endsection