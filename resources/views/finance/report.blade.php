@extends('finance._layout')

@section('title', 'Finance - Transaction Report')

@section('finance_description', 'Financial summary')

@section('finance_content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
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
    </div>
@endsection