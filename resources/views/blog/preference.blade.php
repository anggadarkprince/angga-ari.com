@extends('layouts.dashboard')

@section('title', 'Blog - Preference')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">Preference</h4>
        <small class="text-muted">Blog settings and profile</small>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form enctype="multipart/form-data">
                <fieldset>
                    <legend>Blog Setting</legend>
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label">Blog Headline</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="name" placeholder="Blog main caption" value="Craft Thing, Share Idea">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact" class="col-md-3 col-form-label">Blog Subtitle</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="contact" placeholder="Blog tagline" value="My personal web blog">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact" class="col-md-3 col-form-label">Keywords</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control tag-able" id="contact" placeholder="Keyword of your content">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-md-3 col-form-label">Category</label>
                        <div class="col-md-9">
                            <select class="custom-select">
                                <option selected>Select blog category</option>
                                <option value="1">Technology</option>
                                <option value="2">Nature</option>
                                <option value="3">Science</option>
                                <option value="4">Food</option>
                                <option value="5">Business</option>
                                <option value="6">Misc</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-md-3 col-form-label">Language</label>
                        <div class="col-md-9">
                            <select class="custom-select">
                                <option value="EN" selected>English (US)</option>
                                <option value="ID">Indonesia (ID)</option>
                            </select>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                        <button class="btn btn-primary btn-sm btn-wide">Update Preference</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection