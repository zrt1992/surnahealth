<?php $page = 'patient-prescriptions'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Patient prescriptions
        @endslot
        @slot('li_1')
            Patient-prescriptions
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
                        <h3>{{ __('messages.records') }}</h3>
                        <div class="appointment-tabs">
                            <ul class="nav">
                                {{-- <li>
                                    <a href="#" class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#medical">Medical Records</a>
                                </li> --}}
                                <li>
                                    <a href="#" class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#prescription">{{ __('messages.prescription') }}</a>
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
                                                                    <th>{{ __('messages.patient_id') }}</th>
                                                                    <th>{{ __('messages.created_date') }}</th>
                                                                    <th>{{ __('messages.prescribed_by') }}</th>
                                                                    <th>{{ __('messages.prescription_detail') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if (!empty($formatted) && $formatted->isNotEmpty())
                                                                    @foreach ($formatted as $group)
                                                                        <tr>
                                                                            <td class="fw-bold text-primary bg-light">
                                                                                {{ $patientId ?? '#' }}
                                                                            </td>
                                                                            <td class="fw-bold text-primary bg-light">
                                                                                <a href="javascript:void(0);"
                                                                                    class="text-decoration-none view-prescription-date"
                                                                                    data-date="{{ $group['date'] }}"
                                                                                    data-items='@json($group['items'])'>
                                                                                    {{ \Carbon\Carbon::parse($group['date'])->format('F j, Y') }}
                                                                                </a>
                                                                            </td>
                                                                            <td class="fw-bold text-primary bg-light">
                                                                                {{ $group['doctor_name'] ?? 'Not Linked' }}
                                                                            </td>
                                                                            <td class="fw-bold text-primary bg-light">
                                                                                <a href="javascript:void(0);"
                                                                                    class="view-prescription view-prescription-date"
                                                                                    data-date="{{ $group['date'] }}"
                                                                                    data-items='@json($group['items'])'>
                                                                                    <i class="fa-solid fa-link"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                    <tr>
                                                                        <td colspan="5" class="text-center">No
                                                                            prescriptions found.</td>
                                                                    </tr>
                                                                @endif
                                                            </tbody>
                                                        </table>
                                </div>
                            </div>

                            <div class="pagination dashboard-pagination">
                                {{-- {{ $prescriptions->links('vendor.pagination.custom') }} --}}
                            </div>
                        </div>
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
@include('layout.partials.custom_scripts')
    <!-- /Page Content -->
@endsection
