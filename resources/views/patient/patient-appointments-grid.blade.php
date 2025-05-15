<?php $page = 'patient-appointments-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            {{ __('messages.patient_appointments') }}
        @endslot
        @slot('li_1')
            {{ __('messages.patient_appointments') }}
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="content doctor-content">
        <div class="container">

            <div class="row">

                @component('components.sidebar_patient')
                @endcomponent


                <div class="col-lg-8 col-xl-9">
                    <div class="dashboard-header">
                        <h3>{{ __('messages.appointments') }}</h3>
                        <ul class="header-list-btns">
                            <li>
                                <div class="input-block dash-search-input">
                                    <form method="GET" action="{{ route('patient-appointments-grid') }}" id="searchForm">
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
                            <li>
                                <div class="view-icons">
                                    <a href="{{ route('patient-appointments') }}"><i class="fa-solid fa-list"></i></a>
                                </div>
                            </li>
                            <li>
                                <div class="view-icons">
                                    <a href="{{ route('patient-appointments-grid') }}" class="active"><i
                                            class="fa-solid fa-th"></i></a>
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
                                        aria-controls="pills-upcoming"
                                        aria-selected="false">{{ __('messages.upcoming') }}<span>{{ $upcommingCount ?? '0' }}</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-cancel-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-cancel" type="button" role="tab"
                                        aria-controls="pills-cancel"
                                        aria-selected="true">{{ __('messages.cancelled') }}<span>{{ $rejectedCount ?? '0' }}</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-complete-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-complete" type="button" role="tab"
                                        aria-controls="pills-complete"
                                        aria-selected="true">{{ __('messages.completed') }}<span>{{ $completedCount ?? '0' }}</span></button>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-head">
                            <div class="position-relative daterange-wraper me-2">
                                <div class="input-groupicon calender-input">
                                    <input type="text" class="form-control  date-range bookingrange"
                                        placeholder="From Date - To Date ">
                                </div>
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="form-sorts dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" id="table-filter"><i
                                        class="fa-solid fa-filter me-2"></i>{{ __('messages.filter_by') }}</a>
                                <div class="filter-dropdown-menu">
                                    <div class="filter-set-view">
                                        <div class="accordion" id="accordionExample">
                                            <div class="filter-set-content">
                                                <div class="filter-set-content-head">
                                                    <a href="#" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">{{ __('messages.name') }}<i
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
                                                        aria-controls="collapseOne">{{ __('messages.appointment_type') }}<i
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
                                                                    <span class="check-title">{{ __('messages.all_type') }}</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="filter-checks">
                                                                <label class="checkboxs">
                                                                    <input type="checkbox">
                                                                    <span class="checkmarks"></span>
                                                                    <span class="check-title">{{ __('messages.video_call') }}</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="filter-checks">
                                                                <label class="checkboxs">
                                                                    <input type="checkbox">
                                                                    <span class="checkmarks"></span>
                                                                    <span class="check-title">{{ __('messages.audio_call') }}</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="filter-checks">
                                                                <label class="checkboxs">
                                                                    <input type="checkbox">
                                                                    <span class="checkmarks"></span>
                                                                    <span class="check-title">{{ __('messages.chat') }}</span>
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
                                                        aria-controls="collapseThree">{{ __('messages.visit_type') }}<i
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
                                                                    <span class="check-title">{{ __('messages.all_visit') }}</span>
                                                                </label>
                                                            </div>

                                                        </li>
                                                        <li>
                                                            <div class="filter-checks">
                                                                <label class="checkboxs">
                                                                    <input type="checkbox">
                                                                    <span class="checkmarks"></span>
                                                                    <span class="check-title">{{ __('messages.general') }}</span>
                                                                </label>
                                                            </div>

                                                        </li>
                                                        <li>
                                                            <div class="filter-checks">
                                                                <label class="checkboxs">
                                                                    <input type="checkbox">
                                                                    <span class="checkmarks"></span>
                                                                    <span class="check-title">{{ __('messages.consultation') }}</span>
                                                                </label>
                                                            </div>

                                                        </li>
                                                        <li>
                                                            <div class="filter-checks">
                                                                <label class="checkboxs">
                                                                    <input type="checkbox">
                                                                    <span class="checkmarks"></span>
                                                                    <span class="check-title">{{ __('messages.follow_up') }}</span>
                                                                </label>
                                                            </div>

                                                        </li>
                                                        <li>
                                                            <div class="filter-checks">
                                                                <label class="checkboxs">
                                                                    <input type="checkbox">
                                                                    <span class="checkmarks"></span>
                                                                    <span class="check-title">{{ __('messages.direct_visit') }}</span>
                                                                </label>
                                                            </div>

                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="filter-reset-btns">
                                            <a href="{{ url('doctor/doctor-appointments') }}" class="btn btn-light">{{ __('messages.reset') }}</a>
                                            <a href="{{ url('doctor/doctor-appointments') }}" class="btn btn-primary">{{ __('messages.filter_now') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content appointment-tab-content appoint-patient">
                        <div class="tab-pane fade show active" id="pills-upcoming" role="tabpanel"
                            aria-labelledby="pills-upcoming-tab">
                            <div class="row">
                                <!-- Appointment Grid -->
                                @foreach ($appointmentRequests as $appointmentRequest)
                                    <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                        <div class="appointment-wrap appointment-grid-wrap">
                                            <ul>
                                                <li>
                                                    <div class="appointment-grid-head">
                                                        <div class="patinet-information">
                                                            <a href="{{ url('patient-upcoming-appointment') }}">
                                                                <img src="{{ $appointmentRequest->doctor->profile_image ?? URL::asset('/assets/img/services-six-1.png') }}"
                                                                    alt="User Image">
                                                            </a>
                                                            <div class="patient-info">
                                                                <p>#Apt0001</p>
                                                                <h6><a href="{{ url('patient-upcoming-appointment') }}">Dr
                                                                        {{ $appointmentRequest->doctor->name }}</a></h6>
                                                                <p class="visit">{{ __('messages.video_call') }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="grid-user-msg">
                                                            <span class="video-icon"><a href="#"><i
                                                                        class="fa-solid fa-video"></i></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="appointment-info">
                                                    <p><i
                                                            class="fa-solid fa-calendar-check"></i>{{ $appointmentRequest->booking_date ?? '--' }}
                                                    </p>
                                                    <p><i
                                                            class="fa-solid fa-clock"></i>{{ $appointmentRequest->slot->start_time ?? '--' }}
                                                    </p>
                                                </li>
                                                <li class="appointment-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url('patient-upcoming-appointment') }}"><i
                                                                    class="fa-solid fa-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa-solid fa-comments"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa-solid fa-xmark"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="appointment-detail-btn">
                                                        <a href="#" class="start-link"><i
                                                                class="fa-solid fa-calendar-check me-1"></i>Pending</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach ($data as $appointment)
                                    <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                        <div class="appointment-wrap appointment-grid-wrap">
                                            <ul>
                                                <li>
                                                    <div class="appointment-grid-head">
                                                        <div class="patinet-information">
                                                            <a href="{{ url('patient-upcoming-appointment') }}">
                                                                <img src="{{ $appointment->doctor->profile_image ?? URL::asset('/assets/img/services-six-1.png') }}"
                                                                    alt="User Image">
                                                            </a>
                                                            <div class="patient-info">
                                                                <p>#Apt0001</p>
                                                                <h6><a href="{{ url('patient-upcoming-appointment') }}">Dr
                                                                        {{ $appointment->doctor->name }}</a></h6>
                                                                <p class="visit">{{ __('messages.video_call') }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="grid-user-msg">
                                                            <span class="video-icon"><a href="#"><i
                                                                        class="fa-solid fa-video"></i></a></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="appointment-info">
                                                    <p><i
                                                            class="fa-solid fa-calendar-check"></i>{{ \Carbon\Carbon::parse($appointment->start_date)->format('d M Y h:i A') }}
                                                    </p>
                                                    <p><i class="fa-solid fa-clock"></i>--</p>
                                                </li>
                                                <li class="appointment-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url('patient-upcoming-appointment') }}"><i
                                                                    class="fa-solid fa-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa-solid fa-comments"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#delete_record"
                                                                data-id="{{ $appointment->id }}"
                                                                data-route="{{ route('appointments-remove', ':id') }}"><i
                                                                    class="fa-solid fa-xmark"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="appointment-detail-btn">
                                                        <a href="{{ $appointment->google_meet_link }}"
                                                            class="start-link"><i
                                                                class="fa-solid fa-calendar-check me-1"></i>{{ __('messages.attend') }}</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- /Appointment Grid -->



                                <div class="col-md-12">
                                    <div class="loader-item text-center">
                                        <a href="javascript:void(0);" class="btn btn-load">{{ __('messages.load_more') }}</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-cancel" role="tabpanel" aria-labelledby="pills-cancel-tab">
                            <div class="row">
                                <!-- Appointment Grid -->
                                {{-- <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                    <div class="appointment-wrap appointment-grid-wrap">
                                        <ul>
                                            <li>
                                                <div class="appointment-grid-head">
                                                    <div class="patinet-information">
                                                        <a href="{{ url('patient-cancelled-appointment') }}">
                                                            <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-21.jpg') }}"
                                                                alt="User Image">
                                                        </a>
                                                        <div class="patient-info">
                                                            <p>#Apt0001</p>
                                                            <h6><a href="{{ url('patient-cancelled-appointment') }}">Dr
                                                                    Edalin Hendry</a></h6>
                                                            <p class="visit">{{ __('messages.video_call') }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="grid-user-msg">
                                                        <span class="video-icon"><a href="#"><i
                                                                    class="fa-solid fa-video"></i></a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="appointment-info">
                                                <p><i class="fa-solid fa-calendar-check"></i>11 Nov 2024</p>
                                                <p><i class="fa-solid fa-clock"></i>10.45 AM</p>
                                            </li>
                                            <li class="appointment-detail-btn">
                                                <a href="{{ url('patient-cancelled-appointment') }}"
                                                    class="start-link w-100">View Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> --}}
                                <!-- /Appointment Grid -->


                                <div class="col-md-12">
                                    <div class="loader-item text-center">
                                        <a href="javascript:void(0);" class="btn btn-load">{{ __('messages.load_more') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-complete" role="tabpanel"
                            aria-labelledby="pills-complete-tab">
                            <div class="row">
                                <!-- Appointment Grid -->
                                {{-- <div class="col-xl-4 col-lg-6 col-md-12 d-flex">
                                    <div class="appointment-wrap appointment-grid-wrap">
                                        <ul>
                                            <li>
                                                <div class="appointment-grid-head">
                                                    <div class="patinet-information">
                                                        <a href="{{ url('patient-completed-appointment') }}">
                                                            <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-21.jpg') }}"
                                                                alt="User Image">
                                                        </a>
                                                        <div class="patient-info">
                                                            <p>#Apt0001</p>
                                                            <h6><a href="{{ url('patient-completed-appointment') }}">Dr
                                                                    Edalin Hendry</a></h6>
                                                            <p class="visit">{{ __('messages.video_call') }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="grid-user-msg">
                                                        <span class="video-icon"><a href="#"><i
                                                                    class="fa-solid fa-video"></i></a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="appointment-info">
                                                <p><i class="fa-solid fa-calendar-check"></i>11 Nov 2024</p>
                                                <p><i class="fa-solid fa-clock"></i>10.45 AM</p>
                                            </li>
                                            <li class="appointment-detail-btn">
                                                <a href="{{ url('patient-completed-appointment') }}"
                                                    class="start-link w-100">View Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> --}}
                                <!-- /Appointment Grid -->



                                <div class="col-md-12">
                                    <div class="loader-item text-center">
                                        <a href="javascript:void(0);" class="btn btn-load">{{ __('messages.load_more') }}</a>
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
