<?php $page = 'doctor-change-password'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Change Password
        @endslot
        @slot('li_1')
            Change Password
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
                        <h3>Change Password</h3>
                    </div>
                    <form action="doctor-change-password">
                        <div class="card pass-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block input-block-new">
                                            <label class="form-label">Old Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="input-block input-block-new">
                                            <label class="form-label">New Password</label>
                                            <div class="pass-group">
                                                <input type="password" class="form-control pass-input">
                                                <span class="feather-eye-off toggle-password"></span>
                                            </div>
                                        </div>
                                        <div class="input-block input-block-new mb-0">
                                            <label class="form-label">Confirm Password</label>
                                            <div class="pass-group">
                                                <input type="password" class="form-control pass-input-sub">
                                                <span class="feather-eye-off toggle-password-sub"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-set-button">
                            <button class="btn btn-light" type="button">Cancel</button>
                            <button class="btn btn-primary" type="submit">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /Page Content -->
@endsection
