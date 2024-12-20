<?php $page = 'doctor-education-settings'; ?>
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
											<a class="nav-link" href="{{url('doctor/doctor-profile-settings')}}">Basic Details</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{route('doctor-experience-settings')}}">Experience</a>
										</li>
										<li class="nav-item">
											<a class="nav-link active" href="{{route('doctor-education-settings')}}">Education</a>
										</li>
										{{-- <li class="nav-item">
											<a class="nav-link" href="{{url('doctor-awards-settings')}}">Awards</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{url('doctor-insurance-settings')}}">Insurances</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{url('doctor-clinics-settings')}}">Clinics</a>
										</li> --}}
										<li class="nav-item">
											<a class="nav-link" href="{{route('doctor-business-settings')}}">Business Hours</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Settings List -->

							<div class="dashboard-header border-0 mb-0">
								<h3>Education</h3>
								<ul>
									<li>
										<a href="#" class="btn btn-primary prime-btn add-educations">Add New  Education</a>
									</li>
								</ul>
							</div>

							<form action="{{ route('doctor-education-setting.store') }}" method="POST"
							enctype="multipart/form-data">
							@csrf
								<div class="accordions education-infos" id="list-accord">
									@if (empty($DoctorEducations) || count($DoctorEducations) === 0)
									<div class="user-accordion-item ">
										<a href="#" class="accordion-wrap" data-bs-toggle="collapse"
											data-bs-target="#education1">Education <span></span></a>
										<div class="accordion-collapse collapse" id="education1" data-bs-parent="#list-accord">
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
																			<h5>Certifications</h5>
																			<div class="imgs-load d-flex align-items-center">
																				<div class="change-photo">
																					Upload New
																					<input type="file"
																						name="certifications[]" class="upload">
																				</div>
																				<a href="#"
																					class="upload-remove">Remove</a>
																			</div>
																			<p class="form-text">Your Image should be below 4
																				MB, accepted formats: jpg, png, svg</p>
																		</div>
																	</div>
																</div>
															</div>
														<div class="col-md-6">
																<div class="form-wrap">
																	<label class="col-form-label">Medical school</label>
																	<input type="text" name="medical_school[]"
																		class="form-control">
																	@error('medical_school')
																		<div class="text-danger">{{ $message }}</div>
																	@enderror
																</div>
															</div>
														<div class="col-md-6">
																<div class="form-wrap">
																	<label class="col-form-label">residency <span
																			class="text-danger">*</span></label>
																	<input type="text" name="residency[]"
																		class="form-control">
																	@error('residency')
																		<div class="text-danger">{{ $message }}</div>
																	@enderror
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
									@foreach ($DoctorEducations as $index => $education)
										<div class="user-accordion-item">
											<a href="#" class="accordion-wrap" data-bs-toggle="collapse"
												data-bs-target="#experience{{ $index }}">
												{{ $education->medical_school }} <span></span>
											</a>
											<div class="accordion-collapse collapse" id="experience{{ $index }}"
												data-bs-parent="#list-accord">
												<div class="content-collapse">
													<div class="add-service-info">
														<div class="add-info">
															<div class="row align-items-center">
																<!-- Existing Experience Fields -->
																<input type="hidden" name="form_type[{{ $education->id }}]"
																	value="update">
																<div class="col-md-12">
																	<div class="form-wrap mb-2">
																		<div class="change-avatar img-upload">
																			<div class="profile-img">
																				<img src="{{ $education->certifications }}"
																					alt="certifications" style="width: 50px;">
																			</div>
																			<div class="upload-img">
																				<h5>Certifications</h5>
																				<div
																					class="imgs-load d-flex align-items-center">
																					<div class="change-photo">
																						Upload New
																						<input type="file"
																							name="certifications[{{ $education->id }}]"
																							class="upload">
																					</div>
																					<a href="#"
																						class="upload-remove">Remove</a>
																				</div>
																				<p class="form-text">Your Image should be below
																					4 MB, accepted formats: jpg, png, svg</p>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-wrap">
																		<label class="col-form-label">Medical school</label>
																		<input type="text"
																			name="medical_school[{{ $education->id }}]"
																			value="{{ old('medical_school.' . $education->id, $education->medical_school) }}"
																			class="form-control @error('medical_school.' . $education->id) is-invalid @enderror">
	
																		@error('medical_school.' . $education->id)
																			<div class="text-danger">{{ $message }}</div>
																		@enderror
																	</div>
																</div>
	
																<div class="col-md-6">
																	<div class="form-wrap">
																		<label class="col-form-label">Residency</label>
																		<input type="text"
																			name="residency[{{ $education->id }}]"
																			value="{{ old('residency.' . $education->id, $education->residency) }}"
																			class="form-control">
																		@error('residency.' . $education->id)
																			<div class="text-danger">{{ $message }}</div>
																		@enderror
																	</div>
																</div>
															</div>
														</div>
														<div class="text-end">
															<a href="#" class="reset more-item">Reset</a>
															<a href="javascript:void(0)" class="reset more-item"
                                                            data-bs-toggle="modal" data-bs-target="#delete_record"
                                                            data-id="{{ $education->id }}"
                                                            data-route="{{ route('doctor-education-settings-delete', ':id') }}" >Delete</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									@endforeach
								@endif
									<!-- Education Item -->
									{{-- <div class="user-accordion-item">
										<a href="#" class="collapsed accordion-wrap" data-bs-toggle="collapse" data-bs-target="#education2">Cambridge (MBBS)<span>Delete</span></a>
										<div class="accordion-collapse collapse" id="education2" data-bs-parent="#list-accord">
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
																			<h5>Certifications</h5>
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
															</div>
															<div class="col-md-6">
																<div class="form-wrap">
																	<label class="col-form-label">Name of the institution</label>
																	<input type="text" class="form-control" value="Cambridge">
																</div>													
															</div>
															<div class="col-md-6">
																<div class="form-wrap">
																	<label class="col-form-label">residency</label>
																	<input type="text" class="form-control" value="MBBS">
																</div>													
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="form-wrap">
																	<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
																	<div class="form-icon">
																		<input type="text" class="form-control datetimepicker" value="12-6-2000">
																		<span class="icon"><i class="fa-regular fa-calendar-days"></i></span>
																	</div>
																</div>													
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="form-wrap">
																	<label class="col-form-label">End Date <span class="text-danger">*</span></label>
																	<div class="form-icon">
																		<input type="text" class="form-control datetimepicker" value="09-05-2005">
																		<span class="icon"><i class="fa-regular fa-calendar-days"></i></span>
																	</div>
																</div>													
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="form-wrap">
																	<label class="col-form-label">No of Years <span class="text-danger">*</span></label>
																	<input type="text" class="form-control" value="5">
																</div>													
															</div>
															<div class="col-lg-12">
																<div class="form-wrap">
																	<label class="col-form-label">Description <span class="text-danger">*</span></label>
																	<textarea class="form-control" rows="3"></textarea>
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
									<!-- /Education Item -->

								</div>
								
								<div class="modal-btn text-end">
									<a href="#" class="btn btn-gray">Cancel</a>
									<button class="btn btn-primary prime-btn">Save Changes</button>
								</div>
							</form>
							<!-- /Profile Settings -->
							
						</div>
					</div>
				</div>
			</div>		
			<!-- /Page Content -->
			
			@include('layout.partials.custom_scripts')
    @endsection