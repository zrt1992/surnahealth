<?php $page = 'booking-2'; ?>
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
    <div class="content content-space">
        <div class="container">
            <!-- Booking -->
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="booking-header">
                        <h4 class="booking-title">Select Available Slots</h4>
                    </div>
                    <div class="booking-date choose-date-book">
                        <p>Choose Date</p>
                        <div class="booking-range">
                            <div class="bookingrange btn">
                                <img src="{{ URL::asset('/assets/img/icons/today-icon.svg') }}" alt="calendar-mage">
                                <span></span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card booking-card">
                        <div class="card-body time-slot-card-body">
                            <div class="booking-date-slider">
                                <ul class="date-slider slick">
                                    <li class="active">
                                        <h4>Monday</h4>
                                        <p>Sep 5</p>
                                    </li>
                                    <li>
                                        <h4>Tuesday</h4>
                                        <p>Sep 6</p>
                                    </li>
                                    <li>
                                        <h4>Wednesday</h4>
                                        <p>Sep 7</p>
                                    </li>
                                    <li>
                                        <h4>Thursday</h4>
                                        <p>Sep 8</p>
                                    </li>
                                    <li>
                                        <h4>Friday</h4>
                                        <p>Sep 9</p>
                                    </li>
                                    <li>
                                        <h4>Saturday</h4>
                                        <p>Sep 10</p>
                                    </li>
                                    <li>
                                        <h4>Sunday</h4>
                                        <p>Sep 11</p>
                                    </li>
                                    <li>
                                        <h4>Monday</h4>
                                        <p>Sep 12</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="time-slot time-slot-blk">
                                        <h4>Morning</h4>
                                        <div class="time-slot-list">
                                            <ul>
                                                <li>
                                                    <a class="timing" href="javascript:void(0);">
                                                        <span><i class="feather-clock"></i> 09:00 - 09:30</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="timing" href="javascript:void(0);">
                                                        <span><i class="feather-clock"></i> 10:00 - 10:30</span>
                                                    </a>
                                                </li>
                                                <li class="time-slot-open time-slot-morning">
                                                    <a class="timing" href="javascript:void(0);">
                                                        <span><i class="feather-clock"></i> 11:00 - 11:30</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="load-more-timings load-more-morning">
                                                        <a href="javascript:void(0);">Load More</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="time-slot time-slot-blk">
                                        <h4>Afternoon</h4>
                                        <div class="time-slot-list">
                                            <ul>
                                                <li>
                                                    <a class="timing" href="javascript:void(0);">
                                                        <span><i class="feather-clock"></i> 12:00 - 12:30</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="timing active" href="javascript:void(0);">
                                                        <span><i class="feather-clock"></i> 01:00 - 01:30</span>
                                                    </a>
                                                </li>
                                                <li class="time-slot-open time-slot-afternoon">
                                                    <a class="timing" href="javascript:void(0);">
                                                        <span><i class="feather-clock"></i> 02:30 - 03:00</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="load-more-timings load-more-afternoon">
                                                        <a href="javascript:void(0);">Load More</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="time-slot time-slot-blk">
                                        <h4>Evening</h4>
                                        <div class="time-slot-list">
                                            <ul>
                                                <li>
                                                    <a class="timing" href="javascript:void(0);">
                                                        <span><i class="feather-clock"></i> 03:00 - 03:30</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="timing" href="javascript:void(0);">
                                                        <span><i class="feather-clock"></i> 04:00 - 04:30</span>
                                                    </a>
                                                </li>
                                                <li class="time-slot-open time-slot-evening">
                                                    <a class="timing" href="javascript:void(0);">
                                                        <span><i class="feather-clock"></i> 05:00 - 05:30</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="load-more-timings load-more-evening">
                                                        <a href="javascript:void(0);">Load More</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="booking-btn">
                        <a href="{{ url('paitent-details') }}"
                            class="btn btn-primary prime-btn justify-content-center align-items-center">
                            Next <i class="feather-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="booking-header">
                        <h4 class="booking-title">Booking Summary</h4>
                    </div>
                    <div class="card booking-card">
                        <div class="card-body booking-card-body">
                            <div class="booking-doctor-details">
                                <div class="booking-doctor-left">
                                    <div class="booking-doctor-img">
                                        <a href="{{ url('doctor-profile') }}">
                                            <img src="{{ URL::asset('/assets/img/doctors/doctor-01.jpg') }}" alt="John Doe">
                                        </a>
                                    </div>
                                    <div class="booking-doctor-info">
                                        <h4><a href="{{ url('doctor-profile') }}">Dr. John Doe</a></h4>
                                        <p>MBBS, Dentist</p>
                                    </div>
                                </div>
                                <div class="booking-doctor-right">
                                    <p>
                                        <i class="fas fa-check-circle"></i>
                                        <a href="{{ url('doctor-profile-settings') }}">Edit</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card booking-card">
                        <div class="card-body booking-card-body">
                            <div class="booking-doctor-details">
                                <div class="booking-device">
                                    <div class="booking-device-img">
                                        <img src="{{ URL::asset('/assets/img/icons/device-message.svg') }}"
                                            alt="device-message">
                                    </div>
                                    <div class="booking-doctor-info">
                                        <h3>We can help you</h3>
                                        <p class="device-text">Call us +1 888-888-8888 (or) chat with our customer support
                                            team.</p>
                                        <a href="{{ url('chat') }}" class="btn">Chat With Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card booking-card mb-0">
                        <div class="card-body booking-card-body">
                            <div class="booking-doctor-details">
                                <div class="booking-device">
                                    <div class="booking-device-img">
                                        <img src="{{ URL::asset('/assets/img/icons/smart-phone.svg') }}" alt="smart-phone">
                                    </div>
                                    <div class="booking-doctor-info">
                                        <h3>Get the App</h3>
                                        <p class="device-text">Download our app for better experience and for more feature
                                        </p>
                                        <div class="app-images">
                                            <a href="javascript:void(0);">
                                                <img src="{{ URL::asset('/assets/img/google-img.svg') }}"
                                                    alt="google-image">
                                            </a>
                                            <a href="javascript:void(0);">
                                                <img src="{{ URL::asset('/assets/img/app-img.svg') }}" alt="app-image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Booking -->
        </div>

    </div>
    <!-- /Page Content -->
@endsection
