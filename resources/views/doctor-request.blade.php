<?php $page = 'doctor-request'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Requests
        @endslot
        @slot('li_1')
            Requests
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

                    <div class="dashboard-header">
                        <h3>Requests</h3>
                        <ul>
                            <li>
                                <div class="dropdown header-dropdown">
                                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                        Last 7 Days
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            Today
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            This Month
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            Last 7 Days
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Request List -->
                    @foreach ($data as $request)
                    <div class="appointment-wrap">
                      
                        <ul>
                          
                            <li>
                                <div class="patinet-information">
                                    <a href="{{ url('patient-profile') }}">
                                        <img src="{{  $request->user->profile_image ?? URL::asset('assets/img/doctors/doctor-27.png')  }}"
                                            alt="User Image">
                                    </a>
                                    <div class="patient-info">
                                        <p>#Apt0001</p>
                                        <h6><a href="{{ url('patient-profile') }}">{{ $request->user->name }}</a><span
                                                class="badge new-tag">New</span>
                                        </h6>
                                    </div>
                                </div>
                            </li>
                            <li class="appointment-info">
                                <p><i class="fa-solid fa-clock"></i>{{ $request->booking_date }} {{ $request->slot->start_time }}</p>
                                <p class="md-text">General Visit</p>
                            </li>
                            <li class="appointment-type">
                                <p class="md-text">Type of Appointment</p>
                                @if($request->slot->first()->availability_type == 'clinic')
                                <p><i class="fa-solid fa-building text-green"></i>Direct Visit <i
                                        class="fa-solid fa-circle-info" data-bs-toggle="tooltip"
                                        title="Clinic Location Sofia’s Clinic"></i></p>
                                @else
                                <p><i class="fa-solid fa-video text-blue"></i>Video Call</p>
                                @endif
                                
                            </li>
                            <li>
                                <ul class="request-action">
                                    <li>
                                        <a href="#" class="accept-link" data-appointment-id="{{ $request->id }}" data-bs-toggle="modal" data-bs-target="#accept_appointment">
                                            <i class="fa-solid fa-check"></i>Accept
                                        </a>     
                                    </li>
                                    <li>
                                        <a href="#" class="reject-link" data-appointment-id="{{ $request->id }}" data-bs-toggle="modal" data-bs-target="#cancel_appointment">
                                            <i class="fa-solid fa-xmark"></i>Reject
                                        </a>
                                    </li>
                                </ul>
                            </li>
                          
                           
                        </ul>
                       
                    </div>
                    @endforeach
                    
                    <div class="row">
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
    @include('layout.partials.custom_scripts')
@endsection
