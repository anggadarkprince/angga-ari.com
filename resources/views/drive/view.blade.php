@extends('layouts.app')

@section('title', 'Download and share file')

@section('main')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3 my-4">
                <div class="card box-shadow text-center">
                    <div class="card-body">
                        <img src="{{ Storage::url('layouts/filetype/pdf.svg') }}" class="w-25 mb-2">
                        <p class="mb-0"><strong><a href="#" class="link-natural">High Performance MySQL.pdf</a></strong></p>
                        <span class="text-muted d-block">2,463 KB</span>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary btn-block my-2">DOWNLOAD</button>
                        <span class="small text-muted">Reach 34 / 50 downloads</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection