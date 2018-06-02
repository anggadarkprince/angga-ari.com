@extends('layouts.dashboard')

@section('title', 'Showcase - Portfolio')

@section('content')
    <div class="section-title d-sm-flex w-100 justify-content-between">
        <div class="d-none d-sm-block">
            <h4 class="mb-0">Portfolio</h4>
            <small class="text-muted">Showcase and galleries</small>
        </div>
        <div class="mt-0 mt-sm-2">
            <a href="{{ route('showcase.portfolio.create') }}" class="btn btn-sm btn-primary d-block d-sm-inline-block">
                New Portfolio
            </a>
        </div>
    </div>

    @include('errors._general')
    @include('errors._message')

    <div class="row">
        @foreach($portfolios as $portfolio)
            <div class="col-sm-6 col-md-4 d-flex align-items-stretch">
                <div class="card card-portfolio box-shadow mb-4 w-100">
                    <img class="card-img-top" src="{{ asset('storage/' . $portfolio->cover_small) }}" alt="{{ $portfolio->title }}">
                    <div class="card-body">
                        <h3 class="card-title mb-2">
                            <a href="{{ route('showcase.view', ['portfolio' => $portfolio->slug]) }}">
                                {{ $portfolio->title }}
                            </a>
                        </h3>
                        <p class="card-text mb-1 text-uppercase">{{ $portfolio->field }}</p>
                        <p class="text-muted small mb-0">{{ $portfolio->company }}</p>
                    </div>
                    <div class="card-footer small text-muted">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <i class="icon-eye mr-2"></i>334K
                            </li>
                            <li class="list-inline-item">
                                <i class="icon-bubbles mr-2"></i>54K
                            </li>
                            <li class="list-inline-item float-right">
                                <div class="dropdown">
                                    <a href="#" class="link-muted" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-options-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <h6 class="dropdown-header">Action</h6>
                                        <a class="dropdown-item" href="#"><i class="icon-eye mr-2"></i>View Showcase</a>
                                        <a class="dropdown-item" href="#"><i class="icon-note mr-2"></i>Edit Portfolio</a>
                                        <a class="dropdown-item" href="#"><i class="icon-trash mr-2"></i>Delete</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-sm-6 col-md-4 d-flex align-items-stretch" style="min-height: 300px">
            <a href="{{ route('showcase.portfolio.create') }}" class="card card-portfolio card-empty mb-4 w-100">
                <div class="card-body text-center d-flex flex-column justify-content-center">
                    <h4 class="mb-2"><i class="icon-plus"></i></h4>
                    <h5>ADD NEW PORTFOLIO</h5>
                </div>
            </a>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        {{ $portfolios->links() }}
    </div>
@endsection