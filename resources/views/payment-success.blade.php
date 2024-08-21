<?php $page = 'payment-success'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Payment
        @endslot
        @slot('li_1')
            Payment
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content success-page-cont">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Success Card -->
                    <div class="card success-card">
                        <div class="card-body">
                            <div class="success-cont">
                                <i class="fas fa-check"></i>
                                <h3>Payment Successfully!</h3>
                                <p class="mb-0">Product ID: 245468</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Success Card -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
