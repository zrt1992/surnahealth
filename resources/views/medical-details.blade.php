<?php $page = 'medical-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Medical Details
        @endslot
        @slot('li_1')
            Medical Details
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
                        <h3>Medical Details</h3>
                    </div>
                    <div class="dashboard-card w-100 medical-details-item">
                        <div class="dashboard-card-head medical-detail-head">
                            <div class="header-title">
                                <h6>Latest updated medical details</h6>
                            </div>
                            <div class="latest-update">
                                <p><i class="fa-solid fa-calendar-check me-2"></i>Last update on : 24Mar 2023</p>
                            </div>

                        </div>
                        <div class="dashboard-card-body">
                            <div class="row">
                                <div class="col-xl-2 col-lg-4 col-md-6">
                                    <div class="health-records icon-red">
                                        <span><i class="fa-solid fa-syringe"></i>Blood Pressure</span>
                                        <h3>100 mg/dl</h3>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6">
                                    <div class="health-records icon-orange">
                                        <span><i class="fa-solid fa-heart"></i>Heart Rate</span>
                                        <h3>140 Bpm</h3>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6">
                                    <div class="health-records icon-dark-blue">
                                        <span><i class="fa-solid fa-notes-medical"></i>Glucose Level</span>
                                        <h3>70 - 90</h3>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6">
                                    <div class="health-records icon-amber">
                                        <span><i class="fa-solid fa-temperature-high"></i>Body Temprature</span>
                                        <h3>37.5 C</h3>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6">
                                    <div class="health-records icon-purple">
                                        <span><i class="fa-solid fa-user-pen"></i>BMI </span>
                                        <h3>20.1 kg/m2</h3>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6">
                                    <div class="health-records icon-blue">
                                        <span><i class="fa-solid fa-highlighter"></i>SPo2</span>
                                        <h3>96%</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="search-header">
                                <div class="search-field">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="add-med-record">
                                <a href="#add-med-record" class="btn btn-primary prime-btn" data-bs-toggle="modal">Add
                                    Medical Details</a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="custom-table">
                                <div class="table-responsive">
                                    <table class="table table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Patient Name</th>
                                                <th>BMI</th>
                                                <th>Heart Rate</th>
                                                <th>FBC Status</th>
                                                <th>Weight</th>
                                                <th>Added on</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a class="text-blue-600" href="javascript:void(0);"
                                                        data-bs-toggle="modal" data-bs-target="#med-detail">#MD-123</a></td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="{{ url('patient-profile') }}"
                                                            class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-3"
                                                                src="{{ URL::asset('/assets/img/doctors-dashboard/profile-06.jpg') }}"
                                                                alt="User Image">
                                                        </a>
                                                        <a href="{{ url('doctor-profile') }}">Hendrita Kearns</a>
                                                    </h2>
                                                </td>
                                                <td>23.5</td>
                                                <td>89</td>
                                                <td>140</td>
                                                <td>74Kg</td>
                                                <td>22 Mar 2024</td>
                                                <td>
                                                    <div class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                                            data-bs-target="#med-detail">
                                                            <i class="fa-solid fa-link"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                                            data-bs-target="#edit-med-record">
                                                            <i class="fa-solid fa-pen-to-square"></i>
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
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Page Content -->
@endsection
