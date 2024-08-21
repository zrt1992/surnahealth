<?php $page = 'reviews'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Reviews
        @endslot
        @slot('li_1')
            Reviews
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
                <div class="doc-review">

                    <div class="dashboard-header">
                        <div class="header-back">
                            <h3>Reviews</h3>
                        </div>
                    </div>
                
                    <!-- Review Listing -->
                    <ul class="comments-list">

                        <li class="over-all-review">
                            <div class="review-content">
                                <div class="review-rate">
                                    <h5>Overall Rating</h5>
                                    <div class="star-rated">
                                        <span>4.0</span>
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="position-relative daterange-wraper">
                                    <div class="input-groupicon calender-input">
                                        <input type="text" class="form-control  date-range bookingrange" placeholder="From Date - To Date ">
                                    </div>
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="comments">
                                <div class="comment-head">
                                    <div class="patinet-information">
                                        <a href="javascript:void(0);">
                                            <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
                                        </a>
                                        <div class="patient-info">
                                            <h6><a href="javascript:void(0);">Adrian</a></h6>
                                            <span>15 Mar 2024</span>
                                        </div>
                                    </div>
                                    <div class="star-rated">
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="review-info">
                                    <p> Dr. Edalin Hendry has been my family's trusted doctor for years. 
                                        Their genuine care and thorough approach to our health concerns make every visit reassuring. 
                                        Dr. Edalin Hendry's ability to listen and explain complex health issues in understandable terms
                                        is exceptional. We are grateful to have such a dedicated physician by our side
                                    </p>
                                    <div class="comment-reply">
                                        <a href="#" class="d-inline-flex align-items-center"><i class="fa-solid fa-reply me-2"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                            
                        </li>
                        <li>
                            <div class="comments">
                                <div class="comment-head">
                                    <div class="patinet-information">
                                        <a href="javascript:void(0);">
                                            <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-02.jpg')}}" alt="User Image">
                                        </a>
                                        <div class="patient-info">
                                            <h6><a href="javascript:void(0);">Kelly</a></h6>
                                            <span>11 Mar 2024</span>
                                        </div>
                                    </div>
                                    <div class="star-rated">
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="review-info">
                                    <p>
                                        I recently completed a series of dental treatments with Dr.Edalin Hendry, 
                                        and I couldn't be more pleased with the results. From my very first appointment, Dr. 
                                        Edalin Hendry and their team made me feel completely at ease, addressing all of my concerns 
                                        with patience and understanding. 
                                        Their state-of-the-art office and the staff's attention to comfort and cleanliness were beyond impressive.
                                    </p>
                                    <div class="comment-reply">
                                        <a href="#" class="d-inline-flex align-items-center replied-text"><i class="fa-solid fa-reply me-2"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <div class="replied-comment">
                                        <div class="patinet-information">
                                            <a href="javascript:void(0);">
                                                <img src="{{URL::asset('/assets/img/doctors-dashboard/doctor-profile-img.jpg')}}" alt="User Image">
                                            </a>
                                            <div class="patient-info">
                                                <h6><a href="javascript:void(0);">Dr Edalin Hendry</a></h6>
                                                <span>2 days ago</span>
                                            </div>
                                        </div>
                                        <div class="review-info">
                                            <p>
                                                Thank you so much for taking the time to share your experience at 
                                                our dental clinic. We are deeply touched by your kind words and thrilled to hear about 
                                                the positive impact of your treatment. Our team strives to provide a comfortable, 
                                                welcoming environment for all our patients, and it’s heartening to know we achieved this for you.
                                            </p>
                                            <div class="comment-reply">
                                                <a href="#" class="d-inline-flex align-items-center"><i class="fa-solid fa-reply me-2"></i> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="comments">
                                <div class="comment-head">
                                    <div class="patinet-information">
                                        <a href="javascript:void(0);">
                                            <img src="{{URL::asset('/assets/img/doctors-dashboard/profile-03.jpg')}}" alt="User Image">
                                        </a>
                                        <div class="patient-info">
                                            <h6><a href="javascript:void(0);">Samuel</a></h6>
                                            <span>05 Mar 2024</span>
                                        </div>
                                    </div>
                                    <div class="star-rated">
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star filled"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="review-info">
                                    <p>
                                        From my first consultation through to the completion of my treatment, 
                                        Dr. Edalin Hendry, my dentist, has been nothing short of extraordinary. 
                                        Dental visits have always been a source of anxiety for me, but Dr. Edalin Hendry's office provided an 
                                        atmosphere of calm and reassurance that I had not experienced elsewhere. Highly Recommended!
                                    </p>
                                    <div class="comment-reply">
                                        <a href="#" class="d-inline-flex align-items-center"><i class="fa-solid fa-reply me-2"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                            
                        </li>
                    </ul>
                    <!-- /Comment List -->

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
            </div>
        </div>
    </div>

</div>		
<!-- /Page Content -->
@endsection
