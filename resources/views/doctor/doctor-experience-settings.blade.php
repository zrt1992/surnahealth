<?php $page = 'doctor-experience-settings'; ?>
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
                                    <a class="nav-link active"
                                        href="{{ route('doctor-experience-settings') }}">Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('doctor-education-settings') }}">Education</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ url('doctor-awards-settings') }}">Awards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('doctor-insurance-settings') }}">Insurances</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('doctor-clinics-settings') }}">Clinics</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('doctor-business-settings') }}">Business Hours</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Settings List -->

                    <div class="dashboard-header border-0 mb-0">
                        <h3>Experience</h3>
                        <ul>
                            <li>
                                <button type="button" class="btn btn-primary prime-btn add-experience">Add New
                                    Experience</button>
                            </li>
                        </ul>
                    </div>

                    <form action="{{ route('doctor-experience-setting.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="accordions experience-infos" id="list-accord">

                            @if (empty($DoctorExperiences) || count($DoctorExperiences) === 0)
                                <div class="user-accordion-item ">
                                    <a href="#" class="accordion-wrap" data-bs-toggle="collapse"
                                        data-bs-target="#experience1">New Experience <span></span></a>
                                    <div class="accordion-collapse collapse" id="experience1" data-bs-parent="#list-accord">
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
                                                                        <h5>Hospital Logo</h5>
                                                                        <div class="imgs-load d-flex align-items-center">
                                                                            <div class="change-photo">
                                                                                Upload New
                                                                                <input type="file"
                                                                                    name="hospital_logo[]" class="upload">
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
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="form-wrap">
                                                                <label class="col-form-label">Title</label>
                                                                <input type="text" name="title[]"
                                                                    class="form-control">
                                                                @error('title')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="form-wrap">
                                                                <label class="col-form-label">Hospital <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" name="hospital[]"
                                                                    class="form-control">
                                                                @error('hospital')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="form-wrap">
                                                                <label class="col-form-label">Year of Experience <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" name="year_of_experience[]"
                                                                    class="form-control">
                                                                @error('year_of_experience')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-wrap">
                                                                <label class="col-form-label">Location <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" name="location[]"
                                                                    class="form-control">
                                                                @error('location')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-wrap">
                                                                <label class="col-form-label">Employment</label>
                                                                <select name="employment_type[]" class="select">
                                                                    <option value="full-time">Full Time</option>
                                                                    <option value="part-time">Part Time</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-wrap">
                                                                <label class="col-form-label">Job Description <span
                                                                        class="text-danger">*</span></label>
                                                                <textarea name="job_description[]" class="form-control" rows="3"></textarea>
                                                                @error('job_description')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="form-wrap">
                                                                <label class="col-form-label">Start Date <span
                                                                        class="text-danger">*</span></label>
                                                                <div class="form-icon">
                                                                    <input type="text" name="start_date[]"
                                                                        class="form-control datetimepicker">
                                                                    <span class="icon"><i
                                                                            class="fa-regular fa-calendar-days"></i></span>
                                                                    @error('start_date')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="form-wrap">
                                                                <label class="col-form-label">End Date <span
                                                                        class="text-danger">*</span></label>
                                                                <div class="form-icon">
                                                                    <input type="text" name="end_date[]"
                                                                        class="form-control datetimepicker">
                                                                    <span class="icon"><i
                                                                            class="fa-regular fa-calendar-days"></i></span>
                                                                    @error('end_date')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="form-wrap">
                                                                <label class="col-form-label">&nbsp;</label>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="currently_working[]" value="1"> I
                                                                        Currently Work Here
                                                                    </label>
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
                                @foreach ($DoctorExperiences as $index => $experience)
                                    <div class="user-accordion-item">
                                        <a href="#" class="accordion-wrap" data-bs-toggle="collapse"
                                            data-bs-target="#experience{{ $index }}">
                                            {{ $experience->hospital }} <span></span>
                                        </a>
                                        
                                        <div class="accordion-collapse collapse" id="experience{{ $index }}"
                                            data-bs-parent="#list-accord">
                                            <div class="content-collapse">
                                                <div class="add-service-info">
                                                    <div class="add-info">
                                                        <div class="row align-items-center">
                                                            <!-- Existing Experience Fields -->
                                                            <input type="hidden" name="form_type[{{ $experience->id }}]"
                                                                value="update">
                                                            <div class="col-md-12">
                                                                <div class="form-wrap mb-2">
                                                                    <div class="change-avatar img-upload">
                                                                        <div class="profile-img">
                                                                            <img src="{{ $experience->hospital_logo }}"
                                                                                alt="Hospital Logo" style="width: 50px;">
                                                                        </div>
                                                                        <div class="upload-img">
                                                                            <h5>Hospital Logo</h5>
                                                                            <div
                                                                                class="imgs-load d-flex align-items-center">
                                                                                <div class="change-photo">
                                                                                    Upload New
                                                                                    <input type="file"
                                                                                        name="hospital_logo[{{ $experience->id }}]"
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
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="form-wrap">
                                                                    <label class="col-form-label">Title</label>
                                                                    <input type="text"
                                                                        name="title[{{ $experience->id }}]"
                                                                        value="{{ old('title.' . $experience->id, $experience->title) }}"
                                                                        class="form-control @error('title.' . $experience->id) is-invalid @enderror">

                                                                    @error('title.' . $experience->id)
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="form-wrap">
                                                                    <label class="col-form-label">Hospital</label>
                                                                    <input type="text"
                                                                        name="hospital[{{ $experience->id }}]"
                                                                        value="{{ old('hospital.' . $experience->id, $experience->hospital) }}"
                                                                        class="form-control">
                                                                    @error('hospital.' . $experience->id)
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="form-wrap">
                                                                    <label class="col-form-label">Year of
                                                                        Experience</label>
                                                                    <input type="text"
                                                                        name="year_of_experience[{{ $experience->id }}]"
                                                                        value="{{ old('year_of_experience.' . $experience->id, $experience->year_of_experience) }}"
                                                                        class="form-control">
                                                                    @error('year_of_experience.' . $experience->id)
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-wrap">
                                                                    <label class="col-form-label">Location <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="text"
                                                                        name="location[{{ $experience->id }}]"
                                                                        value="{{ old('location.' . $experience->id, $experience->location) }}"
                                                                        class="form-control">
                                                                    @error('location.' . $experience->id)
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-wrap">
                                                                    <label class="col-form-label">Employment</label>
                                                                    <select name="employment_type[]" class="select">
                                                                        <option value="full-time">Full Time</option>
                                                                        <option value="part-time">Part Time</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-wrap">
                                                                    <label class="col-form-label">Job Description</label>
                                                                    <textarea name="job_description[{{ $experience->id }}]" class="form-control" rows="3">{{ $experience->job_description }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="form-wrap">
                                                                    <label class="col-form-label">Start Date</label>
                                                                    <input type="date"
                                                                        name="start_date[{{ $experience->id }}]"
                                                                        value="{{ old('start_date.' . $experience->id, $experience->start_date) }}"
                                                                        class="form-control">
                                                                    @error('start_date.' . $experience->id)
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="form-wrap">
                                                                    <label class="col-form-label">End Date</label>
                                                                    <input type="date"
                                                                        name="end_date[{{ $experience->id }}]"
                                                                        value="{{ old('end_date.' . $experience->id, $experience->end_date) }}"
                                                                        class="form-control">
                                                                    @error('end_date.' . $experience->id)
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
                                                            data-id="{{ $experience->id }}"
                                                            data-route="{{ route('doctor-experience-settings-delete', ':id') }}">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                </div>
                <div class="modal-btn text-end">
                    <button type="button" class="btn btn-gray">Cancel</button>
                    <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                </div>
                </form>


                <!-- /Profile Settings -->

            </div>
        </div>
    </div>
    </div>

    <!-- /Page Content -->
    @component('components.delete_modal')
    @endcomponent
    @include('layout.partials.custom_scripts')
@endsection
