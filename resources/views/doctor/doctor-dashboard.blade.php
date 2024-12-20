<?php $page = 'doctor-dashboard'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Dashboard
        @endslot
        @slot('li_1')
            Dashboard
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

                    <div class="row">
                        <div class="col-xl-4 d-flex">
                            <div class="dashboard-box-col w-100">
                                <div class="dashboard-widget-box">
                                    <div class="dashboard-content-info">
                                        <h6>Total Patient</h6>
                                        <h4>{{ $totalPatients ?? '0' }}</h4>
                                        <span class="text-success"><i class="fa-solid fa-arrow-up"></i>{{ $patientsLastWeekChange ?? '0' }}% From Last
                                            Week</span>
                                    </div>
                                    <div class="dashboard-widget-icon">
                                        <span class="dash-icon-box"><i class="fa-solid fa-user-injured"></i></span>
                                    </div>
                                </div>
                                <div class="dashboard-widget-box">
                                    <div class="dashboard-content-info">
                                        <h6>Patients Today</h6>
                                        <h4>{{ $patientsToday ?? '0' }}</h4>
                                        <span class="text-danger"><i class="fa-solid fa-arrow-up"></i>{{ $patientsTodayChange ?? '0' }}% From
                                            Yesterday</span>
                                    </div>
                                    <div class="dashboard-widget-icon">
                                        <span class="dash-icon-box"><i class="fa-solid fa-user-clock"></i></span>
                                    </div>
                                </div>
                                <div class="dashboard-widget-box">
                                    <div class="dashboard-content-info">
                                        <h6>Appointments Today</h6>
                                        <h4>{{ $patientsToday ?? '0' }}</h4>
                                        <span class="text-success"><i class="fa-solid fa-arrow-up"></i>{{ $appointmentsTodayChange ?? '0' }}% From
                                            Yesterday</span>
                                    </div>
                                    <div class="dashboard-widget-icon">
                                        <span class="dash-icon-box"><i class="fa-solid fa-calendar-days"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 d-flex">
                            <div class="dashboard-card w-100">
                                <div class="dashboard-card-head">
                                    <div class="header-title">
                                        <h5>Appointment</h5>
                                    </div>
                                    <div class="dropdown header-dropdown">
                                        <a class="dropdown-toggle nav-tog" data-bs-toggle="dropdown" href="javascript:void(0);">
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

                                </div>
                                <div class="dashboard-card-body">
                                    <div class="table-responsive">
                                        <table class="table dashboard-table appoint-table">
                                            <tbody>
                                                @foreach ($appointments as $appointment)
                                                <tr>
                                                    <td>
                                                        <div class="patient-info-profile">
                                                            <a href="{{ url('doctor/doctor-appointments') }}" class="table-avatar">
                                                                <img src="{{ URL::asset('assets/img/services-six-1.png') }}"
                                                                    alt="Img">
                                                            </a>
                                                            <div class="patient-name-info">
                                                                <span>#Apt0001</span>
                                                                <h5><a href="{{ url('doctor/doctor-appointments') }}">{{ $appointment->user->name ?? '' }}</a>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <div class="appointment-date-created">
                                                            <h6>{{ $appointment->start_date ?? '' }}</h6>
                                                            <span class="badge table-badge">General</span> 
                                                        </div>
                                                    </td>
                                                    {{-- <td>
                                                        <div class="apponiment-actions d-flex align-items-center">
                                                            <a href="#" class="text-success-icon me-2"><i
                                                                    class="fa-solid fa-check"></i></a>
                                                            <a href="#" class="text-danger-icon"><i
                                                                    class="fa-solid fa-xmark"></i></a>
                                                        </div>
                                                    </td> --}}
                                                </tr>
                                                @endforeach
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-12 d-flex">
                            <div class="dashboard-chart-col w-100">
                                <div class="dashboard-card w-100">
                                    <div class="dashboard-card-head border-0">
                                        <div class="header-title">
                                            <h5>Weekly Overview</h5>
                                        </div>
                                        <div class="chart-create-date">
                                            <h6>Mar 14 - Mar 21</h6>
                                        </div>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="chart-tab">
                                            <ul class="nav nav-pills product-licence-tab" id="pills-tab2" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-revenue-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-revenue"
                                                        type="button" role="tab" aria-controls="pills-revenue"
                                                        aria-selected="false">Revenue</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-appointment-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-appointment"
                                                        type="button" role="tab" aria-controls="pills-appointment"
                                                        aria-selected="true">Appointments</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content w-100" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-revenue" role="tabpanel"
                                                    aria-labelledby="pills-revenue-tab">
                                                    <div id="revenue-chart"></div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-appointment" role="tabpanel"
                                                    aria-labelledby="pills-appointment-tab">
                                                    <div id="appointment-chart"></div>

                                                </div>
                                            </div>

                                        </div>
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
