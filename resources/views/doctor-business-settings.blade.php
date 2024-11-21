<?php $page = 'doctor-business-settings'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Doctor Profile
        @endslot
        @slot('li_1')
            Doctor Profile
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content doctor-content">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-xl-3 theiaStickySidebar">

                    @component('components.sidebar_doctor')
                    @endcomponent

                </div>
                <div class="col-lg-8 col-xl-9">

                    <!-- Profile Settings -->
                    <div class="dashboard-header">
                        <h3>Profile Settings</h3>
                    </div>

                    <!-- Settings List -->
                    <div class="setting-tab">
                        <div class="appointment-tabs">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('doctor-profile-settings')}}">Basic Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('doctor-experience-settings')}}">Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('doctor-education-settings')}}">Education</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('doctor-awards-settings')}}">Awards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('doctor-insurance-settings')}}">Insurances</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('doctor-clinics-settings')}}">Clinics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{url('doctor-business-settings')}}">Business Hours</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Settings List -->

                    <div class="dashboard-header border-0 mb-0">
                        <h3>Business Hours</h3>
                    </div>

                    <form id="business-settings-form" action="{{ route('doctor-business-setting.store') }}" method="POST">
                        @csrf
                        <div class="business-wrap">
                            <h4>Select Business days</h4>
                            <ul class="business-nav">
                                <!-- Loop for Days -->
                                @foreach (['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                                    <li>
                                        <a class="tab-link {{ $loop->first ? 'active' : '' }}" 
                                           data-tab="day-{{ strtolower($day) }}">{{ $day }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    
                        <div class="accordions business-info" id="list-accord">
                            @foreach (['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                                <div class="user-accordion-item tab-items {{ $loop->first ? 'active' : '' }}" id="day-{{ strtolower($day) }}">
                                    <!-- Set active to 1 if the day is selected by the user -->
                                    <input type="hidden" name="business_days[{{ strtolower($day) }}][active]" 
                                           class="day-status" value="{{ old('business_days.' . strtolower($day) . '.active', 0) }}">
                    
                                    <a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" 
                                       data-bs-target="#{{ strtolower($day) }}">
                                        {{ $day }}<span class="edit">Edit</span>
                                    </a>
                    
                                    <div class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" 
                                         id="{{ strtolower($day) }}" data-bs-parent="#list-accord">
                                        <div class="content-collapse pb-0">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">From <span class="text-danger">*</span></label>
                                                        <div class="form-icon">
                                                            <input type="text" class="form-control timepicker1" 
                                                                   name="business_days[{{ strtolower($day) }}][from]" 
                                                                   value="{{ old('business_days.' . strtolower($day) . '.from') }}">
                                                            <span class="icon"><i class="fa-solid fa-clock"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">To <span class="text-danger">*</span></label>
                                                        <div class="form-icon">
                                                            <input type="text" class="form-control timepicker1" 
                                                                   name="business_days[{{ strtolower($day) }}][to]" 
                                                                   value="{{ old('business_days.' . strtolower($day) . '.to') }}">
                                                            <span class="icon"><i class="fa-solid fa-clock"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </form>
                    
                    
                    <!-- /Profile Settings -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
