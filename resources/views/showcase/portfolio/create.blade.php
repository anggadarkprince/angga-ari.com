@extends('layouts.dashboard')

@section('title', 'Showcase - Create Portfolio')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">Create Portfolio</h4>
        <small class="text-muted">Publish your showcase gallery</small>
    </div>
    <div class="row justify-content-center">
        <div class="col-xl-11">
            <form enctype="multipart/form-data">
                <fieldset>
                    <legend>Basic Info</legend>
                    <div class="form-group row">
                        <label for="field" class="col-md-3 col-form-label">Field</label>
                        <div class="col-md-9">
                            <select class="custom-select" name="field" id="field" required>
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
                    <div class="form-group row">
                        <label for="title" class="col-md-3 col-form-label">Title</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="title" name="title" required placeholder="Portfolio title">
                            <small class="form-text text-muted">
                                Eg: Orion App v1.0, Medical event and promotion, My Novel: Airline in love.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tagline" class="col-md-3 col-form-label">
                            Tag Line
                            <a href="javascript:void(0)"
                               data-toggle="popover" data-placement="top"
                               data-content="Simple description about your project as main feature or visionary idea">
                                <i class="icon-question text-gray-500 ml-1 mt-1"></i>
                            </a>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="tagline" name="tagline" required placeholder="Simple caption in single line sentence">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-3 col-form-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="description" placeholder="Detail about your project" rows="3"></textarea>
                            <small class="form-text text-muted">
                                Tell the meaning and vision of your work, process and something interesting inside.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="year" class="col-md-3 col-form-label">Work At</label>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col">
                                    <select class="custom-select" name="year" id="year" required>
                                        @for($year = 2000; $year <= date('Y'); $year++)
                                            <option value="{{ $year }}"{{ old('year', date('year')) == date('year') ? ' selected' : '' }}>
                                                {{ $year }}
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="custom-select" name="month" id="month" required>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">July</option>
                                        <option value="07">June</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cover" class="col-md-3 col-form-label">Feature Cover</label>
                        <div class="col-md-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="cover" name="cover">
                                <label class="custom-file-label" for="cover">Choose file</label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Showcase Details</legend>
                    <div class="form-group row">
                        <label for="team" class="col-md-3 col-form-label">Team</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="team" name="team" required placeholder="Your team name or person names">
                            <small class="form-text text-muted">
                                Put your friend name you work with this project.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="company" class="col-md-3 col-form-label">Company</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="company" name="company" required placeholder="Company you working in">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="location" class="col-md-3 col-form-label">Location</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="location" name="location" required placeholder="Specific location of your project">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keywords" class="col-md-3 col-form-label">Keywords</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="keywords" name="keywords" required placeholder="Tags and keywords">
                            <small class="form-text text-muted">
                                Separate tags by commas.
                            </small>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Showcase Images</legend>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <a href="#" class="card card-empty mb-3" style="min-height: 150px">
                                <div class="card-body text-center d-flex flex-column justify-content-center">
                                    <h4 class="mb-2"><i class="icon-picture"></i></h4>
                                    <h6>ADD IMAGE</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a href="#" class="card card-empty mb-3" style="min-height: 150px">
                                <div class="card-body text-center d-flex flex-column justify-content-center">
                                    <h4 class="mb-2"><i class="icon-picture"></i></h4>
                                    <h6>ADD IMAGE</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a href="#" class="card card-empty mb-3" style="min-height: 150px">
                                <div class="card-body text-center d-flex flex-column justify-content-center">
                                    <h4 class="mb-2"><i class="icon-picture"></i></h4>
                                    <h6>ADD IMAGE</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 d-md-none">
                            <a href="#" class="card card-empty mb-3" style="min-height: 150px">
                                <div class="card-body text-center d-flex flex-column justify-content-center">
                                    <h4 class="mb-2"><i class="icon-picture"></i></h4>
                                    <h6>ADD IMAGE</h6>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="form-group mt-3 d-sm-flex align-items-start">
                        <label for="layout_default" class="mr-4">Layout</label>
                        <div class="d-flex align-items-center">
                            <div class="custom-control custom-radio d-inline-block mr-3">
                                <input class="custom-control-input" type="radio" name="layout" id="layout_default" value="default" checked>
                                <label class="custom-control-label" for="layout_default">Default</label>
                            </div>
                            <div class="custom-control custom-radio d-inline-block mr-3">
                                <input class="custom-control-input" type="radio" name="layout" id="layout_flow" value="flow">
                                <label class="custom-control-label" for="layout_flow">Flow</label>
                            </div>
                            <div class="custom-control custom-radio d-inline-block">
                                <input class="custom-control-input" type="radio" name="layout" id="layout_masonry" value="masonry">
                                <label class="custom-control-label" for="layout_masonry">Masonry</label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group mb-5">
                    <button class="btn btn-primary btn-block">Save Portfolio</button>
                </div>
            </form>
        </div>
    </div>
@endsection