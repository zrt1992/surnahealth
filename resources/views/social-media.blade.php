<?php $page = 'social-media'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Social Media
        @endslot
        @slot('li_1')
            Social Media
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content doctor">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-3 theiaStickySidebar">
                    @component('components.sidebar_doctor')
                    @endcomponent
                </div>

                <div class="col-lg-8 col-xl-9">
                    <div class="dashboard-header">
                        <h3>Social Media</h3>
                    </div>
                    <div class="add-btn text-end mb-4">
                        <a href="#" class="btn btn-primary prime-btn add-social-media">Add New Social Media</a>
                    </div>
                    <form action="social-media" class="social-media-form">
                        <div class="social-media-links d-flex align-items-center">
                            <div class="input-block input-block-new select-social-link">
                                <select class="select-social-img">
                                    <option data-image="assets/img/icons/fb-icon.svg" selected>Facebook</option>
                                    <option data-image="assets/img/icons/linkedin-icon.svg">Linkedin</option>
                                    <option data-image="assets/img/icons/x-twitter-icon.svg">Twitter</option>
                                    <option data-image="assets/img/icons/instagram-icon.svg">Instagram</option>
                                </select>
                            </div>	
                            <div class="input-block input-block-new flex-fill">
                                <input type="password" class="form-control" placeholder="Add Url">									
                            </div>
                        </div>
                        <div class="social-media-links d-flex align-items-center">
                            <div class="input-block input-block-new select-social-link">
                                <select class="select-social-img">
                                    <option data-image="assets/img/icons/fb-icon.svg">Facebook</option>
                                    <option data-image="assets/img/icons/linkedin-icon.svg">Linkedin</option>
                                    <option data-image="assets/img/icons/x-twitter-icon.svg" selected>Twitter</option>
                                    <option data-image="assets/img/icons/instagram-icon.svg">Instagram</option>
                                </select>
                            </div>	
                            <div class="input-block input-block-new flex-fill">
                                <input type="password" class="form-control" placeholder="Add Url">									
                            </div>
                        </div>
                        <div class="social-media-links d-flex align-items-center">
                            <div class="input-block input-block-new select-social-link">
                                <select class="select-social-img">
                                    <option data-image="assets/img/icons/fb-icon.svg">Facebook</option>
                                    <option data-image="assets/img/icons/linkedin-icon.svg" selected>Linkedin</option>
                                    <option data-image="assets/img/icons/x-twitter-icon.svg">Twitter</option>
                                    <option data-image="assets/img/icons/instagram-icon.svg">Instagram</option>
                                </select>
                            </div>	
                            <div class="input-block input-block-new flex-fill">
                                <input type="password" class="form-control" placeholder="Add Url">									
                            </div>
                        </div>
                        <div class="social-media-links d-flex align-items-center">
                            <div class="input-block input-block-new select-social-link">
                                <select class="select-social-img">
                                    <option data-image="assets/img/icons/fb-icon.svg">Facebook</option>
                                    <option data-image="assets/img/icons/linkedin-icon.svg">Linkedin</option>
                                    <option data-image="assets/img/icons/x-twitter-icon.svg">Twitter</option>
                                    <option data-image="assets/img/icons/instagram-icon.svg" selected>Instagram</option>
                                </select>
                            </div>	
                            <div class="input-block input-block-new flex-fill">
                                <input type="password" class="form-control" placeholder="Add Url">									
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
