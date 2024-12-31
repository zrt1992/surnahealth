<?php $page = 'appointments'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Appointments
        @endslot
        @slot('li_1')
            Appointments
        @endslot
    @endcomponent
   
   	<!-- Page Content -->
       <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-xl-3 theiaStickySidebar">
                    
                    @component('components.sidebar_doctor')
                    @endcomponent 
                    
                </div>
                
                <div class="col-lg-8 col-xl-9">
                    <div class="dashboard-header">
                        <h3>Appointments</h3>
                        <ul class="header-list-btns">
                            <li>
                                <div class="input-block dash-search-input">
                                    <form method="GET" action="{{ route('doctor-appointments') }}" id="searchForm">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="search"
                                                id="searchInput" value="{{ request('search') }}">
                                            <span class="search-icon" id="searchIcon" style="cursor: pointer;">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="view-icons">
                                    <a href="{{url('doctor/doctor-appointments')}}" class="active"><i class="fa-solid fa-list"></i></a>
                                </div>
                            </li>
                            <li>
                                <div class="view-icons">
                                    <a href="{{url('doctor/doctor-appointments-grid')}}"><i class="fa-solid fa-th"></i></a>
                                </div>
                            </li>
                            <li>
                                <div class="view-icons">
                                    <a href="#"><i class="fa-solid fa-calendar-check"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="appointment-tab-head">
                        <div class="appointment-tabs">
                            <ul class="nav nav-pills inner-tab " id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-upcoming-tab" data-bs-toggle="pill" data-bs-target="#pills-upcoming" type="button" role="tab" aria-controls="pills-upcoming" aria-selected="false">Upcoming<span>{{ $upcomingCount ?? '0' }}</span></button>
                                </li>	
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-cancel-tab" data-bs-toggle="pill" data-bs-target="#pills-cancel" type="button" role="tab" aria-controls="pills-cancel" aria-selected="true">Cancelled<span>{{ $rejectedCount ?? '0' }}</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-complete-tab" data-bs-toggle="pill" data-bs-target="#pills-complete" type="button" role="tab" aria-controls="pills-complete" aria-selected="true">Completed<span>{{ $completedCount ?? '0' }}</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-create-meeting-tab" data-bs-toggle="pill" data-bs-target="#pills-create-meeting" type="button" role="tab" aria-controls="pills-create-meeting" aria-selected="true">Create Meeting<span></span></button>
                                </li>
                            </ul>
                        </div>
                        <form action="{{ route('doctor-appointments') }}" method="GET">
                        
                            <div class="filter-head">
                                <div class="position-relative daterange-wraper me-2">
                                    <div class="input-groupicon calender-input">
                                        <input type="text" name="date_range" class="form-control date-range bookingrange" placeholder="From Date - To Date">
                                    </div>
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="form-sorts dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" id="table-filter">
                                        <i class="fa-solid fa-filter me-2"></i>Filter By
                                    </a>
                                    <div class="filter-dropdown-menu">
                                        <div class="filter-set-view">
                                            <div class="accordion" id="accordionExample">
                                                <!-- Filter by Name -->
                                                <div class="filter-set-content">
                                                    <div class="filter-set-content-head">
                                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Name <i class="fa-solid fa-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                    <div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
                                                        <ul>
                                                            <li>
                                                                <div class="input-block dash-search-input w-100">
                                                                    <input type="text" name="search_name" class="form-control" placeholder="Search">
                                                                    <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Filter by Appointment Type -->
                                                <div class="filter-set-content">
                                                    <div class="filter-set-content-head">
                                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Appointment Type <i class="fa-solid fa-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                    <div class="filter-set-contents accordion-collapse collapse show" id="collapseOne" data-bs-parent="#accordionExample">
                                                        <ul>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="appointment_type[]" value="All Type" checked>
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">All Type</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="appointment_type[]" value="video_call">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">Video Call</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="appointment_type[]" value="audio_call">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">Audio Call</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="appointment_type[]" value="chat">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">Chat</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <!-- Add more options as needed -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Filter Buttons -->
                                            <div class="filter-reset-btns">
                                                <button type="reset" class="btn btn-light">Reset</button>
                                                <button type="submit" class="btn btn-primary">Filter Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                    </div>

                    <div class="tab-content appointment-tab-content">
                        <div class="tab-pane fade show active" id="pills-upcoming" role="tabpanel" aria-labelledby="pills-upcoming-tab">
                            <!-- Appointment List -->
                            @foreach($appointments as $appointment)
                            <div class="appointment-wrap">
                              
                                <ul>
                                    <li>
                                        <div class="patinet-information">
                                            <a href="{{ url('doctor-upcoming-appointment', $appointment->id) }}">
                                                <img src="{{ URL::asset('/assets/img/services-six-1.png') }}" alt="User Image">
                                            </a>
                                            <div class="patient-info">
                                                <p>#Apt{{ str_pad($appointment->id, 4, '0', STR_PAD_LEFT) }}</p>
                                                <h6><a href="{{ url('doctor-upcoming-appointment') }}">{{ $appointment->user->name }}</a></h6> 
                                            </div>
                                        </div>
                                    </li>
                            
                                    <li class="appointment-info">
                                        <p><i class="fa-solid fa-clock"></i>{{ \Carbon\Carbon::parse($appointment->start_date)->format('d M Y h:i A') }}</p>
                                        <ul class="d-flex apponitment-types">
                                            <li>Video Call</li> 
                                        </ul>
                                    </li>
                            
                                    <li class="mail-info-patient">
                                        <ul>
                                            <li><i class="fa-solid fa-envelope"></i>{{ $appointment->user->email }}</li>
                                            <li><i class="fa-solid fa-phone"></i>{{ $appointment->user->phone }}</li> 
                                        </ul>
                                    </li>
                            
                                    <li class="appointment-action">
                                        <ul>
                                            {{-- <li>
                                                <a href="{{url('doctor-upcoming-appointment')}}"><i class="fa-solid fa-eye"></i></a>
                                            </li> --}}
                                            <li>
                                                <a href="#"><i class="fa-solid fa-comments"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"
                                                data-bs-toggle="modal" data-bs-target="#delete_record"
                                                data-id="{{ $appointment->id }}"
                                                data-route="{{ route('appointments-remove', ':id') }}" ><i class="fa-solid fa-xmark"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                            
                                    {{-- <li class="appointment-start">
                                        <a href="{{ url('doctor-appointment-start', $appointment->id) }}" class="start-link">Start Now</a>
                                    </li> --}}
                                    <li class="appointment-start">
                                        @if($appointment->google_meet_link)
                                            <a href="{{ $appointment->google_meet_link }}" class="start-link" target="_blank">Start Now</a>
                                        @else
                                            <span class="start-link disabled">No link available</span>
                                        @endif
                                    </li>
                                </ul>
                              
                            </div>
                            @endforeach

                            <!-- Pagination -->
                            <div class="pagination dashboard-pagination">
                                {{ $appointments->links('vendor.pagination.custom') }}
                            </div>
                            
                            <!-- /Pagination -->

                        </div>
                        <div class="tab-pane fade" id="pills-cancel" role="tabpanel" aria-labelledby="pills-cancel-tab">
                            <!-- Appointment List -->
                            @foreach ($appointmentRejectedRequests as $rejected)
                            <div class="appointment-wrap">
                             
                                <ul>
                                    <li>
                                        <div class="patinet-information">
                                            <a href="{{url('doctor-completed-appointment')}}">
                                                <img src="{{$rejected->user->profile_image ?? URL::asset('/assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
                                            </a>
                                            <div class="patient-info">
                                                <p>#{{ $rejected->id ?? "--"  }}</p>
                                                <h6><a href="{{url('doctor-completed-appointment')}}">{{ $rejected->user->name ?? "--"  }}</a></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="appointment-info">
                                        <p><i class="fa-solid fa-clock"></i>{{ $rejected->booking_date ?? '--' }}</p>
                                        <ul class="d-flex apponitment-types">
                                            <li>General Visit</li>
                                            <li>Video Call</li>
                                        </ul>
                                        
                                    </li>
                                    <li class="appointment-detail-btn">
                                        <a href="{{url('doctor-completed-appointment')}}" class="start-link">View Details</a>
                                    </li>
                                </ul>
                              
                            </div>
                            @endforeach
                            <!-- Pagination -->
                            <div class="pagination dashboard-pagination">
                                {{ $appointments->links('vendor.pagination.custom') }}
                            </div>
                            <!-- /Pagination -->
                        </div>
                        <div class="tab-pane fade" id="pills-complete" role="tabpanel" aria-labelledby="pills-complete-tab">
                            <!-- Appointment List -->
                            @foreach ($appointmentCompleted as $completed)
                            <div class="appointment-wrap">
                              
                                <ul>
                                    <li>
                                        <div class="patinet-information">
                                            <a href="{{url('doctor-completed-appointment')}}">
                                                <img src="{{$completed->user->profile_image ?? URL::asset('/assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
                                            </a>
                                            <div class="patient-info">
                                                <p>#{{ $completed->id ?? "--"  }}</p>
                                                <h6><a href="{{url('doctor-completed-appointment')}}">{{ $completed->user->name ?? "--"  }}</a></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="appointment-info">
                                        <p><i class="fa-solid fa-clock"></i>{{ \Carbon\Carbon::parse($completed->start_date)->format('d M Y h:i A') }}</p>
                                        <ul class="d-flex apponitment-types">
                                            <li>General Visit</li>
                                            <li>Video Call</li>
                                        </ul>
                                        
                                    </li>
                                    <li class="appointment-detail-btn">
                                        <a href="{{url('doctor-completed-appointment')}}" class="start-link">View Details</a>
                                    </li>
                                </ul>
                             
                               
                            </div>
                            @endforeach
                            <!-- Pagination -->
                            <div class="pagination dashboard-pagination">
                                {{ $appointments->links('vendor.pagination.custom') }}
                            </div>
                            <!-- /Pagination -->
                        </div>
                        <div class="tab-pane fade" id="pills-create-meeting" role="tabpanel" aria-labelledby="pills-create-meeting-tab">
                            <div class="setting-title">
                                <h5>Start Meeting</h5>
                            </div>
                            <form action="{{ route('google.meet.create') }}" method="POST">
                                @csrf
                                <div class="setting-card">
                                    <div class="add-info membership-infos">
                                        <div class="row membership-content">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Title <span class="text-danger">*</span></label>
                                                    <input  id="title" name="title" type="text" class="form-control"
                                                        placeholder="Add Title">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-wrap w-100">
                                                        <label class="col-form-label">description</label>
                                                        <input name="description" type="text" class="form-control">
                                                    </div>   
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-6">
                                                <div class="form-wrap w-100">
                                                    <label class="col-form-label">Start Time</label>
                                                    <input type="datetime-local" name="start_date" class="form-control" id="start_date">
                                                </div>
                                                <div class="form-wrap w-100">
                                                    <label class="col-form-label">End Time</label>
                                                    <input type="datetime-local" name="end_date" class="form-control" id="end_date">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-6">
                                                <div class="form-wrap w-100">
                                                    <label class="col-form-label">Email/add attendee</label>
                                                    <input type="email" name="email" class="form-control">
                                                </div>
                                               
                                            </div>
        
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <a href="#" class="add-membership-info more-item">Add New</a>
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

        </div>

    </div>		

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function getDateTimeString(daysToAdd) {
                const date = new Date();
                date.setDate(date.getDate() + daysToAdd);
                const year = date.getFullYear();
                const month = String(date.getMonth() + 1).padStart(2, '0');
                const day = String(date.getDate()).padStart(2, '0');
                const hours = String(date.getHours()).padStart(2, '0');
                const minutes = String(date.getMinutes()).padStart(2, '0');
                return `${year}-${month}-${day}T${hours}:${minutes}`;
            }
    
            const startDateInput = document.getElementById("start_date");
            const endDateInput = document.getElementById("end_date");
    
            const startTime = getDateTimeString(7); // +7 days
            startDateInput.min = startTime;
            startDateInput.value = startTime;
    
            const endTime = getDateTimeString(8); // +8 days (you can adjust this)
            endDateInput.min = startTime;
            endDateInput.value = endTime;
        });
    </script>
    <!-- /Page Content -->
@endsection
