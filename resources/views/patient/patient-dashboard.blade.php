<?php $page = 'patient-dashboard'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            {{ __('messages.patient_dashboard') }}
        @endslot
        @slot('li_1')
            {{ __('messages.patient_dashboard') }}
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">

            <div class="row">

                @component('components.sidebar_patient')
                @endcomponent


                <div class="col-lg-8 col-xl-9">
                    <div class="dashboard-header">
                        <h3> {{ __('messages.dashboard') }}</h3>
                    </div>
                    <div class="row">
                        <div class="col-xl-7 d-flex">
                            <div class="dashboard-card w-100">
                                <div class="dashboard-card-head">
                                    <div class="header-title">
                                        <h5> {{ __('messages.health_records') }}</h5>
                                    </div>
                                    <div class="dropdown header-dropdown">
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/doctors-dashboard/profile-06.jpg') }}"
                                                class="avatar dropdown-avatar" alt="Img">
                                            {{ \Illuminate\Support\Facades\Auth::user()->name }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <img src="{{ URL::asset('/assets/img/doctors-dashboard/profile-06.jpg') }}"
                                                    class="avatar dropdown-avatar" alt="Img">
                                                Hendrita
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <img src="{{ URL::asset('/assets/img/doctors-dashboard/profile-08.jpg') }}"
                                                    class="avatar dropdown-avatar" alt="Img">
                                                Laura
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <img src="{{ URL::asset('/assets/img/doctors-dashboard/profile-07.jpg') }}"
                                                    class="avatar dropdown-avatar" alt="Img">
                                                Mathew
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="dashboard-card-body">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="health-records icon-orange">
                                                        <span><i
                                                                class="fa-solid fa-heart"></i>{{ __('messages.heart_rate') }}</span>
                                                        <h3>{{ $medicalDetail->heart_rate ?? '--' }} Bpm <sup> 2%</sup>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="health-records icon-amber">
                                                        <span><i
                                                                class="fa-solid fa-temperature-high"></i>{{ __('messages.body_temperature') }}</span>
                                                        <h3>{{ $medicalDetail->body_temperature ?? '--' }} C</h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="health-records icon-dark-blue">
                                                        <span><i
                                                                class="fa-solid fa-notes-medical"></i>{{ __('messages.glucose_level') }}</span>
                                                        <h3>{{ $medicalDetail->glucose ?? '0 - 0' }}<sup> 0%</sup></h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="health-records icon-blue">
                                                        <span><i
                                                                class="fa-solid fa-highlighter"></i>{{ __('messages.spo2') }}</span>
                                                        <h3>{{ $medicalDetail->spo2 ?? '--' }}%</h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="health-records icon-red">
                                                        <span><i
                                                                class="fa-solid fa-syringe"></i>{{ __('messages.blood_pressure') }}</span>
                                                        <h3>{{ $medicalDetail->bp ?? '--' }} mg/dl<sup> 2%</sup></h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="health-records icon-purple">
                                                        <span><i class="fa-solid fa-user-pen"></i>{{ __('messages.bmi') }}
                                                        </span>
                                                        <h3>{{ $medicalDetail->bmi ?? '--' }} kg/m2</h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="report-gen-date">
                                                        <p>Report generated on last visit : 25 Mar 2024 <span><i
                                                                    class="fa-solid fa-copy"></i></span></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="chart-over-all-report">
                                                <h5>Overall Report</h5>
                                                <div class="circle-bar circle-bar3 report-chart">
                                                    <div class="circle-graph3" data-percent="66">
                                                        <p>Last visit
                                                            25 Mar 2024</p>
                                                    </div>
                                                </div>
                                                <span class="health-percentage">Your health is 95% Normal</span>
                                                {{-- <a href="{{ url('medical-details') }}" class="btn btn-dark w-100">View
                                                    Details<i class="fa-solid fa-chevron-right ms-2"></i></a> --}}
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-5 d-flex">
                            <div class="dashboard-main-col w-100">
                                <div class="dashboard-card w-100">
                                    <div class="dashboard-card-head">
                                        <div class="header-title">
                                            <h5><span class="card-head-icon"><i
                                                        class="fa-solid fa-calendar-days"></i></span>{{ __('messages.appointment') }}
                                            </h5>
                                        </div>
                                        <div class="card-view-link">
                                            <div class="owl-nav slide-nav text-end nav-control"></div>
                                        </div>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="apponiment-dates">
                                            {{-- <ul class="appointment-calender-slider owl-carousel">
                                                <li>
                                                    <a href="#">
                                                        <h5>19 <span>Mon</span></h5>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <h5>20 <span>Mon</span></h5>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="available-date">
                                                        <h5>21 <span>Tue</span></h5>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="available-date">
                                                        <h5>22 <span>Wed</span></h5>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <h5>23 <span>Thu</span></h5>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <h5>24 <span>Fri</span></h5>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <h5>25 <span>Sat</span></h5>
                                                    </a>
                                                </li>
                                            </ul> --}}

                                            @if (!empty($appointments) && count($appointments) > 0)
                                                @foreach ($appointments as $appointment)
                                                    <div class="appointment-dash-card">
                                                        <div class="doctor-fav-list">
                                                            <div class="doctor-info-profile">
                                                                <a href="#" class="table-avatar">
                                                                    <img src="{{ $appointment->doctor->image ?? URL::asset('/assets/img/doctors-dashboard/doctor-profile-img.jpg') }}"
                                                                        alt="Img">
                                                                </a>
                                                                <div class="doctor-name-info">
                                                                    <h5><a href="#">Dr.
                                                                            {{ $appointment->doctor->name ?? 'N/A' }}</a>
                                                                    </h5>
                                                                    <span>Dentist</span>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="cal-plus-icon"><i
                                                                    class="fa-solid fa-hospital"></i></a>
                                                        </div>
                                                        <div class="date-time">
                                                            <p><i class="fa-solid fa-clock"></i>
                                                                {{ $appointment->doctor->start_date ?? 'Not Available' }}
                                                            </p>
                                                        </div>
                                                        <div class="card-btns">
                                                            {{-- <a href="{{ url('chat') }}" class="btn btn-gray"><i class="fa-solid fa-comment-dots"></i>Chat Now</a> --}}
                                                            <a href="{{ $appointment->google_meet_link ?? '#' }}"
                                                                class="btn btn-outline-primary" target="_blank">
                                                                <i class="fa-solid fa-calendar-check"></i> Attend
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <p class="text-center text-muted">No Appointments Available</p>
                                            @endif


                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-xl-12 d-flex">
                            <div class="dashboard-card w-100">
                                <div class="dashboard-card-head">
                                    <div class="header-title">
                                        <h5>{{ __('messages.reports') }}</h5>
                                    </div>
                                    <div class="dropdown header-dropdown">
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/doctors-dashboard/profile-06.jpg') }}"
                                                class="avatar dropdown-avatar" alt="Img">
                                            Hendrita
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <img src="{{ URL::asset('/assets/img/doctors-dashboard/profile-06.jpg') }}"
                                                    class="avatar dropdown-avatar" alt="Img">
                                                Hendrita
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <img src="{{ URL::asset('/assets/img/doctors-dashboard/profile-08.jpg') }}"
                                                    class="avatar dropdown-avatar" alt="Img">
                                                Laura
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <img src="{{ URL::asset('/assets/img/doctors-dashboard/profile-07.jpg') }}"
                                                    class="avatar dropdown-avatar" alt="Img">
                                                Mathew
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="dashboard-card-body">
                                    <div class="account-detail-table">
                                        <!-- Tab Menu -->
                                        <nav class="patient-dash-tab border-0 pb-0 mb-3 mt-3">
                                            <ul class="nav nav-tabs-bottom">
                                                {{-- <li class="nav-item">
                                                    <a class="nav-link active" href="#appoint-tab"
                                                        data-bs-toggle="tab">Appointments</a>
                                                </li> --}}
                                                {{-- <li class="nav-item">
                                                    <a class="nav-link" href="#medical-tab" data-bs-toggle="tab">Medical
                                                        Records</a>
                                                </li> --}}
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#prsc-tab"
                                                        data-bs-toggle="tab">Prescriptions</a>
                                                </li>
                                                {{-- <li class="nav-item">
                                                    <a class="nav-link" href="#invoice-tab"
                                                        data-bs-toggle="tab">Invoices</a>
                                                </li> --}}
                                            </ul>
                                        </nav>
                                        <!-- /Tab Menu -->

                                        <!-- Tab Content -->
                                        <div class="tab-content pt-0">

                                            <!-- Appointments Tab -->
                                            <div id="appoint-tab" class="tab-pane fade show ">
                                                <div class="custom-new-table">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-center mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Test Name</th>
                                                                    <th>Date</th>
                                                                    <th>Referred By</th>
                                                                    <th>Amount</th>
                                                                    <th>Comments</th>
                                                                    <th>Status</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="javascript:void(0);"><span
                                                                                class="text-blue">RE124343</span></a>
                                                                    </td>
                                                                    <td>
                                                                        Electro cardiography
                                                                    </td>
                                                                    <td>21 Mar 2024</td>
                                                                    <td>Edalin Hendry</td>
                                                                    <td>$300</td>
                                                                    <td>Good take rest</td>
                                                                    <td>
                                                                        <span class="badge badge-success-bg">Normal</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="#"
                                                                                class="account-action me-2"><i
                                                                                    class="fa-solid fa-prescription"></i></a>
                                                                            <a href="#" class="account-action"><i
                                                                                    class="fa-solid fa-file-invoice-dollar"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="javascript:void(0);"><span
                                                                                class="text-blue">RE124342</span></a>
                                                                    </td>
                                                                    <td>
                                                                        Complete Blood Count
                                                                    </td>
                                                                    <td>28 Mar 2024</td>
                                                                    <td>Shanta Nesmith</td>
                                                                    <td>$400</td>
                                                                    <td>Stable, no change</td>
                                                                    <td>
                                                                        <span class="badge badge-success-bg">Normal</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="#"
                                                                                class="account-action me-2"><i
                                                                                    class="fa-solid fa-prescription"></i></a>
                                                                            <a href="#" class="account-action"><i
                                                                                    class="fa-solid fa-file-invoice-dollar"></i></a>
                                                                        </div>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="javascript:void(0);"><span
                                                                                class="text-blue">RE124341</span></a>
                                                                    </td>
                                                                    <td>
                                                                        Blood Glucose Test
                                                                    </td>
                                                                    <td>02 Apr 2024</td>
                                                                    <td>John Ewel</td>
                                                                    <td>$350</td>
                                                                    <td>All Clear</td>
                                                                    <td>
                                                                        <span class="badge badge-success-bg">Normal</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="#"
                                                                                class="account-action me-2"><i
                                                                                    class="fa-solid fa-prescription"></i></a>
                                                                            <a href="#" class="account-action"><i
                                                                                    class="fa-solid fa-file-invoice-dollar"></i></a>
                                                                        </div>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="javascript:void(0);"><span
                                                                                class="text-blue">RE124340</span></a>
                                                                    </td>
                                                                    <td>
                                                                        Liver Function Tests
                                                                    </td>
                                                                    <td>15 Apr 2024</td>
                                                                    <td>Joseph Engels</td>
                                                                    <td>$480</td>
                                                                    <td>Stable, no change</td>
                                                                    <td>
                                                                        <span class="badge badge-success-bg">Normal</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="#"
                                                                                class="account-action me-2"><i
                                                                                    class="fa-solid fa-prescription"></i></a>
                                                                            <a href="#" class="account-action"><i
                                                                                    class="fa-solid fa-file-invoice-dollar"></i></a>
                                                                        </div>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="javascript:void(0);"><span
                                                                                class="text-blue">RE124339</span></a>
                                                                    </td>
                                                                    <td>
                                                                        Lipid Profile
                                                                    </td>
                                                                    <td>27 Apr 2024</td>
                                                                    <td>Victoria Selzer</td>
                                                                    <td>$250</td>
                                                                    <td>Good take rest</td>
                                                                    <td>
                                                                        <span class="badge badge-success-bg">Normal</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="#"
                                                                                class="account-action me-2"><i
                                                                                    class="fa-solid fa-prescription"></i></a>
                                                                            <a href="#" class="account-action"><i
                                                                                    class="fa-solid fa-file-invoice-dollar"></i></a>
                                                                        </div>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#"><span
                                                                                class="text-blue">RE124338</span></a>
                                                                    </td>
                                                                    <td>
                                                                        Blood Cultures
                                                                    </td>
                                                                    <td>10 May 2024</td>
                                                                    <td>Juliet Gabriel</td>
                                                                    <td>$320</td>
                                                                    <td>Good take rest</td>
                                                                    <td>
                                                                        <span class="badge badge-success-bg">Normal</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="#"
                                                                                class="account-action me-2"><i
                                                                                    class="fa-solid fa-prescription"></i></a>
                                                                            <a href="#" class="account-action"><i
                                                                                    class="fa-solid fa-file-invoice-dollar"></i></a>
                                                                        </div>

                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Appointments Tab -->

                                            <!-- Medical Records Tab -->
                                            <div class="tab-pane fade" id="medical-tab">
                                                <div class="custom-table">
                                                    <div class="table-responsive">
                                                        <table class="table table-center mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Name</th>
                                                                    <th>Date</th>
                                                                    <th>Description</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-blue-600"><a
                                                                            href="javascript:void(0);">#MR-123</a></td>
                                                                    <td>
                                                                        <a href="javascript:void(0);" class="lab-icon">
                                                                            <span><i
                                                                                    class="fa-solid fa-paperclip"></i></span>Lab
                                                                            Report
                                                                        </a>
                                                                    </td>
                                                                    <td>24 Mar 2024</td>
                                                                    <td>Glucose Test V12</td>
                                                                    <td>
                                                                        <div class="action-item">
                                                                            <a href="javascript:void(0);">
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
                                                                    <td class="text-blue-600"><a
                                                                            href="javascript:void(0);">#MR-124</a></td>
                                                                    <td>
                                                                        <a href="javascript:void(0);" class="lab-icon">
                                                                            <span><i
                                                                                    class="fa-solid fa-paperclip"></i></span>Lab
                                                                            Report
                                                                        </a>
                                                                    </td>
                                                                    <td>27 Mar 2024</td>
                                                                    <td>Complete Blood Count(CBC)</td>
                                                                    <td>
                                                                        <div class="action-item">
                                                                            <a href="javascript:void(0);">
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
                                                                    <td class="text-blue-600"><a
                                                                            href="#">#MR-125</a></td>
                                                                    <td>
                                                                        <a href="javascript:void(0);" class="lab-icon">
                                                                            <span><i
                                                                                    class="fa-solid fa-paperclip"></i></span>Lab
                                                                            Report
                                                                        </a>
                                                                    </td>
                                                                    <td>10 Apr 2024</td>
                                                                    <td>Echocardiogram</td>
                                                                    <td>
                                                                        <div class="action-item">
                                                                            <a href="javascript:void(0);">
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
                                                                    <td class="text-blue-600"><a
                                                                            href="javascript:void(0);">#MR-126</a></td>
                                                                    <td>
                                                                        <a href="javascript:void(0);" class="lab-icon">
                                                                            <span><i
                                                                                    class="fa-solid fa-paperclip"></i></span>Lab
                                                                            Report
                                                                        </a>
                                                                    </td>
                                                                    <td>19 Apr 2024</td>
                                                                    <td>COVID-19 Test</td>
                                                                    <td>
                                                                        <div class="action-item">
                                                                            <a href="javascript:void(0);">
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
                                                                    <td class="text-blue-600"><a
                                                                            href="javascript:void(0);">#MR-127</a></td>
                                                                    <td>
                                                                        <a href="javascript:void(0);" class="lab-icon">
                                                                            <span><i
                                                                                    class="fa-solid fa-paperclip"></i></span>Lab
                                                                            Report
                                                                        </a>
                                                                    </td>
                                                                    <td>27 Apr 2024</td>
                                                                    <td>Allergy Tests</td>
                                                                    <td>
                                                                        <div class="action-item">
                                                                            <a href="javascript:void(0);">
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
                                                                    <td class="text-blue-600"><a
                                                                            href="#">#MR-128</a></td>
                                                                    <td>
                                                                        <a href="javascript:void(0);" class="lab-icon">
                                                                            <span><i
                                                                                    class="fa-solid fa-paperclip"></i></span>Lab
                                                                            Report
                                                                        </a>
                                                                    </td>
                                                                    <td>02 May 2024</td>
                                                                    <td>Lipid Panel </td>
                                                                    <td>
                                                                        <div class="action-item">
                                                                            <a href="javascript:void(0);">
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
                                            </div>
                                            <!-- /Medical Records Tab -->

                                            <!-- Prescriptions Tab -->
                                            <div class="tab-pane fade show active" id="prsc-tab ">
                                                <div class="custom-table">
                                                    <div class="table-responsive">
                                                        <table class="table table-center mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>{{ __('messages.patient_id') }}</th>
                                                                    <th>{{ __('messages.created_date') }}</th>
                                                                    <th>{{ __('messages.prescribed_by') }}</th>
                                                                    <th>{{ __('messages.prescription_detail') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if (!empty($formatted) && $formatted->isNotEmpty())
                                                                    @foreach ($formatted as $group)
                                                                        <tr>
                                                                            <td class="fw-bold text-primary bg-light">
                                                                                {{ $patientId ?? '#' }}
                                                                            </td>
                                                                            <td class="fw-bold text-primary bg-light">
                                                                                <a href="javascript:void(0);"
                                                                                    class="text-decoration-none view-prescription-date"
                                                                                    data-date="{{ $group['date'] }}"
                                                                                    data-items='@json($group['items'])'>
                                                                                    {{ \Carbon\Carbon::parse($group['date'])->format('F j, Y') }}
                                                                                </a>
                                                                            </td>
                                                                            <td class="fw-bold text-primary bg-light">
                                                                                {{ $group['doctor_name'] ?? 'Not Linked' }}
                                                                            </td>
                                                                            <td class="fw-bold text-primary bg-light">
                                                                                <a href="javascript:void(0);"
                                                                                    class="view-prescription view-prescription-date"
                                                                                    data-date="{{ $group['date'] }}"
                                                                                    data-items='@json($group['items'])'>
                                                                                    <i class="fa-solid fa-link"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                    <tr>
                                                                        <td colspan="5" class="text-center">No
                                                                            prescriptions found.</td>
                                                                    </tr>
                                                                @endif
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Prescriptions Tab -->

                                            <!--Invoices Tab -->
                                            <div class="tab-pane fade" id="invoice-tab">
                                                <div class="custom-table">
                                                    <div class="table-responsive">
                                                        <table class="table table-center mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Doctor</th>
                                                                    <th>Appointment Date</th>
                                                                    <th>Booked on</th>
                                                                    <th>Amount</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-blue-600"><a href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#invoice_view">#Inv-2021</a>
                                                                    </td>
                                                                    <td>
                                                                        <h2 class="table-avatar">
                                                                            <a href="{{ url('doctor-profile') }}"
                                                                                class="avatar avatar-sm me-2">
                                                                                <img class="avatar-img rounded-3"
                                                                                    src="{{ URL::asset('/assets/img/doctors/doctor-thumb-21.jpg') }}"
                                                                                    alt="User Image">
                                                                            </a>
                                                                            <a href="{{ url('doctor-profile') }}">Edalin
                                                                                Hendry</a>
                                                                        </h2>
                                                                    </td>
                                                                    <td>24 Mar 2024</td>
                                                                    <td>21 Mar 2024</td>
                                                                    <td>$300</td>
                                                                    <td>
                                                                        <div class="action-item">
                                                                            <a href="javascript:void(0);"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#invoice_view">
                                                                                <i class="fa-solid fa-link"></i>
                                                                            </a>
                                                                            <a href="javascript:void(0);">
                                                                                <i class="fa-solid fa-print"></i>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-blue-600"><a href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#invoice_view">#Inv-2021</a>
                                                                    </td>
                                                                    <td>
                                                                        <h2 class="table-avatar">
                                                                            <a href="{{ url('doctor-profile') }}"
                                                                                class="avatar avatar-sm me-2">
                                                                                <img class="avatar-img rounded-3"
                                                                                    src="{{ URL::asset('/assets/img/doctors/doctor-thumb-13.jpg') }}"
                                                                                    alt="User Image">
                                                                            </a>
                                                                            <a href="{{ url('doctor-profile') }}">John
                                                                                Homes</a>
                                                                        </h2>
                                                                    </td>
                                                                    <td>17 Mar 2024</td>
                                                                    <td>14 Mar 2024</td>
                                                                    <td>$450</td>
                                                                    <td>
                                                                        <div class="action-item">
                                                                            <a href="javascript:void(0);"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#invoice_view">
                                                                                <i class="fa-solid fa-link"></i>
                                                                            </a>
                                                                            <a href="javascript:void(0);">
                                                                                <i class="fa-solid fa-print"></i>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-blue-600"><a href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#invoice_view">#Inv-2021</a>
                                                                    </td>
                                                                    <td>
                                                                        <h2 class="table-avatar">
                                                                            <a href="{{ url('doctor-profile') }}"
                                                                                class="avatar avatar-sm me-2">
                                                                                <img class="avatar-img rounded-3"
                                                                                    src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg') }}"
                                                                                    alt="User Image">
                                                                            </a>
                                                                            <a href="{{ url('doctor-profile') }}">Shanta
                                                                                Neill</a>
                                                                        </h2>
                                                                    </td>
                                                                    <td>11 Mar 2024</td>
                                                                    <td>07 Mar 2024</td>
                                                                    <td>$250</td>
                                                                    <td>
                                                                        <div class="action-item">
                                                                            <a href="javascript:void(0);"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#invoice_view">
                                                                                <i class="fa-solid fa-link"></i>
                                                                            </a>
                                                                            <a href="javascript:void(0);">
                                                                                <i class="fa-solid fa-print"></i>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-blue-600"><a href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#invoice_view">#Inv-2021</a>
                                                                    </td>
                                                                    <td>
                                                                        <h2 class="table-avatar">
                                                                            <a href="{{ url('doctor-profile') }}"
                                                                                class="avatar avatar-sm me-2">
                                                                                <img class="avatar-img rounded-3"
                                                                                    src="{{ URL::asset('/assets/img/doctors/doctor-thumb-08.jpg') }}"
                                                                                    alt="User Image">
                                                                            </a>
                                                                            <a href="{{ url('doctor-profile') }}">Anthony
                                                                                Tran</a>
                                                                        </h2>
                                                                    </td>
                                                                    <td>26 Feb 2024</td>
                                                                    <td>23 Feb 2024</td>
                                                                    <td>$320</td>
                                                                    <td>
                                                                        <div class="action-item">
                                                                            <a href="javascript:void(0);"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#invoice_view">
                                                                                <i class="fa-solid fa-link"></i>
                                                                            </a>
                                                                            <a href="javascript:void(0);">
                                                                                <i class="fa-solid fa-print"></i>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-blue-600"><a href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#invoice_view">#Inv-2021</a>
                                                                    </td>
                                                                    <td>
                                                                        <h2 class="table-avatar">
                                                                            <a href="{{ url('doctor-profile') }}"
                                                                                class="avatar avatar-sm me-2">
                                                                                <img class="avatar-img rounded-3"
                                                                                    src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg') }}"
                                                                                    alt="User Image">
                                                                            </a>
                                                                            <a href="{{ url('doctor-profile') }}">Susan
                                                                                Lingo</a>
                                                                        </h2>
                                                                    </td>
                                                                    <td>18 Feb 2024</td>
                                                                    <td>15 Feb 2024</td>
                                                                    <td>$480</td>
                                                                    <td>
                                                                        <div class="action-item">
                                                                            <a href="javascript:void(0);"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#invoice_view">
                                                                                <i class="fa-solid fa-link"></i>
                                                                            </a>
                                                                            <a href="javascript:void(0);">
                                                                                <i class="fa-solid fa-print"></i>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-blue-600"><a href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#invoice_view">#Inv-2021</a>
                                                                    </td>
                                                                    <td>
                                                                        <h2 class="table-avatar">
                                                                            <a href="{{ url('doctor-profile') }}"
                                                                                class="avatar avatar-sm me-2">
                                                                                <img class="avatar-img rounded-3"
                                                                                    src="{{ URL::asset('/assets/img/doctors/doctor-thumb-09.jpg') }}"
                                                                                    alt="User Image">
                                                                            </a>
                                                                            <a href="{{ url('doctor-profile') }}">Joseph
                                                                                Boyd</a>
                                                                        </h2>
                                                                    </td>
                                                                    <td>10 Feb 2024</td>
                                                                    <td>07 Feb 2024</td>
                                                                    <td>$260</td>
                                                                    <td>
                                                                        <div class="action-item">
                                                                            <a href="javascript:void(0);"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#invoice_view">
                                                                                <i class="fa-solid fa-link"></i>
                                                                            </a>
                                                                            <a href="javascript:void(0);">
                                                                                <i class="fa-solid fa-print"></i>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-blue-600"><a href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#invoice_view">#Inv-2021</a>
                                                                    </td>
                                                                    <td>
                                                                        <h2 class="table-avatar">
                                                                            <a href="{{ url('doctor-profile') }}"
                                                                                class="avatar avatar-sm me-2">
                                                                                <img class="avatar-img rounded-3"
                                                                                    src="{{ URL::asset('/assets/img/doctors/doctor-thumb-07.jpg') }}"
                                                                                    alt="User Image">
                                                                            </a>
                                                                            <a href="{{ url('doctor-profile') }}">Juliet
                                                                                Gabriel</a>
                                                                        </h2>
                                                                    </td>
                                                                    <td>28 Jan 2024</td>
                                                                    <td>25 Jan 2024</td>
                                                                    <td>$350</td>
                                                                    <td>
                                                                        <div class="action-item">
                                                                            <a href="javascript:void(0);"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#invoice_view">
                                                                                <i class="fa-solid fa-link"></i>
                                                                            </a>
                                                                            <a href="javascript:void(0);">
                                                                                <i class="fa-solid fa-print"></i>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Invoices Tab -->

                                        </div>
                                        <!-- Tab Content -->
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
    @include('layout.partials.custom_scripts')

@endsection
