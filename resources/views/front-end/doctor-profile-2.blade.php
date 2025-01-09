<?php $page = 'doctor-profile-2'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            {{ __('messages.doctor_profile')}}
        @endslot
        @slot('li_1')
            {{ __('messages.doctor_profile')}}
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="content">
        <div class="container">

            <!-- Doctor Widget -->
            <div class="card">
                <div class="card-body">
                    <div class="doctor-widget">
                        <div class="doc-info-left">
                            <div class="doctor-img">
                                <img src="{{ $doctor->profile_image ?? URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                    class="img-fluid" alt="User Image">
                            </div>
                            <div class="doc-info-cont">
                                <h4 class="doc-name">Dr. {{ $doctor->name ?? '--' }}</h4>
                                <p class="doc-speciality">
                                    @if (!empty($doctor->doctorEducation) && $doctor->doctorEducation->isNotEmpty())
                                    @foreach ($doctor->doctorEducation as $education)
                                        {{ $education->course ?? 'doctor education' }}
                                    @endforeach
                                @else
                                {{ __('messages.no_education')}}
                                @endif
                                </p>
                                <p class="doc-department">
                                    <img src="{{ URL::asset('/assets/img/specialities/specialities-05.png') }}"
                                         class="img-fluid"
                                         alt="Speciality">
                                         @if (!empty($doctor->doctorSpecialization) && $doctor->doctorSpecialization->count() > 0)
                                         {{ $doctor->doctorSpecialization->first()->name }}
                                     @else
                                     {{ __('messages.no_specialization')}}

                                     @endif
                                </p>
                                
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(0)</span>
                                </div>
                                <div class="clinic-details">
                                    <p class="doc-location"><i class="fas fa-map-marker-alt"></i>
                                        {{ $doctor->city ?? '--' }},{{ $doctor->state ?? '--' }} - <a
                                            href="javascript:void(0);">{{ __('messages.get_directions')}}
                                        </a></p>
                                    <ul class="clinic-gallery">
                                        @if (!empty($doctor->doctorClinic) && $doctor->doctorClinic->isNotEmpty())
                                        @foreach ($doctor->doctorClinic->first()->gallery as $gallery)
                                        <li>
                                            <a href="{{ $gallery->image ?? URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                data-fancybox="gallery">
                                                <img src="{{ $gallery->image ?? URL::asset('/assets/img/features/feature-01.jpg') }}"
                                                    alt="Feature">
                                            </a>
                                        </li>
                                    @endforeach
                                            @else
                                            {{ __('messages.no_clinic')}}

                                            @endif
                                     
                                    </ul>
                                </div>
                                <div class="clinic-services">
                                    <span>clinic service 1</span>
                                    <span>clinic service 2</span>
                                </div>
                            </div>
                        </div>
                        <div class="doc-info-right">
                            <div class="clini-infos">
                                <ul>
                                    <li><i class="far fa-thumbs-up"></i> 0%</li>
                                    <li><i class="far fa-comment"></i> 0 {{ __('messages.feedback')}}
                                    </li>
                                    <li><i class="fas fa-map-marker-alt"></i> {{ $doctor->state ?? '--' }},
                                        {{ $doctor->country ?? '--' }}</li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i>
                                        @if (!empty($doctor->availableTimings) && $doctor->availableTimings->isNotEmpty())
                                            ${{ $doctor->availableTimings->min('appointment_fees') ?? 'N/A' }} - 
                                            ${{ $doctor->availableTimings->max('appointment_fees') ?? 'N/A' }}
                                        @else
                                            N/A - N/A
                                        @endif
                                        <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                    </li>

                                </ul>
                            </div>
                            <div class="doctor-action">
                                <a href="javascript:void(0)" class="btn btn-white fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                                <a href="{{ url('chat') }}" class="btn btn-white msg-btn">
                                    <i class="far fa-comment-alt"></i>
                                </a>
                                <a href="{{ url('voice-call') }}" class="btn btn-white call-btn">
                                    <i class="fas fa-phone"></i>
                                </a>
                                <a href="{{ url('video-call') }}" class="btn btn-white call-btn">
                                    <i class="fas fa-video"></i>
                                </a>
                            </div>
                            <div class="clinic-booking">
                                <a class="apt-btn" href="{{ url('frontend/booking/' . optional($doctor)->id) }}">{{ __('messages.book_appointment')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Doctor Widget -->

            <!-- Doctor Details Tab -->
            <div class="card">
                <div class="card-body pt-0">

                    <!-- Tab Menu -->
                    <nav class="user-tabs mb-4">
                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" href="#doc_overview" data-bs-toggle="tab">{{ __('messages.overview')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doc_locations" data-bs-toggle="tab">{{ __('messages.locations')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doc_reviews" data-bs-toggle="tab">{{ __('messages.reviews')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doc_business_hours" data-bs-toggle="tab">{{ __('messages.business_hours')}}</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /Tab Menu -->

                    <!-- Tab Content -->
                    <div class="tab-content pt-0">

                        <!-- Overview Content -->
                        <div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-md-12 col-lg-9">

                                    <!-- About Details -->
                                    <div class="widget about-widget">
                                        <h4 class="widget-title">{{ __('messages.about_me')}}</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <!-- /About Details -->

                                    <!-- Education Details -->
                                    <div class="widget education-widget">
                                        <h4 class="widget-title">{{ __('messages.education')}}</h4>
                                        <div class="experience-box">
                                            <ul class="experience-list">
                                                @if (!empty($doctor->doctorEducation) && $doctor->doctorEducation->isNotEmpty())
                                                @foreach ($doctor->doctorEducation as $education)
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/"
                                                                class="name">{{ $education->name_of_institution ?? '--' }}</a>
                                                            <div>{{ $education->course ?? '--' }}</div>
                                                            <span class="time">
                                                                {{ \Carbon\Carbon::parse($education->start_date)->format('Y') ?? '--' }}
                                                                -
                                                                {{ \Carbon\Carbon::parse($education->end_date)->format('Y') ?? '--' }}
                                                            </span>

                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                            @else
                                                N/A - N/A
                                            @endif
                                             
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Education Details -->

                                    <!-- Experience Details -->
                                    <div class="widget experience-widget">
                                        <h4 class="widget-title">{{ __('messages.work_experience')}}</h4>
                                        <div class="experience-box">
                                            <ul class="experience-list">
                                                @if (!empty($doctor->availableTimings) && $doctor->availableTimings->isNotEmpty())
                                                @foreach ($doctor->doctorExperiences as $experience)
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/"
                                                                class="name">{{ $experience->hospital ?? '--' }}</a>
                                                            <span class="time">
                                                                {{ \Carbon\Carbon::parse($education['start_date'])->format('Y') }}
                                                                -
                                                                {{ $education['currently_working_here'] ? 'Present' : \Carbon\Carbon::parse($education['end_date'])->format('Y') }}
                                                                ({{ \Carbon\Carbon::parse($education['start_date'])->diffInYears($education['currently_working_here'] ? now() : \Carbon\Carbon::parse($education['end_date'])) }}
                                                                years)
                                                            </span>

                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                            @else
                                                N/A - N/A
                                            @endif
                                            
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Experience Details -->

                                    <!-- Awards Details -->
                                    <div class="widget awards-widget">
                                        <h4 class="widget-title">{{ __('messages.awards')}}</h4>
                                        <div class="experience-box">
                                            <ul class="experience-list">
                                                @if (!empty($doctor->doctorAwards) && $doctor->doctorAwards->isNotEmpty())
                                                @foreach ($doctor->doctorAwards as $award)
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <p class="exp-year">
                                                                {{ $award->year ? \Carbon\Carbon::parse($award->year)->format('F Y') : '--' }}
                                                            </p>
                                                            <h4 class="exp-title">{{ $award->award_name ?? '--' }}
                                                            </h4>
                                                            <p>{{ $award->description ?? '--' }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                            @else
                                                N/A - N/A
                                            @endif
                                              
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Awards Details -->

                                    <!-- Services List -->
                                    <div class="service-list">
                                        <h4>{{ __('messages.services')}}</h4>
                                        <ul class="clearfix">
                                            <li>Tooth cleaning </li>
                                            <li>Root Canal Therapy</li>
                                            <li>Implants</li>
                                            <li>Composite Bonding</li>
                                            <li>Fissure Sealants</li>
                                            <li>Surgical Extractions</li>
                                        </ul>
                                    </div>
                                    <!-- /Services List -->

                                    <!-- Specializations List -->
                                    <div class="service-list">
                                        <h4>{{ __('messages.specializations')}}</h4>
                                        <ul class="clearfix">
                                            @if (!empty($doctor->doctorSpecialization) && $doctor->doctorSpecialization->isNotEmpty())
                                            @foreach ($doctor->doctorSpecialization as $specialization)
                                            <li>{{ $specialization->name }}</li>
                                        @endforeach
                                        @else
                                            N/A - N/A
                                        @endif
                                         
                                        </ul>
                                    </div>
                                    <!-- /Specializations List -->

                                </div>
                            </div>
                        </div>
                        <!-- /Overview Content -->

                        <!-- Locations Content -->
                        <div role="tabpanel" id="doc_locations" class="tab-pane fade">

                            <!-- Location List -->
                            <div class="location-list">
                                <div class="row">
                                    @if (!empty($doctor->doctorClinic) && $doctor->doctorClinic->isNotEmpty())
                                    @foreach ($doctor->doctorClinic as $clinic)
                                        <!-- Clinic Content -->
                                        <div class="col-md-6">
                                            <div class="clinic-content">
                                                <h4 class="clinic-name">
                                                    <a href="#">{{ $clinic->clinic_name ?? 'Clinic Name' }}</a>
                                                </h4>
                                                <p class="doc-speciality">
                                                    @if (!empty($doctor->doctorEducation) && $doctor->doctorEducation->isNotEmpty())
                                                        @foreach ($doctor->doctorEducation as $education)
                                                            {{ $education->course ?? 'doctor education' }}
                                                        @endforeach
                                                    @else
                                                    {{ __('messages.no_education')}}
                                                    @endif
                                                </p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="d-inline-block average-rating">(4)</span>
                                                </div>
                                                <div class="clinic-details mb-0">
                                                    <h5 class="clinic-direction">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        {{ $clinic->address ?? 'Address not provided' }},
                                                        {{ $clinic->location ?? 'Address not provided' }}
                                                        <br>
                                                        <a href="javascript:void(0);">{{ __('messages.get_directions')}}</a>
                                                    </h5>
                                                    <ul>
                                                        @foreach ($clinic->gallery as $image)
                                                            <li>
                                                                <a href="{{ $image->image }}" data-fancybox="gallery2">
                                                                    <img src="{{ $image->image }}" alt="Clinic Image">
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Clinic Content -->

                                        <!-- Clinic Timing -->
                                        <div class="col-md-4">
                                            <div class="clinic-timing">

                                                <div>
                                                    <p class="timings-days">
                                                        <span> Mon - Sat </span>
                                                    </p>
                                                    <p class="timings-times">
                                                        <span>10:00 AM - 2:00 PM</span>
                                                        <span>4:00 PM - 9:00 PM</span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="timings-days">
                                                        <span>Sun</span>
                                                    </p>
                                                    <p class="timings-times">
                                                        <span>10:00 AM - 2:00 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Clinic Timing -->

                                        <!-- Consultation Price -->
                                        <div class="col-md-2">
                                            <div class="consult-price">
                                                ${{ $clinic->consultation_fee ?? 'Not provided' }}
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    N/A - N/A
                                @endif
                                  

                                </div>
                            </div>

                        </div>
                        <!-- /Locations Content -->

                        <!-- Reviews Content -->
                        <div role="tabpanel" id="doc_reviews" class="tab-pane fade">

                            <!-- Review Listing -->
                            <div class="widget review-listing">
                                <ul class="comments-list">

                                    <!-- Comment List -->
                                    <li>
                                        <div class="comment">
                                            <img class="avatar avatar-sm rounded-circle" alt="User Image"
                                                src="{{ URL::asset('/assets/img/patients/patient.jpg') }}">
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <span class="comment-author">Richard Wilson</span>
                                                    <span class="comment-date">Reviewed 2 Days ago</span>
                                                    <div class="review-count rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="recommended"><i class="far fa-thumbs-up"></i> I recommend the
                                                    doctor</p>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation.
                                                    Curabitur non nulla sit amet nisl tempus
                                                </p>
                                                <div class="comment-reply">
                                                    <a class="comment-btn" href="#">
                                                        <i class="fas fa-reply"></i> Reply
                                                    </a>
                                                    <p class="recommend-btn">
                                                        <span>Recommend?</span>
                                                        <a href="#" class="like-btn">
                                                            <i class="far fa-thumbs-up"></i> Yes
                                                        </a>
                                                        <a href="#" class="dislike-btn">
                                                            <i class="far fa-thumbs-down"></i> No
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Comment Reply -->
                                        <ul class="comments-reply">
                                            <li>
                                                <div class="comment">
                                                    <img class="avatar avatar-sm rounded-circle" alt="User Image"
                                                        src="{{ URL::asset('/assets/img/patients/patient1.jpg') }}">
                                                    <div class="comment-body">
                                                        <div class="meta-data">
                                                            <span class="comment-author">Charlene Reed</span>
                                                            <span class="comment-date">Reviewed 3 Days ago</span>
                                                            <div class="review-count rating">
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star filled"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <p class="comment-content">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed do eiusmod tempor incididunt ut labore et dolore magna
                                                            aliqua.
                                                            Ut enim ad minim veniam.
                                                            Curabitur non nulla sit amet nisl tempus
                                                        </p>
                                                        <div class="comment-reply">
                                                            <a class="comment-btn" href="#">
                                                                <i class="fas fa-reply"></i> Reply
                                                            </a>
                                                            <p class="recommend-btn">
                                                                <span>Recommend?</span>
                                                                <a href="#" class="like-btn">
                                                                    <i class="far fa-thumbs-up"></i> Yes
                                                                </a>
                                                                <a href="#" class="dislike-btn">
                                                                    <i class="far fa-thumbs-down"></i> No
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- /Comment Reply -->

                                    </li>
                                    <!-- /Comment List -->

                                    <!-- Comment List -->
                                    <li>
                                        <div class="comment">
                                            <img class="avatar avatar-sm rounded-circle" alt="User Image"
                                                src="{{ URL::asset('/assets/img/patients/patient2.jpg') }}">
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <span class="comment-author">Travis Trimble</span>
                                                    <span class="comment-date">Reviewed 4 Days ago</span>
                                                    <div class="review-count rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation.
                                                    Curabitur non nulla sit amet nisl tempus
                                                </p>
                                                <div class="comment-reply">
                                                    <a class="comment-btn" href="#">
                                                        <i class="fas fa-reply"></i> Reply
                                                    </a>
                                                    <p class="recommend-btn">
                                                        <span>Recommend?</span>
                                                        <a href="#" class="like-btn">
                                                            <i class="far fa-thumbs-up"></i> Yes
                                                        </a>
                                                        <a href="#" class="dislike-btn">
                                                            <i class="far fa-thumbs-down"></i> No
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- /Comment List -->

                                </ul>

                                <!-- Show All -->
                                <div class="all-feedback text-center">
                                    <a href="#" class="btn btn-primary btn-sm">
                                        Show all feedback <strong>(167)</strong>
                                    </a>
                                </div>
                                <!-- /Show All -->

                            </div>
                            <!-- /Review Listing -->

                            <!-- Write Review -->
                            <div class="write-review">
                                <h4>Write a review for <strong>Dr. Darren Elder</strong></h4>

                                <!-- Write Review Form -->
                                <form>
                                    <div class="mb-3">
                                        <label class="mb-2">Review</label>
                                        <div class="star-rating">
                                            <input id="star-5" type="radio" name="rating" value="star-5">
                                            <label for="star-5" title="5 stars">
                                                <i class="active fa fa-star"></i>
                                            </label>
                                            <input id="star-4" type="radio" name="rating" value="star-4">
                                            <label for="star-4" title="4 stars">
                                                <i class="active fa fa-star"></i>
                                            </label>
                                            <input id="star-3" type="radio" name="rating" value="star-3">
                                            <label for="star-3" title="3 stars">
                                                <i class="active fa fa-star"></i>
                                            </label>
                                            <input id="star-2" type="radio" name="rating" value="star-2">
                                            <label for="star-2" title="2 stars">
                                                <i class="active fa fa-star"></i>
                                            </label>
                                            <input id="star-1" type="radio" name="rating" value="star-1">
                                            <label for="star-1" title="1 star">
                                                <i class="active fa fa-star"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Title of your review</label>
                                        <input class="form-control" type="text"
                                            placeholder="If you could say it in one sentence, what would you say?">
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Your review</label>
                                        <textarea id="review_desc" maxlength="100" class="form-control"></textarea>

                                        <div class="d-flex justify-content-between mt-3"><small class="text-muted"><span
                                                    id="chars">100</span> characters remaining</small></div>
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <div class="terms-accept">
                                            <div class="custom-checkbox">
                                                <input type="checkbox" id="terms_accept">
                                                <label for="terms_accept">I have read and accept <a href="#">Terms
                                                        &amp; Conditions</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn">Add Review</button>
                                    </div>
                                </form>
                                <!-- /Write Review Form -->

                            </div>
                            <!-- /Write Review -->

                        </div>
                        <!-- /Reviews Content -->

                        <!-- Business Hours Content -->
                        <div role="tabpanel" id="doc_business_hours" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-6 offset-md-3">

                                    <!-- Business Hours Widget -->
                                    <div class="widget business-widget">
                                        <div class="widget-content">
                                            <div class="listing-hours">
                                                @if (!empty($doctor->doctorBusinessHour) && $doctor->doctorBusinessHour->isNotEmpty())
                                                @foreach ($doctor->doctorBusinessHour as $businessHour)
                                                <div
                                                    class="listing-day {{ strtolower($businessHour->select_business_days) === strtolower(now()->format('l')) ? 'current' : '' }}">
                                                    <div class="day">
                                                        {{ ucfirst($businessHour->select_business_days) }}
                                                        @if (strtolower($businessHour->select_business_days) === strtolower(now()->format('l')))
                                                            <span>{{ now()->format('d M Y') }}</span>
                                                        @endif
                                                    </div>
                                                    <div class="time-items">
                                                        @if ($businessHour->start_time && $businessHour->end_time)
                                                            <span class="time">{{ $businessHour->start_time }} -
                                                                {{ $businessHour->end_time }}</span>
                                                            @if (strtolower($businessHour->select_business_days) === strtolower(now()->format('l')) &&
                                                                    now()->format('H:i A') >= $businessHour->start_time &&
                                                                    now()->format('H:i A') <= $businessHour->end_time)
                                                                <span class="open-status">
                                                                    <span class="badge bg-success-light">Open
                                                                        Now</span>
                                                                </span>
                                                            @endif
                                                        @else
                                                            <span class="badge bg-danger-light">Closed</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach

                                            <!-- Handle Days Without Explicit Timings -->
                                            @php
                                                $days = [
                                                    'monday',
                                                    'tuesday',
                                                    'wednesday',
                                                    'thursday',
                                                    'friday',
                                                    'saturday',
                                                    'sunday',
                                                ];
                                                $availableDays = $doctor->doctorBusinessHour
                                                    ->pluck('select_business_days')
                                                    ->map(function ($day) {
                                                        return strtolower($day);
                                                    })
                                                    ->toArray();
                                            @endphp

                                            @foreach ($days as $day)
                                                @if (!in_array($day, $availableDays))
                                                    <div class="listing-day closed">
                                                        <div class="day">{{ ucfirst($day) }}</div>
                                                        <div class="time-items">
                                                            <span class="badge bg-danger-light">Closed</span>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach

                                            @else
                                                N/A - N/A
                                            @endif
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Business Hours Widget -->

                                </div>
                            </div>
                        </div>
                        <!-- /Business Hours Content -->

                    </div>
                </div>
            </div>
            <!-- /Doctor Details Tab -->

        </div>
    </div>
    <!-- /Page Content -->


@endsection
