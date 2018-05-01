@extends('note._layout')

@section('title', 'Journal notes and todo')

@section('note_description', 'Journal of notes keeper')

@section('note_content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card box-shadow mb-4">
                        <div class="card-body text-center">
                            <h1 class="display-4 mb-0 mt-2"><i class="icon-notebook"></i></h1>
                            <a href="{{ route('note.note') }}" class="d-block text-truncate"><strong>My Personal Journal</strong></a>
                            <span class="text-muted small">23 days ago</span>
                        </div>
                        <div class="card-footer pr-3">
                            <ul class="list-inline mb-0 small">
                                <li class="list-inline-item">
                                    <i class="icon-docs mr-2"></i>36 NOTES
                                </li>
                                <li class="list-inline-item float-right">
                                    <div class="dropdown">
                                        <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-options-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <h6 class="dropdown-header">Action</h6>
                                            <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View Notes</a>
                                            <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Notebook</a>
                                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
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
                            <h1 class="display-4 mb-0 mt-2"><i class="icon-notebook"></i></h1>
                            <a href="{{ route('note.note') }}" class="d-block text-truncate"><strong>Projects</strong></a>
                            <span class="text-muted small">3 minutes ago</span>
                        </div>
                        <div class="card-footer pr-3">
                            <ul class="list-inline mb-0 small">
                                <li class="list-inline-item">
                                    <i class="icon-docs mr-2"></i>12 NOTES
                                </li>
                                <li class="list-inline-item float-right">
                                    <div class="dropdown">
                                        <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-options-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <h6 class="dropdown-header">Action</h6>
                                            <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View Notes</a>
                                            <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Notebook</a>
                                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection