<?php $page = 'booking-success'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Booking
        @endslot
        @slot('li_1')
            Booking
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
                                <h3>Appointment booked Successfully!</h3>
                                {{-- <p>Appointment booked with <strong>Dr. Darren Elder</strong><br> on <strong>12 Nov 2023
                                        5:00PM to 6:00PM</strong></p> --}}
                                {{-- <a href="{{ url('invoice-view') }}" class="btn btn-primary view-inv-btn">View Invoice</a> --}}
                                <a href="{{ route('patient-appointments') }}" class="btn btn-primary view-inv-btn">View Appointments</a>

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
