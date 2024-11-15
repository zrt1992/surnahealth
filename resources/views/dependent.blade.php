<?php $page = 'dependent'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Dependants
        @endslot
        @slot('li_1')
            Dependants
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="content doctor-content">
        <div class="container">
            <div class="row">

                @component('components.sidebar_patient')
                @endcomponent

                <div class="col-lg-8 col-xl-9">

                    <div class="dashboard-header">
                        <h3>Dependants</h3>
                        <ul class="header-list-btns">
                            <li>
                                <div class="input-block dash-search-input">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dashboard-header border-0 m-0">
                        <ul class="header-list-btns">
                            <li>
                                <div class="input-block dash-search-input">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary prime-btn" data-bs-toggle="modal"
                            data-bs-target="#add_dependent">Add Dependants</a>
                    </div>
                    @foreach ($dependants as $dependant)
                        <!-- Depeendent Item -->
                        <div class="dependent-wrap">

                            <div class="dependent-info">
                                <div class="patinet-information">
                                    <a href="{{ url('patient-profile') }}">
                                        <img src="{{ $dependant->profile_image ?? URL::asset('/assets/img/dependent/dependent-01.jpg') }}"
                                            alt="User Image">
                                    </a>
                                    <div class="patient-info">
                                        <h5>Laura</h5>
                                        <ul>
                                            <li>{{ $dependant->name }}</li>
                                            <li>{{ $dependant->gender }}</li>
                                            <li>{{ calculateAge($dependant->dob) }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blood-info">
                                    <p>Blood Group</p>
                                    <h6>AB+ve</h6>
                                </div>
                            </div>
                            <div class="dependent-status">
                                <div class="status-toggle">
                                    <span class="deactive">Deactivate</span>
                                    <input type="checkbox" id="status_1" class="check" checked>
                                    <label for="status_1" class="checktoggle">checkbox</label>
                                    <span class="active">Activate</span>
                                </div>
								<a href="#" class="edit-icon" data-bs-toggle="modal" 
								data-bs-target="#edit_dependent"
								data-id="{{ $dependant->id }}"
								data-name="{{ $dependant->name }}"
								data-relationship="{{ $dependant->relationship }}"
								data-dob="{{ $dependant->dob }}"
								data-gender="{{ $dependant->gender }}"
								data-profile_image="{{ $dependant->profile_image }}">
								<i class="fa-solid fa-pen-to-square"></i>
							 </a>
							 
                            </div>


                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#edit_dependent').on('shown.bs.modal', function(event) {
                // Get data attributes from the button that triggered the modal
                var button = $(event.relatedTarget); // Button that triggered the modal
                var dependantId = button.data('id');
                var dependantName = button.data('name');
                var dependantRelationship = button.data('relationship');
                var dependantDob = button.data('dob');
                var dependantGender = button.data('gender');
                var dependantProfileImage = button.data('profile_image');

                // Set the form action URL with the dependant ID
                var actionUrl = "{{ route('dependents.update', ':id') }}".replace(':id', dependantId);
                $('#edit_dependent_form').attr('action', actionUrl);

                // Fill the fields in the modal
                $('#dependant_name').val(dependantName);
                $('#dependant_relationship').val(dependantRelationship);
                $('#dependant_dob').val(dependantDob);
                $('#dependant_gender').val(dependantGender);

                // If profile image exists, show it (optional)
                if (dependantProfileImage) {
                    $('.profile-img').html('<img src="' + dependantProfileImage + '" alt="Profile Image">');
                }
            });
        });
    </script>
@endsection
