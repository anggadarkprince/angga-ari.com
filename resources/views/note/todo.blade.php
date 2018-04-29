@extends('note._layout')

@section('title', 'Note - Todo And Reminder Activity')

@section('note_description', 'Task and activity reminder')

@section('note_content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card box-shadow mb-4">
                <div class="card-body pr-3">
                    <div class="d-flex w-100 justify-content-between">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="todo_1" id="todo_1" value="1" checked>
                            <label class="custom-control-label" for="todo_1"><strong>Shopping list weekly</strong></label>
                        </div>
                        <div class="dropdown small">
                            <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header">Action</h6>
                                <a class="dropdown-item" href="#"><i class="icon-check mr-2"></i>Mark as Done</a>
                                <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>Show Detail</a>
                                <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Task</a>
                                <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted pl-4 ml-1 d-block">Today 02:15 PM - High Priority</small>
                </div>
            </div>
            <div class="card box-shadow mb-4">
                <div class="card-body pr-3">
                    <div class="d-flex w-100 justify-content-between">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="todo_2" id="todo_2" value="1">
                            <label class="custom-control-label" for="todo_2"><strong>Completing new app</strong></label>
                        </div>
                        <div class="dropdown small">
                            <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header">Action</h6>
                                <a class="dropdown-item" href="#"><i class="icon-check mr-2"></i>Mark as Done</a>
                                <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>Show Detail</a>
                                <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Task</a>
                                <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted pl-4 ml-1 d-block">Yesterday 10:22 PM - Normal Priority</small>
                </div>
            </div>
            <div class="card box-shadow mb-4">
                <div class="card-body pr-3">
                    <div class="d-flex w-100 justify-content-between">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="todo_3" id="todo_3" value="1">
                            <label class="custom-control-label" for="todo_3"><strong>Buy present for GF</strong></label>
                        </div>
                        <div class="dropdown small">
                            <a href="#" class="link-natural" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header">Action</h6>
                                <a class="dropdown-item" href="#"><i class="icon-check mr-2"></i>Mark as Done</a>
                                <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>Show Detail</a>
                                <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Task</a>
                                <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted pl-4 ml-1 d-block">2 weeks ago - Normal Priority</small>
                </div>
            </div>
        </div>
    </div>
@endsection