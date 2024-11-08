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
                                        <h4>978</h4>
                                        <span class="text-success"><i class="fa-solid fa-arrow-up"></i>15% From Last
                                            Week</span>
                                    </div>
                                    <div class="dashboard-widget-icon">
                                        <span class="dash-icon-box"><i class="fa-solid fa-user-injured"></i></span>
                                    </div>
                                </div>
                                <div class="dashboard-widget-box">
                                    <div class="dashboard-content-info">
                                        <h6>Patients Today</h6>
                                        <h4>978</h4>
                                        <span class="text-danger"><i class="fa-solid fa-arrow-up"></i>15% From
                                            Yesterday</span>
                                    </div>
                                    <div class="dashboard-widget-icon">
                                        <span class="dash-icon-box"><i class="fa-solid fa-user-clock"></i></span>
                                    </div>
                                </div>
                                <div class="dashboard-widget-box">
                                    <div class="dashboard-content-info">
                                        <h6>Appointments Today</h6>
                                        <h4>978</h4>
                                        <span class="text-success"><i class="fa-solid fa-arrow-up"></i>20% From
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
                                                <tr>
                                                    <td>
                                                        <div class="patient-info-profile">
                                                            <a href="{{ url('appointments') }}" class="table-avatar">
                                                                <img src="{{ URL::asset('assets/img/services-six-1.png') }}"
                                                                    alt="Img">
                                                            </a>
                                                            <div class="patient-name-info">
                                                                <span>#Apt0001</span>
                                                                <h5><a href="{{ url('appointments') }}">Adrian Marshall</a>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <div class="appointment-date-created">
                                                            <h6>11 Nov 2024 10.45 AM</h6>
                                                            <span class="badge table-badge">General</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="apponiment-actions d-flex align-items-center">
                                                            <a href="#" class="text-success-icon me-2"><i
                                                                    class="fa-solid fa-check"></i></a>
                                                            <a href="#" class="text-danger-icon"><i
                                                                    class="fa-solid fa-xmark"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="patient-info-profile">
                                                            <a href="{{ url('appointments') }}" class="table-avatar">
                                                                <img src="{{ URL::asset('assets/img/services-six-1.png') }}"
                                                                    alt="Img">
                                                            </a>
                                                            <div class="patient-name-info">
                                                                <span>#Apt0002</span>
                                                                <h5><a href="{{ url('appointments') }}">Kelly Stevens</a>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <div class="appointment-date-created">
                                                            <h6>10 Nov 2024 11.00 AM</h6>
                                                            <span class="badge table-badge">Clinic Consulting</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="apponiment-actions d-flex align-items-center">
                                                            <a href="#" class="text-success-icon me-2"><i
                                                                    class="fa-solid fa-check"></i></a>
                                                            <a href="#" class="text-danger-icon"><i
                                                                    class="fa-solid fa-xmark"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="patient-info-profile">
                                                            <a href="{{ url('appointments') }}" class="table-avatar">
                                                                <img src="{{ URL::asset('assets/img/services-six-1.png') }}"
                                                                    alt="Img">
                                                            </a>
                                                            <div class="patient-name-info">
                                                                <span>#Apt0003</span>
                                                                <h5><a href="{{ url('appointments') }}">Samuel Anderson</a>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <div class="appointment-date-created">
                                                            <h6>03 Nov 2024 02.00 PM</h6>
                                                            <span class="badge table-badge">General</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="apponiment-actions d-flex align-items-center">
                                                            <a href="#" class="text-success-icon me-2"><i
                                                                    class="fa-solid fa-check"></i></a>
                                                            <a href="#" class="text-danger-icon"><i
                                                                    class="fa-solid fa-xmark"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="patient-info-profile">
                                                            <a href="{{ url('appointments') }}" class="table-avatar">
                                                                <img src="{{ URL::asset('assets/img/services-six-1.png') }}"
                                                                    alt="Img">
                                                            </a>
                                                            <div class="patient-name-info">
                                                                <span>#Apt0004</span>
                                                                <h5><a href="{{ url('appointments') }}">Catherine
                                                                        Griffin</a></h5>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <div class="appointment-date-created">
                                                            <h6>01 Nov 2024 04.00 PM</h6>
                                                            <span class="badge table-badge">Clinic Consulting</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="apponiment-actions d-flex align-items-center">
                                                            <a href="#" class="text-success-icon me-2"><i
                                                                    class="fa-solid fa-check"></i></a>
                                                            <a href="#" class="text-danger-icon"><i
                                                                    class="fa-solid fa-xmark"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="patient-info-profile">
                                                            <a href="{{ url('appointments') }}" class="table-avatar">
                                                                <img src="{{ URL::asset('assets/img/services-six-1.png') }}"
                                                                    alt="Img">
                                                            </a>
                                                            <div class="patient-name-info">
                                                                <span>#Apt0005</span>
                                                                <h5><a href="{{ url('appointments') }}">Robert
                                                                        Hutchinson</a></h5>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <div class="appointment-date-created">
                                                            <h6>28 Oct 2024 05.30 PM</h6>
                                                            <span class="badge table-badge">General</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="apponiment-actions d-flex align-items-center">
                                                            <a href="#" class="text-success-icon me-2"><i
                                                                    class="fa-solid fa-check"></i></a>
                                                            <a href="#" class="text-danger-icon"><i
                                                                    class="fa-solid fa-xmark"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-5 d-flex">
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
                                <div class="dashboard-card w-100">
                                    <div class="dashboard-card-head">
                                        <div class="header-title">
                                            <h5>Recent Patients</h5>
                                        </div>
                                        <div class="card-view-link">
                                            <a href="{{ url('my-patients') }}">View All</a>
                                        </div>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="d-flex recent-patient-grid-boxes">
                                            <div class="recent-patient-grid">
                                                <a href="{{ url('patient-details') }}" class="patient-img">
                                                    <img src="{{ URL::asset('assets/img/services-six-1.png') }}"
                                                        alt="Img">
                                                </a>
                                                <h5><a href="{{ url('patient-details') }}">Adrian Marshall</a></h5>
                                                <span>Patient ID : P0001</span>
                                                <div class="date-info">
                                                    <h6>Last Appointment
                                                        15 Mar 2024</h6>
                                                </div>
                                            </div>
                                            <div class="recent-patient-grid">
                                                <a href="{{ url('patient-details') }}" class="patient-img">
                                                    <img src="{{ URL::asset('assets/img/services-six-1.png') }}"
                                                        alt="Img">
                                                </a>
                                                <h5><a href="{{ url('patient-details') }}">Kelly Stevens</a></h5>
                                                <span>Patient ID : P0002</span>
                                                <div class="date-info">
                                                    <h6>Last Appointment
                                                        13 Mar 2024</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 d-flex">
                            <div class="dashboard-main-col w-100">
                                <div class="upcoming-appointment-card">
                                    <div class="title-card">
                                        <h5>Upcoming Appointment</h5>
                                    </div>
                                    <div class="upcoming-patient-info">
                                        <div class="info-details">
                                            <span class="img-avatar"><img
                                                    src="{{ URL::asset('assets/img/services-six-1.png') }}"
                                                    alt="Img"></span>
                                            <div class="name-info">
                                                <span>#Apt0001</span>
                                                <h6>Adrian Marshall</h6>
                                            </div>

                                        </div>
                                        <div class="date-details">
                                            <span>General visit</span>
                                            <h6>Today, 10:45 AM</h6>
                                        </div>
                                        <div class="circle-bg">
                                            <img src="{{ URL::asset('/assets/img/bg/dashboard-circle-bg.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="appointment-card-footer">
                                        <h5><i class="fa-solid fa-video"></i>Video Appointment</h5>
                                        <div class="btn-appointments">
                                            <a href="{{ url('chat-doctor') }}" class="btn">Chat Now</a>
                                            <a href="{{ url('doctor-appointment-start') }}" class="btn">Start
                                                Appointment</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-card w-100">
                                    <div class="dashboard-card-head">
                                        <div class="header-title">
                                            <h5>Recent Invoices</h5>
                                        </div>
                                        <div class="card-view-link">
                                            <a href="{{ url('invoices') }}">View All</a>
                                        </div>
                                    </div>
                                    <div class="dashboard-card-body">
                                        <div class="table-responsive">
                                            <table class="table dashboard-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="patient-info-profile">
                                                                <a href="{{ url('invoices') }}" class="table-avatar">
                                                                    <img src="{{ URL::asset('assets/img/services-six-1.png') }}"
                                                                        alt="Img">
                                                                </a>
                                                                <div class="patient-name-info">
                                                                    <h5><a href="{{ url('invoices') }}">Adrian</a></h5>
                                                                    <span>#Apt0001</span>
                                                                </div>
                                                            </div>

                                                        </td>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <span class="paid-text">Amount</span>
                                                                <h6>$450</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <span class="paid-text">Paid On</span>
                                                                <h6>11 Nov 2024</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="apponiment-view d-flex align-items-center">
                                                                <a href="{{ url('invoice-view') }}"><i
                                                                        class="fa-solid fa-eye"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="patient-info-profile">
                                                                <a href="#" class="table-avatar">
                                                                    <img src="{{ URL::asset('assets/img/services-six-1.png') }}"
                                                                        alt="Img">
                                                                </a>
                                                                <div class="patient-name-info">
                                                                    <h5><a href="#">Kelly</a></h5>
                                                                    <span>#Apt0002</span>
                                                                </div>
                                                            </div>

                                                        </td>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <span class="paid-text">Paid On</span>
                                                                <h6>10 Nov 2024</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <span class="paid-text">Amount</span>
                                                                <h6>$500</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="apponiment-view d-flex align-items-center">
                                                                <a href="#"><i class="fa-solid fa-eye"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="patient-info-profile">
                                                                <a href="#" class="table-avatar">
                                                                    <img src="{{ URL::asset('assets/img/services-six-1.png') }}"
                                                                        alt="Img">
                                                                </a>
                                                                <div class="patient-name-info">
                                                                    <h5><a href="#">Samuel</a></h5>
                                                                    <span>#Apt0003</span>
                                                                </div>
                                                            </div>

                                                        </td>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <span class="paid-text">Paid On</span>
                                                                <h6>03 Nov 2024</h6>
                                                            </div>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <span class="paid-text">Amount</span>
                                                                <h6>$320</h6>
                                                            </div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="apponiment-view d-flex align-items-center">
                                                                <a href="#"><i class="fa-solid fa-eye"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="patient-info-profile">
                                                                <a href="#" class="table-avatar">
                                                                    <img src="{{ URL::asset('assets/img/services-six-1.png') }}"
                                                                        alt="Img">
                                                                </a>
                                                                <div class="patient-name-info">
                                                                    <h5><a href="#">Catherine</a></h5>
                                                                    <span>#Apt0004</span>
                                                                </div>
                                                            </div>

                                                        </td>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <span class="paid-text">Paid On</span>
                                                                <h6>01 Nov 2024</h6>
                                                            </div>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <span class="paid-text">Amount</span>
                                                                <h6>$240</h6>
                                                            </div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="apponiment-view d-flex align-items-center">
                                                                <a href="#"><i class="fa-solid fa-eye"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="patient-info-profile">
                                                                <a href="#" class="table-avatar">
                                                                    <img src="{{ URL::asset('assets/img/services-six-1.png') }}"
                                                                        alt="Img">
                                                                </a>
                                                                <div class="patient-name-info">
                                                                    <h5><a href="#">Robert</a></h5>
                                                                    <span>#Apt0005</span>
                                                                </div>
                                                            </div>

                                                        </td>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <span class="paid-text">Paid On</span>
                                                                <h6>28 Oct 2024</h6>
                                                            </div>
                                                        <td>
                                                            <div class="appointment-date-created">
                                                                <span class="paid-text">Amount</span>
                                                                <h6>$380</h6>
                                                            </div>
                                                        </td>
                                                        </td>
                                                        <td>
                                                            <div class="apponiment-view d-flex align-items-center">
                                                                <a href="#"><i class="fa-solid fa-eye"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-xl-7 d-flex">
                            <div class="dashboard-card w-100">
                                <div class="dashboard-card-head">
                                    <div class="header-title">
                                        <h5>Notifications</h5>
                                    </div>
                                    <div class="card-view-link">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                                <div class="dashboard-card-body">
                                    <div class="table-responsive">
                                        <table class="table dashboard-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="table-noti-info">
                                                            <div class="table-noti-icon color-violet">
                                                                <i class="fa-solid fa-bell"></i>
                                                            </div>

                                                            <div class="table-noti-message">
                                                                <h6><a href="#">Booking Confirmed on <span> 21 Mar
                                                                            2024 </span> 10:30 AM</a></h6>
                                                                <span class="message-time">Just Now</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-noti-info">
                                                            <div class="table-noti-icon color-blue">
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>

                                                            <div class="table-noti-message">
                                                                <h6><a href="#">You have a <span> New </span> Review
                                                                        for your Appointment </a></h6>
                                                                <span class="message-time">5 Days ago</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-noti-info">
                                                            <div class="table-noti-icon color-red">
                                                                <i class="fa-solid fa-calendar-check"></i>
                                                            </div>

                                                            <div class="table-noti-message">
                                                                <h6><a href="#">You have Appointment with <span>
                                                                            Ahmed </span> by 01:20 PM </a></h6>
                                                                <span class="message-time">12:55 PM</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-noti-info">
                                                            <div class="table-noti-icon color-yellow">
                                                                <i class="fa-solid fa-money-bill-1-wave"></i>
                                                            </div>

                                                            <div class="table-noti-message">
                                                                <h6><a href="#">Sent an amount of <span> $200 </span>
                                                                        for an Appointment by 01:20 PM </a></h6>
                                                                <span class="message-time">2 Days ago</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="table-noti-info">
                                                            <div class="table-noti-icon color-blue">
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>

                                                            <div class="table-noti-message">
                                                                <h6><a href="#">You have a <span> New </span> Review
                                                                        for your Appointment </a></h6>
                                                                <span class="message-time">5 Days ago</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-5 d-flex">
                            <div class="dashboard-card w-100">
                                <div class="dashboard-card-head">
                                    <div class="header-title">
                                        <h5>Clinics & Availability</h5>
                                    </div>
                                </div>
                                <div class="dashboard-card-body">
                                    <div class="clinic-available">
                                        <div class="clinic-head">
                                            <div class="clinic-info">
                                                <span class="clinic-img">
                                                    <img src="{{ URL::asset('assets/img/clinic/clinic-02.png') }}"
                                                        alt="Img">
                                                </span>
                                                <h6>Sofi’s Clinic</h6>
                                            </div>
                                            <div class="clinic-charge">
                                                <span>$900</span>
                                            </div>
                                        </div>
                                        <div class="available-time">
                                            <ul>
                                                <li>
                                                    <span>Tue :</span>
                                                    07:00 AM - 09:00 PM
                                                </li>
                                                <li>
                                                    <span>Wed : </span>
                                                    07:00 AM - 09:00 PM
                                                </li>
                                            </ul>
                                            <div class="change-time">
                                                <a href="#">Change </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clinic-available mb-0">
                                        <div class="clinic-head">
                                            <div class="clinic-info">
                                                <span class="clinic-img">
                                                    <img src="{{ URL::asset('assets/img/clinic/clinic-01.png') }}"
                                                        alt="Img">
                                                </span>
                                                <h6>The Family Dentistry Clinic</h6>
                                            </div>
                                            <div class="clinic-charge">
                                                <span>$600</span>
                                            </div>
                                        </div>
                                        <div class="available-time">
                                            <ul>
                                                <li>
                                                    <span>Sat :</span>
                                                    07:00 AM - 09:00 PM
                                                </li>
                                                <li>
                                                    <span>Tue : </span>
                                                    07:00 AM - 09:00 PM
                                                </li>
                                            </ul>
                                            <div class="change-time">
                                                <a href="#">Change </a>
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
