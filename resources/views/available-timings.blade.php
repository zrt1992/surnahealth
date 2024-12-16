<?php $page = 'available-timings'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Available Timings
        @endslot
        @slot('li_1')
            Available Timings
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

                    <div class="dashboard-header">
                        <h3>Available Timings</h3>
                    </div>

                    <div class="appointment-tabs">
                        <ul class="nav available-nav">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#" data-bs-toggle="tab"
                                    data-bs-target="#general-availability">General Availability</a>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                                <a class="nav-link" href="#" data-bs-toggle="tab"
                                    data-bs-target="#clinic-availability">Clinic Availability</a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="tab-content pt-0 timing-content">

                        <!-- General Availability -->
                        <div class="tab-pane fade show active" id="general-availability">
                            <form action="{{ route('available-timings-update') }}" method="POST">
                                @csrf
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h3>Select Available Slots</h3>
                                        </div>

                                        <div class="available-tab">
                                            <label class="form-label">Select Available days</label>
                                            <ul class="nav">
                                                <li>
                                                    <a href="#" class="active" data-bs-toggle="tab"
                                                        data-bs-target="#monday">Monday</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tab"
                                                        data-bs-target="#tuesday">Tuesday</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tab"
                                                        data-bs-target="#wednesday">Wednesday</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tab"
                                                        data-bs-target="#thursday">Thursday</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tab"
                                                        data-bs-target="#friday">Friday</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tab"
                                                        data-bs-target="#saturday">Saturday</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tab"
                                                        data-bs-target="#sunday">Sunday</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-content pt-0">

                                            <!-- Slot -->
                                            <div class="tab-pane active show" id="monday">
                                                <div class="slot-box">
                                                    <div class="slot-header">
                                                        <h5>Monday</h5>
                                                        <ul>
                                                            <li>
                                                                <a href="#" class="add-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#add_slot" data-day="Monday"
                                                                    data-availability="global">Add Slots</a>

                                                            </li>
                                                            <li>
                                                                <a href="#" class="del-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_slot">Delete All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="slot-body">
                                                        {{-- <ul class="time-slots">
                                                        <li><i class="fa-regular fa-clock"></i>09:00 AM</li>
                                                        <li><i class="fa-regular fa-clock"></i>09:30 AM</li>
                                                        <li class="slot-space">Space : 2</li>
                                                        <li><i class="fa-regular fa-clock"></i>10:30 AM</li>
                                                        <li><i class="fa-regular fa-clock"></i>11:00 AM</li>
                                                    </ul> --}}
                                                        <ul class="time-slots">
                                                            @forelse ($data as $slots)
                                                                @if ($slots->user_id == $auth->id && $slots->availability_type == 'global' && $slots->availability_day == 'Monday')
                                                                    <li><i
                                                                            class="fa-regular fa-clock"></i>{{ $slots->start_time }}
                                                                    </li>
                                                                @endif
                                                            @empty
                                                                <p>No Slots Available</p>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Slot -->

                                            <!-- Slot -->
                                            <div class="tab-pane fade" id="tuesday">
                                                <div class="slot-box">
                                                    <div class="slot-header">
                                                        <h5>Tuesday</h5>
                                                        <ul>
                                                            <li>
                                                                <a href="#" class="add-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#add_slot" data-day="Tuesday"
                                                                    data-availability="global">Add
                                                                    Slots</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="del-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_slot">Delete All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="slot-body">
                                                        <ul class="time-slots">
                                                            @forelse ($data as $slots)
                                                                @if ($slots->user_id == $auth->id && $slots->availability_type == 'global' && $slots->availability_day == 'Tuesday')
                                                                    <li><i
                                                                            class="fa-regular fa-clock"></i>{{ $slots->start_time }}
                                                                    </li>
                                                                @endif
                                                            @empty
                                                                <p>No Slots Available</p>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Slot -->

                                            <!-- Slot -->
                                            <div class="tab-pane fade" id="wednesday">
                                                <div class="slot-box">
                                                    <div class="slot-header">
                                                        <h5>Wednesday</h5>
                                                        <ul>
                                                            <li>
                                                                <a href="#" class="add-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#add_slot" data-day="Wednesday"
                                                                    data-availability="global">Add
                                                                    Slots</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="del-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_slot">Delete All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="slot-body">
                                                        <ul class="time-slots">
                                                            @forelse ($data as $slots)
                                                                @if ($slots->user_id == $auth->id && $slots->availability_type == 'global' && $slots->availability_day == 'Wednesday')
                                                                    <li><i
                                                                            class="fa-regular fa-clock"></i>{{ $slots->start_time }}
                                                                    </li>
                                                                @endif
                                                            @empty
                                                                <p>No Slots Available</p>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Slot -->

                                            <!-- Slot -->
                                            <div class="tab-pane fade" id="thursday">
                                                <div class="slot-box">
                                                    <div class="slot-header">
                                                        <h5>Thursday</h5>
                                                        <ul>
                                                            <li>
                                                                <a href="#" class="add-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#add_slot" data-day="Thursday"
                                                                    data-availability="global">Add
                                                                    Slots</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="del-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_slot">Delete All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="slot-body">
                                                        <ul class="time-slots">
                                                            @forelse ($data as $slots)
                                                                @if ($slots->user_id == $auth->id && $slots->availability_type == 'global' && $slots->availability_day == 'Thursday')
                                                                    <li><i
                                                                            class="fa-regular fa-clock"></i>{{ $slots->start_time }}
                                                                    </li>
                                                                @endif
                                                            @empty
                                                                <p>No Slots Available</p>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Slot -->

                                            <!-- Slot -->
                                            <div class="tab-pane fade" id="friday">
                                                <div class="slot-box">
                                                    <div class="slot-header">
                                                        <h5>Friday</h5>
                                                        <ul>
                                                            <li>
                                                                <a href="#" class="add-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#add_slot" data-day="Friday"
                                                                    data-availability="global">Add Slots</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="del-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_slot">Delete All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="slot-body">
                                                        <ul class="time-slots">
                                                            @forelse ($data as $slots)
                                                                @if ($slots->user_id == $auth->id && $slots->availability_type == 'global' && $slots->availability_day == 'Friday')
                                                                    <li><i
                                                                            class="fa-regular fa-clock"></i>{{ $slots->start_time }}
                                                                    </li>
                                                                @endif
                                                            @empty
                                                                <p>No Slots Available</p>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Slot -->

                                            <!-- Slot -->
                                            <div class="tab-pane fade" id="saturday">
                                                <div class="slot-box">
                                                    <div class="slot-header">
                                                        <h5>Saturday</h5>
                                                        <ul>
                                                            <li>
                                                                <a href="#" class="add-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#add_slot" data-day="Saturday"
                                                                    data-availability="global">Add
                                                                    Slots</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="del-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_slot">Delete All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="slot-body">
                                                        <ul class="time-slots">
                                                            @forelse ($data as $slots)
                                                                @if ($slots->user_id == $auth->id && $slots->availability_type == 'global' && $slots->availability_day == 'Saturday')
                                                                    <li><i
                                                                            class="fa-regular fa-clock"></i>{{ $slots->start_time }}
                                                                    </li>
                                                                @endif
                                                            @empty
                                                                <p>No Slots Available</p>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Slot -->

                                            <!-- Slot -->
                                            <div class="tab-pane fade" id="sunday">
                                                <div class="slot-box">
                                                    <div class="slot-header">
                                                        <h5>Sunday</h5>
                                                        <ul>
                                                            <li>
                                                                <a href="#" class="add-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#add_slot" data-day="Sunday"
                                                                    data-availability="global">Add Slots</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="del-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_slot">Delete All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="slot-body">
                                                        <ul class="time-slots">
                                                            @forelse ($data as $slots)
                                                                @if ($slots->user_id == $auth->id && $slots->availability_type == 'global' && $slots->availability_day == 'Sunday')
                                                                    <li><i
                                                                            class="fa-regular fa-clock"></i>{{ $slots->start_time }}
                                                                    </li>
                                                                @endif
                                                            @empty
                                                                <p>No Slots Available</p>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Slot -->

                                            <div class="form-wrap">
                                                <label class="col-form-label">Appointment Fees ($)</label>
                                                <input type="text" class="form-control" value="{{ $auth->consultation_fees ?? '' }}"
                                                    name="consultation_fees">
                                            </div>
                                            <div class="modal-btn text-end">
                                                <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                                    data-bs-dismiss="modal">Cancel</a>
                                                <button type="submit" class="btn btn-primary prime-btn">Save
                                                    Changes</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /General Availability -->

                        <!-- Clinic Availability -->
                        <div class="tab-pane fade" id="clinic-availability">
                            <form action="{{ route('available-timings-update') }}" method="POST">
                                @csrf
                                <div class="clinic-wrap">
                                    <h5>Select Clinic</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select name="select_clinic" class="select-img">
                                                <option
                                                    value="The Family
                                                Dentistry Clinic"
                                                    data-image="assets/img/doctors-dashboard/clinic-01.jpg">The Family
                                                    Dentistry Clinic</option>
                                                <option
                                                    value="Dentistry
                                                Clinic"
                                                    data-image="assets/img/doctors-dashboard/clinic-02.jpg">Dentistry
                                                    Clinic</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h3>Select Available Slots</h3>
                                        </div>

                                        <div class="available-tab">
                                            <label class="form-label">Select Available days</label>
                                            <ul class="nav">
                                                <li>
                                                    <a href="#" class="active" data-bs-toggle="tab"
                                                        data-bs-target="#monday-slot">Monday</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tab"
                                                        data-bs-target="#tuesday-slot">Tuesday</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tab"
                                                        data-bs-target="#wednesday-slot">Wedneday</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tab"
                                                        data-bs-target="#thursday-slot">Thursday</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tab"
                                                        data-bs-target="#friday-slot">Friday</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tab"
                                                        data-bs-target="#saturday-slot">Saturday</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-toggle="tab"
                                                        data-bs-target="#sunday-slot">Sunday</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-content pt-0">

                                            <!-- Slot -->
                                            <div class="tab-pane active show" id="monday-slot">
                                                <div class="slot-box">
                                                    <div class="slot-header">
                                                        <h5>Monday</h5>
                                                        <ul>
                                                            <li>
                                                                <a href="#" class="add-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#add_slot" data-day="Monday"
                                                                    data-availability="clinic">Add Slots</a>

                                                            </li>
                                                            <li>
                                                                <a href="#" class="del-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_slot">Delete All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="slot-body">
                                                        {{-- <ul class="time-slots">
                                                        <li><i class="fa-regular fa-clock"></i>09:00 AM</li>
                                                        <li><i class="fa-regular fa-clock"></i>09:30 AM</li>
                                                        <li class="slot-space">Space : 2</li>
                                                        <li><i class="fa-regular fa-clock"></i>10:30 AM</li>
                                                        <li><i class="fa-regular fa-clock"></i>11:00 AM</li>
                                                    </ul> --}}
                                                        <ul class="time-slots">
                                                            @forelse ($data as $slots)
                                                                @if ($slots->user_id == $auth->id && $slots->availability_type == 'clinic' && $slots->availability_day == 'Monday')
                                                                    <li><i
                                                                            class="fa-regular fa-clock"></i>{{ $slots->start_time }}
                                                                    </li>
                                                                @endif
                                                            @empty
                                                                <p>No Slots Available</p>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Slot -->

                                            <!-- Slot -->
                                            <div class="tab-pane fade" id="tuesday-slot">
                                                <div class="slot-box">
                                                    <div class="slot-header">
                                                        <h5>Tuesday</h5>
                                                        <ul>
                                                            <li>
                                                                <a href="#" class="add-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#add_slot" data-day="Tuesday"
                                                                    data-availability="clinic">Add
                                                                    Slots</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="del-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_slot">Delete All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="slot-body">
                                                        <ul class="time-slots">
                                                            @forelse ($data as $slots)
                                                                @if ($slots->user_id == $auth->id && $slots->availability_type == 'clinic' && $slots->availability_day == 'Tuesday')
                                                                    <li><i
                                                                            class="fa-regular fa-clock"></i>{{ $slots->start_time }}
                                                                    </li>
                                                                @endif
                                                            @empty
                                                                <p>No Slots Available</p>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Slot -->

                                            <!-- Slot -->
                                            <div class="tab-pane fade" id="wednesday-slot">
                                                <div class="slot-box">
                                                    <div class="slot-header">
                                                        <h5>Wednesday</h5>
                                                        <ul>
                                                            <li>
                                                                <a href="#" class="add-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#add_slot" data-day="Wednesday"
                                                                    data-availability="clinic">Add
                                                                    Slots</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="del-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_slot">Delete All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="slot-body">
                                                        <ul class="time-slots">
                                                            @forelse ($data as $slots)
                                                                @if ($slots->user_id == $auth->id && $slots->availability_type == 'clinic' && $slots->availability_day == 'Wednesday')
                                                                    <li><i
                                                                            class="fa-regular fa-clock"></i>{{ $slots->start_time }}
                                                                    </li>
                                                                @endif
                                                            @empty
                                                                <p>No Slots Available</p>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Slot -->

                                            <!-- Slot -->
                                            <div class="tab-pane fade" id="thursday-slot">
                                                <div class="slot-box">
                                                    <div class="slot-header">
                                                        <h5>Thursday</h5>
                                                        <ul>
                                                            <li>
                                                                <a href="#" class="add-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#add_slot" data-day="Thursday"
                                                                    data-availability="clinic">Add
                                                                    Slots</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="del-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_slot">Delete All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="slot-body">
                                                        <ul class="time-slots">
                                                            @forelse ($data as $slots)
                                                                @if ($slots->user_id == $auth->id && $slots->availability_type == 'clinic' && $slots->availability_day == 'Thursday')
                                                                    <li><i
                                                                            class="fa-regular fa-clock"></i>{{ $slots->start_time }}
                                                                    </li>
                                                                @endif
                                                            @empty
                                                                <p>No Slots Available</p>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Slot -->

                                            <!-- Slot -->
                                            <div class="tab-pane fade" id="friday-slot">
                                                <div class="slot-box">
                                                    <div class="slot-header">
                                                        <h5>Friday</h5>
                                                        <ul>
                                                            <li>
                                                                <a href="#" class="add-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#add_slot" data-day="Friday"
                                                                    data-availability="clinic">Add Slots</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="del-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_slot">Delete All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="slot-body">
                                                        <ul class="time-slots">
                                                            @forelse ($data as $slots)
                                                                @if ($slots->user_id == $auth->id && $slots->availability_type == 'clinic' && $slots->availability_day == 'Friday')
                                                                    <li><i
                                                                            class="fa-regular fa-clock"></i>{{ $slots->start_time }}
                                                                    </li>
                                                                @endif
                                                            @empty
                                                                <p>No Slots Available</p>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Slot -->

                                            <!-- Slot -->
                                            <div class="tab-pane fade" id="saturday-slot">
                                                <div class="slot-box">
                                                    <div class="slot-header">
                                                        <h5>Saturday</h5>
                                                        <ul>
                                                            <li>
                                                                <a href="#" class="add-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#add_slot" data-day="Saturday"
                                                                    data-availability="clinic">Add
                                                                    Slots</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="del-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_slot">Delete All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="slot-body">
                                                        <ul class="time-slots">
                                                            @forelse ($data as $slots)
                                                                @if ($slots->user_id == $auth->id && $slots->availability_type == 'clinic' && $slots->availability_day == 'Saturday')
                                                                    <li><i
                                                                            class="fa-regular fa-clock"></i>{{ $slots->start_time }}
                                                                    </li>
                                                                @endif
                                                            @empty
                                                                <p>No Slots Available</p>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Slot -->

                                            <!-- Slot -->
                                            <div class="tab-pane fade" id="sunday-slot">
                                                <div class="slot-box">
                                                    <div class="slot-header">
                                                        <h5>Sunday</h5>
                                                        <ul>
                                                            <li>
                                                                <a href="#" class="add-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#add_slot" data-day="Sunday"
                                                                    data-availability="clinic">Add Slots</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="del-slot" data-bs-toggle="modal"
                                                                    data-bs-target="#delete_slot">Delete All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="slot-body">
                                                        <ul class="time-slots">
                                                            @forelse ($data as $slots)
                                                                @if ($slots->user_id == $auth->id && $slots->availability_type == 'clinic' && $slots->availability_day == 'Sunday')
                                                                    <li><i
                                                                            class="fa-regular fa-clock"></i>{{ $slots->start_time }}
                                                                    </li>
                                                                @endif
                                                            @empty
                                                                <p>No Slots Available</p>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Slot -->

                                            <div class="form-wrap">
                                                <label class="col-form-label">Appointment Fees ($)</label>
                                                <input type="text" class="form-control" value="{{ $auth->consultation_fees ?? '' }}"
                                                    name="consultation_fees">
                                            </div>
                                            <div class="modal-btn text-end">
                                                <a href="#" class="btn btn-gray" data-bs-toggle="modal"
                                                    data-bs-dismiss="modal">Cancel</a>
                                                <button type="submit" class="btn btn-primary prime-btn">Save
                                                    Changes</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /Clinic Availability -->

                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {

            $('.add-slot').on('click', function() {

                var selectedDay = $(this).data('day');
                var availabilityType = $(this).data('availability');
                console.log("Selected Day: " + selectedDay);

                $('#selected_day').val(selectedDay);
                $('#availability_type').val(availabilityType);
                $('.modal-title').text('Add New Slot for ' + selectedDay);
            });
        });
    </script>
    <!-- /Page Content -->
@endsection
