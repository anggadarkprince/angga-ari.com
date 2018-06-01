@extends('layouts.dashboard')

@section('title', 'Showcase - Create Portfolio')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">Create Portfolio</h4>
        <small class="text-muted">Publish your showcase gallery</small>
    </div>

    @include('errors._general')
    @include('errors._message')

    <div class="row justify-content-center">
        <div class="col-xl-11">
            <form action="{{ route('showcase.portfolio.store') }}" method="post" novalidate id="form-with-cover">
                @csrf
                <fieldset>
                    <legend>Basic Info</legend>
                    <div class="form-group row">
                        <label for="field" class="col-md-3 col-form-label">Field</label>
                        <div class="col-md-9">
                            <select class="selectize{{ $errors->first('field') ? ' is-invalid' : '' }}"
                                    name="field" id="field" placeholder="Select creative field" required>
                                <option value=""></option>
                                @foreach(\App\Skill::FIELDS as $field)
                                    <option value="{{ $field }}"{{ old('field') == $field ? ' selected' : '' }}>
                                        {{ $field }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->first('field'))
                                <span class="invalid-feedback">{{ $errors->first('field') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-3 col-form-label">Title</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control{{ $errors->first('title') ? ' is-invalid' : '' }}"
                                   id="title" name="title" value="{{ old('title') }}" required
                                   placeholder="Portfolio title">
                            @if($errors->first('title'))
                                <span class="invalid-feedback">{{ $errors->first('title') }}</span>
                            @endif
                            <small class="form-text text-muted">
                                Eg: Orion App v1.0, Medical event and promotion, My Novel: Airline in love.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tagline" class="col-md-3 col-form-label">
                            Tagline
                            <a href="javascript:void(0)"
                               data-toggle="popover" data-placement="top"
                               data-content="Simple description about your project as main feature or visionary idea">
                                <i class="icon-question text-gray-500 ml-1 mt-1"></i>
                            </a>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control{{ $errors->first('tagline') ? ' is-invalid' : '' }}"
                                   id="tagline" name="tagline" value="{{ old('tagline') }}" required
                                   placeholder="Simple caption in single line sentence">
                            @if($errors->first('tagline'))
                                <span class="invalid-feedback">{{ $errors->first('tagline') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-3 col-form-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control{{ $errors->first('description') ? ' is-invalid' : '' }}"
                                      id="description" name="description" placeholder="Detail about your project"
                                      rows="3"
                                      required>{{ old('description') }}</textarea>
                            @if($errors->first('description'))
                                <span class="invalid-feedback">{{ $errors->first('description') }}</span>
                            @endif
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
                                    <select class="selectize{{ $errors->first('year') ? ' is-invalid' : '' }}"
                                            name="year" id="year" required>
                                        @for($year = 1975; $year <= date('Y'); $year++)
                                            <option value="{{ $year }}"{{ old('year', date('Y')) == $year ? ' selected' : '' }}>
                                                {{ $year }}
                                            </option>
                                        @endfor
                                    </select>
                                    @if($errors->first('year'))
                                        <span class="invalid-feedback">{{ $errors->first('year') }}</span>
                                    @endif
                                </div>
                                <div class="col">
                                    <select class="selectize{{ $errors->first('month') ? ' is-invalid' : '' }}"
                                            name="month" id="month" required>
                                        @foreach(\App\Contracts\Calendar::MONTH_NAMES as $numMonth => $monthName)
                                            <option value="{{ $numMonth }}"{{ old('birthday_month', date('m')) == $numMonth ? ' selected' : '' }}>
                                                {{ __($monthName) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if($errors->first('month'))
                                        <span class="invalid-feedback">{{ $errors->first('month') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cover" class="col-md-3 col-form-label">Feature Cover</label>
                        <div class="col-md-9">
                            <div class="upload-cover-wrapper" style="display:none;">
                                <div id="upload-cover-content"></div>
                            </div>
                            <input type="hidden" name="cover_base64" id="cover-base64">
                            <div class="custom-file">
                                <input type="file"
                                       class="custom-file-input{{ $errors->first('cover') ? ' is-invalid' : '' }}"
                                       id="portfolio-cover" name="cover" accept="image/*" required>
                                @if($errors->first('cover'))
                                    <span class="invalid-feedback">{{ $errors->first('cover') }}</span>
                                @endif
                                <label class="custom-file-label" for="cover">Choose file</label>
                            </div>
                            <small class="form-text text-muted">
                                For best view upload image with ratio 10:6 or around 1200 x 720 pixels.
                            </small>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Showcase Details</legend>
                    <div class="form-group row">
                        <label for="team" class="col-md-3 col-form-label">Team</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control{{ $errors->first('team') ? ' is-invalid' : '' }}"
                                   id="team" name="team" value="{{ old('team') }}" required
                                   placeholder="Your team name or person names">
                            @if($errors->first('team'))
                                <span class="invalid-feedback">{{ $errors->first('team') }}</span>
                            @endif
                            <small class="form-text text-muted">
                                Put your friend name you work with this project.
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="company" class="col-md-3 col-form-label">Company</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control{{ $errors->first('company') ? ' is-invalid' : '' }}"
                                   id="company" name="company" value="{{ old('company') }}" required
                                   placeholder="Company you working in">
                            @if($errors->first('company'))
                                <span class="invalid-feedback">{{ $errors->first('company') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="url" class="col-md-3 col-form-label">Website</label>
                        <div class="col-md-9">
                            <input type="url" class="form-control{{ $errors->first('url') ? ' is-invalid' : '' }}"
                                   id="url" name="url" value="{{ old('url') }}"
                                   placeholder="Website or url of your project">
                            @if($errors->first('url'))
                                <span class="invalid-feedback">{{ $errors->first('url') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keywords" class="col-md-3 col-form-label">Keywords</label>
                        <div class="col-md-9">
                            <input type="text"
                                   class="form-control tag-able{{ $errors->first('keywords') ? ' is-invalid' : '' }}"
                                   id="keywords" name="keywords" value="{{ old('keywords') }}" required
                                   placeholder="Tags and keywords">
                            @if($errors->first('keywords'))
                                <span class="invalid-feedback">{{ $errors->first('keywords') }}</span>
                            @endif
                            <small class="form-text text-muted">
                                Separate tags by commas or enter.
                            </small>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Showcase Images</legend>
                    <div class="row screenshot-wrapper">
                        @for($i = 0; $i < 3; $i++)
                            <div class="col-sm-6 col-md-4 screenshot-item-wrapper mb-3">
                                <a href="#modal-upload-portfolio" data-toggle="modal"
                                   class="add-screenshot-item card card-empty" style="min-height: 143px">
                                    <div class="card-body text-center d-flex flex-column justify-content-center">
                                        <h4 class="mb-2"><i class="icon-picture"></i></h4>
                                        <h6>ADD IMAGE</h6>
                                    </div>
                                </a>
                                <div class="result-screenshot-item" style="display: none">
                                    <a href="#modal-upload-portfolio" data-toggle="modal"
                                       class="result-screenshot-link">
                                        <img src="#" alt="Screenshot" class="img-fluid rounded">
                                    </a>
                                    <div class="d-flex justify-content-between mt-2">
                                        <a href="#modal-upload-portfolio" data-toggle="modal"
                                           class="small link-muted align-self-center">CHANGE</a>
                                        <button type="button" class="close" aria-label="Close"
                                                data-url="{{ route('showcase.portfolio.upload.delete') }}">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                                <input type="hidden" name="screenshots_base64[]" class="data-screenshot-item">
                            </div>
                        @endfor
                    </div>

                    <div class="form-group mt-3 d-sm-flex align-items-start">
                        <label for="layout_default" class="mr-4">Layout</label>
                        <div class="d-flex align-items-center">
                            <div class="custom-control custom-radio d-inline-block mr-3">
                                <input class="custom-control-input" type="radio" name="layout" id="layout_default"
                                       value="default"{{ old('layout', 'default') == 'default' ? ' checked' : '' }}>
                                <label class="custom-control-label" for="layout_default">Default</label>
                            </div>
                            <div class="custom-control custom-radio d-inline-block mr-3">
                                <input class="custom-control-input" type="radio" name="layout" id="layout_flow"
                                       value="flow"{{ old('layout') == 'flow' ? ' checked' : '' }}>
                                <label class="custom-control-label" for="layout_flow">Flow</label>
                            </div>
                            <div class="custom-control custom-radio d-inline-block">
                                <input class="custom-control-input" type="radio" name="layout" id="layout_masonry"
                                       value="masonry"{{ old('layout') == 'masonry' ? ' checked' : '' }}>
                                <label class="custom-control-label" for="layout_masonry">Masonry</label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group mb-5">
                    <button type="submit" class="btn btn-primary btn-block">Save Portfolio</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal" id="modal-upload-portfolio">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 434px" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="upload-screenshot-wrapper" style="display:none;">
                        <div id="upload-screenshot-content"></div>
                        <label for="portfolio-screenshot" class="link-muted d-block text-center small"
                               style="cursor: pointer">
                            REPLACE IMAGE
                        </label>
                    </div>
                    <div class="select-screenshot">
                        <label for="portfolio-screenshot" class="card card-empty mb-3"
                               style="min-height: 275px; cursor: pointer">
                            <div class="card-body text-center d-flex flex-column justify-content-center">
                                <h2 class="mb-2"><i class="icon-picture"></i></h2>
                                <h5>CHOOSE IMAGE</h5>
                            </div>
                        </label>
                        <p class="text-muted small text-center mb-0">
                            For best view upload with size 800 x 500 pixels
                        </p>
                    </div>
                    <input type="file" id="portfolio-screenshot" name="screenshot" accept="image/*" class="d-none">
                </div>
                <div class="modal-footer justify-content-center pt-0">
                    <button type="button" class="btn btn-primary btn-crop" data-dismiss="modal"
                            data-url="<?= route('showcase.portfolio.upload') ?>"
                            data-url-delete="{{ route('showcase.portfolio.upload.delete') }}">
                        Crop and Upload
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script id="template-screenshot-item" type="x-tmpl-mustache">
        <div class="col-sm-6 col-md-4 screenshot-item-wrapper mb-3">
            <a href="#modal-upload-portfolio" data-toggle="modal"
               class="add-screenshot-item card card-empty" style="min-height: 143px">
                <div class="card-body text-center d-flex flex-column justify-content-center">
                    <h4 class="mb-2"><i class="icon-picture"></i></h4>
                    <h6>ADD IMAGE</h6>
                </div>
            </a>
            <div class="result-screenshot-item" style="display: none">
                <a href="#modal-upload-portfolio" data-toggle="modal"
                   class="result-screenshot-link">
                    <img src="#" alt="Screenshot" class="img-fluid rounded">
                </a>
                <div class="d-flex justify-content-between mt-2">
                    <a href="#modal-upload-portfolio" data-toggle="modal"
                       class="small link-muted align-self-center">CHANGE</a>
                    <button type="button" class="close" aria-label="Close" data-url="{{ route('showcase.portfolio.upload.delete') }}">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <input type="hidden" name="screenshots_base64[]" class="data-screenshot-item">
        </div>

    </script>
@endsection