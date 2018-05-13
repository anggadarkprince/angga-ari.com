@extends('layouts.dashboard')

@section('title', 'Blog - Create Post')

@section('content')
    <div class="section-title d-flex w-100 justify-content-between">
        <div>
            <h4 class="mb-0">Create Post</h4>
            <small class="text-muted">Publish an article</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="{{ route('blog.post.create') }}" class="btn btn-sm btn-info">
                Preview
            </a>
        </div>
    </div>
    <div>
        <form enctype="multipart/form-data" novalidate id="form-post">
            <fieldset>
                <legend>Write Post</legend>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" id="title" name="title" placeholder="Post title" required maxlength="200">
                        <div class="input-group-append">
                            <button class="btn btn-input" type="button" data-toggle="collapse" data-target="#title-setting" aria-expanded="false">
                                <i class="icon-options mt-1 d-inline-block"></i>
                            </button>
                        </div>
                    </div>
                    <div class="collapse" id="title-setting">
                        <input type="text" class="form-control mt-2" id="slug" name="slug" placeholder="Unique post slug" required maxlength="500">
                        <input type="text" class="form-control mt-2" id="subtitle" name="subtitle" placeholder="Post subtitle" maxlength="300">
                        <small class="form-text text-muted">
                            Additional title to make your post more described.
                        </small>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control post-editor" id="editor" placeholder="Write your content here" rows="15"></textarea>
                    <small class="form-text text-muted">
                        552 characters / 89 words.
                    </small>
                </div>
            </fieldset>

            <fieldset>
                <legend>Post Details</legend>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" class="selectize" id="category" placeholder="Type new or select category" required>
                                <option value=""></option>
                                <option value="design">Design</option>
                                <option value="programming">Programming</option>
                                <option value="accounting">Accounting</option>
                                <option value="medical">Medical</option>
                                <option value="engineering">Engineering</option>
                                <option value="writing">Writing</option>
                                <option value="film">Film</option>
                                <option value="social">Social</option>
                                <option value="music">Music</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="featured">Feature Cover</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="featured" name="featured">
                                <label class="custom-file-label" for="featured">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" class="form-control tag-able" id="tags" name="tags" placeholder="Tags and keywords" required>
                    <small class="form-text text-muted">
                        Separate tags by pressing enter.
                    </small>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="privacy">Privacy</label>
                            <div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" type="radio" name="privacy" id="privacy_public" value="default" checked>
                                    <label class="custom-control-label" for="privacy_public">Public</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" type="radio" name="privacy" id="privacy_private" value="flow">
                                    <label class="custom-control-label" for="privacy_private">Private</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="status">Publishing Type</label>
                            <div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input ignore-validation" type="radio" name="status" id="status_published" value="default" checked>
                                    <label class="custom-control-label" for="status_published">Published</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input ignore-validation" type="radio" name="status" id="status_draft" value="flow">
                                    <label class="custom-control-label" for="status_draft">Draft</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="form-group mb-5">
                <button class="btn btn-primary btn-lg">Save Post</button>
            </div>
        </form>
    </div>
@endsection