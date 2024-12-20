<?php $page = 'doctor-clinics-settings'; ?>
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

                    <!-- Profile Sidebar -->
                    @component('components.sidebar_doctor')
                    @endcomponent
                    <!-- /Profile Sidebar -->

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
                                    <a class="nav-link" href="{{ url('doctor/doctor-profile-settings') }}">Basic Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('doctor-experience-settings') }}">Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('doctor-education-settings') }}">Education</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('doctor-awards-settings') }}">Awards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('doctor-insurance-settings') }}">Insurances</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ url('doctor-clinics-settings') }}">Clinics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('doctor-business-settings') }}">Business Hours</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Settings List -->

                    <div class="dashboard-header border-0 mb-0">
                        <h3>Clinics</h3>
                        <ul>
                            <li>
                                <a href="#" class="btn btn-primary prime-btn add-clinics">Add New Clinic</a>
                            </li>
                        </ul>
                    </div>

					<form action="{{ route('doctor-clinics-setting.store') }}" method="POST"
					enctype="multipart/form-data">
					@csrf

                        <div class="accordions clinic-infos" id="list-accord">

                            <!-- Clinic Item -->
                            @if (empty($doctorClinics) || count($doctorClinics) === 0)
                                <div class="user-accordion-item">
                                    <a href="#" class="accordion-wrap" data-bs-toggle="collapse"
                                        data-bs-target="#clinic1">Clinic <span class="remove-clinic"></span></a>
                                    <div class="accordion-collapse collapse show" id="clinic1"
                                        data-bs-parent="#list-accord">
                                        <div class="content-collapse">
                                            <div class="add-service-info">
                                                <div class="add-info">
                                                    <div class="row align-items-center">
														<input type="hidden" name="form_type[]" value="create">
                                                        <div class="col-md-12">
                                                            <div class="form-wrap mb-2">
                                                                <div class="change-avatar img-upload">
                                                                    <div class="profile-img">
                                                                        <i class="fa-solid fa-file-image"></i>
                                                                    </div>
                                                                    <div class="upload-img">
                                                                        <h5>Logo</h5>
                                                                        <div class="imgs-load d-flex align-items-center">
                                                                            <div class="change-photo">
                                                                                Upload New
                                                                                <input type="file" class="upload"
                                                                                    name="logo[]">
                                                                            </div>
                                                                            <a href="#"
                                                                                class="upload-remove">Remove</a>
                                                                        </div>
                                                                        <p class="form-text">Your Image should Below 4 MB,
                                                                            Accepted format jpg, png, svg</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-wrap">
                                                                <label class="col-form-label">Clinic Name</label>
                                                                <input type="text" class="form-control"
                                                                    name="clinic_name[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-wrap">
                                                                <label class="col-form-label">Location</label>
                                                                <input type="text" class="form-control"
                                                                    name="location[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-wrap">
                                                                <label class="col-form-label">Address</label>
                                                                <input type="text" class="form-control"
                                                                    name="address[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-wrap">
                                                                <label class="col-form-label">Gallery</label>
                                                                <div class="drop-file">
                                                                    <p>Drop files or Click to upload</p>
                                                                    <input type="file" multiple
                                                                        name="gallery[]">
                                                                </div>
                                                                <div class="view-imgs">
                                                                    <div class="view-img">
                                                                        <img src="{{ URL::asset('/assets/img/doctors-dashboard/clinic-02.jpg') }}"
                                                                            alt="img">
                                                                        <a href="javascript:void(0);">Remove</a>
                                                                    </div>
                                                                    <div class="view-img">
                                                                        <img src="{{ URL::asset('/assets/img/doctors-dashboard/clinic-01.jpg') }}"
                                                                            alt="img">
                                                                        <a href="javascript:void(0);">Remove</a>
                                                                    </div>
                                                                </div>
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
                            @else
                                @foreach ($doctorClinics as $index => $clinic)
                                    <div class="user-accordion-item">
                                        <a href="#" class="accordion-wrap" data-bs-toggle="collapse"
                                            data-bs-target="#clinic{{ $index }}">
                                            {{ $clinic->clinic_name }} <span class="remove-clinic"></span>
                                        </a>
                                        <div class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                            id="clinic{{ $index }}" data-bs-parent="#list-accord">
                                            <div class="content-collapse">
                                                <div class="add-service-info">
                                                    <div class="add-info">
                                                        <div class="row align-items-center">
															<input type="hidden" name="form_type[{{ $clinic->id }}]" value="update">
                                                            <!-- Clinic Logo -->
                                                            <div class="col-md-12">
                                                                <div class="form-wrap mb-2">
                                                                    <div class="change-avatar img-upload">
                                                                        <div class="profile-img">
                                                                            <img src="{{ $clinic->logo }}" alt="Logo"
                                                                                style="width: 50px;">
                                                                        </div>
                                                                        <div class="upload-img">
                                                                            <h5>Logo</h5>
                                                                            <div
                                                                                class="imgs-load d-flex align-items-center">
                                                                                <div class="change-photo">
                                                                                    Upload New
                                                                                    <input type="file" class="upload"
                                                                                        name="logo[{{ $clinic->id }}]">
                                                                                </div>
                                                                                <a href="#"
                                                                                    class="upload-remove">Remove</a>
                                                                            </div>
                                                                            <p class="form-text">
                                                                                Your image should be below 4 MB, accepted
                                                                                formats: jpg, png, svg.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Clinic Name -->
                                                            <div class="col-md-12">
                                                                <div class="form-wrap">
                                                                    <label class="col-form-label">Clinic Name</label>
                                                                    <input type="text" class="form-control"
                                                                        name="clinic_name[{{ $clinic->id }}]"
                                                                        value="{{ old('clinic_name.' . $clinic->id, $clinic->clinic_name) }}">
                                                                </div>
                                                            </div>

                                                            <!-- Location and Address -->
                                                            <div class="col-md-6">
                                                                <div class="form-wrap">
                                                                    <label class="col-form-label">Location</label>
                                                                    <input type="text" class="form-control"
                                                                        name="location[{{ $clinic->id }}]"
                                                                        value="{{ old('location.' . $clinic->id, $clinic->location) }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-wrap">
                                                                    <label class="col-form-label">Address</label>
                                                                    <input type="text" class="form-control"
                                                                        name="address[{{ $clinic->id }}]"
                                                                        value="{{ old('address.' . $clinic->id, $clinic->address) }}">
                                                                </div>
                                                            </div>

                                                            <!-- Gallery -->
                                                            <div class="col-md-12">
                                                                <div class="form-wrap">
                                                                    <label class="col-form-label">Gallery</label>
                                                                    <div class="drop-file">
                                                                        <p>Drop files or Click to upload</p>
                                                                        <input type="file" multiple
                                                                            name="gallery[{{ $clinic->id }}][]">
                                                                    </div>
                                                                    <div class="view-imgs">
                                                                        @foreach ($clinic->gallery as $gallery)
																		<div class="view-img">
																			<img src="{{ $gallery->image }}" alt="Gallery Image">
																			<a href="{{ route('doctor-clinics-setting-gallery-remove',$gallery->id) }}" 
																			   class="delete-gallery">
																			   Remove
																			</a>
																			{{-- <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#remove_image" 
																			data-image-id="{{ $gallery->id }}" class="remove-image-link">Remove</a> --}}
																		</div>
																		
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Reset Button -->
                                                    <div class="text-end">
                                                        <a href="#" class="reset more-item">Reset</a>
                                                        <a href="javascript:void(0)" class="reset more-item"
                                                            data-bs-toggle="modal" data-bs-target="#delete_record"
                                                            data-id="{{ $clinic->id }}"
                                                            data-route="{{ route('doctor-clinics-settings-delete', ':id') }}" >Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <!-- /Clinic Item -->

                            <!-- Clinic Item -->
                            {{-- <div class="user-accordion-item">
                                <a href="#" class="collapsed accordion-wrap" data-bs-toggle="collapse"
                                    data-bs-target="#clinic2">Adrian’s Dentistry<span>Delete</span></a>
                                <div class="accordion-collapse collapse" id="clinic2" data-bs-parent="#list-accord">
                                    <div class="content-collapse">
                                        <div class="add-service-info">
                                            <div class="add-info">
                                                <div class="row align-items-center">
                                                    <div class="col-md-12">
                                                        <div class="form-wrap mb-2">
                                                            <div class="change-avatar img-upload">
                                                                <div class="profile-img">
                                                                    <i class="fa-solid fa-file-image"></i>
                                                                </div>
                                                                <div class="upload-img">
                                                                    <h5>Logo</h5>
                                                                    <div class="imgs-load d-flex align-items-center">
                                                                        <div class="change-photo">
                                                                            Upload New
                                                                            <input type="file" class="upload">
                                                                        </div>
                                                                        <a href="#" class="upload-remove">Remove</a>
                                                                    </div>
                                                                    <p class="form-text">Your Image should Below 4 MB,
                                                                        Accepted format jpg,png,svg</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-wrap">
                                                            <label class="col-form-label">Clinic Name</label>
                                                            <input type="text" class="form-control"
                                                                value="Adrian’s Dentistry">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-wrap">
                                                            <label class="col-form-label">Location</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-wrap">
                                                            <label class="col-form-label">Addrerss</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-wrap">
                                                            <label class="col-form-label">Gallery</label>
                                                            <div class="drop-file">
                                                                <p>Drop files or Click to upload</p>
                                                                <input type="file">
                                                            </div>
                                                            <div class="view-imgs">
                                                                <div class="view-img">
                                                                    <img src="{{ URL::asset('/assets/img/doctors-dashboard/clinic-02.jpg') }}"
                                                                        alt="img">
                                                                    <a href="javascript:void(0);">Remove</a>
                                                                </div>
                                                                <div class="view-img">
                                                                    <img src="{{ URL::asset('/assets/img/doctors-dashboard/clinic-01.jpg') }}"
                                                                        alt="img">
                                                                    <a href="javascript:void(0);">Remove</a>
                                                                </div>
                                                            </div>
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
                            </div> --}}
                            <!-- /Clinic Item -->

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



	
	
	
    @include('layout.partials.custom_scripts')
@endsection
