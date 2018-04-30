@extends('vault._layout')

@section('title', 'Activity')

@section('vault_description', 'Password activity')

@section('vault_content')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <fieldset>
                <legend>Log History</legend>
            </fieldset>
            <ul class="list-unstyled mb-4">
                <li class="d-block d-sm-flex justify-content-between mb-3">
                    <span class="d-block">Create Password <strong class="text-primary">Facebook</strong> with SHA-512 encryption</span>
                    <small class="text-muted">a moment ago</small>
                </li>
                <li class="d-block d-sm-flex justify-content-between mb-3">
                    <span class="d-block">Reveal vault <strong class="text-primary">Twitter</strong> to <a href="#" class="link-muted">anggadarkprince@gmail.com</a></span>
                    <small class="text-muted">3 days ago</small>
                </li>
            </ul>

            <a href="#" class="small text-uppercase">Load More Activity</a>
        </div>
    </div>
@endsection