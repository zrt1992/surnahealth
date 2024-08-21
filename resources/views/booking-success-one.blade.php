<?php $page = 'booking-success-one'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="doctor-content">
        <div class="container">
            <!-- Booking Success -->
            <div class="row">
                <div class="col-md-12">
                    <div class="back-link">
                        <a href="{{ url('payment') }}"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="success-content">
                        <div class="success-icon">
                            <i class="fas fa-circle-check"></i>
                        </div>
                        <h4>Your Appointment Booked Succesfully</h4>
                    </div>
                    <div class="card booking-card">
                        <div class="card-body booking-card-body booking-list-body">
                            <div class="booking-doctor-left booking-success-info">
                                <div class="booking-doctor-img">
                                    <a href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/doctors/doctor-02.jpg') }}" alt="John Doe"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="booking-doctor-info">
                                    <h4><a href="javascript:void(0);">Dr. John Doe</a></h4>
                                    <p>MBBS, Dentist</p>
                                    <div class="booking-doctor-location">
                                        <p><i class="feather-map-pin"></i> Newyork, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-list">
                                <div class="booking-date-list consultation-date-list">
                                    <ul>
                                        <li>Booking Date: <span>Sun, 30 Aug 2023</span></li>
                                        <li>Booking Time: <span>10.00AM to 11:00AM</span></li>
                                        <li>Type of Consultaion: <span><i class="feather-video"></i> Video Consulting</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="success-btn">
                        <a href="javascript:void(0);" class="btn btn-primary prime-btn">
                            Add to Google Calendar
                        </a>
                        <a href="javascript:void(0);" class="btn btn-light">
                            Appointment
                        </a>
                    </div>
                    <div class="success-dashboard-link">
                        <a href="{{url('/')}}">
                            <i class="fa-solid fa-arrow-left-long"></i> Back to Dashboard
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Booking Success -->

        </div>
    </div>
    <!-- /Page Content -->
@endsection
