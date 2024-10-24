<?php $page = 'doctor-appointments-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
        Appointments
        @endslot
        @slot('li_1')
        Appointments
        @endslot
    @endcomponent
    <!-- Page Content -->
            <div class="content">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-4 col-xl-3 theiaStickySidebar">
                            
                            @component('components.sidebar_doctor')
                            @endcomponent
                            
                            
                        </div>
                        
                        <div class="col-lg-8 col-xl-9">
                            <div class="dashboard-header">
                                <h3>Appointments</h3>
                                <ul class="header-list-btns">
                                    <li>
                                        <div class="input-block dash-search-input">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="view-icons">
                                            <a href="{{url('appointments')}}"><i class="fa-solid fa-list"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="view-icons">
                                            <a href="{{url('doctor-appointments-grid')}}" class="active"><i class="fa-solid fa-th"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="view-icons">
                                            <a href="#"><i class="fa-solid fa-calendar-check"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="appointment-tab-head">
                                <div class="appointment-tabs">
                                    <ul class="nav nav-pills inner-tab " id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-upcoming-tab" data-bs-toggle="pill" data-bs-target="#pills-upcoming" type="button" role="tab" aria-controls="pills-upcoming" aria-selected="false">Upcoming<span>21</span></button>
                                        </li>   
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-cancel-tab" data-bs-toggle="pill" data-bs-target="#pills-cancel" type="button" role="tab" aria-controls="pills-cancel" aria-selected="true">Cancelled<span>16</span></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-complete-tab" data-bs-toggle="pill" data-bs-target="#pills-complete" type="button" role="tab" aria-controls="pills-complete" aria-selected="true">Completed<span>214</span></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="filter-head">
                                    <div class="position-relative daterange-wraper me-2">
                                        <div class="input-groupicon calender-input">
                                            <input type="text" class="form-control  date-range bookingrange" placeholder="From Date - To Date ">
                                        </div>
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </div>
                                    <div class="form-sorts dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" id="table-filter"><i class="fa-solid fa-filter me-2"></i>Filter By</a>
                                        <div class="filter-dropdown-menu">
                                            <div class="filter-set-view">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="filter-set-content">
                                                        <div class="filter-set-content-head">
                                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Name<i class="fa-solid fa-chevron-right"></i></a>
                                                        </div>
                                                        <div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
                                                            <ul>
                                                                <li>
                                                                    <div class="input-block dash-search-input w-100">
                                                                        <input type="text" class="form-control" placeholder="Search">
                                                                        <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="filter-set-content">
                                                        <div class="filter-set-content-head">
                                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Appointment Type<i class="fa-solid fa-chevron-right"></i></a>
                                                        </div>
                                                        <div class="filter-set-contents accordion-collapse collapse show" id="collapseOne" data-bs-parent="#accordionExample">
                                                            <ul>
                                                                <li>
                                                                    <div class="filter-checks">
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox" checked>
                                                                            <span class="checkmarks"></span>
                                                                            <span class="check-title">All Type</span>
                                                                        </label>
                                                                    </div>                                                              
                                                                </li>
                                                                <li>
                                                                    <div class="filter-checks">
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox">
                                                                            <span class="checkmarks"></span>
                                                                            <span class="check-title">Video Call</span>
                                                                        </label>
                                                                    </div>                                                              
                                                                </li>
                                                                <li>
                                                                    <div class="filter-checks">
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox">
                                                                            <span class="checkmarks"></span>
                                                                            <span class="check-title">Audio Call</span>
                                                                        </label>
                                                                    </div>                                                              
                                                                </li>
                                                                <li>
                                                                    <div class="filter-checks">
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox">
                                                                            <span class="checkmarks"></span>
                                                                            <span class="check-title">Chat</span>
                                                                        </label>
                                                                    </div>                                                              
                                                                </li>
                                                                <li>
                                                                    <div class="filter-checks">
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox">
                                                                            <span class="checkmarks"></span>
                                                                            <span class="check-title">Direct Visit</span>
                                                                        </label>
                                                                    </div>                                                              
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>                                              
                                                    <div class="filter-set-content">
                                                        <div class="filter-set-content-head">
                                                            <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Visit Type<i class="fa-solid fa-chevron-right"></i></a>
                                                        </div>
                                                        <div class="filter-set-contents accordion-collapse collapse show" id="collapseThree" data-bs-parent="#accordionExample">
                                                            <ul>
                                                                <li>
                                                                    <div class="filter-checks">
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox" checked>
                                                                            <span class="checkmarks"></span>
                                                                            <span class="check-title">All Visit</span>
                                                                        </label>
                                                                    </div>
                                                                    
                                                                </li>
                                                                <li>
                                                                    <div class="filter-checks">
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox">
                                                                            <span class="checkmarks"></span>
                                                                            <span class="check-title">General</span>
                                                                        </label>
                                                                    </div>
                                                                    
                                                                </li>
                                                                <li>
                                                                    <div class="filter-checks">
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox">
                                                                            <span class="checkmarks"></span>
                                                                            <span class="check-title">Consultation</span>
                                                                        </label>
                                                                    </div>
                                                                    
                                                                </li>
                                                                <li>
                                                                    <div class="filter-checks">
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox">
                                                                            <span class="checkmarks"></span>
                                                                            <span class="check-title">Follow-up</span>
                                                                        </label>
                                                                    </div>
                                                                    
                                                                </li>
                                                                <li>
                                                                    <div class="filter-checks">
                                                                        <label class="checkboxs">
                                                                            <input type="checkbox">
                                                                            <span class="checkmarks"></span>
                                                                            <span class="check-title">Direct Visit</span>
                                                                        </label>
                                                                    </div>
                                                                    
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="filter-reset-btns">
                                                    <a href="#" class="btn btn-light">Reset</a>
                                                    <a href="#" class="btn btn-primary">Filter Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content appointment-tab-content">
                                <div class="tab-pane fade show active" id="pills-upcoming" role="tabpanel" aria-labelledby="pills-upcoming-tab">
                                    <div class="row">
                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-upcoming-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0001</p>
                                                                    <h6><a href="{{url('doctor-upcoming-appointment')}}">Adrian</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>11 Nov 2024 10.45 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-action">
                                                        <ul>
                                                            <li>
                                                                <a href="{{url('doctor-upcoming-appointment')}}"><i class="fa-solid fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-comments"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="appointment-start">
                                                            <a href="{{url('doctor-appointment-start')}}" class="start-link">Start Now</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-upcoming-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-02.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0002</p>
                                                                    <h6><a href="{{url('doctor-upcoming-appointment')}}">Kelly Stevens</a><span class="badge new-tag">New</span></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="hospital-icon"><a href="#"><i class="fa-solid fa-hospital"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>05 Nov 2024 11.50 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-action">
                                                        <ul>
                                                            <li>
                                                                <a href="{{url('doctor-upcoming-appointment')}}"><i class="fa-solid fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-comments"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="appointment-start">
                                                            <a href="{{url('doctor-appointment-start')}}" class="start-link">Start Now</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-upcoming-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-03.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0003</p>
                                                                    <h6><a href="{{url('doctor-upcoming-appointment')}}">Samuel James</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="telephone-icon"><a href="#"><i class="fa-solid fa-phone"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>27 Oct 2024 09.30 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-action">
                                                        <ul>
                                                            <li>
                                                                <a href="{{url('doctor-upcoming-appointment')}}"><i class="fa-solid fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-comments"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="appointment-start">
                                                            <a href="{{url('doctor-appointment-start')}}" class="start-link">Start Now</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-upcoming-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-04.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0004</p>
                                                                    <h6><a href="{{url('doctor-upcoming-appointment')}}">Catherine Gracey</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="hospital-icon"><a href="#"><i class="fa-solid fa-hospital"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>18 Oct 2024 12.20 PM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-action">
                                                        <ul>
                                                            <li>
                                                                <a href="{{url('doctor-upcoming-appointment')}}"><i class="fa-solid fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-comments"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="appointment-start">
                                                            <a href="{{url('doctor-appointment-start')}}" class="start-link">Start Now</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-upcoming-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-05.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0005</p>
                                                                    <h6><a href="{{url('doctor-upcoming-appointment')}}">Robert Miller</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>10 Oct 2024 11.30 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-action">
                                                        <ul>
                                                            <li>
                                                                <a href="{{url('doctor-upcoming-appointment')}}"><i class="fa-solid fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-comments"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="appointment-start">
                                                            <a href="{{url('doctor-appointment-start')}}" class="start-link">Start Now</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-upcoming-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-06.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0006</p>
                                                                    <h6><a href="{{url('doctor-upcoming-appointment')}}">Anderea Kearns</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>26 Sep 2024 10.20 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-action">
                                                        <ul>
                                                            <li>
                                                                <a href="{{url('doctor-upcoming-appointment')}}"><i class="fa-solid fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-comments"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="appointment-start">
                                                            <a href="{{url('doctor-appointment-start')}}" class="start-link">Start Now</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-upcoming-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-07.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0007</p>
                                                                    <h6><a href="{{url('doctor-upcoming-appointment')}}">Peter Anderson</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>14 Sep 2024 08.10 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-action">
                                                        <ul>
                                                            <li>
                                                                <a href="{{url('doctor-upcoming-appointment')}}"><i class="fa-solid fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-comments"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="appointment-start">
                                                            <a href="{{url('doctor-appointment-start')}}" class="start-link">Start Now</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-upcoming-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-08.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0008</p>
                                                                    <h6><a href="{{url('doctor-upcoming-appointment')}}">Emily Musick</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>03 Sep 2024 06.00 PM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-action">
                                                        <ul>
                                                            <li>
                                                                <a href="{{url('doctor-upcoming-appointment')}}"><i class="fa-solid fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-comments"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="appointment-start">
                                                            <a href="{{url('doctor-appointment-start')}}" class="start-link">Start Now</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-upcoming-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0009</p>
                                                                    <h6><a href="{{url('doctor-upcoming-appointment')}}">Darrell Tan</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>25 Aug 2024 10.45 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-action">
                                                        <ul>
                                                            <li>
                                                                <a href="{{url('doctor-upcoming-appointment')}}"><i class="fa-solid fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-comments"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="appointment-start">
                                                            <a href="{{url('doctor-appointment-start')}}" class="start-link">Start Now</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <div class="col-md-12">
                                            <div class="loader-item text-center">
                                                <a href="javascript:void(0);" class="btn btn-load">Load More</a>
                                            </div>
                                        </div>  

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-cancel" role="tabpanel" aria-labelledby="pills-cancel-tab">
                                    <div class="row">
                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-cancelled-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0001</p>
                                                                    <h6><a href="{{url('doctor-cancelled-appointment')}}">Adrian</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>11 Nov 2024 10.45 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-detail-btn">
                                                        <a href="{{url('doctor-cancelled-appointment')}}" class="start-link w-100">View Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-cancelled-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-02.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0002</p>
                                                                    <h6><a href="{{url('doctor-cancelled-appointment')}}">Kelly Stevens</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>05 Nov 2024 11.50 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-detail-btn">
                                                        <a href="{{url('doctor-cancelled-appointment')}}" class="start-link w-100">View Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-cancelled-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-03.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0003</p>
                                                                    <h6><a href="{{url('doctor-cancelled-appointment')}}">Samuel James</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>27 Oct 2024 09.30 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-detail-btn">
                                                        <a href="{{url('doctor-cancelled-appointment')}}" class="start-link w-100">View Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->
                                        <div class="col-md-12">
                                            <div class="loader-item text-center">
                                                <a href="javascript:void(0);" class="btn btn-load">Load More</a>
                                            </div>
                                        </div>                                  
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-complete" role="tabpanel" aria-labelledby="pills-complete-tab">
                                    <div class="row">
                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-completed-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0001</p>
                                                                    <h6><a href="{{url('doctor-completed-appointment')}}">Adrian</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>11 Nov 2024 10.45 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-detail-btn">
                                                        <a href="{{url('doctor-completed-appointment')}}" class="start-link w-100">View Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-completed-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-02.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0002</p>
                                                                    <h6><a href="{{url('doctor-completed-appointment')}}">Kelly Stevens</a><span class="badge new-tag">New</span></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="hospital-icon"><a href="#"><i class="fa-solid fa-hospital"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>05 Nov 2024 11.50 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-detail-btn">
                                                        <a href="{{url('doctor-completed-appointment')}}" class="start-link w-100">View Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-completed-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-03.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0003</p>
                                                                    <h6><a href="{{url('doctor-completed-appointment')}}">Samuel James</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="telephone-icon"><a href="#"><i class="fa-solid fa-phone"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>27 Oct 2024 09.30 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-detail-btn">
                                                        <a href="{{url('doctor-completed-appointment')}}" class="start-link w-100">View Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-completed-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-04.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0004</p>
                                                                    <h6><a href="{{url('doctor-completed-appointment')}}">Catherine Gracey</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="hospital-icon"><a href="#"><i class="fa-solid fa-hospital"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>18 Oct 2024 12.20 PM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-detail-btn">
                                                        <a href="{{url('doctor-completed-appointment')}}" class="start-link w-100">View Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-completed-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-05.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0005</p>
                                                                    <h6><a href="{{url('doctor-completed-appointment')}}">Robert Miller</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>10 Oct 2024 11.30 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-detail-btn">
                                                        <a href="{{url('doctor-completed-appointment')}}" class="start-link w-100">View Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('doctor-completed-appointment')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-06.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0006</p>
                                                                    <h6><a href="{{url('doctor-completed-appointment')}}">Anderea Kearns</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>26 Sep 2024 10.20 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-detail-btn">
                                                        <a href="{{url('doctor-completed-appointment')}}" class="start-link w-100">View Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('patient-profile')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-07.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0007</p>
                                                                    <h6><a href="{{url('patient-profile')}}">Peter Anderson</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>14 Sep 2024 08.10 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-detail-btn">
                                                        <a href="{{url('doctor-appointment-details')}}" class="start-link w-100">View Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('patient-profile')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-08.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0008</p>
                                                                    <h6><a href="{{url('patient-profile')}}">Emily Musick</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>03 Sep 2024 06.00 PM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-detail-btn">
                                                        <a href="{{url('doctor-appointment-details')}}" class="start-link w-100">View Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <!-- Appointment Grid -->
                                        <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                            <div class="appointment-wrap appointment-grid-wrap">
                                                <ul>
                                                    <li>
                                                        <div class="appointment-grid-head">
                                                            <div class="patinet-information">
                                                                <a href="{{url('patient-profile')}}">
                                                                    <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
                                                                </a>
                                                                <div class="patient-info">
                                                                    <p>#Apt0009</p>
                                                                    <h6><a href="{{url('patient-profile')}}">Darrell Tan</a></h6>
                                                                </div>
                                                            </div>
                                                            <div class="grid-user-msg">
                                                                <span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="appointment-info">
                                                        <p><i class="fa-solid fa-clock"></i>25 Aug 2024 10.45 AM</p>
                                                        <ul class="d-flex apponitment-types">
                                                            <li>General Visit</li>
                                                        </ul>
                                                    </li>
                                                    <li class="appointment-detail-btn">
                                                        <a href="{{url('doctor-appointment-details')}}" class="start-link w-100">View Details</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /Appointment Grid -->

                                        <div class="col-md-12">
                                            <div class="loader-item text-center">
                                                <a href="javascript:void(0);" class="btn btn-load">Load More</a>
                                            </div>
                                        </div>  

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>      
            <!-- /Page Content -->
        
    @endsection