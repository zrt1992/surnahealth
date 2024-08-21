<?php $page = 'doctor-specialities'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Speciality & Services
        @endslot
        @slot('li_1')
            Speciality & Services
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
                        <h3>Speciality & Services</h3>
                        <ul>
                            <li>
                                <a href="#" class="btn btn-primary prime-btn add-speciality">Add New Speciality</a>
                            </li>
                        </ul>
                    </div>

                    <div class="accordions" id="list-accord">

                        <!-- Spaciality Item -->
                        <div class="user-accordion-item">
                            <a href="#" class="accordion-wrap" data-bs-toggle="collapse"
                                data-bs-target="#cardiology">Cardiology<span>Delete</span></a>
                            <div class="accordion-collapse collapse show" id="cardiology" data-bs-parent="#list-accord">
                                <div class="content-collapse">
                                    <div class="add-service-info">
                                        <div class="add-info">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">Speciality <span
                                                                class="text-danger">*</span></label>
                                                        <select class="select">
                                                            <option>Cardiology</option>
                                                            <option>Neurology</option>
                                                            <option>Urology</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row service-cont">
                                                <div class="col-md-3">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">Service <span
                                                                class="text-danger">*</span></label>
                                                        <select class="select">
                                                            <option>Select Service</option>
                                                            <option>Surgery</option>
                                                            <option>General Checkup</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">Price ($) <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" placeholder="454">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-wrap w-100">
                                                            <label class="col-form-label">About Service</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-wrap ms-2">
                                                            <label class="col-form-label d-block">&nbsp;</label>
                                                            <a href="#" class="trash-icon trash">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <a href="#" class="add-serv more-item mb-0">Add New Service</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Spaciality Item -->

                        <!-- Spaciality Item -->
                        <div class="user-accordion-item">
                            <a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse"
                                data-bs-target="#neurology">Neurology<span>Delete</span></a>
                            <div class="accordion-collapse" id="neurology" data-bs-parent="#list-accord">
                                <div class="content-collapse">
                                    <div class="add-service-info">
                                        <div class="add-info">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">Speciality <span
                                                                class="text-danger">*</span></label>
                                                        <select class="select">
                                                            <option>Cardiology</option>
                                                            <option selected>Neurology</option>
                                                            <option>Urology</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row service-cont">
                                                <div class="col-md-3">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">Service <span
                                                                class="text-danger">*</span></label>
                                                        <select class="select">
                                                            <option>Select Service</option>
                                                            <option>Surgery</option>
                                                            <option>General Checkup</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">Price ($) <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" placeholder="454">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-wrap w-100">
                                                            <label class="col-form-label">About Service</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-wrap ms-2">
                                                            <label class="col-form-label d-block">&nbsp;</label>
                                                            <a href="#" class="trash-icon trash">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <a href="#" class="add-serv more-item mb-0">Add New Service</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Spaciality Item -->

                        <!-- Spaciality Item -->
                        <div class="user-accordion-item">
                            <a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse"
                                data-bs-target="#urology">Urology<span>Delete</span></a>
                            <div class="accordion-collapse" id="urology" data-bs-parent="#list-accord">
                                <div class="content-collapse">
                                    <div class="add-service-info">
                                        <div class="add-info">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">Speciality <span
                                                                class="text-danger">*</span></label>
                                                        <select class="select">
                                                            <option>Cardiology</option>
                                                            <option>Neurology</option>
                                                            <option selected>Urology</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row service-cont">
                                                <div class="col-md-3">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">Service <span
                                                                class="text-danger">*</span></label>
                                                        <select class="select">
                                                            <option>Select Service</option>
                                                            <option>Surgery</option>
                                                            <option>General Checkup</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-wrap">
                                                        <label class="col-form-label">Price ($) <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" placeholder="454">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-wrap w-100">
                                                            <label class="col-form-label">About Service</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-wrap ms-2">
                                                            <label class="col-form-label d-block">&nbsp;</label>
                                                            <a href="#" class="trash-icon trash">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <a href="#" class="add-serv more-item mb-0">Add New Service</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Spaciality Item -->

                    </div>

                    <div class="modal-btn text-end">
                        <a href="#" class="btn btn-gray">Cancel</a>
                        <button class="btn btn-primary prime-btn">Save Changes</button>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
   
@endsection
