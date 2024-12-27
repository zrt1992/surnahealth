<?php $page = 'my-patients'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            My Patients
        @endslot
        @slot('li_1')
            My Patients
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
                        <h3>My Patients</h3>
                        <ul class="header-list-btns">
                            <li>
                                <div class="input-block dash-search-input">
                                    <form method="GET" action="{{ route('doctor.my-patients') }}" id="searchForm">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="search"
                                                id="searchInput" value="{{ request('search') }}">
                                            <span class="search-icon" id="searchIcon" style="cursor: pointer;">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="appointment-tab-head">
                        <div class="appointment-tabs">
                            <ul class="nav nav-pills inner-tab " id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-upcoming-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-upcoming" type="button" role="tab"
                                        aria-controls="pills-upcoming" aria-selected="false">Active<span>{{ $totalPatients ?? '' }}</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-cancel-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-cancel" type="button" role="tab"
                                        aria-controls="pills-cancel" aria-selected="true">InActive<span>0</span></button>
                                </li>
                            </ul>
                        </div>
                        <form action="{{ route('doctor-appointments-grid') }}" method="GET">
                        
                            <div class="filter-head">
                                <div class="position-relative daterange-wraper me-2">
                                    <div class="input-groupicon calender-input">
                                        <input type="text" name="date_range" class="form-control date-range bookingrange" placeholder="From Date - To Date">
                                    </div>
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="form-sorts dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" id="table-filter">
                                        <i class="fa-solid fa-filter me-2"></i>Filter By
                                    </a>
                                    <div class="filter-dropdown-menu">
                                        <div class="filter-set-view">
                                            <div class="accordion" id="accordionExample">
                                                <!-- Filter by Name -->
                                                <div class="filter-set-content">
                                                    <div class="filter-set-content-head">
                                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Name <i class="fa-solid fa-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                    <div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
                                                        <ul>
                                                            <li>
                                                                <div class="input-block dash-search-input w-100">
                                                                    <input type="text" name="search_name" class="form-control" placeholder="Search">
                                                                    <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Filter by Appointment Type -->
                                                <div class="filter-set-content">
                                                    <div class="filter-set-content-head">
                                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Appointment Type <i class="fa-solid fa-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                    <div class="filter-set-contents accordion-collapse collapse show" id="collapseOne" data-bs-parent="#accordionExample">
                                                        <ul>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="appointment_type[]" value="All Type" checked>
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">All Type</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="appointment_type[]" value="video_call">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">Video Call</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="appointment_type[]" value="audio_call">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">Audio Call</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="appointment_type[]" value="chat">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">Chat</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <!-- Add more options as needed -->
                                                        </ul>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- Filter Buttons -->
                                            <div class="filter-reset-btns">
                                                <button type="reset" class="btn btn-light">Reset</button>
                                                <button type="submit" class="btn btn-primary">Filter Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{-- <div class="filter-head">
                            <div class="position-relative daterange-wraper me-2">
                                <div class="input-groupicon calender-input">
                                    <input type="text" class="form-control  date-range bookingrange"
                                        placeholder="From Date - To Date ">
                                </div>
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="form-sorts dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" id="table-filter"><i
                                        class="fa-solid fa-filter me-2"></i>Filter By</a>
                                <div class="filter-dropdown-menu">
                                    <div class="filter-set-view">
                                        <div class="accordion" id="accordionExample">
                                            <div class="filter-set-content">
                                                <div class="filter-set-content-head">
                                                    <a href="#" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">Name<i
                                                            class="fa-solid fa-chevron-right"></i></a>
                                                </div>
                                                <div class="filter-set-contents accordion-collapse collapse show"
                                                    id="collapseTwo" data-bs-parent="#accordionExample">
                                                    <ul>
                                                        <li>
                                                            <div class="input-block dash-search-input w-100">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Search">
                                                                <span class="search-icon"><i
                                                                        class="fa-solid fa-magnifying-glass"></i></span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="filter-set-content">
                                                <div class="filter-set-content-head">
                                                    <a href="#" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">Appointment Type<i
                                                            class="fa-solid fa-chevron-right"></i></a>
                                                </div>
                                                <div class="filter-set-contents accordion-collapse collapse show"
                                                    id="collapseOne" data-bs-parent="#accordionExample">
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
                                                    <a href="#" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">Visit Type<i
                                                            class="fa-solid fa-chevron-right"></i></a>
                                                </div>
                                                <div class="filter-set-contents accordion-collapse collapse show"
                                                    id="collapseThree" data-bs-parent="#accordionExample">
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
                        </div> --}}
                    </div>

                    <div class="tab-content appointment-tab-content grid-patient">
                        <div class="tab-pane fade show active" id="pills-upcoming" role="tabpanel"
                            aria-labelledby="pills-upcoming-tab">
                            <div class="row">

                                <!-- Appointment Grid -->
                                @foreach ($appointments as $patient)
                                    <div class="col-xl-4 col-lg-6 col-md-6 d-flex">
                                        <div class="appointment-wrap appointment-grid-wrap">
                                            <ul>
                                                <li>
                                                    <div class="appointment-grid-head">
                                                        <div class="patinet-information">
                                                            <a href="{{ route('doctor.patient-profile', $patient->id) }}">
                                                                <img src="{{ $patient->profile_image ?? URL::asset('/assets/img/default-user.png') }}"
                                                                    alt="User Image">
                                                            </a>
                                                            <div class="patient-info">
                                                                <p>#Apt{{ $patient->appointments[0]->id }}</p>
                                                                <h6>
                                                                    <a
                                                                        href="{{ route('doctor.patient-profile', $patient->id) }}">{{ $patient->name }}</a>
                                                                </h6>
                                                                <ul>
                                                                    <li>Age: {{ $patient->dob ?? 'N/A' }}</li>
                                                                    <li>{{ $patient->gender ?? 'N/A' }}</li>
                                                                    <li>{{ $patient->blood_group ?? 'N/A' }}</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="appointment-info">
                                                    <p><i
                                                            class="fa-solid fa-clock"></i>{{ \Carbon\Carbon::parse($patient->appointments[0]->start_date)->format('d M Y h:i A') }}
                                                    </p>
                                                    <p class="mb-0">
                                                        <i
                                                            class="fa-solid fa-location-dot"></i>{{ $patient->state ?? 'N/A' }},{{ $patient->country ?? 'N/A' }}
                                                    </p>
                                                </li>
                                                <li class="appointment-action">
                                                    <div class="patient-book">
                                                        <p><i class="fa-solid fa-calendar-days"></i>Last Booking
                                                            @if (isset($patient->appointments[1]))
                                                                <span>
                                                                    {{ \Carbon\Carbon::parse($patient->appointments[1]->start_date)->format('d M Y h:i A') }}
                                                                </span>
                                                            @else
                                                                <span>No previous bookings</span>
                                                            @endif
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach


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
                                {{-- <div class="col-xl-4 col-lg-6 col-md-6 d-flex">
										<div class="appointment-wrap appointment-grid-wrap">
											<ul>
												<li>
													<div class="appointment-grid-head">
														<div class="patinet-information">
															<a href="{{route('doctor.patient-profile')}}">
																<img src="{{URL::asset('/assets/img/first-visit.png')}}" alt="User Image">
															</a>
															<div class="patient-info">
																<p>#Apt0006</p>
																<h6><a href="{{route('doctor.patient-profile')}}">Anderea Kearns</a></h6>
																<ul>
																	<li>Age : 40</li>
																	<li>Female</li>
																	<li>B-</li>
																</ul>
															</div>
														</div>
													</div>
												</li>
												<li class="appointment-info">
													<p><i class="fa-solid fa-clock"></i>26 Sep 2024 10.20 AM</p>
													<p class="mb-0"><i class="fa-solid fa-location-dot"></i>San Francisco, USA</p>
												</li>
												<li class="appointment-action">
													<div class="patient-book">
														<p><i class="fa-solid fa-calendar-days"></i>Last Booking<span>11 Feb 2024</span></p>
														
													</div>
												</li>
											</ul>
										</div>
									</div> --}}
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
