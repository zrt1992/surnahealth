<?php $page = 'booking-success'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Subscription
        @endslot
        @slot('li_1')
            Subscription
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
                                <h3>Subscribed Successfully!</h3>
                                <a href="{{ route('doctor-dashboard') }}" class="btn btn-primary view-inv-btn">Navigate to Dashboard</a>

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
