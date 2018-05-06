@extends('layouts.dashboard')

@section('title', 'Vault - Password Log Activity')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">Vault Activity</h4>
        <small class="text-muted">Log activity of vault</small>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-xl-10">
            <fieldset>
                <legend>Log History</legend>
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
            </fieldset>
        </div>
    </div>
@endsection