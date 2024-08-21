<?php $page = 'doctor-awards-settings'; ?>
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
    <div class="content  doctor-content">
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
                                    <a class="nav-link active" href="{{url('doctor-awards-settings')}}">Awards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('doctor-insurance-settings')}}">Insurances</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('doctor-clinics-settings')}}">Clinics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('doctor-business-settings')}}">Business Hours</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Settings List -->

                    <div class="dashboard-header border-0 mb-0">
                        <h3>Awards</h3>
                        <ul>
                            <li>
                                <a href="#" class="btn btn-primary prime-btn add-awrads">Add New Award</a>
                            </li>
                        </ul>
                    </div>

                    <form action="doctor-awards-settings">

                        <div class="accordions awrad-infos" id="list-accord">

                            <!-- Awards Item -->
                            <div class="user-accordion-item">
                                <a href="#" class="accordion-wrap" data-bs-toggle="collapse"
                                    data-bs-target="#award1">Awards<span>Delete</span></a>
                                <div class="accordion-collapse collapse show" id="award1" data-bs-parent="#list-accord">
                                    <div class="content-collapse">
                                        <div class="add-service-info">
                                            <div class="add-info">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <div class="form-wrap">
                                                            <label class="col-form-label">Award Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-wrap">
                                                            <label class="col-form-label">Year <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="form-icon">
                                                                <input type="text" class="form-control datetimepicker">
                                                                <span class="icon"><i
                                                                        class="fa-regular fa-calendar-days"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-wrap">
                                                            <label class="col-form-label">Description <span
                                                                    class="text-danger">*</span></label>
                                                            <textarea class="form-control" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <a href="#" class="reset more-item">Reset</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Awards Item -->

                            <!-- Awards Item -->
                            <div class="user-accordion-item">
                                <a href="#" class="collapsed accordion-wrap" data-bs-toggle="collapse"
                                    data-bs-target="#award2">Best Surgeon<span>Delete</span></a>
                                <div class="accordion-collapse collapse" id="award2" data-bs-parent="#list-accord">
                                    <div class="content-collapse">
                                        <div class="add-service-info">
                                            <div class="add-info">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <div class="form-wrap">
                                                            <label class="col-form-label">Award Name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-wrap">
                                                            <label class="col-form-label">Year <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="form-icon">
                                                                <input type="text" class="form-control datetimepicker">
                                                                <span class="icon"><i
                                                                        class="fa-regular fa-calendar-days"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-wrap">
                                                            <label class="col-form-label">Description <span
                                                                    class="text-danger">*</span></label>
                                                            <textarea class="form-control" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <a href="#" class="reset more-item">Reset</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Awards Item -->

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
