<?php $page = 'doctor-insurance-settings'; ?>
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
											<a class="nav-link" href="{{route('doctor-education-settings')}}">Education</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{url('doctor-awards-settings')}}">Awards</a>
										</li>
										<li class="nav-item">
											<a class="nav-link active" href="{{url('doctor-insurance-settings')}}">Insurances</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{url('doctor-clinics-settings')}}">Clinics</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{route('doctor-business-settings')}}">Business Hours</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Settings List -->

							<div class="dashboard-header border-0 mb-0">
								<h3>Insurance</h3>
								<ul>
									<li>
										<a href="#" class="btn btn-primary prime-btn add-insurance">Add New Insurance</a>
									</li>
								</ul>
							</div>

							<form action="{{ route('doctor-insurance-setting.store') }}" method="POST"
							enctype="multipart/form-data">
							@csrf
								<div class="accordions insurance-infos" id="list-accord">

									<!-- Insurance Item -->
									@if (empty($DoctorInsurances) || count($DoctorInsurances) === 0)
									<div class="user-accordion-item">
										<a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#insurance1">
											Insurance <span></span>
										</a>
										<div class="accordion-collapse collapse show" id="insurance1" data-bs-parent="#list-accord">
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
																					<input type="file" name="logo[]" class="upload">
																				</div>
																				<a href="#" class="upload-remove">Remove</a>
																			</div>
																			<p class="form-text">
																				Your Image should be below 4 MB, accepted formats: jpg, png, svg.
																			</p>
																		</div>
																	</div>
																</div>
																<div class="form-wrap">
																	<label class="col-form-label">Insurance Name</label>
																	<input type="text" class="form-control" name="insurance_name[]">
																	@error('insurance_name')
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
									@foreach ($DoctorInsurances as $index => $insurance)
									<div class="user-accordion-item">
										<a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#insurance{{ $index }}">
											{{ $insurance->insurance_name }} <span></span>
										</a>
										<div class="accordion-collapse collapse" id="insurance{{ $index }}" data-bs-parent="#list-accord">
											<div class="content-collapse">
												<div class="add-service-info">
													<div class="add-info">
														<div class="row align-items-center">
															<!-- Existing Insurance Fields -->
															<input type="hidden" name="form_type[{{ $insurance->id }}]" value="update">
															<div class="col-md-12">
																<div class="form-wrap mb-2">
																	<div class="change-avatar img-upload">
																		<div class="profile-img">
																			<img src="{{ $insurance->logo }}" alt="Logo" style="width: 50px;">
																		</div>
																		<div class="upload-img">
																			<h5>Logo</h5>
																			<div class="imgs-load d-flex align-items-center">
																				<div class="change-photo">
																					Upload New
																					<input type="file" name="logo[{{ $insurance->id }}]" class="upload">
																				</div>
																				<a href="#" class="upload-remove">Remove</a>
																			</div>
																			<p class="form-text">Your image should be below 4 MB, accepted formats: jpg, png, svg.</p>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-12">
																<div class="form-wrap">
																	<label class="col-form-label">Insurance Name</label>
																	<input type="text" name="insurance_name[{{ $insurance->id }}]"
																		value="{{ old('insurance_name.' . $insurance->id, $insurance->insurance_name) }}"
																		class="form-control @error('insurance_name.' . $insurance->id) is-invalid @enderror">
																	@error('insurance_name.' . $insurance->id)
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
                                                            data-id="{{ $insurance->id }}"
                                                            data-route="{{ route('doctor-insurance-settings-delete', ':id') }}" >Delete</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									@endforeach
									@endif
									
									<!-- /Insurance Item -->

									<!-- Insurance Item -->
									{{-- <div class="user-accordion-item">
										<a href="#" class="collapsed accordion-wrap" data-bs-toggle="collapse" data-bs-target="#insurance2">Star health<span>Delete</span></a>
										<div class="accordion-collapse collapse" id="insurance2" data-bs-parent="#list-accord">
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
																			<p class="form-text">Your Image should Below 4 MB, Accepted format jpg,png,svg</p>
																		</div>			
																	</div>	
																</div>	
																<div class="form-wrap">
																	<label class="col-form-label">Insurance Name</label>
																	<input type="text" class="form-control" value="Star health">
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
									<!-- /Insurance Item -->

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