<?php $page = 'medical-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Medical Details
        @endslot
        @slot('li_1')
            Medical Details
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">

            <div class="row">

                @component('components.sidebar_patient')
                @endcomponent

                <div class="col-lg-8 col-xl-9">
                    <div class="dashboard-header">
                        <h3>Medical Details</h3>
                    </div>
                    <div class="dashboard-card w-100 medical-details-item">
                        <div class="dashboard-card-head medical-detail-head">
                            <div class="header-title">
                                <h6>Latest updated medical details</h6>
                            </div>
                            <div class="latest-update">
                                <p>
                                    <i class="fa-solid fa-calendar-check me-2"></i>
                                    Last update on:
                                    @if ($medicalDetail && $medicalDetail->updated_at)
                                        {{ $medicalDetail->updated_at->format('dM Y') }}
                                    @else
                                        N/A
                                    @endif
                                </p>
                            </div>

                        </div>
                        <div class="dashboard-card-body">
                            <div class="row">
                                <div class="col-xl-2 col-lg-4 col-md-6">
                                    <div class="health-records icon-red">
                                        <span><i class="fa-solid fa-syringe"></i>Blood Pressure</span>
                                        <h3>{{ $medicalDetail->blood_pressure ?? '--' }} mg/dl</h3>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6">
                                    <div class="health-records icon-orange">
                                        <span><i class="fa-solid fa-heart"></i>Heart Rate</span>
                                        <h3>{{ $medicalDetail->heart_rate ?? '--' }} Bpm</h3>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6">
                                    <div class="health-records icon-dark-blue">
                                        <span><i class="fa-solid fa-notes-medical"></i>Glucose Level</span>
                                        <h3>{{ $medicalDetail->glucose ?? '0 - 0' }}</h3>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6">
                                    <div class="health-records icon-amber">
                                        <span><i class="fa-solid fa-temperature-high"></i>Body Temprature</span>
                                        <h3>{{ $medicalDetail->body_temperature ?? '--' }} C</h3>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6">
                                    <div class="health-records icon-purple">
                                        <span><i class="fa-solid fa-user-pen"></i>BMI </span>
                                        <h3>{{ $medicalDetail->bmi ?? '--' }} kg/m2</h3>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-6">
                                    <div class="health-records icon-blue">
                                        <span><i class="fa-solid fa-highlighter"></i>SPo2</span>
                                        <h3>{{ $medicalDetail->spo2 ?? '--' }}%</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        {{-- <div class="col-sm-6">
                            <div class="search-header">
                                <div class="search-field">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="add-med-record">
                                <a href="#add-med-record" class="btn btn-primary prime-btn" data-bs-toggle="modal">Add
                                    Medical Details</a>
                            </div>
                        </div> --}}
                        <div class="col-md-12">
                            <div class="setting-title">
                                <h5>Medical Detail</h5>
                            </div>
                         
                            <form action="{{ route('patient-medical-detail.update', $medicalDetail->id ?? auth()->id()) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="setting-card">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Blood Pressure <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="bp"
                                                    class="form-control"
                                                    value="{{ old('bp', optional($medicalDetail)->bp) }}">
                                                @error('bp')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Heart Rate <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="heart_rate"
                                                    class="form-control"
                                                    value="{{ old('heart_rate', optional($medicalDetail)->heart_rate) }}">
                                                @error('heart_rate')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Glucose Level <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="glucose"
                                                    class="form-control"
                                                    value="{{ old('glucose', optional($medicalDetail)->glucose) }}">
                                                @error('glucose')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Body Temperature <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="body_temperature"
                                                    class="form-control"
                                                    value="{{ old('body_temperature', optional($medicalDetail)->body_temperature) }}">
                                                @error('body_temperature')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-wrap">
                                                <label class="col-form-label">SPo2 <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="spo2"
                                                    class="form-control"
                                                    value="{{ old('spo2', optional($medicalDetail)->spo2) }}">
                                                @error('spo2')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-wrap">
                                                <label class="col-form-label">BMI <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="bmi"
                                                    class="form-control"
                                                    value="{{ old('bmi', optional($medicalDetail)->bmi) }}">
                                                @error('bmi')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Existing medical conditions <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    name="existing_medical_conditions" class="form-control"
                                                    value="{{ old('existing_medical_conditions', optional($medicalDetail)->existing_medical_conditions) }}">
                                                @error('existing_medical_conditions')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Medications currently using <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    name="medications_currently_using" class="form-control"
                                                    value="{{ old('medications_currently_using', optional($medicalDetail)->medications_currently_using) }}">
                                                @error('medications_currently_using')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Primarly health concern <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="primarly_health_concern"
                                                    class="form-control"
                                                    value="{{ old('primarly_health_concern', optional($medicalDetail)->primarly_health_concern) }}">
                                                @error('primarly_health_concern')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Allergies <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="allergies"
                                                    class="form-control"
                                                    value="{{ old('allergies', optional($medicalDetail)->allergies) }}">
                                                @error('allergies')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Cardiac History <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="cardiac_history"
                                                    class="form-control"
                                                    value="{{ old('cardiac_history', optional($medicalDetail)->cardiac_history) }}">
                                                @error('cardiac_history')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-btn text-end">
                                        <a href="#" class="btn btn-gray">Cancel</a>
                                        <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                            {{-- <div class="custom-table">
                                <div class="table-responsive">
                                    <table class="table table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Patient Name</th>
                                                <th>BMI</th>
                                                <th>Heart Rate</th>
                                                <th>FBC Status</th>
                                                <th>Weight</th>
                                                <th>Added on</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($medicalDetails as $medicalDetail)
                                            <tr>
                                                <td><a class="text-blue-600" href="javascript:void(0);"
                                                        data-bs-toggle="modal" data-bs-target="#med-detail">#MD-123</a></td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="{{ url('patient-profile') }}"
                                                            class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-3"
                                                                src="{{$medicalDetail->user->profile_image ?? URL::asset('/assets/img/doctors-dashboard/profile-06.jpg') }}"
                                                                alt="User Image">
                                                        </a>
                                                        <a href="{{ url('doctor-profile') }}">{{ $medicalDetail->user->name }}</a>
                                                    </h2>
                                                </td>
                                                <td>{{ $medicalDetail->bmi }}</td>
                                                <td>{{ $medicalDetail->heart_rate }}</td>
                                                <td>{{ $medicalDetail->fbc }}</td>
                                                <td>{{ $medicalDetail->weight }}Kg</td>
                                                <td>{{ \Carbon\Carbon::parse($medicalDetail->end_date)->format('d/m/Y') }}</td>
                                                <td>
                                                    <div class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                                            data-bs-target="#med-detail">
                                                            <i class="fa-solid fa-link"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                                            data-bs-target="#edit-med-record">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="{{ route('medical-details-remove',$medicalDetail->id) }}">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Page Content -->
@endsection
