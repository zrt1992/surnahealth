<?php $page = 'patient-profile'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            My Patient
        @endslot
        @slot('li_1')
            My Patient
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

                <!-- Patient Details -->
                <div class="col-lg-8 col-xl-9">
                    <div class="appointment-patient">

                        <div class="dashboard-header">
                            <h3><a href="{{ url('my-patients') }}"><i class="fa-solid fa-arrow-left"></i> Patient Details</a>
                            </h3>
                        </div>

                        <div class="patient-wrap">
                            <div class="patient-info">
                                <img src="{{ $patient->profile_image ?? URL::asset('/assets/img/default-user.png') }}"
                                    alt="img">
                                <div class="user-patient">
                                    <h6>#{{ $patient->id }}</h6>
                                    <h5>{{ $patient->name }}</h5>
                                    <ul>
                                        <li>Age : {{ $patient->dob }}</li>
                                        <li>{{ $patient->gender }}</li>
                                        <li>{{ $patient->blood_group }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="patient-book">
                                <p><i class="fa-solid fa-calendar-days"></i>Last Booking</p>
                                <p>24 Mar 2024</p>
                            </div>
                        </div>

                        <!-- Appoitment Tabs -->
                        <div class="appointment-tabs user-tab">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#pat_appointments"
                                        data-bs-toggle="tab">Appointments</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#prescription" data-bs-toggle="tab">Prescription</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="#medical" data-bs-toggle="tab">Medical Records</a>
                                </li> --}}
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="#billing" data-bs-toggle="tab">Billing</a>
                                </li> --}}
                            </ul>
                        </div>
                        <!-- /Appoitment Tabs -->

                        <div class="tab-content pt-0">

                            <!-- Appointment Tab -->
                            <div id="pat_appointments" class="tab-pane fade show active">

                                <div class="search-header">
                                    <div class="search-field">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                    </div>
                                </div>

                                <div class="custom-table">
                                    <div class="table-responsive">
                                        <table class="table table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Doctor</th>
                                                    <th>Appt Date</th>
                                                    <th>Booking Date</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($patient->appointments as $appointment)
                                                    <tr>
                                                        <td><a class="text-blue-600"
                                                                href="{{ url('patient-upcoming-appointment') }}">#{{ $appointment->id ?? 'N/A' }}</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="{{ url('doctor-profile') }}"
                                                                    class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-3"
                                                                        src="{{ $appointment->doctor->profile_image ?? URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                                                        alt="User Image">
                                                                </a>
                                                                <a
                                                                    href="{{ url('doctor-profile') }}">{{ $appointment->doctor->name ?? 'N/A' }}</a>
                                                            </h2>
                                                        </td>
                                                        <td>{{ \Carbon\Carbon::parse($appointment->start_date)->format('d M Y h:i A') }}
                                                        </td>
                                                        <td>{{ \Carbon\Carbon::parse($appointment->created_at)->format('d M Y h:i A') }}
                                                        </td>
                                                        <td>${{ $appointment->slot->appointment_fees ?? '0' }}</td>
                                                        <td>
                                                            @if (in_array($appointment->status, ['approved', 'accepted', 'upcoming']))
                                                                <span
                                                                    class="badge badge-yellow status-badge">Upcoming</span>
                                                            @elseif($appointment->status == 'completed')
                                                                <span
                                                                    class="badge badge-green status-badge">Completed</span>
                                                            @elseif(in_array($appointment->status, ['cancelled', 'rejected']))
                                                                <span
                                                                    class="badge badge-danger status-badge">Cancelled</span>
                                                            @else
                                                                <span
                                                                    class="badge badge-secondary status-badge">Unknown</span>
                                                            @endif
                                                        </td>

                                                        <td>
                                                            <div class="action-item">
                                                                <a href="{{ url('patient-upcoming-appointment') }}">
                                                                    <i class="fa-solid fa-link"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Pagination -->
                                <div class="pagination dashboard-pagination">
                                    <ul>
                                        <li>
                                            <a href="#" class="page-link"><i class="fa-solid fa-chevron-left"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="page-link active">1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="page-link ">2</a>
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
                                            <a href="#" class="page-link"><i
                                                    class="fa-solid fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Pagination -->

                            </div>
                            <!-- /Appointment Tab -->

                            <!-- Prescription Tab -->
                            <div class="tab-pane fade" id="prescription">
                                <div class="search-header">
                                    <div class="search-field">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                    </div>
                                    <div>
                                        <a href="{{ route('add-prescription',$patient->id) }}" class="btn btn-primary prime-btn" 
                                            data-bs-target="#add_prescription">Add New Prescription</a>
                                    </div>
                                </div>

                                <div class="custom-table">
                                    <div class="table-responsive">
                                        <table class="table table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Prescriped By</th>
                                                    {{-- <th>Type</th> --}}
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!empty($patient->prescriptions) && $patient->prescriptions->isNotEmpty())
                                                @foreach ($patient->prescriptions as $prescription)
                                                <tr>
                                                    <td><a href="javascript:void(0);" class="text-blue-600"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#view_prescription">#Apt123</a></td>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="{{ url('doctor-profile') }}"
                                                                class="avatar avatar-sm me-2">
                                                                <img class="avatar-img rounded-3"
                                                                    src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                                                    alt="User Image">
                                                            </a>
                                                            <a href="{{ url('doctor-profile-2',$prescription->doctor->id) }}">{{ $prescription->doctor->name ?? '' }}</a>
                                                        </h2>
                                                    </td>
                                                    {{-- <td>Visit</td> --}}
                                                    <td>{{ $prescription->date ?? '--' }}</td>
                                                    <td>
                                                        <div class="action-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#view_prescription">
                                                                <i class="fa-solid fa-link"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                              
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Pagination -->
                                <div class="pagination dashboard-pagination">
                                    <ul>
                                        <li>
                                            <a href="#" class="page-link"><i
                                                    class="fa-solid fa-chevron-left"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="page-link active">1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="page-link ">2</a>
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
                                            <a href="#" class="page-link"><i
                                                    class="fa-solid fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Pagination -->

                            </div>
                            <!-- /Prescription Tab -->

                            <!-- Medical Records Tab -->
                            <div class="tab-pane fade" id="medical">
                                <div class="search-header">
                                    <div class="search-field">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                    </div>
                                    <div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_medical_records"
                                            class="btn btn-primary prime-btn">Add Medical Record</a>
                                    </div>
                                </div>

                                <div class="custom-table">
                                    <div class="table-responsive">
                                        <table class="table table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);" class="lab-icon">
                                                            <span><i class="fa-solid fa-paperclip"></i></span>Lab Report
                                                        </a>
                                                    </td>
                                                    <td>24 Mar 2024</td>
                                                    <td>Glucose Test V12</td>
                                                    <td>
                                                        <div class="action-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#edit_medical_records">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa-solid fa-download"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);" class="lab-icon">
                                                            <span><i class="fa-solid fa-paperclip"></i></span>Lab Report
                                                        </a>
                                                    </td>
                                                    <td>27 Mar 2024</td>
                                                    <td>Complete Blood Count(CBC)</td>
                                                    <td>
                                                        <div class="action-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#edit_medical_records">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa-solid fa-download"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);" class="lab-icon">
                                                            <span><i class="fa-solid fa-paperclip"></i></span>Lab Report
                                                        </a>
                                                    </td>
                                                    <td>10 Apr 2024</td>
                                                    <td>Echocardiogram</td>
                                                    <td>
                                                        <div class="action-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#edit_medical_records">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa-solid fa-download"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);" class="lab-icon">
                                                            <span><i class="fa-solid fa-paperclip"></i></span>Lab Report
                                                        </a>
                                                    </td>
                                                    <td>19 Apr 2024</td>
                                                    <td>COVID-19 Test</td>
                                                    <td>
                                                        <div class="action-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#edit_medical_records">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa-solid fa-download"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);" class="lab-icon">
                                                            <span><i class="fa-solid fa-paperclip"></i></span>Lab Report
                                                        </a>
                                                    </td>
                                                    <td>27 Apr 2024</td>
                                                    <td>Allergy Tests</td>
                                                    <td>
                                                        <div class="action-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#edit_medical_records">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa-solid fa-download"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);" class="lab-icon">
                                                            <span><i class="fa-solid fa-paperclip"></i></span>Lab Report
                                                        </a>
                                                    </td>
                                                    <td>02 May 2024</td>
                                                    <td>Lipid Panel </td>
                                                    <td>
                                                        <div class="action-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#edit_medical_records">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa-solid fa-download"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Pagination -->
                                <div class="pagination dashboard-pagination">
                                    <ul>
                                        <li>
                                            <a href="#" class="page-link"><i
                                                    class="fa-solid fa-chevron-left"></i></a>
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
                                            <a href="#" class="page-link"><i
                                                    class="fa-solid fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Pagination -->

                            </div>
                            <!-- /Medical Records Tab -->

                            <!-- Billing Tab -->
                            <div class="tab-pane" id="billing">
                                <div class="search-header">
                                    <div class="search-field">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-primary prime-btn" data-bs-toggle="modal"
                                            data-bs-target="#add_billing">Add New Billing</a>
                                    </div>
                                </div>

                                <div class="custom-table">
                                    <div class="table-responsive">
                                        <table class="table table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Billing Date</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>24 Mar 2024</td>
                                                    <td>$300</td>
                                                    <td><span class="badge badge-green status-badge">Paid</span></td>
                                                    <td>
                                                        <div class="action-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#view_bill">
                                                                <i class="fa-solid fa-link"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>28 Mar 2024</td>
                                                    <td>$350</td>
                                                    <td><span class="badge badge-green status-badge">Paid</span></td>
                                                    <td>
                                                        <div class="action-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#view_bill">
                                                                <i class="fa-solid fa-link"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>10 Apr 2024</td>
                                                    <td>$400</td>
                                                    <td><span class="badge badge-green status-badge">Paid</span></td>
                                                    <td>
                                                        <div class="action-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#view_bill">
                                                                <i class="fa-solid fa-link"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19 Apr 2024</td>
                                                    <td>$250</td>
                                                    <td><span class="badge badge-green status-badge">Paid</span></td>
                                                    <td>
                                                        <div class="action-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#view_bill">
                                                                <i class="fa-solid fa-link"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>22 Apr 2024</td>
                                                    <td>$320</td>
                                                    <td><span class="badge badge-green status-badge">Paid</span></td>
                                                    <td>
                                                        <div class="action-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#view_bill">
                                                                <i class="fa-solid fa-link"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>02 May 2024</td>
                                                    <td>$480</td>
                                                    <td><span class="badge badge-danger status-badge">Unpaid</span></td>
                                                    <td>
                                                        <div class="action-item">
                                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#view_bill">
                                                                <i class="fa-solid fa-link"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Pagination -->
                                <div class="pagination dashboard-pagination">
                                    <ul>
                                        <li>
                                            <a href="#" class="page-link"><i
                                                    class="fa-solid fa-chevron-left"></i></a>
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
                                            <a href="#" class="page-link"><i
                                                    class="fa-solid fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Pagination -->
                            </div>
                            <!-- Billing Tab -->

                        </div>
                    </div>
                </div>
                <!-- /Patient Details -->

            </div>
        </div>

    </div>
    <!-- /Page Content -->
@endsection
