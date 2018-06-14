@extends('layouts.dashboard')

@section('title', 'Blog - Preference')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">Preference</h4>
        <small class="text-muted">Blog settings and profile</small>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">

            @include('errors._global')

            <form action="{{ route('blog.preference.update') }}" method="post" novalidate>
                @method('put')
                @csrf
                <fieldset>
                    <legend>Blog Setting</legend>
                    <div class="form-group row">
                        <label for="heading" class="col-md-3 col-form-label">Blog Headline</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control{{ $errors->first('heading') ? ' is-invalid' : '' }}"
                                   id="heading" name="heading" required maxlength="100"
                                   placeholder="Blog main caption" value="{{ old('heading', $heading) }}">
                            @if($errors->first('heading'))
                                <span class="invalid-feedback">{{ $errors->first('heading') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subheading" class="col-md-3 col-form-label">Blog Subtitle</label>
                        <div class="col-md-9">
                            <input type="text"
                                   class="form-control{{ $errors->first('subheading') ? ' is-invalid' : '' }}"
                                   id="subheading" name="subheading" maxlength="100"
                                   placeholder="Blog tagline" value="{{ old('subheading', $subheading) }}">
                            @if($errors->first('subheading'))
                                <span class="invalid-feedback">{{ $errors->first('subheading') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keywords" class="col-md-3 col-form-label">Keywords</label>
                        <div class="col-md-9">
                            <input type="text"
                                   class="form-control tag-able{{ $errors->first('keywords') ? ' is-invalid' : '' }}"
                                   id="keywords" name="keywords" required
                                   placeholder="Keyword of your content" value="{{ old('keywords', $keywords) }}">
                            @if($errors->first('keywords'))
                                <span class="invalid-feedback">{{ $errors->first('keywords') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-md-3 col-form-label">Category</label>
                        <div class="col-md-9">
                            <select class="selectize{{ $errors->first('category') ? ' is-invalid' : '' }}" id="category"
                                    name="category" placeholder="Select blog category" required>
                                <option value=""></option>
                                @foreach(config('constants.blog.categories') as $id => $cat)
                                    <option value="{{ $id }}"{{ old('category', $category) == $id ? ' selected' : '' }}>
                                        {{ $cat }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->first('category'))
                                <span class="invalid-feedback">{{ $errors->first('category') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="language" class="col-md-3 col-form-label">Language</label>
                        <div class="col-md-9">
                            <select class="selectize{{ $errors->first('language') ? ' is-invalid' : '' }}" id="language"
                                    name="language" placeholder="Select blog language" required>
                                <option value=""></option>
                                @foreach(config('constants.languages') as $code => $lang)
                                    <option value="{{ $code }}"{{ old('language', $language) == $code ? ' selected' : '' }}>
                                        {{ $lang }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->first('language'))
                                <span class="invalid-feedback">{{ $errors->first('language') }}</span>
                            @endif
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                        <button class="btn btn-primary">Update Preference</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection