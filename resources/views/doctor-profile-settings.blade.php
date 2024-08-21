<?php $page = 'doctor-profile-settings'; ?>
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
    <div class="content doctor-content">
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
                                    <a class="nav-link active" href="{{ url('doctor-profile-settings') }}">Basic Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('doctor-experience-settings') }}">Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('doctor-education-settings') }}">Education</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('doctor-awards-settings') }}">Awards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('doctor-insurance-settings') }}">Insurances</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('doctor-clinics-settings') }}">Clinics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('doctor-business-settings') }}">Business Hours</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Settings List -->

                    <div class="setting-title">
                        <h5>Profile</h5>
                    </div>

                    <form action="doctor-profile-settings">
                        <div class="setting-card">
                            <div class="change-avatar img-upload">
                                <div class="profile-img">
                                    <i class="fa-solid fa-file-image"></i>
                                </div>
                                <div class="upload-img">
                                    <h5>Profile Image</h5>
                                    <div class="imgs-load d-flex align-items-center">
                                        <div class="change-photo">
                                            Upload New
                                            <input type="file" class="upload">
                                        </div>
                                        <a href="#" class="upload-remove">Remove</a>
                                    </div>
                                    <p class="form-text">Your Image should Below 4 MB, Accepted format jpg,png,svg</p>
                                </div>
                            </div>
                        </div>
                        <div class="setting-title">
                            <h5>Information</h5>
                        </div>
                        <div class="setting-card">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Display Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Designation <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Phone Numbers <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Email Address <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Known Languages <span
                                                class="text-danger">*</span></label>
                                        <div class="input-block input-block-new mb-0">
                                            <input class="input-tags form-control" id="inputBox3" type="text"
                                                data-role="tagsinput" placeholder="Type New" name="Label"
                                                value="English German,Portugese">
                                            <a href="#" class="input-text save-btn">Save</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="setting-title">
                            <h5>Memberships</h5>
                        </div>
                        <div class="setting-card">
                            <div class="add-info membership-infos">
                                <div class="row membership-content">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Add Title">
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="form-wrap w-100">
                                                <label class="col-form-label">About Membership</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-wrap ms-2">
                                                <label class="col-form-label d-block">&nbsp;</label>
                                                <a href="javascript:void(0);" class="trash-icon trash">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="#" class="add-membership-info more-item">Add New</a>
                            </div>
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
