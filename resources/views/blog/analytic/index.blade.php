@extends('layouts.dashboard')

@section('title', 'Blog - Personal blog and post journal')

@section('content')
    <div class="section-title d-none d-sm-block">
        <h4 class="mb-0">Blog Analytic</h4>
        <small class="text-muted">Post summary and visitors</small>
    </div>
    <div>
        <fieldset>
            <legend>Articles</legend>
            <div class="row">
                <div class="col-6 col-md-4 d-flex flex-column flex-sm-row">
                    <h2 class="mr-4"><i class="icon-eye text-primary"></i></h2>
                    <div>
                        <h5 class="text-primary">Viewer</h5>
                        <p class="text-muted">{{ $views }} Visits</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-flex flex-column flex-sm-row">
                    <h2 class="mr-4"><i class="icon-bubbles text-primary"></i></h2>
                    <div>
                        <h5 class="text-primary">Comments</h5>
                        <p class="text-muted">{{ $comments }} Talks</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('blog') }}" class="btn btn-outline-primary btn-lg btn-block">
                        VISIT BLOG
                    </a>
                </div>
            </div>
        </fieldset>
        <hr class="separator">
    </div>
@endsection