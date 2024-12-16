<?php $page = 'medical-records'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Medical Records
        @endslot
        @slot('li_1')
            Medical Records
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
                        <h3>Records</h3>
                        <div class="appointment-tabs">
                            <ul class="nav">
                                {{-- <li>
                                    <a href="#" class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#medical">Medical Records</a>
                                </li> --}}
                                <li>
                                    <a href="#" class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#prescription">Prescriptions</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content pt-0">

                        <!-- Prescription Tab -->
                        <div class="tab-pane fade show active" id="prescription">
                            <div class="search-header">
                                <div class="search-field">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>

                            <div class="custom-table">
                                <div class="table-responsive">
                                    <table class="table table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Created Date</th>
                                                <th>Prescriped By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($prescriptions) && $prescriptions->isNotEmpty())
                                            @foreach ($prescriptions as $prescription)
                                            <tr>
                                                <td><a class="text-blue-600" href="javascript:void(0);"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#view_prescription">#{{ $prescription->id ?? '' }}</a></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="lab-icon prescription">
                                                        <span><i class="fa-solid fa-prescription"></i></span>Prescription
                                                    </a>
                                                </td>
                                                <td>{{ $prescription->date ?? '' }}</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="{{ url('doctor-profile') }}" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-3"
                                                                src="{{ $prescription->doctor->profile_image ??   URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                                                alt="User Image">
                                                        </a>
                                                        <a href="{{ url('doctor-profile-2',$prescription->doctor->id) }}">{{ $prescription->doctor->name ?? '' }}</a>
                                                    </h2>
                                                </td>
                                                <td>
                                                    <div class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                                            data-bs-target="#view_prescription">
                                                            <i class="fa-solid fa-link"></i>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-solid fa-download"></i>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="pagination dashboard-pagination">
                                <ul>
                                    <li>
                                        <a href="#" class="page-link"><i class="fa-solid fa-chevron-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link active">2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">...</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link"><i class="fa-solid fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /Pagination -->

                        </div>
                        <!-- /Prescription Tab -->

                        <!-- Medical Records Tab -->
                        <div class="tab-pane fade " id="medical">
                            <div class="search-header">
                                <div class="search-field">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                                <div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_medical_records"
                                        class="btn btn-primary prime-btn">Add Medical Record</a>
                                </div>
                            </div>

                            <div class="custom-table">
                                <div class="table-responsive">
                                    <table class="table table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($medicalRecords as $records)
                                                <tr>
                                                    <td><a class="text-blue-600"
                                                            href="javascript:void(0);">#MR-{{ $records->id }}</a></td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="lab-icon">
                                                            <span><i class="fa-solid fa-paperclip"></i></span>Lab Report
                                                        </a>
                                                    </td>
                                                    <td>{{ $records->start_date }}</td>
                                                    <td>{{ $records->title }}</td>
                                                    <td>
                                                        <div class="action-item">
                                                            <a href="#" class="edit-icon" data-bs-toggle="modal"
                                                                data-bs-target="#edit_medical_records"
                                                                data-id="{{ $records->id }}"
                                                                data-title="{{ $records->title }}"
                                                                data-patient="{{ $records->patient }}"
                                                                data-start_date="{{ \Carbon\Carbon::parse($records->start_date)->format('d/m/Y') }}"
                                                                data-hospital_name="{{ $records->hospital_name }}"
                                                                data-symptoms="{{ $records->symptoms }}"
                                                                data-report="{{ $records->report }}">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>

                                                            <a href="javascript:void(0);">
                                                                <i class="fa-solid fa-download"></i>
                                                            </a>
                                                            
                                                            <a href="{{ route('medical-record-remove',$records->id) }}">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            {{-- <tr>
                                                <td><a class="text-blue-600" href="javascript:void(0);">#MR-124</a></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="lab-icon">
                                                        <span><i class="fa-solid fa-paperclip"></i></span>Lab Report
                                                    </a>
                                                </td>
                                                <td>27 Mar 2024</td>
                                                <td>Complete Blood Count(CBC)</td>
                                                <td>
                                                    <div class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                                            data-bs-target="#edit_medical_records">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-solid fa-download"></i>
                                                        </a>
                                                        <a href="javascript:void(0);">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr> --}}

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="pagination dashboard-pagination">
                                <ul>
                                    <li>
                                        <a href="#" class="page-link"><i class="fa-solid fa-chevron-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link active">2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link">...</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-link"><i class="fa-solid fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /Pagination -->

                        </div>
                        <!-- /Medical Records Tab -->


                    </div>

                </div>
            </div>

        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#edit_medical_records').on('shown.bs.modal', function(event) {
                // Get data attributes from the button that triggered the modal
                var button = $(event.relatedTarget); // Button that triggered the modal
                var recordId = button.data('id');
                var recordTitle = button.data('title');
                var recordPatient = button.data('patient');
                var recordStartDate = button.data('start_date');
                var recordHospitalName = button.data('hospital_name');
                var recordSymptoms = button.data('symptoms');
                var recordReport = button.data('report');

                // Set the form action URL with the record ID
                var actionUrl = "{{ route('medical-record.update', ':id') }}".replace(':id', recordId);
                $('#edit_medical_records_form').attr('action', actionUrl);

                // Fill the fields in the modal
                $('#record_title').val(recordTitle);
                $('#record_patient').val(recordPatient);
                $('#record_start_date').val(recordStartDate);
                $('#record_hospital_name').val(recordHospitalName);
                $('#record_symptoms').val(recordSymptoms);
                $('#record_report').val(recordReport);

                // if (recordReport) {
                //     $('.profile-img').html('<img src="' + recordReport + '" alt="Profile Image">');
                // }
            });
        });
    </script>

    <!-- /Page Content -->
@endsection
