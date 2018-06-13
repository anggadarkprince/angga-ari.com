@extends('layouts.dashboard')

@section('title', 'Showcase - Professional profile and curriculum vitae')

@section('content')
    <div class="section-title d-none d-sm-block">
        <h4 class="mb-0">Showcase Summary</h4>
        <small class="text-muted">Professional profile and identity</small>
    </div>
    <div>
        <fieldset>
            <legend>Showcase</legend>
            <div class="row">
                <div class="col-6 col-md-4 d-flex flex-column flex-sm-row">
                    <h2 class="mr-4"><i class="icon-like text-primary"></i></h2>
                    <div>
                        <h5 class="text-primary">Impression</h5>
                        <p class="text-muted">{{ $user->portfolios()->sum('views') }} Views</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 d-flex flex-column flex-sm-row">
                    <h2 class="mr-4"><i class="icon-bubbles text-primary"></i></h2>
                    <div>
                        <h5 class="text-primary">Comments</h5>
                        <p class="text-muted">{{ $user->portfolios()->sum('comments') }} Talks</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('showcase.generate', ['username' => auth()->user()->username]) }}" class="btn btn-info btn-lg btn-block">
                        GENERATE CV <i class="icon-doc ml-2"></i>
                    </a>
                </div>
            </div>
        </fieldset>
        <hr class="separator">
        <fieldset>
            <legend>Data Summary</legend>
            <div class="row">
                <div class="col-md">
                    <div class="d-flex d-md-block justify-content-between">
                        <h6>Portfolio</h6>
                        <a href="{{ route('showcase.portfolio') }}" class="link-muted">
                            {{ $user->portfolios()->count() }} Items
                        </a>
                    </div>
                </div>
                <div class="col-md">
                    <div class="d-flex d-md-block justify-content-between">
                        <h6>Expertise</h6>
                        <a href="{{ route('showcase.skill') }}" class="link-muted">
                            {{ $user->skills()->count() }} Skills
                        </a>
                    </div>
                </div>
                <div class="col-md">
                    <div class="d-flex d-md-block justify-content-between">
                        <h6>Educations</h6>
                        <a href="{{ route('showcase.achievement') }}" class="link-muted">
                            {{ $user->educations()->count() }} Schools
                        </a>
                    </div>
                </div>
                <div class="col-md">
                    <div class="d-flex d-md-block justify-content-between">
                        <h6>Experiences</h6>
                        <a href="{{ route('showcase.achievement') }}" class="link-muted">
                            {{ $user->experiences()->count() }} Activity
                        </a>
                    </div>
                </div>
                <div class="col-md">
                    <div class="d-flex d-md-block justify-content-between">
                        <h6>Awards</h6>
                        <a href="{{ route('showcase.achievement') }}" class="link-muted">
                            {{ $user->awards()->count() }} Winning
                        </a>>
                    </div>
                </div>
            </div>
        </fieldset>
        <hr class="separator">
        <fieldset>
            <legend>Popular Portfolio</legend>
            <div class="row">
                @foreach($portfolios as $portfolio)
                    <div class="col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card card-portfolio box-shadow mb-4 w-100">
                            <img class="card-img-top lazy loading" style="min-height: 153px" data-src="{{ asset('storage/' . $portfolio->cover_small) }}">
                            <div class="card-body">
                                <h3 class="card-title mb-2">
                                    <a href="{{ route('showcase.view', ['portfolio' => $portfolio->slug]) }}">
                                        {{ $portfolio->title }}
                                    </a>
                                </h3>
                                <p class="card-text mb-1 text-uppercase text-muted">{{ $portfolio->field }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <a href="{{ route('showcase.portfolio') }}" class="btn btn-info mt-3">
                Show All Portfolio
            </a>
        </fieldset>
    </div>
@endsection