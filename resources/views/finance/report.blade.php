@extends('layouts.dashboard')

@section('title', 'Finance - Report')

@section('content')
    <div class="section-title">
        <h4 class="mb-0">Report</h4>
        <small class="text-muted">Track your income and expense</small>
    </div>
    <div>
        <p class="text-primary mb-4"><strong>STATISTIC</strong></p>
        <div class="row">
            <div class="col-sm-6">
                <div class="card box-shadow mb-4">
                    <div class="card-body">
                        <p class="small mb-0"><strong>TOTAL BALANCE</strong></p>
                        <p class="card-text text-primary mb-0">IDR 34.000.000</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card box-shadow mb-4">
                    <div class="card-body">
                        <p class="small mb-0"><strong>THIS MONTH ACTIVITIES</strong></p>
                        <p class="card-text text-primary mb-0">345 <small>TRANSACTIONS</small></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card box-shadow mb-4">
                    <div class="card-body">
                        <p class="small mb-0"><strong>THIS MONTH INCOME</strong></p>
                        <p class="card-text text-success mb-0">IDR 500.000</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card box-shadow mb-4">
                    <div class="card-body">
                        <p class="small mb-0"><strong>THIS MONTH EXPENSE</strong></p>
                        <p class="card-text text-danger mb-0">IDR 1.200.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection