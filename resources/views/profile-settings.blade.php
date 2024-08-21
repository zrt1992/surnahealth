<?php $page = 'profile-settings'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Profile Settings
        @endslot
        @slot('li_1')
            Profile Settings
        @endslot
    @endcomponent
  	<!-- Page Content -->
      <div class="content">
        <div class="container">
            <div class="row">
            
             
                   
                    @component('components.sidebar_patient')
                    @endcomponent					
                    
               
                
                <div class="col-lg-8 col-xl-9">
                    
                    <form action="profile-settings">
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
                                        <label class="col-form-label">Date of Birth <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Phone Number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Blood Group <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="setting-title">
                            <h5>Address</h5>
                        </div>
                        <div class="setting-card">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">City <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">State <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Country <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Pincode <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </div>		
    <!-- /Page Content -->

@endsection
