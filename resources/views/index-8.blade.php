<?php $page = 'index-8'; ?>
@extends('layout.mainlayout')
@section('content')
   <!-- Home Banner -->
		<section class="banner-section-thirteen common-padding aos" data-aos="fade-down">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="banner-content aos" data-aos="fade-up">
							<span class="care-item">We specialize in Paediatric Care</span>
							<h1>A Safe Care for your children’s health</h1>
							<p>Supporting you to keep your child healthy with easy access to high-quality paediatric care.</p>
							<div class="banner-btns-fourteen ">
								<a href="{{url('search')}}" class="btn btn-primary ">Know More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="banner-center-img d-flex justify-content-center">
							<img src="{{URL::asset('assets/img/bg/home-13-banner-img.png')}}" alt="Banner Image">
						</div>
					</div>
					<div class="col-lg-12">
						<div class="search-box-one search-box-thirteen aos" data-aos="fade-up">
							<div class="search-title">
								<h5>Fix Appointment</h5>
							</div>
							<form action="{{url('search-2')}}">
								<div class="search-input search-line-thirteen">
									<i class="feather-user"></i>
									<select class="select">
										<option>Choose any Service</option>
										<option>Blood Tests</option>
										<option>Diagnostic Tests</option>
									</select>
								</div>
								<div class="search-input search-calendar-line-thirteen">
									<i class="feather-calendar"></i>
									<div class="mb-0">
										<input type="text" class="form-control datetimepicker" placeholder="Date">
									</div>
								</div>
								<div class="search-input search-map-line-thirteen">
									<i class="feather-map-pin"></i>
									<div class="mb-0">
										<input type="text" class="form-control" placeholder="Location">
										<a class="current-loc-icon current_location" href="javascript:void(0);">
										</a>
									</div>
								</div>
								<div class="search-input search-users-line-thirteen">
									<i class="feather-users"></i>
									<select class="select">
										<option>Paediatrician</option>
										<option>Obstetric</option>
									</select>
								</div>
								<div class="form-search-btn">
									<button class="btn" type="submit">See Availability<i
											class="feather-arrow-right ms-2"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-section-thirteen-bg">
				<div class="banner-section-thirteen-bg-one">
					<img src="{{URL::asset('assets/img/bg/pluse-1.png')}}" alt="Pluse">
				</div>
				<div class="banner-section-thirteen-bg-two">
					<img src="{{URL::asset('assets/img/bg/pluse-2.png')}}" alt="Pluse">
				</div>
				<div class="banner-section-thirteen-bg-three">
					<img src="{{URL::asset('assets/img/bg/pluse-4.png')}}" alt="Pluse">
				</div>
				<div class="banner-section-thirteen-bg-four">
					<img src="{{URL::asset('assets/img/bg/pluse-3.png')}}" alt="Pluse">
				</div>
				<div class="banner-section-thirteen-bg-five">
					<img src="{{URL::asset('assets/img/bg/pluse-3.png')}}" alt="Pluse">
				</div>
				<div class="banner-section-thirteen-bg-six">
					<img src="{{URL::asset('assets/img/bg/pulse-6.png')}}" alt="Pluse">
				</div>
				<div class="banner-section-thirteen-bg-seven">
					<img src="{{URL::asset('assets/img/bg/gold-star.png')}}" alt="Pluse">
				</div>
				<div class="banner-section-thirteen-bg-eight">
					<img src="{{URL::asset('assets/img/bg/pink-star.png')}}" alt="Pluse">
				</div>
				<div class="banner-section-thirteen-bg-nine">
					<img src="{{URL::asset('assets/img/bg/pluse-3.png')}}" alt="Pluse">
				</div>
				<div class="banner-section-thirteen-bg-ten">
					<img src="{{URL::asset('assets/img/bg/pluse-3.png')}}" alt="Pluse">
				</div>
				<div class="banner-section-thirteen-bg-eleven">
					<img src="{{URL::asset('assets/img/bg/atom-bond.png')}}" alt="Pluse">
				</div>
				<div class="banner-section-thirteen-bg-thirteen">
					<img src="{{URL::asset('assets/img/bg/pluse-white.png')}}" alt="Pluse">
				</div>
				<div class="banner-section-thirteen-bg-fifteen aos" data-aos="fade-left">
					<img src="{{URL::asset('assets/img/bg/cloud-1.png')}}" alt="Cloud">
				</div>
				<div class="banner-section-thirteen-bg-seventeen">
					<a href="javascript:void(0);">Trained Paediatric Doctors</a>
				</div>
				<div class="banner-section-thirteen-bg-eighteen">
					<a href="javascript:void(0);">New Born Care</a>
				</div>
				<div class="banner-section-thirteen-bg-ninteen">
					<a href="javascript:void(0);">Child Care Treatments</a>
				</div>
			</div>
		</section>
		<!-- /Home Banner -->

		<!-- services Section -->
		<section class="services-section-thirteen common-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 aos" data-aos="fade-up">
						<div class="section-header-thirteen">
							<h2>Our Services</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-6">
						<div class="service-thirteen-main">
							<div class="service-thirteen-all">
								<div class="service-img-thirteen">
									<img src="{{URL::asset('assets/img/clinic/service-1.jpg')}}" alt="Service">
								</div>
								<div class="service-inner-contents">
									<h5>Prenatal/New-born</h5>
									<p>Comprehensive care & expert guidance from Day one</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="service-thirteen-main">
							<div class="service-thirteen-all">
								<div class="service-img-thirteen">
									<img src="{{URL::asset('assets/img/clinic/service-2.jpg')}}" alt="Service">
								</div>
								<div class="service-inner-contents">
									<h5>New-born examinate</h5>
									<p>Your baby's health is prioritized from the very beginning</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="service-thirteen-main">
							<div class="service-thirteen-all">
								<div class="service-img-thirteen">
									<img src="{{URL::asset('assets/img/clinic/service-3.jpg')}}" alt="Service">
								</div>
								<div class="service-inner-contents">
									<h5>Vaccinations </h5>
									<p>Ensuring a healthy start, our services prioritize vaccinations</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="service-thirteen-main">
							<div class="service-thirteen-all">
								<div class="service-img-thirteen">
									<img src="{{URL::asset('assets/img/clinic/service-4.jpg')}}" alt="Service">
								</div>
								<div class="service-inner-contents">
									<h5>Blood tests</h5>
									<p>Offering precise blood tests tailored for children</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="service-thirteen-main">
							<div class="service-thirteen-all">
								<div class="service-img-thirteen">
									<img src="{{URL::asset('assets/img/clinic/service-5.jpg')}}" alt="Service">

								</div>
								<div class="service-inner-contents">
									<h5>diagnostic tests</h5>
									<p>Services include state-of-the-art diagnostic tests</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="service-thirteen-main">
							<div class="service-thirteen-all">
								<div class="service-img-thirteen">
									<img src="{{URL::asset('assets/img/features/feature-01.jpg')}}" alt="Service">
								</div>
								<div class="service-inner-contents">
									<h5>Home visits</h5>
									<p>Through home visits, your child receives personalized attention</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /services Section -->

		<!-- Our Doctors -->
		<div class="our-doctor-thirteen common-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 aos" data-aos="fade-up">
						<div class="section-header-thirteen">
							<h2>Our Doctors</h2>
						</div>
					</div>
				</div>
				<div class="owl-carousel our-slider-thirteen owl-theme aos" data-aos="fade-up">
					<div class="item">
						<div class="our-doctors-card">
							<div class="doctors-header">
								<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/doctors/fertility-doc-01.jpg')}}" alt="Dr. Marie Wells" class="img-fluid"></a>
							</div>
							<div class="doctors-body">
								<a href="{{url('doctor-profile')}}">
									<h4>Dr. Marie Wells</h4>
								</a>
								<p>Pregnancy Specialist</p>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="d-inline-block">(60)</span>
								</div>
								<div class="location">
									<p><i class="fas fa-map-marker-alt"></i>0.7 min - Baltimore, MD</p>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<span class="view-btn" tabindex="0">$500</span>
									<a href="{{url('booking')}}" class="btn book-btn">Consult Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="our-doctors-card">
							<div class="doctors-header">
								<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/doctors/fertility-doc-02.jpg')}}" alt="Dr. Rebekah" class="img-fluid"></a>
							</div>
							<div class="doctors-body">
								<a href="{{url('doctor-profile')}}">
									<h4>Dr. Rebekah</h4>
								</a>
								<p>Obstetric Specialist</p>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<span class="d-inline-block">3.0</span>
								</div>
								<div class="location">
									<p><i class="fas fa-map-marker-alt"></i> 0.9 min - East Syracuse, NY</p>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<span class="view-btn" tabindex="0">$350</span>
									<a href="{{url('booking')}}" class="btn book-btn">Consult Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="our-doctors-card">
							<div class="doctors-header">
								<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/doctors/fertility-doc-03.jpg')}}" alt="Dr. Johnson" class="img-fluid"></a>
							</div>
							<div class="doctors-body">
								<a href="{{url('doctor-profile')}}">
									<h4>Dr. Johnson</h4>
								</a>
								<p>Pregnancy Specialist</p>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="d-inline-block">(29)</span>
								</div>
								<div class="location">
									<p><i class="fas fa-map-marker-alt"></i>10 min - Athens, AL</p>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<span class="view-btn" tabindex="0">$200</span>
									<a href="{{url('booking')}}" class="btn book-btn">Consult Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="our-doctors-card">
							<div class="doctors-header">
								<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/doctors/fertility-doc-04.jpg')}}" alt="Darren Elder" class="img-fluid"></a>
							</div>
							<div class="doctors-body">
								<a href="{{url('doctor-profile')}}">
									<h4>Dr. Packard</h4>
								</a>
								<p>Pregnancy Specialist</p>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<span class="d-inline-block">4.0</span>
								</div>
								<div class="location">
									<p><i class="fas fa-map-marker-alt"></i>15 min - Santa Cruz, CA</p>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<span class="view-btn" tabindex="0">$100</span>
									<a href="{{url('booking')}}" class="btn book-btn">Consult Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="our-doctors-card">
							<div class="doctors-header">
								<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/doctors/fertility-doc-03.jpg')}}" alt="Dr. Johnson" class="img-fluid"></a>
							</div>
							<div class="doctors-body">
								<a href="{{url('doctor-profile')}}">
									<h4>Dr. Johnson</h4>
								</a>
								<p>Pregnancy Specialist</p>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="d-inline-block">(29)</span>
								</div>
								<div class="location">
									<p><i class="fas fa-map-marker-alt"></i>10 min - Athens, AL</p>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<span class="view-btn" tabindex="0">$200</span>
									<a href="{{url('booking')}}" class="btn book-btn">Consult Now</a>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
			<div class="our-doctor-thirteen-one">
				<img src="{{URL::asset('assets/img/bg/pluse-1.png')}}" alt="pluse">
				<img src="{{URL::asset('assets/img/bg/pluse-2.png')}}" alt="pluse">
				<img src="{{URL::asset('assets/img/bg/pluse-2.png')}}" alt="pluse">
			</div>
		</div>
		<!-- /Our Doctors -->

		<!-- Why Choose Us -->
		<section class="choose-us-section-thirteen common-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 aos" data-aos="fade-up">
						<div class="section-header-thirteen">
							<h2>Why Choose Us?</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="choose-us-inner-all aos" data-aos="fade-up">
							<div class="choose-us-thirteen-img">
								<img src="{{URL::asset('assets/img/bg/doctor-bg.jpg')}}" alt="Doctor" class="img-fluid">
								<div class="choose-us-thirteen-imgone">
									<img src="{{URL::asset('assets/img/bg/atom-bond.png')}}" alt="Doctor">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<ul>
							<li class="aos" data-aos="fade-up">
								<div class="choose-us-content-thirteen">
									<div class="chooseus-contents">
										<i class="feather-upload-cloud"></i>
									</div>
									<div class="chooseus-content-ryt">
										<h5>Latest diagnostics and technology</h5>
										<p>We offering the latest in diagnostic technology, ensuring cutting-edge and accurate healthcare solutions for our patients.</p>
									</div>
								</div>
							</li>
							<li class="aos" data-aos="fade-up">
								<div class="choose-us-content-thirteen">
									<div class="chooseus-contents">
										<i class="feather-underline"></i>
									</div>
									<div class="chooseus-content-ryt">
										<h5>Full breadth of paediatric care</h5>
										<p>Comprehensive services prioritize the health, development, and well-being of your child at every stage of growth.</p>
									</div>
								</div>
							</li>
							<li class="aos" data-aos="fade-up">
								<div class="choose-us-content-thirteen">
									<div class="chooseus-contents">
										<i class="feather-type"></i>
									</div>
									<div class="chooseus-content-ryt">
										<h5>Immunisation clinic</h5>
										<p>Dedicated to providing a safe and effective environment for vaccinations to safeguard your health and the community.</p>
									</div>
								</div>
							</li>
							<li class="aos" data-aos="fade-up">
								<div class="choose-us-content-thirteen">
									<div class="chooseus-contents">
										<i class="feather-message-square"></i>
									</div>
									<div class="chooseus-content-ryt">
										<h5>Paediatric theatres on every ward</h5>
										<p>Pediatric theaters on every ward, equipped to provide specialized and immediate medical attention for children.</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="choose-us-thirteen-bg">
					<img src="{{URL::asset('assets/img/bg/rainbow-2.png')}}" alt="img">
					<img src="{{URL::asset('assets/img/icons/choose-icon.svg')}}" alt="img">
				</div>
			</div>
		</section>
		<!-- /Why Choose Us -->

		<section class="client-us-section-thirteen common-padding">
			<div class="client-us-section-thirteenone">
				<img src="{{URL::asset('assets/img/bg/cloud-2.png')}}" alt="Cloud">
				<img src="{{URL::asset('assets/img/bg/rainbow-2.png')}}" alt="Rainbow">
				<img src="{{URL::asset('assets/img/icons/rainbow-5.svg')}}" alt="Rainbow">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 aos" data-aos="fade-up">
						<div class="section-header-thirteen">
							<h2>What Our Client Says?</h2>
						</div>
					</div>
				</div>
				<div class="owl-carousel client-says-thirteen owl-theme">
					<div class="client-says-all">
						<div class="clients-says-content">
							<p>"I would like to thank everyone at Surna for the fantastic way you looked after me.
								I could not fault anyone during the time I spent with you - from the point I arrived in reception, 
								to the catering team and every member of staff throughout the changes of shift during my stay."</p>
							<h4>
								Courtney Henry
							</h4>
							<p class="location-thirteen"><i class="fa-solid fa-location-dot"></i> New York, USA</p>
							<div class="client-says-imagesone">
								<img src="{{URL::asset('assets/img/icons/rainbow-3.svg')}}" alt="Rainbow">
							</div>
						</div>
						<div class="client-says-images">
							<img src="{{URL::asset('assets/img/bg/clients-says.jpg')}}" alt="img-fluid">
						</div>
					</div>
					<div class="client-says-all">
						<div class="clients-says-content">
							<p>"I would like to thank everyone at Surna for the fantastic way you looked after me.
								I could not fault anyone during the time I spent with you - from the point I arrived in reception, 
								to the catering team and every member of staff throughout the changes of shift during my stay."</p>
							<h4>Marrie Wells</h4>
							<p class="location-thirteen"><i class="fa-solid fa-location-dot"></i> New York, USA</p>
							<div class="client-says-imagesone">
								<img src="{{URL::asset('assets/img/icons/rainbow-4.svg')}}" alt="Rainbow">
							</div>
						</div>
						<div class="client-says-images">
							<img src="{{URL::asset('assets/img/clients/re-image-7.jpg')}}" alt="img-fluid">
						</div>
					</div>
					<div class="client-says-all">
						<div class="clients-says-content">
							<p>"I would like to thank everyone at Surna for the fantastic way you looked after me.
								I could not fault anyone during the time I spent with you - from the point I arrived in reception, 
								to the catering team and every member of staff throughout the changes of shift during my stay."</p>
							<h4>Andrew John</h4>
							<p class="location-thirteen"><i class="fa-solid fa-location-dot"></i> New York, USA</p>
							<div class="client-says-imagesone">
								<img src="{{URL::asset('assets/img/icons/rainbow-4.svg')}}" alt="Rainbow">
							</div>
						</div>
						<div class="client-says-images">
							<img src="{{URL::asset('assets/img/clients/re-image-8.jpg')}}" alt="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Latest Articles -->
		<section class="latest-articles-thirteen common-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 aos" data-aos="fade-up">
						<div class="section-header-thirteen">
							<h2>Our Latest Articles</h2>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-4 col-sm-6 d-flex aos" data-aos="fade-up">
						<div class="articles-thirteen flex-fill">
							<div class="articles-thirteen-img">
								<a href="{{url('blog-details')}}"><img src="{{URL::asset('assets/img/patients/articles-1.jpg')}}" alt="Articles" class="img-fluid"></a>
							</div>
							<div class="articles-thirteen-content">
								<h6>Paediatrician</h6>
								<h5><a href="{{url('blog-details')}}">Our experts will take care of your child...</a></h5>
								<p>Our experts are dedicated to taking care of your child,....</p>
								<div class="article-footer">
									<div class="post-author">
										<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/doctors/doctor-thumb-01.jpg')}}" alt="Post Author"><span>Dr. Pamila Certis</span></a>
									</div>
									<ul>
										<li><i class="feather-message-square"></i>70</li>
										<li><i class="feather-eye"></i>1.2k</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 d-flex aos" data-aos="fade-up">
						<div class="articles-thirteen flex-fill">
							<div class="articles-thirteen-img">
								<a href="{{url('blog-details')}}"><img src="{{URL::asset('assets/img/patients/articles-2.jpg')}}" alt="Articles" class="img-fluid"></a>
							</div>
							<div class="articles-thirteen-content">
								<h6>Paediatrician</h6>
								<h5><a href="{{url('blog-details')}}">The first step of the toddler Beyond immunize</a></h5>
								<p>Nurturing the first steps of your toddler extends beyond...</p>
								<div class="article-footer">
									<div class="post-author">
										<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/doctors/doctor-thumb-02.jpg')}}" alt="Post Author"><span>Dr. Ronald Jacobs</span></a>
									</div>
									<ul>
										<li><i class="feather-message-square"></i>70</li>
										<li><i class="feather-eye"></i>1.2k</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 d-flex aos" data-aos="fade-up">
						<div class="articles-thirteen flex-fill">
							<div class="articles-thirteen-img">
								<a href="{{url('blog-details')}}"><img src="{{URL::asset('assets/img/patients/articles-3.jpg')}}" alt="Articles" class="img-fluid"></a>
							</div>
							<div class="articles-thirteen-content">
								<h6>Paediatrician</h6>
								<h5><a href="{{url('blog-details')}}">Balanced Diet Chart for Children under age 10.</a></h5>
								<p>Discover a balanced diet chart for children, ensuring optimal nutrition....</p>
								<div class="article-footer">
									<div class="post-author">
										<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('assets/img/doctors/doctor-thumb-03.jpg')}}" alt="Post Author"><span>Dr. Marie Wells</span></a>
									</div>
									<ul>
										<li><i class="feather-message-square"></i>70</li>
										<li><i class="feather-eye"></i>1.2k</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Latest Articles -->

		<!-- Feedback -->
		<section class="feedback-section-thirteen common-padding">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="feedback-main-thirteen aos" data-aos="fade-up">
							<div class="feedback-all-img">
								<img src="{{URL::asset('assets/img/feedback-inner.png')}}" alt="image" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="feedback-main-content aos" data-aos="fade-up">
							<h2>Download <br>The Surna App Today!</h2>
							<p>Rasakan kemudahan pembayaran melalui aplikasi SmartInPays.  
								Jalan-jalan, membayar tagihan, donasi di ujung jari Anda. </p>
							<div class="feedback-inner-img">
								<div class="feedback-inner-imgone">
									<a href="javascript:void(0);"><img src="{{URL::asset('assets/img/icons/google-play.svg')}}" alt="Store"></a>
								</div>
								<div class="feedback-inner-imgtwo">
									<a href="javascript:void(0);"><img src="{{URL::asset('assets/img/icons/app-store.svg')}}" alt="Store"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="feedback-bg-icons">
				<img src="{{URL::asset('assets/img/bg/pluse-1.png')}}" alt="Pluse">
				<img src="{{URL::asset('assets/img/bg/pluse-2.png')}}" alt="Pluse">
				<img src="{{URL::asset('assets/img/bg/pluse-2.png')}}" alt="Pluse">
			</div>
		</section>
		<!-- Feedback -->
		

    @component('components.scrolltotop')
    @endcomponent
@endsection
