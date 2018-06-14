@extends('layouts.dashboard')

@section('title', 'Blog - Post Category')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">Category</h4>
            <small class="text-muted">Group your article into category</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="#modal-form-category" data-toggle="modal" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                New Category
            </a>
        </div>
    </div>
    <div>
        @include('errors._global')

        <ul class="box-list list-unstyled category-wrapper">
            @foreach($categories as $category)
                <li class="category-item cursor-pointer">
                    <a href="{{ route('blog.article.category', ['slug' => $category->slug]) }}" class="text-strong">
                        {{ $category->term }}
                    </a>
                    @if($category->posts()->count())
                        <span class="badge badge-primary badge-pill ml-2 mt-1 mt-sm-0 float-right float-sm-none">
                            {{ $category->posts()->count() }} {{ str_plural('Post', $category->posts()->count()) }}
                        </span>
                    @endif
                    <div class="d-flex justify-content-between w-100 mt-1">
                        <small class="text-muted">
                            {{ $category->description }}
                        </small>
                        <div class="dropdown small ml-2 d-flex align-self-end">
                            <a href="#" class="link-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-options-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <h6 class="dropdown-header">Action</h6>
                                <a class="dropdown-item" href="{{ route('blog.article.category', ['slug' => $category->slug]) }}">
                                    <i class="icon-docs mr-2"></i>View Articles
                                </a>
                                @if($category->slug != 'uncategories')
                                    <a class="dropdown-item btn-edit" href="#modal-form-category" data-toggle="modal"
                                       data-url="{{ route('blog.category.update', ['taxonomy' => $category->id]) }}">
                                        <i class="icon-note mr-2"></i>Edit Category
                                    </a>
                                    <a class="dropdown-item btn-delete" href="#modal-delete" data-toggle="modal"
                                       data-id="{{ $category->id }}" data-label="{{ $category->term }}" data-title="Category"
                                       data-url="{{ route('blog.category.destroy', ['taxonomy' => $category->id]) }}">
                                        <i class="icon-trash mr-2"></i>Delete
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    @include('blog.category.modals._category')
    @include('components.modals._delete')
@endsection