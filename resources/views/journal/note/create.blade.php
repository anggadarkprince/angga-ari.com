@extends('layouts.dashboard')

@section('title', 'Journal - Create Note')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">Create Note</h4>
        <small class="text-muted">New note of journal</small>
    </div>
    <div>
        <form novalidate id="form-post">
            <fieldset>
                <legend>Write Note</legend>
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Note title" required maxlength="50">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="editor-simple" placeholder="Write your content here" rows="15">Type note here...</textarea>
                    <small class="form-text text-muted">
                        552 characters / 89 words.
                    </small>
                </div>
            </fieldset>

            <fieldset>
                <legend>Note Details</legend>
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
                            <label for="notebook">Notebook</label>
                            <select name="notebook" class="selectize" id="notebook" placeholder="Type new or select notebook" required>
                                <option value=""></option>
                                <option value="1">My Personal Notebook</option>
                                <option value="2">Project</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" class="selectize create" id="category" placeholder="Type new or select category" required>
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
                </div>
            </fieldset>

            <div class="form-group mb-5">
                <button class="btn btn-primary btn-lg">Save Note</button>
            </div>
        </form>
    </div>
@endsection