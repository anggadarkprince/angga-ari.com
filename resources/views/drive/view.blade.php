@extends('layouts.app')

@section('title', 'Download and share file')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3 my-4">
                <div class="card box-shadow text-center">
                    <div class="card-body">
                        <h1 class="display-3 mt-2"><i class="icon-doc"></i></h1>
                        <a href="#" class="d-block text-uppercase small mb-2"><strong>Angga Ari Wijaya</strong></a>
                        <p class="mb-0"><strong><a href="#" class="link-natural">High Performance MySQL.pdf</a></strong></p>
                        <span class="text-muted d-block">2,463 KB</span>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary btn-sm btn-block my-2">DOWNLOAD</button>
                        <span class="small text-muted">34 / 50 downloads</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection