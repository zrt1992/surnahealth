<?php $page = 'patient-appointments'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Patient Appointments
        @endslot
        @slot('li_1')
            Patient Appointments
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
                                    <a href="{{ url('patient-appointments') }}" class="active"><i
                                            class="fa-solid fa-list"></i></a>
                                </div>
                            </li>
                            <li>
                                <div class="view-icons">
                                    <a href="{{ url('patient-appointments-grid') }}"><i class="fa-solid fa-th"></i></a>
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
                                        aria-selected="false">Upcoming<span>{{ $upcommingCount ?? '0' }}</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-cancel-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-cancel" type="button" role="tab"
                                        aria-controls="pills-cancel" aria-selected="true">Cancelled<span>{{ $rejectedCount ?? '0' }}</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-complete-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-complete" type="button" role="tab"
                                        aria-controls="pills-complete"
                                        aria-selected="true">Completed<span>{{ $completedCount ?? '0' }}</span></button>
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
                                            <a href="{{ url('appointments') }}" class="btn btn-light">Reset</a>
                                            <a href="{{ url('appointments') }}" class="btn btn-primary">Filter Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content appointment-tab-content">
                        <div class="tab-pane fade show active" id="pills-upcoming" role="tabpanel"
                            aria-labelledby="pills-upcoming-tab">
                            <!-- Appointment List -->
                            <div class="appointment-wrap">
                                @foreach ($appointmentRequests as $appointmentRequest)
                                    <ul>
                                        <li>
                                            <div class="patinet-information">
                                                <a href="{{ url('patient-upcoming-appointment') }}">
                                                    <img src="{{ $appointmentRequest->doctor->profile_image ?? URL::asset('/assets/img/services-six-1.png') }}"
                                                        alt="User Image">
                                                </a>
                                                <div class="patient-info">
                                                    <p>#Apt{{ str_pad($appointmentRequest->id, 4, '0', STR_PAD_LEFT) }}</p>
                                                    <h6><a href="{{ url('patient-upcoming-appointment') }}">Dr
                                                            {{ $appointmentRequest->doctor->name }}</a><span
                                                            class="badge new-tag">New</span></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="appointment-info">
                                            <p><i
                                                    class="fa-solid fa-clock"></i>{{ $appointmentRequest->booking_date ?? '--' }}
                                                {{ $appointmentRequest->slot->start_time ?? '--' }}</p>
                                           <ul class="d-flex apponitment-types">
                                                <li>General Visit</li>
                                                 <li>Video Call</li>
                                            </ul>
                                        </li>
                                        <li class="mail-info-patient">
                                            <ul>
                                                <li><i
                                                        class="fa-solid fa-envelope"></i>{{ $appointmentRequest->doctor->email ?? '--' }}
                                                </li>
                                                <li><i
                                                        class="fa-solid fa-phone"></i>{{ $appointmentRequest->doctor->phone ?? ' -- ' }}
                                                </li>
                                            </ul>
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
                                                        data-id="{{ $appointmentRequest->id }}"
                                                        data-route="{{ route('appointments-remove', ':id') }}"><i
                                                            class="fa-solid fa-xmark"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                        {{-- <li class="appointment-detail-btn">
												
												<a href="{{ $appointmentRequest->google_meet_link }}" class="start-link" target="_blank"><i class="fa-solid fa-calendar-check me-1"></i>Attend</a>
											</li> --}}
                                    </ul>
                                @endforeach
                                @foreach ($data as $appointment)
                                    <ul>
                                        <li>
                                            <div class="patinet-information">
                                                <a href="{{ url('patient-upcoming-appointment') }}">
                                                    <img src="{{ $appointment->doctor->profile_image ?? URL::asset('/assets/img/services-six-1.png') }}"
                                                        alt="User Image">
                                                </a>
                                                <div class="patient-info">
                                                    <p>#Apt{{ str_pad($appointment->id, 4, '0', STR_PAD_LEFT) }}</p>
                                                    <h6><a href="{{ url('patient-upcoming-appointment') }}">Dr
                                                            {{ $appointment->doctor->name }}</a><span
                                                            class="badge new-tag">New</span></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="appointment-info">
                                            <p><i
                                                    class="fa-solid fa-clock"></i>{{ \Carbon\Carbon::parse($appointment->start_date)->format('d M Y h:i A') }}
                                            </p>
                                            <ul class="d-flex apponitment-types">
                                                <li>General Visit</li>
                                                <li>Video Call</li>
                                            </ul>
                                        </li>
                                        <li class="mail-info-patient">
                                            <ul>
                                                <li><i class="fa-solid fa-envelope"></i>{{ $appointment->user->email }}
                                                </li>
                                                <li><i
                                                        class="fa-solid fa-phone"></i>{{ $appointment->user->phone ?? ' -- ' }}
                                                </li>
                                            </ul>
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
                                                        data-bs-target="#delete_record" data-id="{{ $appointment->id }}"
                                                        data-route="{{ route('appointments-remove', ':id') }}"><i
                                                            class="fa-solid fa-xmark"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="appointment-detail-btn">

                                            <a href="{{ $appointment->google_meet_link }}" class="start-link"
                                                target="_blank"><i class="fa-solid fa-calendar-check me-1"></i>Attend</a>
                                        </li>
                                    </ul>
                                @endforeach

                            </div>

                            <!-- Pagination -->
                            <div class="pagination dashboard-pagination">
                                <ul>
                                    <li>
                                        <a href="#" class="page-link"><i class="fa-solid fa-chevron-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link active">2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">...</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link"><i class="fa-solid fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /Pagination -->

                        </div>
                        <div class="tab-pane fade" id="pills-cancel" role="tabpanel" aria-labelledby="pills-cancel-tab">
                        

                            <!-- Appointment List -->
                            <div class="appointment-wrap">
                                @foreach ($appointmentRejectedRequests as $rejectedRequest)
                                <ul>
                                    <li>
                                        <div class="patinet-information">
                                            <a href="{{ url('patient-cancelled-appointment') }}">
                                                <img src="{{$rejectedRequest->doctor->profile_image ?? URL::asset('/assets/img/doctors/doctor-thumb-13.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <div class="patient-info">
                                                <p>#Apt0002</p>
                                                <h6><a
                                                        href="{{ url('patient-cancelled-appointment') }}">Dr.{{ $rejectedRequest->doctor->name ?? '--' }}</a><span
                                                        class="badge new-tag">New</span></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="appointment-info">
                                        <p><i class="fa-solid fa-clock"></i>{{ $rejectedRequest->booking_date ?? '--' }}</p>
                                        <ul class="d-flex apponitment-types">
                                            <li>General Visit</li>
                                            <li>Audio Call</li>
                                        </ul>

                                    </li>
                                    <li class="appointment-detail-btn">
                                        <a href="{{ route('patient-cancelled-appointment',$rejectedRequest->id) }}" class="start-link">View
                                            Details<i class="fa-regular fa-circle-right ms-1"></i></a>
                                    </li>
                                </ul>
                                @endforeach
                            </div>
                            <!-- /Appointment List -->

                         

                            <!-- Pagination -->
                            <div class="pagination dashboard-pagination">
                                <ul>
                                    <li>
                                        <a href="#" class="page-link"><i class="fa-solid fa-chevron-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link active">2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">...</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link"><i class="fa-solid fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /Pagination -->
                        </div>
                        <div class="tab-pane fade" id="pills-complete" role="tabpanel"
                            aria-labelledby="pills-complete-tab">
                         
                      

                            <!-- Appointment List -->
                            <div class="appointment-wrap">
                                @foreach ($appointmentCompleted as $completedRequests)
                                <ul>
                                    <li>
                                        <div class="patinet-information">
                                            <a href="{{ url('patient-completed-appointment') }}">
                                                <img src="{{$completedRequests->doctor->profile_image ?? URL::asset('/assets/img/doctors/doctor-thumb-13.jpg') }}"
                                                    alt="User Image">
                                            </a>
                                            <div class="patient-info">
                                                <p>#Apt0002</p>
                                                <h6><a
                                                        href="{{ url('patient-completed-appointment') }}">Dr.{{ $completedRequests->doctor->name ?? '--' }}</a><span
                                                        class="badge new-tag">New</span></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="appointment-info">
                                        <p><i class="fa-solid fa-clock"></i>{{ $completedRequests->start_date ?? '--' }}</p>
                                        <ul class="d-flex apponitment-types">
                                            <li>General Visit</li>
                                            <li>Audio Call</li>
                                        </ul>

                                    </li>
                                    <li class="appointment-detail-btn">
                                        <a href="{{ url('patient-completed-appointment') }}" class="start-link">View
                                            Details<i class="fa-regular fa-circle-right ms-1"></i></a>
                                    </li>
                                </ul>
                                @endforeach
                                
                            </div>
                            <!-- /Appointment List -->

                           

                            <!-- Pagination -->
                            <div class="pagination dashboard-pagination">
                                <ul>
                                    <li>
                                        <a href="#" class="page-link"><i class="fa-solid fa-chevron-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link active">2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">...</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link"><i class="fa-solid fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /Pagination -->
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
