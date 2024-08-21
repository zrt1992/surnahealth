<?php $page = 'edit-purchase'; ?>
@extends('layout.mainlayout_pharmacy_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Edit Purchase</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a
                                    href="{{ url('pharmacy-admin/index_pharmacy_admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Purchase</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body custom-edit-service">
                            <!-- Add Medicine -->
                            <form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service"
                                action="{{ url('pharmacy-admin/purchase') }}">
                                <input type="hidden" name="csrf_token_name" value="0146f123a4c7ae94253b39bca6bd5a5e">

                                <div class="service-fields mb-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Medicine Name<span class="text-danger">*</span></label>
                                                <input type="hidden" name="brand_name" id="brand_name" value="18">
                                                <input class="form-control" type="text" name="brand_name" id="brand_name"
                                                    value="" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Category <span class="text-danger">*</span></label>
                                                <select class="form-select form-control" name="category" required=""> 
                                                    <option value="">Phytopathology</option>
                                                    <option value="2" selected="selected">Injuries</option>
                                                    <option value="3">Cancer</option>
                                                    <option value="4">Animal diseases</option>
                                                    <option value="5">Growth disorders</option>
                                                    <option value="6">Rare diseases</option>
                                                    <option value="7">Neoplasms</option>
                                                    <option value="8">Inflammations</option>
                                                    <option value="9">Sleep disorders</option>
                                                    <option value="10">Infectious diseases</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="service-fields mb-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Price<span class="text-danger">*</span></label>
                                                <input type="hidden" name="Price" id="Price" value="18">
                                                <input class="form-control" type="text" name="Price" id="Price"
                                                    value="$" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Quantity<span class="text-danger">*</span></label>
                                                <input type="hidden" name="quantity" id="quantity" value="18">
                                                <input class="form-control" type="text" name="quantity" id="quantity"
                                                    value="" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="service-fields mb-3">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Expire Date<span class="text-danger">*</span></label>
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="service-fields mb-3">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="service-upload">
                                                <i class="fas fa-cloud-upload-alt"></i>
                                                <span>Upload Product Images *</span>
                                                <input type="file" name="images[]" id="images" multiple=""
                                                    accept="image/jpeg, image/png, image/gif,">

                                            </div>
                                            <div id="uploadPreview">
                                                <ul class="upload-wrap">
                                                    <li>
                                                        <div class=" upload-images">
                                                            <img alt="Blog Image"
                                                                src="../assets_pharmacy/img/product/product1.jpg">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn" type="submit" name="form_submit"
                                        value="submit">Submit</button>
                                </div>
                            </form>
                            <!-- /Add Medicine -->


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
@endsection
