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

                    <form action="{{ route('patient-profile-setting.update', $patientProfileSettings->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="setting-card">
                            <div class="change-avatar img-upload">
                                <div class="profile-img" id="profileImageContainer">
                                    <!-- If there is a profile image, display it; otherwise, show the default icon -->
                                    @if ($patientProfileSettings->profile_image)
                                        <img id="profileImagePreview" src="{{ asset( $patientProfileSettings->profile_image) }}" alt="Profile Image" class="img-thumbnail" width="100" style="display:block;">
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
                                        <a href="#" class="upload-remove" id="removeImage" style="{{ $patientProfileSettings->profile_image ? 'display:inline;' : 'display:none;' }}">Remove</a>
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
                                        <input type="text" name="first_name" class="form-control"
                                            value="{{ old('first_name', $patientProfileSettings->first_name) }}">
                                        @error('first_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" name="last_name" class="form-control"
                                            value="{{ old('last_name', $patientProfileSettings->last_name) }}">
                                        @error('last_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Date of Birth <span
                                                class="text-danger">*</span></label>
                                                <input type="text" name="dob" class="form-control"
                                                value="{{ old('dob', $patientProfileSettings->dob) }}">
                                            @error('dob')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Phone Numbers <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="phone" class="form-control"
                                            value="{{ old('phone', $patientProfileSettings->phone) }}">
                                        @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Email Address <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="email" class="form-control"
                                            value="{{ old('email', $patientProfileSettings->email) }}">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Blood Group <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="blood_group" class="form-control"
                                            value="{{ old('blood_group', $patientProfileSettings->blood_group) }}">
                                        @error('blood_group')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
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
                                            <input type="text" class="form-control" name="address" class="form-control"
                                                value="{{ old('address', $patientProfileSettings->address) }}">
                                            @error('address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">City <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="city" class="form-control"
                                                value="{{ old('city', $patientProfileSettings->city) }}">
                                            @error('city')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">State <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="city" class="form-control"
                                                value="{{ old('city', $patientProfileSettings->city) }}">
                                            @error('city')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Country <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="country"
                                                class="form-control"
                                                value="{{ old('country', $patientProfileSettings->country) }}">
                                            @error('country')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Pincode <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pincode"
                                                class="form-control"
                                                value="{{ old('pincode', $patientProfileSettings->pincode) }}">
                                            @error('pincode')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
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
