<?php $page = 'edit-blog'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Edit Blog
        @endslot
        @slot('li_1')
            Edit Blog
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                    @component('components.sidebar_doctor')
                    @endcomponent
                </div>
                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="doc-review review-listing custom-edit-service">
                        <div class="row mb-5">
                            <div class="col">
                                <ul class="nav nav-tabs nav-tabs-solid">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('doctor-blog') }}">Acitive Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('doctor-pending-blog') }}">Pending Blog</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-primary btn-sm" href="{{ url('doctor-add-blog') }}"><i
                                        class="fas fa-plus me-1"></i> Add Blog</a>
                            </div>
                        </div>

                        <!-- Edit Blog -->
                        <div class="card">
                            <div class="card-body">
                                <h3 class="pb-3">Edit Blog</h3>

                                <form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service"
                                    action="{{ url('doctor-blog') }}">
                                    <input type="hidden" name="csrf_token_name" value="0146f123a4c7ae94253b39bca6bd5a5e">

                                    <div class="service-fields mb-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="mb-2">Blog Title <span class="text-danger">*</span></label>
                                                    <input type="hidden" name="service_id" id="service_id" value="18">
                                                    <input class="form-control" type="text" name="service_title"
                                                        id="service_title"
                                                        value="Surna – Making your clinic painless visit?" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service-fields mb-3">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="mb-2">Category <span class="text-danger">*</span></label>
                                                    <select class="form-select form-control" name="category" required=""> 
                                                        <option value="">Automobile</option>
                                                        <option value="2" selected="selected">Construction</option>
                                                        <option value="3">Interior</option>
                                                        <option value="4">Cleaning</option>
                                                        <option value="5">Electrical</option>
                                                        <option value="6">Carpentry</option>
                                                        <option value="7">Computer</option>
                                                        <option value="8">Painting</option>
                                                        <option value="9">Car Wash</option>
                                                        <option value="10">Category Test</option>
                                                        <option value="11">dfdf</option>
                                                        <option value="12">Equipment</option>
                                                        <option value="13">Test category1</option>
                                                        <option value="14">Farming</option>
                                                        <option value="15">Test Category02</option>
                                                        <option value="16">Laundry</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="mb-2">Sub Category <span class="text-danger">*</span></label>
                                                    <select class="form-select form-control" name="subcategory"> 
                                                    <option value="5">Others</option>
                                                    <option value="6">Others</option>
                                                    <option value="7">Others</option>
                                                    <option value="8">House cleaning</option>
                                                    <option value="9">Others</option>
                                                    <option value="10">Others</option>
                                                    <option value="11">Others</option>
                                                    <option value="12">Others</option>
                                                    <option value="13">Full Car Wash</option>
                                                    <option value="14" selected="selected">Testing category</option>
                                                    <option value="15">Test Sub category</option>
                                                    <option value="16">Harvesting pine</option>
                                                    <option value="17">Test Sub category name</option>
                                                    <option value="18">Test Sub category name</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service-fields mb-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="mb-2">Descriptions <span class="text-danger">*</span></label>
                                                    <textarea id="about" class="form-control service-desc" name="about">note.</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service-fields mb-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="service-upload">
                                                    <i class="fas fa-cloud-upload-alt"></i>
                                                    <span>Upload Blog Images *</span>
                                                    <input type="file" name="images[]" id="images" multiple=""
                                                        accept="image/jpeg, image/png, image/gif,">

                                                </div>
                                                <div id="uploadPreview">
                                                    <ul class="upload-wrap">
                                                        <li>
                                                            <div class=" upload-images">
                                                                <img alt="Blog Image"
                                                                    src="{{ URL::asset('/assets/img/img-01.jpg') }}">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=" upload-images">
                                                                <img alt="Blog Image"
                                                                    src="{{ URL::asset('/assets/img/img-02.jpg') }}">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class=" upload-images">
                                                                <img alt="Blog Image"
                                                                    src="{{ URL::asset('/assets/img/img-03.jpg') }}">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-fields mb-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="mb-2">Video id <span class="text-danger">*</span></label>
                                                    <input type="hidden" name="video_id" id="video_id" value="18">
                                                    <input class="form-control" type="text" name="video_id"
                                                        id="video_id" value="Rf34rhkWW1" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn btn-primary submit-btn" type="submit" name="form_submit"
                                            value="submit">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- /Edit Blog -->

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Page Content -->
@endsection
