<?php $page = 'booking'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            {{ __('messages.booking')}}
        @endslot
        @slot('li_1')
            {{ __('messages.booking')}}
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="booking-doc-info">
                                <a href="{{ route('frontend.doctor-profile', ['doctor_id' => null]) }}" class="booking-doc-img">
                                    <img src="{{ $doctor->profile_image ?? URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                        alt="User Image">
                                </a>
                                <div class="booking-info">
                                    <h4><a href="{{ route('frontend.doctor-profile', ['doctor_id' => null]) }}">Dr.
                                            {{ $doctor->name ?? '--' }}</a></h4>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">{{ $doctor->rating ?? '--' }}</span>
                                    </div>
                                    <p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i>
                                        {{ $doctor->city ?? '--' }}, {{ $doctor->country ?? '--' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-6">
                            <h4 class="mb-1">{{ $currentDate ?? '11 November 2023' }}</h4>
                            <p class="text-muted">{{ $currentDay ?? 'Monday' }}</p>
                        </div>
                        <div class="col-12 col-sm-8 col-md-6 text-sm-end">
                            <div class="bookingrange btn btn-white btn-sm mb-3">
                                <i class="far fa-calendar-alt me-2"></i>
                                <span></span>
                                <i class="fas fa-chevron-down ms-2"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Schedule Widget -->
                    <form id="bookingForm" action="{{ route('book-appointment.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="doctor_id" id="doctor_id" value="{{ $doctor->id ?? '' }}">
                        <input type="hidden" name="slot_id" id="slot_id" value="">

                        <input type="hidden" name="booking_date" id="booking_date" value="">
                        <input type="hidden" name="start_time" id="start_time" value="">
                        <input type="hidden" name="end_time" id="end_time" value="">
                        <div class="card booking-schedule schedule-widget">

                            <!-- Schedule Header -->
                            <div class="schedule-header">
                                <div class="row">
                                    <div class="col-md-12">

                                        <!-- Day Slot -->
                                        <div class="day-slot">
                                            <ul id="week-container">
                                                <li class="left-arrow">
                                                    <a href="#" onclick="previousWeek()">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </a>
                                                </li>
                                                <!-- Weekdays and dates will be populated here -->
                                                <li class="right-arrow">
                                                    <a href="#" onclick="nextWeek()">
                                                        <i class="fa fa-chevron-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /Day Slot -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Schedule Header -->

                            <!-- Schedule Content -->
                            <div class="schedule-cont">
                                <div class="row">
                                    <div class="col-md-12">

                                        <!-- Time Slot -->
                                        <div class="time-slot d-flex">
                                            @if ($doctor && $doctor->availableTimings->count())
                                                <ul class=" clearfix list-group w-100">
                                                    @foreach ($doctor->availableTimings as $slot)
                                                        @if ($slot->availability_day == 'Monday')
                                                            <li class="my-2 list-group-item w-100">
                                                                <a class="timing" href="javascript:;"
                                                                    data-slot-id="{{ $slot->id }}"
                                                                    onclick="selectSlot('{{ $slot->id }}', '{{ $slot->start_time }}', '{{ $slot->end_time }}', '{{ $slot->availability_day }}')">
                                                                    <span>{{ $slot->start_time }}</span>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                                <ul class=" clearfix list-group w-100">
                                                    @foreach ($doctor->availableTimings as $slot)
                                                        @if ($slot->availability_day == 'Tuesday')
                                                            <li class="my-2 list-group-item w-100">
                                                                <a class="timing" href="javascript:;"
                                                                    data-slot-id="{{ $slot->id }}"
                                                                    onclick="selectSlot('{{ $slot->id }}', '{{ $slot->start_time }}', '{{ $slot->end_time }}', '{{ $slot->availability_day }}')">
                                                                    <span>{{ $slot->start_time }}</span>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                                <ul class=" clearfix list-group w-100">
                                                    @foreach ($doctor->availableTimings as $slot)
                                                        @if ($slot->availability_day == 'Wednesday')
                                                            <li class="my-2 list-group-item w-100">
                                                                <a class="timing" href="javascript:;"
                                                                    data-slot-id="{{ $slot->id }}"
                                                                    onclick="selectSlot('{{ $slot->id }}', '{{ $slot->start_time }}', '{{ $slot->end_time }}', '{{ $slot->availability_day }}')">
                                                                    <span>{{ $slot->start_time }}</span>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                                <ul class=" clearfix list-group w-100">
                                                    @foreach ($doctor->availableTimings as $slot)
                                                        @if ($slot->availability_day == 'Thursday')
                                                            <li class="my-2 list-group-item w-100">
                                                                <a class="timing" href="javascript:;"
                                                                    data-slot-id="{{ $slot->id }}"
                                                                    onclick="selectSlot('{{ $slot->id }}', '{{ $slot->start_time }}', '{{ $slot->end_time }}', '{{ $slot->availability_day }}')">
                                                                    <span>{{ $slot->start_time }}</span>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                                <ul class=" clearfix list-group w-100">
                                                    @foreach ($doctor->availableTimings as $slot)
                                                        @if ($slot->availability_day == 'Friday')
                                                            <li class="my-2 list-group-item w-100">
                                                                <a class="timing" href="javascript:;"
                                                                    data-slot-id="{{ $slot->id }}"
                                                                    onclick="selectSlot('{{ $slot->id }}', '{{ $slot->start_time }}', '{{ $slot->end_time }}', '{{ $slot->availability_day }}')">
                                                                    <span>{{ $slot->start_time }}</span>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                                <ul class=" clearfix list-group w-100">
                                                    @foreach ($doctor->availableTimings as $slot)
                                                        @if ($slot->availability_day == 'Saturday')
                                                            <li class="my-2 list-group-item w-100">
                                                                <a class="timing" href="javascript:;"
                                                                    data-slot-id="{{ $slot->id }}"
                                                                    onclick="selectSlot('{{ $slot->id }}', '{{ $slot->start_time }}', '{{ $slot->end_time }}', '{{ $slot->availability_day }}')">
                                                                    <span>{{ $slot->start_time }}</span>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                                <ul class=" clearfix list-group w-100">
                                                    @foreach ($doctor->availableTimings as $slot)
                                                        @if ($slot->availability_day == 'Sunday')
                                                            <li class="my-2 list-group-item w-100">
                                                                <a class="timing" href="javascript:;"
                                                                    data-slot-id="{{ $slot->id }}"
                                                                    onclick="selectSlot('{{ $slot->id }}', '{{ $slot->start_time }}', '{{ $slot->end_time }}', '{{ $slot->availability_day }}')">
                                                                    <span>{{ $slot->start_time }}</span>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            @else
                                            <div>
                                                {{ __('messages.no_available_timings')}}
                                            </div>
                                            @endif
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- /Schedule Content -->

                        </div>
                        <div class="submit-section proceed-btn text-end">
                            <button type="submit" class="btn btn-primary">{{ __('messages.proceed_to_book')}}</button>
                        </div>
                    </form>
                    <!-- /Schedule Widget -->

                    <!-- Submit Section -->
                    {{-- <div class="submit-section proceed-btn text-end">
                        <a href="{{ url('checkout') }}" class="btn btn-primary submit-btn">Proceed to Pay</a>
                    </div> --}}

                    <!-- /Submit Section -->
                </div>
            </div>
        </div>
       
    </div>

    @include('layout.partials.custom_scripts')
    <!-- /Page Content -->
@endsection
