@extends('layouts.dashboard')

@section('title', 'Blog - Edit post ' . $post->title)

@section('content')
    <div class="section-title d-flex w-100 justify-content-between">
        <div>
            <h4 class="mb-0">Edit Post</h4>
            <small class="text-muted">Edit an article</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="{{ route('blog.post.preview', ['id' => $post->id]) }}" class="btn btn-sm btn-info">
                Preview
            </a>
        </div>
    </div>
    <div>

        @include('errors._global')

        <form action="{{ route('blog.post.update', ['post' => $post->slug]) }}" method="post" novalidate id="form-post">
            @csrf
            @method('put')
            <fieldset>
                <legend>Write Post</legend>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text"
                               class="form-control form-control-lg{{ $errors->first('title') ? ' is-invalid' : '' }}"
                               id="title" name="title" value="{{ old('title', $post->title) }}" placeholder="Post title" required
                               maxlength="200">
                        <div class="input-group-append">
                            <button class="btn btn-input" type="button" data-toggle="collapse"
                                    data-target="#title-setting" aria-expanded="false">
                                <i class="icon-options mt-1 d-inline-block"></i>
                            </button>
                        </div>
                        @if($errors->first('title'))
                            <span class="invalid-feedback">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="collapse show" id="title-setting">
                        <input type="text"
                               class="form-control mt-2 slugger slugger-changed{{ $errors->first('slug') ? ' is-invalid' : '' }}"
                               id="slug" name="slug" value="{{ old('slug', $post->slug) }}" data-target="#title"
                               placeholder="Unique post slug" required maxlength="500">
                        <input type="text"
                               class="form-control mt-2{{ $errors->first('subtitle') ? ' is-invalid' : '' }}"
                               id="subtitle" name="subtitle" value="{{ old('subtitle', $post->subtitle) }}"
                               placeholder="Post subtitle" maxlength="300">
                        <small class="form-text text-muted">
                            Additional title to make your post more described.
                        </small>
                    </div>
                </div>
                <div class="form-group{{ $errors->first('content') ? ' is-invalid' : '' }}">
                    <textarea class="form-control post-editor" id="editor" name="content"
                              placeholder="Write your content here" rows="15">{{ old('content', $post->content) }}</textarea>
                    @if($errors->first('content'))
                        <span class="invalid-feedback">{{ $errors->first('content') }}</span>
                    @endif
                    <small class="form-text text-muted" id="character-counter" data-target="editor">
                        0 characters / 0 words
                    </small>
                </div>
            </fieldset>

            <fieldset>
                <legend>Post Details</legend>
                <label for="post-cover" class="d-block cursor-pointer">
                    <div class="mt-2 mb-3 rounded" id="cover-preview"
                         style="background: url('{{ $post->cover_medium_url }}') center center / cover; {{ empty($post->cover) ? 'display: none;' : '' }} height: 240px"></div>
                </label>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category"
                                    class="selectize create{{ $errors->first('category') ? ' is-invalid' : '' }}"
                                    id="category" placeholder="Type new or select category" required>
                                <option value=""></option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"{{ old('category', $post->category_id) == $category->id ? ' selected' : '' }}>
                                        {{ $category->term }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->first('category'))
                                <span class="invalid-feedback">{{ $errors->first('category') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="post-cover">Feature Cover</label>
                            <div class="custom-file">
                                <input type="hidden" id="post-cover-temp" name="cover_temp" value="">
                                <input type="file" accept="image/gif, image/png, image/jpeg" data-url="<?= route('uploader.upload') ?>"
                                       class="custom-file-input{{ $errors->first('cover') ? ' is-invalid' : '' }}"
                                       id="post-cover" name="cover">
                                @if($errors->first('cover'))
                                    <span class="invalid-feedback">{{ $errors->first('cover') }}</span>
                                @endif
                                <label class="custom-file-label text-truncate" for="cover">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" class="form-control tag-able{{ $errors->first('tags') ? ' is-invalid' : '' }}"
                           id="tags" name="tags" value="{{ old('tags', $post->tag) }}" placeholder="Tags and keywords"
                           maxlength="500">
                    @if($errors->first('tags'))
                        <span class="invalid-feedback">{{ $errors->first('tags') }}</span>
                    @endif
                    <small class="form-text text-muted">
                        Separate tags by pressing enter or comma.
                    </small>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="privacy">Privacy</label>
                            <div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input{{ $errors->first('privacy') ? ' is-invalid' : '' }}"
                                           type="radio" name="privacy" id="privacy_public"
                                           value="public"{{ old('privacy', $post->privacy) == 'public' ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="privacy_public">Public</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input{{ $errors->first('privacy') ? ' is-invalid' : '' }}"
                                           type="radio" name="privacy" id="privacy_private"
                                           value="private"{{ old('privacy', $post->privacy) == 'private' ? ' checked' : '' }}>
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
                                    <input class="custom-control-input ignore-validation{{ $errors->first('status') ? ' is-invalid' : '' }}"
                                           type="radio" name="status" id="status_published"
                                           value="published"{{ old('status', $post->status) == 'published' ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="status_published">Published</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input ignore-validation{{ $errors->first('status') ? ' is-invalid' : '' }}"
                                           type="radio" name="status" id="status_draft"
                                           value="draft"{{ old('status', $post->status) == 'draft' ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="status_draft">Draft</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="form-group mb-5">
                <button class="btn btn-info btn-lg">Update Post</button>
            </div>
        </form>
    </div>
@endsection