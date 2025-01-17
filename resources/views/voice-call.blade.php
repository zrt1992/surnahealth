<?php $page = 'voice-call'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="content top-space">
        <div class="container">
            <!-- Call Wrapper -->
            <div class="call-wrapper">
                <div class="call-main-row">
                    <div class="call-main-wrapper">
                        <div class="call-view">
                            <div class="call-window">
                                <!-- Call Header -->
                                <div class="fixed-header">
                                    <div class="navbar">
                                        <div class="user-details me-auto">
                                            <div class="float-start user-img">
                                                <a class="avatar avatar-sm me-2" href="{{ url('patient-profile') }}"
                                                    title="Charlene Reed">
                                                    <img src="{{ URL::asset('/assets/img/patients/patient1.jpg') }}"
                                                        alt="User Image" class="rounded-circle">
                                                    <span class="status online"></span>
                                                </a>
                                            </div>
                                            <div class="user-info float-start">
                                                <a href="{{ url('patient-profile') }}"><span>Charlene Reed</span></a>
                                                <span class="last-seen">Online</span>
                                            </div>
                                        </div>
                                        <ul class="nav float-end custom-menu">
                                            <li class="nav-item dropdown dropdown-action">
                                                <a href="javascript:;" class="nav-link dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-cog"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0)" class="dropdown-item">Settings</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Call Header -->

                                <!-- Call Contents -->
                                <div class="call-contents">
                                    <div class="call-content-wrap">
                                        <div class="voice-call-avatar">
                                            <img src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                                alt="User Image" class="call-avatar">
                                            <span class="username pe-2">Dr. Darren Elder</span>
                                            <span class="call-timing-count">00:59</span>
                                        </div>
                                        <div class="call-users">
                                            <ul>
                                                <li>
                                                    <a href="javascript:;">
                                                        <img src="{{ URL::asset('/assets/img/patients/patient1.jpg') }}"
                                                            class="img-fluid" alt="User Image">
                                                        <span class="call-mute"><i
                                                                class="fa fa-microphone-slash"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Call Contents -->

                                <!-- Call Footer -->
                                <div class="call-footer">
                                    <div class="call-icons">
                                        <ul class="call-items">
                                            <li class="call-item">
                                                <a href="javascript:void(0)" class="mute-video" data-placement="top"
                                                    data-bs-toggle="tooltip" aria-label="Enable Video"
                                                    data-bs-original-title="Enable Video">
                                                    <i class="feather-video"></i>
                                                </a>
                                            </li>
                                            <li class="call-item">
                                                <a href="javascript:void(0)" class="mute-bt" data-placement="top"
                                                    data-bs-toggle="tooltip" aria-label="Mute"
                                                    data-bs-original-title="Mute">
                                                    <i class="feather-mic"></i>
                                                </a>
                                            </li>
                                            <li class="call-item">
                                                <a href="javascript:void(0)" data-placement="top" data-bs-toggle="tooltip"
                                                    aria-label="Add User" data-bs-original-title="Add User">
                                                    <i class="feather-user-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="end-call">
                                            <a href="javascript:void(0);">
                                                <i class="material-icons">call_end</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Call Footer -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /Call Wrapper -->

        </div>

    </div>
    <!-- /Page Content -->
@endsection
