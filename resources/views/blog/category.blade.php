@extends('layouts.dashboard')

@section('title', 'Blog - Post Category')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">Category</h4>
            <small class="text-muted">Group your article into category</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="#" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                <i class="icon-note mr-2 d-none d-sm-inline-block"></i>New Category
            </a>
        </div>
    </div>
    <div>
        <ul class="box-list list-unstyled">
            <li>
                <a href="#" class="text-strong">Computer</a><span class="badge badge-primary badge-pill ml-2 mt-1 mt-sm-0 float-right float-sm-none">23</span>
                <div class="d-flex justify-content-between w-100 mt-1">
                    <small class="text-muted">
                        General computer knowledge, operating system, and tweaking.
                    </small>
                    <div class="dropdown small ml-2 d-flex align-self-end">
                        <a href="#" class="link-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>View Articles</a>
                            <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Category</a>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="text-strong">Programming</a><span class="badge badge-primary badge-pill ml-2 mt-1 mt-sm-0 float-right float-sm-none">623</span>
                <div class="d-flex justify-content-between w-100 mt-1">
                    <small class="text-muted">
                        Algorithm many programming languages and news.
                    </small>
                    <div class="dropdown small ml-2 d-flex align-self-end">
                        <a href="#" class="link-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>View Articles</a>
                            <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Category</a>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="text-strong">Java</a><span class="badge badge-primary badge-pill ml-2 mt-1 mt-sm-0 float-right float-sm-none">36</span>
                <div class="d-flex justify-content-between w-100 mt-1">
                    <small class="text-muted">
                        Object oriented java ecosystem programming tutorial.
                    </small>
                    <div class="dropdown small ml-2 d-flex align-self-end">
                        <a href="#" class="link-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>View Articles</a>
                            <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Category</a>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="text-strong">PHP</a><span class="badge badge-primary badge-pill ml-2 mt-1 mt-sm-0 float-right float-sm-none">253</span>
                <div class="d-flex justify-content-between w-100 mt-1">
                    <small class="text-muted">
                        Most popular web programming language native and algorithm.
                    </small>
                    <div class="dropdown small ml-2 d-flex align-self-end">
                        <a href="#" class="link-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>View Articles</a>
                            <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Category</a>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="text-strong">Javascript</a><span class="badge badge-primary badge-pill ml-2 mt-1 mt-sm-0 float-right float-sm-none">16</span>
                <div class="d-flex justify-content-between w-100 mt-1">
                    <small class="text-muted">
                        Front end browser script programming, including jquery and libraries.
                    </small>
                    <div class="dropdown small ml-2 d-flex align-self-end">
                        <a href="#" class="link-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>View Articles</a>
                            <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Category</a>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="text-strong">Codeigniter</a><span class="badge badge-primary badge-pill ml-2 mt-1 mt-sm-0 float-right float-sm-none">734</span>
                <div class="d-flex justify-content-between w-100 mt-1">
                    <small class="text-muted">
                        Simple PHP framework in the world, simple project and tutorials.
                    </small>
                    <div class="dropdown small ml-2 d-flex align-self-end">
                        <a href="#" class="link-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>View Articles</a>
                            <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Category</a>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="text-strong">Laravel</a><span class="badge badge-primary badge-pill ml-2 mt-1 mt-sm-0 float-right float-sm-none">12</span>
                <div class="d-flex justify-content-between w-100 mt-1">
                    <small class="text-muted">
                        New and popular PHP framework with lightspeed development process.
                    </small>
                    <div class="dropdown small ml-2 d-flex align-self-end">
                        <a href="#" class="link-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>View Articles</a>
                            <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Category</a>
                            <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="text-strong">Uncategories</a><span class="badge badge-primary badge-pill ml-2 mt-1 mt-sm-0 float-right float-sm-none">45</span>
                <div class="d-flex justify-content-between w-100 mt-1">
                    <small class="text-muted">
                        Another blog categories outside topic and temporary draft post.
                    </small>
                    <div class="dropdown small ml-2 d-flex align-self-end">
                        <a href="#" class="link-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">Action</h6>
                            <a class="dropdown-item" href="#"><i class="icon-docs mr-2"></i>View Articles</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@endsection