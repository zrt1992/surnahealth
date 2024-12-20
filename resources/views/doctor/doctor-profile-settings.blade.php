<?php $page = 'doctor-profile-settings'; ?>
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
                    @component('components.sidebar_doctor')
                    @endcomponent
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
                                    <a class="nav-link active" href="{{ url('doctor/doctor-profile-settings') }}">Basic Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('doctor-experience-settings') }}">Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('doctor-education-settings') }}">Education</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ url('doctor-awards-settings') }}">Awards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('doctor-insurance-settings') }}">Insurances</a>
                                </li> --}}
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ url('doctor-clinics-settings') }}">Clinics</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('doctor-business-settings') }}">Business Hours</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Settings List -->

                    <div class="setting-title">
                        <h5>Profile</h5>
                    </div>

                    <form action="{{ route('doctor-profile-settings.update', $auth->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="setting-card">
                            <div class="change-avatar img-upload">
                                <div class="profile-img" id="profileImageContainer">
                                    <!-- If there is a profile image, display it; otherwise, show the default icon -->
                                    @if ($auth->profile_image)
                                        <img id="profileImagePreview" src="{{ asset( $auth->profile_image) }}" alt="Profile Image" class="img-thumbnail" width="100" style="display:block;">
                                    @else
                                        <i class="fa-solid fa-file-image" id="profileImageIcon"></i>
                                    @endif
                                </div>
                                <div class="upload-img">
                                    <h5>Profile Image</h5>
                                    <div class="imgs-load d-flex align-items-center">
                                        <div class="change-photo">
                                            Upload New
                                            <input type="file" class="upload" name="profile_image" id="profileImageInput">
                                        </div>
                                        <a href="#" class="upload-remove" id="removeImage" style="{{ $auth->profile_image ? 'display:inline;' : 'display:none;' }}">Remove</a>
                                    </div>
                                    <p class="form-text">Your Image should be Below 4 MB, Accepted format jpg, png, svg.</p>
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
                                        <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $auth->first_name) }}"  readonly style="background-color: #f8f9fa; color: #6c757d;">
                                        @error('first_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                    
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $auth->last_name) }}" readonly style="background-color: #f8f9fa; color: #6c757d;">
                                        @error('last_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                    
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Display Name <span class="text-danger">*</span></label>
                                        <input type="text" name="display_name" class="form-control" value="{{ old('display_name', $auth->display_name) }}" readonly style="background-color: #f8f9fa; color: #6c757d;">
                                        @error('display_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                    
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Designation <span class="text-danger">*</span></label>
                                        <select class="select form-control" name="designation" readonly style="background-color: #f8f9fa; color: #6c757d;">
                                            <option value="">Select Designation</option>
                                            @foreach($specializations as $specialization)
                                                <option value="{{ $specialization->id }}" 
                                                    @if(old('designation', $auth->specializations->pluck('id')->contains($specialization->id))) selected @endif>
                                                    {{ $specialization->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('designation')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                    
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Phone Numbers <span class="text-danger">*</span></label>
                                        <input type="text" name="phone" class="form-control" value="{{ old('phone', $auth->phone) }}">
                                        @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                    
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Email Address <span class="text-danger">*</span></label>
                                        <input type="text" name="email" class="form-control" value="{{ old('email', $auth->email) }}">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Consultation fees <span class="text-danger">*</span></label>
                                        <input type="text" name="consultation_fees" class="form-control" value="{{ old('consultation_fees', $auth->consultation_fees) }}" readonly style="background-color: #f8f9fa; color: #6c757d;">
                                        @error('consultation_fees')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Known Languages <span class="text-danger">*</span></label>
                                        <div class="input-block input-block-new mb-0">
                                            <input class="input-tags form-control" id="inputBox3" type="text" data-role="tagsinput" placeholder="Type New" name="known_languages" value="{{ old('known_languages', $auth->known_languages) }}" readonly style="background-color: #f8f9fa; color: #6c757d;">
                                            @error('known_languages')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <a href="#" class="input-text save-btn">Save</a>
                                        </div>
                                    </div>
                                </div>
                    
                            </div>
                        </div>
                        
                        <div class="modal-btn text-end">
                            <a href="#" class="btn btn-gray">Cancel</a>
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                        
                     
                    </form>
                    
                    
                    <div class="dashboard-header">
                        <h3>Change Password</h3>
                    </div>
                    <form action="{{ route('doctor.update-password') }}" method="POST">
                        @csrf
                        <div class="card pass-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block input-block-new">
                                            <label class="form-label">Old Password</label>
                                            <input type="password" id="old_password" name="old_password"
                                                class="form-control" placeholder="Enter your old password" required>
                                            @error('old_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-block input-block-new">
                                            <label class="form-label">New Password</label>
                                            <div class="pass-group">
                                                <input type="password" id="new_password" name="password" class="form-control pass-input">
                                                <span class="feather-eye-off toggle-password"></span>
                                            </div>
                                            @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="input-block input-block-new mb-0">
                                            <label class="form-label">Confirm Password</label>
                                            <div class="pass-group">
                                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control pass-input-sub">
                                                <span class="feather-eye-off toggle-password-sub"></span>
                                            </div>
                                            @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-set-button">
                            <button class="btn btn-light" type="button">Cancel</button>
                            <button class="btn btn-primary" type="submit">Save Changes</button>
                        </div>
                    </form>

                </div>
               
            </div>

        </div>

    </div>
    <!-- /Page Content -->
    <script>
        // Get the file input element and the profile image container
        const profileImageInput = document.getElementById('profileImageInput');
        const profileImageContainer = document.getElementById('profileImageContainer');
        const profileImageIcon = document.getElementById('profileImageIcon');
        const removeImage = document.getElementById('removeImage');
        const profileImagePreview = document.getElementById('profileImagePreview');
    
        // Event listener for when the file is selected
        profileImageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
    
            if (file) {
                // Create a FileReader to read the image file
                const reader = new FileReader();
                
                // Event listener for when the file is loaded
                reader.onload = function(e) {
                    // Update the preview image source with the selected image
                    profileImagePreview.src = e.target.result;
                    profileImagePreview.style.display = 'block';  // Show the preview image
                    profileImageContainer.innerHTML = '';  // Clear the icon
                    profileImageContainer.appendChild(profileImagePreview);  // Append the preview image
    
                    // Show the remove link
                    removeImage.style.display = 'inline';
                };
    
                // Read the file as a data URL
                reader.readAsDataURL(file);
            }
        });
    
        // Event listener for the remove link
        removeImage.addEventListener('click', function(event) {
            event.preventDefault();  // Prevent default link behavior
            
            // Clear the file input and hide the image preview
            profileImageInput.value = '';  // Reset the input field
            profileImagePreview.style.display = 'none';  // Hide the image preview
            profileImageContainer.innerHTML = '';  // Clear the preview image
            profileImageContainer.appendChild(profileImageIcon);  // Restore the default icon
    
            // Hide the remove link
            removeImage.style.display = 'none';
        });
    </script>
    
@endsection
