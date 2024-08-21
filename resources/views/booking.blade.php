<?php $page = 'booking'; ?>
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
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="booking-doc-info">
                                <a href="{{ url('doctor-profile') }}" class="booking-doc-img">
                                    <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}" alt="User Image">
                                </a>
                                <div class="booking-info">
                                    <h4><a href="{{ url('doctor-profile') }}">Dr. Darren Elder</a></h4>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">35</span>
                                    </div>
                                    <p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-6">
                            <h4 class="mb-1">11 November 2023</h4>
                            <p class="text-muted">Monday</p>
                        </div>
                        <div class="col-12 col-sm-8 col-md-6 text-sm-end">
                            <div class="bookingrange btn btn-white btn-sm mb-3">
                                <i class="far fa-calendar-alt me-2"></i>
                                <span></span>
                                <i class="fas fa-chevron-down ms-2"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Schedule Widget -->
                    <div class="card booking-schedule schedule-widget">

                        <!-- Schedule Header -->
                        <div class="schedule-header">
                            <div class="row">
                                <div class="col-md-12">

                                    <!-- Day Slot -->
                                    <div class="day-slot">
                                        <ul>
                                            <li class="left-arrow">
                                                <a href="">
                                                    <i class="fa fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <span>Mon</span>
                                                <span class="slot-date">10 Jul <small class="slot-year">2023</small></span>
                                            </li>
                                            <li>
                                                <span>Tue</span>
                                                <span class="slot-date">11 Jul <small class="slot-year">2023</small></span>
                                            </li>
                                            <li>
                                                <span>Wed</span>
                                                <span class="slot-date">12 Jul <small class="slot-year">2023</small></span>
                                            </li>
                                            <li>
                                                <span>Thu</span>
                                                <span class="slot-date">13 Jul <small class="slot-year">2023</small></span>
                                            </li>
                                            <li>
                                                <span>Fri</span>
                                                <span class="slot-date">14 Jul <small class="slot-year">2023</small></span>
                                            </li>
                                            <li>
                                                <span>Sat</span>
                                                <span class="slot-date">15 Jul <small class="slot-year">2023</small></span>
                                            </li>
                                            <li>
                                                <span>Sun</span>
                                                <span class="slot-date">16 Jul <small class="slot-year">2023</small></span>
                                            </li>
                                            <li class="right-arrow">
                                                <a href="">
                                                    <i class="fa fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /Day Slot -->

                                </div>
                            </div>
                        </div>
                        <!-- /Schedule Header -->

                        <!-- Schedule Content -->
                        <div class="schedule-cont">
                            <div class="row">
                                <div class="col-md-12">

                                    <!-- Time Slot -->
                                    <div class="time-slot">
                                        <ul class="clearfix">
                                            <li>
                                                <a class="timing" href="javascript:;">
                                                    <span>9:00</span> <span>AM</span>
                                                </a>
                                                <a class="timing" href="javascript:;">
                                                    <span>10:00</span> <span>AM</span>
                                                </a>
                                                <a class="timing" href="javascript:;">
                                                    <span>11:00</span> <span>AM</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="timing" href="javascript:;">
                                                    <span>9:00</span> <span>AM</span>
                                                </a>
                                                <a class="timing" href="javascript:;">
                                                    <span>10:00</span> <span>AM</span>
                                                </a>
                                                <a class="timing" href="javascript:;">
                                                    <span>11:00</span> <span>AM</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="timing" href="javascript:;">
                                                    <span>9:00</span> <span>AM</span>
                                                </a>
                                                <a class="timing" href="javascript:;">
                                                    <span>10:00</span> <span>AM</span>
                                                </a>
                                                <a class="timing" href="javascript:;">
                                                    <span>11:00</span> <span>AM</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="timing" href="javascript:;">
                                                    <span>9:00</span> <span>AM</span>
                                                </a>
                                                <a class="timing" href="javascript:;">
                                                    <span>10:00</span> <span>AM</span>
                                                </a>
                                                <a class="timing" href="javascript:;">
                                                    <span>11:00</span> <span>AM</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="timing" href="javascript:;">
                                                    <span>9:00</span> <span>AM</span>
                                                </a>
                                                <a class="timing selected" href="javascript:;">
                                                    <span>10:00</span> <span>AM</span>
                                                </a>
                                                <a class="timing" href="javascript:;">
                                                    <span>11:00</span> <span>AM</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="timing" href="javascript:;">
                                                    <span>9:00</span> <span>AM</span>
                                                </a>
                                                <a class="timing" href="javascript:;">
                                                    <span>10:00</span> <span>AM</span>
                                                </a>
                                                <a class="timing" href="javascript:;">
                                                    <span>11:00</span> <span>AM</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="timing" href="javascript:;">
                                                    <span>9:00</span> <span>AM</span>
                                                </a>
                                                <a class="timing" href="javascript:;">
                                                    <span>10:00</span> <span>AM</span>
                                                </a>
                                                <a class="timing" href="javascript:;">
                                                    <span>11:00</span> <span>AM</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /Time Slot -->

                                </div>
                            </div>
                        </div>
                        <!-- /Schedule Content -->

                    </div>
                    <!-- /Schedule Widget -->

                    <!-- Submit Section -->
                    <div class="submit-section proceed-btn text-end">
                        <a href="{{ url('checkout') }}" class="btn btn-primary submit-btn">Proceed to Pay</a>
                    </div>
                    <!-- /Submit Section -->

                </div>
            </div>
        </div>

    </div>
    <!-- /Page Content -->
@endsection
