<?php $page = 'favourites'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Favourites
        @endslot
        @slot('li_1')
            Favourites
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
                        <h3>{{ __('messages.doctors') }}</h3>

                        <ul class="header-list-btns">
                            <li>
                                <div class="input-block dash-search-input">
                                    <form method="GET" action="{{ route('favourites') }}" id="searchForm">
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

                        </ul>
                    </div>
                    <div class="appointment-tab-head d-flex justify-content-end">

                        <div class="filter-head">

                            <div class="form-sorts dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" id="table-filter"><i
                                        class="fa-solid fa-filter me-2"></i>{{ __('messages.filter_by') }}</a>
                                <div class="filter-dropdown-menu">
                                    <div class="filter-set-view">
                                        <form method="GET" action="{{ route('favourites') }}">
                                            <div class="accordion" id="accordionExample">
                                                <div class="filter-set-content">
                                                    <div class="filter-set-content-head">
                                                        <a href="#" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">{{ __('messages.specialization') }}<i
                                                                class="fa-solid fa-chevron-right"></i></a>
                                                    </div>
                                                    <div class="filter-set-contents accordion-collapse collapse show"
                                                        id="collapseTwo" data-bs-parent="#accordionExample">
                                                        {{-- <ul>
                                                        <li>
                                                            <div class="input-block dash-search-input w-100">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Search">
                                                                <span class="search-icon"><i
                                                                        class="fa-solid fa-magnifying-glass"></i></span>
                                                            </div>
                                                        </li>
                                                    </ul> --}}
                                                        <ul>
                                                            <li>

                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="specialization[]"
                                                                            value="Cardiology">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">{{ __('messages.cardiology') }}</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="specialization[]"
                                                                            value="Dermatology">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">{{ __('messages.dermatology') }}</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="specialization[]"
                                                                            value="Neurology">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">{{ __('messages.neurology') }}</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="specialization[]"
                                                                            value="Surgery">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">{{ __('messages.surgery') }}</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="filter-set-content">
                                                    <div class="filter-set-content-head">
                                                        <a href="#" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">{{ __('messages.location') }}<i
                                                                class="fa-solid fa-chevron-right"></i></a>
                                                    </div>
                                                    <div class="filter-set-contents accordion-collapse collapse show"
                                                        id="collapseOne" data-bs-parent="#accordionExample">
                                                        <ul>
                                                            <li>

                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="location[]"
                                                                            value="new york">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">{{ __('messages.new_york') }}</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="location[]"
                                                                            value="lisbon">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">{{ __('messages.lisbon') }}</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="location[]"
                                                                            value="dubai">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">{{ __('messages.dubai') }}</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="location[]"
                                                                            value="london">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">{{ __('messages.london') }}</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="filter-set-content">
                                                    <div class="filter-set-content-head">
                                                        <a href="#" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree">{{ __('messages.language') }}<i
                                                                class="fa-solid fa-chevron-right"></i></a>
                                                    </div>
                                                    <div class="filter-set-contents accordion-collapse collapse show"
                                                        id="collapseThree" data-bs-parent="#accordionExample">
                                                        <ul>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="language[]"
                                                                            value="english">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">{{ __('messages.english') }}</span>
                                                                    </label>
                                                                </div>

                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="language[]"
                                                                            value="portugues">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">{{ __('messages.portugues') }}</span>
                                                                    </label>
                                                                </div>

                                                            </li>


                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" name="language[]"
                                                                            value="Arabic">
                                                                        <span class="checkmarks"></span>
                                                                        <span class="check-title">{{ __('messages.arabic') }}</span>
                                                                    </label>
                                                                </div>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="filter-reset-btns">
                                                <a href="{{ url('doctor/doctor-appointments') }}" class="btn btn-light">{{ __('messages.reset') }}</a>
                                                <button type="submit" class="btn btn-primary">{{ __('messages.filter_now') }}</button>
                                                {{-- <a href="{{ url('doctor/doctor-appointments') }}" class="btn btn-primary">Filter Now</a> --}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Favourites -->
                    <div class="row">
                        @foreach ($data as $doctor)
                            <div class="col-md-6 col-lg-4">
                                <div class="profile-widget patient-favour">
                                    <div class="fav-head">
                                        <a href="javascript:void(0)" class="fav-btn favourite-btn">
                                            <span class="favourite-icon favourite"><i
                                                    class="fa-solid fa-heart"></i></span>
                                        </a>
                                        <div class="doc-img">
                                            <a href="{{ url('doctor-profile-2/' . optional($doctor)->id) }}">
                                                <img class="img-fluid" alt="User Image"
                                                    src="{{ $doctor->profile_image ?? URL::asset('/assets/img/features/feature-01.jpg') }}">
                                            </a>
                                        </div>
                                        <div class="pro-content">
                                            <h3 class="title">
                                                <a
                                                    href="{{ url('doctor-profile-2/' . optional($doctor)->id) }}">{{ $doctor->name }}</a>
                                                <i class="fas fa-check-circle verified"></i>
                                            </h3>
                                            <p class="speciality">{{ $doctor->speciality }}</p>
                                            <div class="rating">
                                                @for ($i = 0; $i < 5; $i++)
                                                    <i class="fas fa-star {{ $i < $doctor->rating ? 'filled' : '' }}"></i>
                                                @endfor
                                                <span class="d-inline-block average-rating">{{ $doctor->rating }}</span>
                                            </div>
                                            <ul class="available-info">
                                                <li>
                                                    <span><i class="fa-solid fa-calendar-day"></i></span>{{ __('messages.next_availability') }}
                                                    :
                                                    {{ $doctor->next_availability }}
                                                </li>
                                                <li>
                                                    <span><i class="fas fa-map-marker-alt"></i></span>{{ __('messages.location_colon') }}
                                                    {{ $doctor->address ?? '--' }},{{ $doctor->city ?? '--' }},{{ $doctor->state ?? '--' }}
                                                </li>
                                            </ul>
                                            <div class="last-book">
                                                <p>{{ __('messages.last_booked_on') }} {{ $doctor->last_booked }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fav-footer">
                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="{{ url('doctor-profile-2/' . optional($doctor)->id) }}"
                                                    class="btn view-btn">{{ __('messages.view_profile') }}</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="{{ url('booking/' . $doctor->id) }}" class="btn book-btn">{{ __('messages.book_now') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col-md-6 col-lg-4">
                        <div class="profile-widget patient-favour">
                            <div class="fav-head">
                                <a href="javascript:void(0)" class="fav-btn favourite-btn">
                                    <span class="favourite-icon favourite"><i class="fa-solid fa-heart"></i></span>
                                </a>
                                <div class="doc-img">
                                    <a href="{{url('doctor-profile')}}">
                                        <img class="img-fluid" alt="User Image" src="{{URL::asset('/assets/img/doctors/doctor-thumb-21.jpg')}}">
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        <a href="{{url('doctor-profile')}}">Dr.Edalin Hendry</a> 
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block average-rating">5.0</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <span><i class="fa-solid fa-calendar-day"></i></span>Next Availability : 23 Mar 2024
                                        </li>
                                        <li>
                                            <span><i class="fas fa-map-marker-alt"></i></span>Location : Newyork, USA
                                        </li>
                                    </ul>
                                    <div class="last-book">
                                        <p>Last Book on 21 Jan 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fav-footer">
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="{{url('doctor-profile')}}" class="btn view-btn">View Details</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{url('booking')}}" class="btn book-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}



                    </div>
                    <!-- /Favourites -->

                    <div class="col-md-12">
                        <div class="loader-item text-center">
                            <a href="javascript:void(0);" class="btn btn-load">{{ __('messages.load_more') }}</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- /Page Content -->
@endsection
