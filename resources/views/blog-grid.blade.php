<?php $page = 'blog-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Blog Grid
        @endslot
        @slot('li_1')
            Blog Grid
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row blog-grid-row">
                        <div class="col-md-6 col-sm-12">
                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/blog/blog-01.jpg') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="{{ url('doctor-profile') }}"><img
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-01.jpg') }}"
                                                        alt="Post Author"> <span>Dr. Ruby Perrin</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> 4 Dec 2023</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">Surna – Making your clinic
                                            painless visit?</a></h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/blog/blog-02.jpg') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="{{ url('doctor-profile') }}"><img
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-02.jpg') }}"
                                                        alt="Post Author"> <span>Dr. Darren Elder</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> 3 Dec 2023</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">What are the benefits of
                                            Online Doctor Booking?</a></h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/blog/blog-03.jpg') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="{{ url('doctor-profile') }}"><img
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-03.jpg') }}"
                                                        alt="Post Author"> <span>Dr. Deborah Angel</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> 3 Dec 2023</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">Benefits of consulting with
                                            an Online Doctor</a></h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/blog/blog-04.jpg') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="{{ url('doctor-profile') }}"><img
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-04.jpg') }}"
                                                        alt="Post Author"> <span>Dr. Sofia Brient</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> 2 Dec 2023</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">5 Great reasons to use an
                                            Online Doctor</a></h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/blog/blog-05.jpg') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="{{ url('doctor-profile') }}"><img
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-05.jpg') }}"
                                                        alt="Post Author"> <span>Dr. Marvin Campbell</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> 1 Dec 2023</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">Online Doctor Appointment
                                            Scheduling</a></h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/blog/blog-06.jpg') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="{{ url('doctor-profile') }}"><img
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-06.jpg') }}"
                                                        alt="Post Author"> <span>Dr. Katharine Berthold</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> 30 Jun 2023</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">Simple steps to make your
                                            doctor visits exceptional!</a></h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/blog/blog-07.jpg') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="{{ url('doctor-profile') }}"><img
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-07.jpg') }}"
                                                        alt="Post Author"> <span>Dr. Linda Tobin</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> 28 Jun 2023</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">Choose your own Online
                                            Doctor Appointment</a></h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/blog/blog-08.jpg') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="{{ url('doctor-profile') }}"><img
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-08.jpg') }}"
                                                        alt="Post Author"> <span>Dr. Paul Richard </span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> 25 Jun 2023</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">Simple steps to visit your
                                            doctor today</a></h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/blog/blog-09.jpg') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="{{ url('doctor-profile') }}"><img
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-09.jpg') }}"
                                                        alt="Post Author"> <span>Dr. John Gibbs</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> 24 Jun 2023</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">5 Great reasons to use an
                                            Online Doctor</a></h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/blog/blog-10.jpg') }}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="{{ url('doctor-profile') }}"><img
                                                        src="{{ URL::asset('/assets/img/doctors/doctor-thumb-10.jpg') }}"
                                                        alt="Post Author"> <span>Dr. Olga Barlow</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> 23 Jun 2023</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="{{ url('blog-details') }}">Online Doctoral
                                            Programs</a></h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                    </div>

                    <!-- Blog Pagination -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-pagination">
                                <nav>
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript:;" tabindex="-1"><i
                                                    class="fas fa-angle-double-left"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:;">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="javascript:;">2 <span
                                                    class="visually-hidden">(current)</span></a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:;">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:;"><i
                                                    class="fas fa-angle-double-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Pagination -->

                </div>

                <!-- Blog Sidebar -->
                <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">

                    <!-- Search -->
                    <div class="card search-widget">
                        <div class="card-body">
                            <form class="search-form">
                                <div class="input-group">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /Search -->

                    <!-- Latest Posts -->
                    <div class="card post-widget">
                        <div class="card-header">
                            <h4 class="card-title">Latest Posts</h4>
                        </div>
                        <div class="card-body">
                            <ul class="latest-posts">
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ url('blog-details') }}">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('/assets/img/blog/blog-thumb-01.jpg') }}"
                                                alt="blog-image">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <h4>
                                            <a href="{{ url('blog-details') }}">Surna – Making your clinic painless
                                                visit?</a>
                                        </h4>
                                        <p>4 Dec 2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ url('blog-details') }}">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('/assets/img/blog/blog-thumb-02.jpg') }}"
                                                alt="blog-image">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <h4>
                                            <a href="{{ url('blog-details') }}">What are the benefits of Online Doctor
                                                Booking?</a>
                                        </h4>
                                        <p>3 Dec 2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ url('blog-details') }}">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('/assets/img/blog/blog-thumb-03.jpg') }}"
                                                alt="blog-image">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <h4>
                                            <a href="{{ url('blog-details') }}">Benefits of consulting with an Online
                                                Doctor</a>
                                        </h4>
                                        <p>3 Dec 2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ url('blog-details') }}">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('/assets/img/blog/blog-thumb-04.jpg') }}"
                                                alt="blog-image">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <h4>
                                            <a href="{{ url('blog-details') }}">5 Great reasons to use an Online
                                                Doctor</a>
                                        </h4>
                                        <p>2 Dec 2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ url('blog-details') }}">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('/assets/img/blog/blog-thumb-05.jpg') }}"
                                                alt="blog-image">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <h4>
                                            <a href="{{ url('blog-details') }}">Online Doctor Appointment Scheduling</a>
                                        </h4>
                                        <p>1 Dec 2023</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Latest Posts -->

                    <!-- Categories -->
                    <div class="card category-widget">
                        <div class="card-header">
                            <h4 class="card-title">Blog Categories</h4>
                        </div>
                        <div class="card-body">
                            <ul class="categories">
                                <li><a href="javascript:;">Cardiology <span>(62)</span></a></li>
                                <li><a href="javascript:;">Health Care <span>(27)</span></a></li>
                                <li><a href="javascript:;">Nutritions <span>(41)</span></a></li>
                                <li><a href="javascript:;">Health Tips <span>(16)</span></a></li>
                                <li><a href="javascript:;">Medical Research <span>(55)</span></a></li>
                                <li><a href="javascript:;">Health Treatment <span>(07)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Categories -->

                    <!-- Tags -->
                    <div class="card tags-widget">
                        <div class="card-header">
                            <h4 class="card-title">Tags</h4>
                        </div>
                        <div class="card-body">
                            <ul class="tags">
                                <li><a href="javascript:;" class="tag">Children</a></li>
                                <li><a href="javascript:;" class="tag">Disease</a></li>
                                <li><a href="javascript:;" class="tag">Appointment</a></li>
                                <li><a href="javascript:;" class="tag">Booking</a></li>
                                <li><a href="javascript:;" class="tag">Kids</a></li>
                                <li><a href="javascript:;" class="tag">Health</a></li>
                                <li><a href="javascript:;" class="tag">Family</a></li>
                                <li><a href="javascript:;" class="tag">Tips</a></li>
                                <li><a href="javascript:;" class="tag">Shedule</a></li>
                                <li><a href="javascript:;" class="tag">Treatment</a></li>
                                <li><a href="javascript:;" class="tag">Dr</a></li>
                                <li><a href="javascript:;" class="tag">Clinic</a></li>
                                <li><a href="javascript:;" class="tag">Online</a></li>
                                <li><a href="javascript:;" class="tag">Health Care</a></li>
                                <li><a href="javascript:;" class="tag">Consulting</a></li>
                                <li><a href="javascript:;" class="tag">Doctors</a></li>
                                <li><a href="javascript:;" class="tag">Neurology</a></li>
                                <li><a href="javascript:;" class="tag">Dentists</a></li>
                                <li><a href="javascript:;" class="tag">Specialist</a></li>
                                <li><a href="javascript:;" class="tag">Surna</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Tags -->

                </div>
                <!-- /Blog Sidebar -->

            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
