<?php $page = 'pharmacy-register-step1'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="content login-page pt-0">
        <div class="container-fluid">
            
            <!-- Register Content -->
            <div class="account-content">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="login-right">
                        <div class="inner-right-login">
                            <div class="login-header">
                                <div class="logo-icon">
                                    <img src="{{ URL::asset('assets/img/logo.png')}}" alt="Surna-logo">
                                </div>
                                <div class="step-list">
                                    <ul>
                                        <li><a href="javascript:;" class="active">1</a></li>
                                        <li><a href="javascript:;">2</a></li>
                                        <li><a href="javascript:;">3</a></li>
                                    </ul>
                                </div>
                                <form id="profile_pic_form" enctype="multipart/form-data">  
                                    <div class="profile-pic-col">
                                        <h3>Profile Picture</h3>
                                        <div class="profile-pic-upload">
                                            <div class="cam-col">
                                                <img src="{{ URL::asset('assets/img/icons/camera.svg')}}" id="prof-avatar" alt="camera-image" class="img-fluid">
                                            </div>
                                            <span>Upload Profile Picture</span>
                                            <input type="file" id="profile_image" name="profile_image">
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <a href="{{url('pharmacy-register-step2')}}" class="btn btn-primary w-100 btn-lg login-btn step1_submit">Continue </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="login-bottom-copyright">
                            <span>© <script>document.write(new Date().getFullYear())</script> Surna. All rights reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Register Content -->

        </div>

    </div>
    <!-- /Page Content -->
@endsection
