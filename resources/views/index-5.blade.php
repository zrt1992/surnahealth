<?php $page = 'index-5'; ?>
@extends('layout.mainlayout')
@section('content')
   	<!-- Home Banner -->
		<section class="banner-section">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-8">
						<div class="banner-content aos" data-aos="fade-up">
							<div class="beat-wrap">
								<span><img src="{{URL::asset('/assets/img/icons/heart-icon.svg')}}" alt="heart-icon"></span>
								<h6>Every Beat, Every Moment</h6>
							</div>
							<h1>Preventive care is essential for <span>Healthy Heart</span></h1>
							<p>We can guide you through issues like Cardiac arrest, Heart Failure, Peripheral Artery
								Disease, Arrhythmia, Atrial Fibrillation, Cholesterol and High BP.</p>
						</div>
						<form action="#" class="doctor-search">
							<div class="input-box-twelve">
								<div class="search-input input-block search-line">
									<input type="text" class="form-control" placeholder="Location"> 
									<a class="current-loc-icon current_location" href="javascript:void(0);">
										<i class="fa-solid fa-location-dot"></i>
									</a>
								</div>
								<div class="search-input input-block">											
									<input type="text" class="form-control datetimepicker" placeholder="Select Date"> 
									<a class="current-loc-icon current_location" href="javascript:void(0);">
										<i class="fa-solid fa-calendar-days"></i>
									</a>
								</div>
								<div class="input-block">
									<div class="search-btn-info">
										<a href="{{url('search-2')}}">Search Doctor</a>
									</div>
								</div>										
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- /Home Banner -->

		<!-- Service Section -->
		<section class="service-section">			
			<div class="bg-shapes">
				<img src="{{URL::asset('/assets/img/bg/cardiac-bg.png')}}" alt="image">
			</div>
			<div class="container">
				<div class="row mx-auto">
					<div class="col-md-8 mx-auto aos" data-aos="fade-up">
						<div class="section-header-one section-header-slider">
							<h2 class="section-title">We Provide a Best Service For You</h2>
							<p>Cardiology services encompass a wide range of medical services related to  diagnosis, treatment, and management of heart conditions & diseases.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel slider-service owl-theme p-0 nav-center">
							<div class="service-wrap">
								<a href="{{url('search')}}" class="service-img">
									<img src="{{URL::asset('/assets/img/features/feature-07.jpg')}}" class="img-fluid" alt="service image">
									<div class="service-cont">
										<h3>Diagnostic Testing</h3>
										<p>Cardiologists use various diagnostic tests to assess heart health and function</p>
									</div>
								</a>
							</div>
							<div class="service-wrap">
								<a href="{{url('search')}}" class="service-img">
									<img src="{{URL::asset('/assets/img/features/feature-08.jpg')}}" class="img-fluid" alt="service image">
									<div class="service-cont">
										<h3>Treatment of Heart Conditions</h3>
										<p>Stent placement, bypass surgery, or valve repair/replacement.</p>
									</div>
								</a>
							</div>
							<div class="service-wrap">
								<a href="{{url('search')}}" class="service-img">
									<img src="{{URL::asset('/assets/img/features/feature-09.jpg')}}" class="img-fluid" alt="service image">
									<div class="service-cont">
										<h3>Preventive Care</h3>
										<p>Cardiologists also provide preventive care to reduce the risk of heart disease.</p>
									</div>
								</a>
							</div>
							<div class="service-wrap">
								<a href="{{url('search')}}" class="service-img">
									<img src="{{URL::asset('/assets/img/features/feature-10.jpg')}}" class="img-fluid" alt="service image">
									<div class="service-cont">
										<h3>Non-Invasive Treatments</h3>
										<p>Offers guidance on diet, exercise, and lifestyle to reduce cardiovascular risk factors.</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center aos" data-aos="fade-up">
						<a href="{{url('search')}}" class="btn btn-primary">View All Services</a>
					</div>
				</div>
			</div>
		</section>
		<!-- /Service Section -->

		<!-- Need To Know -->
		<section class="need-to-know-section">
			<div class="bg-shapes">
				<img src="{{URL::asset('/assets/img/bg/cardiac-bg.png')}}" alt="image">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-12 aos" data-aos="fade-up">
						<div class="section-header-one section-header-slider">
							<h2 class="section-title mb-0">Need To Know Cardiac Conditions</h2>
						</div>
						<div class="accordion-condition" id="accord-parent">
							<div class="accordion-item">
								<h2 class="accordion-header">
									<a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse"
										data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Heart Failure
									</a>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse"
									 data-bs-parent="#accord-parent">
									<div class="accordion-body">
										<div class="accordion-content">
											<p>If one of the valves in your heart becomes diseased it can affect the flow of blood. This can happen in one of two ways: valve stenosis (where the valve does not fully open and obstructs or restricts flow) or valve incompetence (where the valve does not close properly and blood is allowed to leak backwards)....</p>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<a href="javascript:void(0);" class="accordion-button" data-bs-toggle="collapse"
										data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
										Heart Valve Disease
									</a>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse show"
									 data-bs-parent="#accord-parent">
									<div class="accordion-body">
										<div class="accordion-content">
											<p>If one of the valves in your heart becomes diseased it can affect the flow of blood. This can happen in one of two ways: valve stenosis (where the valve does not fully open and obstructs or restricts flow) or valve incompetence (where the valve does not close properly and blood is allowed to leak backwards)....</p>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse"
										data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
										Pacemakers and Defibrillators
									</a>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse"
									 data-bs-parent="#accord-parent">
									<div class="accordion-body">
										<div class="accordion-content">
											<p>If one of the valves in your heart becomes diseased it can affect the flow of blood. This can happen in one of two ways: valve stenosis (where the valve does not fully open and obstructs or restricts flow) or valve incompetence (where the valve does not close properly and blood is allowed to leak backwards)....</p>
										</div>
									</div>
								</div>
							</div>
							<a href="#" class="btn btn-primary">Learn More</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 aos" data-aos="fade-up">
						<div class="gallery-box-block">
								<div class="box-detail">
									<img src="{{URL::asset('/assets/img/features/feature-13.jpg')}}" class="img-fluid" alt="image">
								</div>
								<div class="box-detail">
									<img src="{{URL::asset('/assets/img/features/feature-14.jpg')}}" class="img-fluid" alt="image">
									<div class="bg-shapes">
										<img src="{{URL::asset('/assets/img/bg/cardiac-bg-02.png')}}" alt="image">
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Need To Know -->

		<!-- Our Doctor -->
		<section class="our-doctor-section">
			<div class="section-floating-bg">
				<img src="{{URL::asset('/assets/img/bg/hexagen-group-1.png')}}" alt="design-image">
				<img src="{{URL::asset('/assets/img/bg/hexagon-group-2.png')}}" alt="design-image">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="section-header-one section-header-slider">
							<h2 class="section-title mb-0">Our Specialist Doctors</h2>
						</div>
					</div>
				</div>
				<div class="owl-carousel doctor-slider-ten nav-center owl-theme aos" data-aos="fade-up">
						<div class="module-border-wrap">
							<div class="listing-card">
								<div class="listing-img">
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/doctor-13.jpg')}}"
											class="img-fluid" alt="Jonathan Behar"></a>
									<div class="fav-item">
										<div class="featured-rating"><i class="fa fa-star "></i> <span>4.5</span></div>
										<a href="javascript:void(0)" class="fav-icon">
											<i class="fa fa-heart"></i>
										</a>
									</div>
								</div>
								<div class="listing-content">
									<div class="listing-details">
										<div class="listing-category">
											<a href="javascript:void(0);" class="listing-category-tag tag-green">Cardiology</a>
											<a href="javascript:void(0);" class="listing-category-tag tag-purple">Electrophysiology</a>
										</div>
										<div class="listing-profile-details">
											<div class="listing-floating-img">
												<img src="{{URL::asset('/assets/img/bg/ecg-wave.png')}}" alt="ecg-wave">
											</div>
											<div class="listing-user">
												<div class="listing-user-details">
													<h6><a href="{{url('doctor-profile')}}">Dr Jonathan Behar </a></h6>
													<span>Cardiologist</span>
												</div>
											</div>
											<div class="listing-btn">
												<a href="{{url('booking-2')}}" class="btn consult-btn">Book Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="module-border-wrap">
							<div class="listing-card">
								<div class="listing-img">
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/doctor-thumb-02.jpg')}}"
											class="img-fluid" alt="Piers Clifford"></a>
									<div class="fav-item">
										<div class="featured-rating"><i class="fa fa-star "></i> <span>4.5</span></div>
										<a href="javascript:void(0)" class="fav-icon">
											<i class="fa fa-heart"></i>
										</a>
									</div>
								</div>
								<div class="listing-content">
									<div class="listing-details">
										<div class="listing-category">
											<a href="javascript:void(0);" class="listing-category-tag tag-red">Hypertension</a>
											<a href="javascript:void(0);" class="listing-category-tag tag-green">Cardiology</a>
										</div>
										<div class="listing-profile-details">
											<div class="listing-floating-img">
												<img src="{{URL::asset('/assets/img/bg/ecg-wave.png')}}" alt="ecg-wave">
											</div>
											<div class="listing-user">
												<div class="listing-user-details">
													<h6><a href="{{url('doctor-profile')}}">Dr Piers Clifford</a></h6>
													<span>Consultant Cardiologist</span>
												</div>
											</div>
											<div class="listing-btn">
												<a href="{{url('booking-2')}}" class="btn consult-btn">Book Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="module-border-wrap">
							<div class="listing-card">
								<div class="listing-img">
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/doctor-thumb-05.jpg')}}"
											class="img-fluid" alt="Rajan Sharma"></a>
									<div class="fav-item">
										<div class="featured-rating"><i class="fa fa-star "></i> <span>4.5</span></div>
										<a href="javascript:void(0)" class="fav-icon">
											<i class="fa fa-heart"></i>
										</a>
									</div>
								</div>
								<div class="listing-content">
									<div class="listing-details">
										<div class="listing-category">
											<a href="javascript:void(0);" class="listing-category-tag tag-green">Cardiology</a>
											<a href="javascript:void(0);" class="listing-category-tag tag-purple">Catheterization</a>
										</div>
										<div class="listing-profile-details">
											<div class="listing-floating-img">
												<img src="{{URL::asset('/assets/img/bg/ecg-wave.png')}}" alt="ecg-wave">
											</div>
											<div class="listing-user">
												<div class="listing-user-details">
													<h6><a href="{{url('doctor-profile')}}">Dr Rajan Sharma</a></h6>
													<span>Cardiologist</span>
												</div>
											</div>
											<div class="listing-btn">
												<a href="{{url('booking-2')}}" class="btn consult-btn">Book Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="module-border-wrap">
							<div class="listing-card">
								<div class="listing-img">
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/doctor-thumb-07.jpg')}}"
											class="img-fluid" alt="Julian Collinson"></a>
									<div class="fav-item">
										<div class="featured-rating"><i class="fa fa-star "></i> <span>4.5</span></div>
										<a href="javascript:void(0)" class="fav-icon">
											<i class="fa fa-heart"></i>
										</a>
									</div>
								</div>
								<div class="listing-content">
									<div class="listing-details">
										<div class="listing-category">
											<a href="javascript:void(0);" class="listing-category-tag tag-green">Cardiology</a>
											<a href="javascript:void(0);" class="listing-category-tag tag-purple">Electrophysiology</a>
										</div>
										<div class="listing-profile-details">
											<div class="listing-floating-img">
												<img src="{{URL::asset('/assets/img/bg/ecg-wave.png')}}" alt="ecg-wave">
											</div>
											<div class="listing-user">
												<div class="listing-user-details">
													<h6><a href="{{url('doctor-profile')}}">Dr Julian Collinson</a></h6>
													<span>Consultant Cardiologist</span>
												</div>
											</div>
											<div class="listing-btn">
												<a href="{{url('booking-2')}}" class="btn consult-btn">Book Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


				</div>
			</div>
		</section>
		<!-- /Our Doctor -->

		<!-- Specialities Section -->
		<section class="specialities-section-one">
			<div class="bg-shapes">
				<img src="{{URL::asset('/assets/img/bg/circle-bg.png')}}" alt="image">
				<img src="{{URL::asset('/assets/img/bg/steps-bg-02.png')}}" alt="image">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="section-header-one section-header-slider">
							<h2 class="section-title mb-0">Why Choose Surna health?</h2>
						</div>
					</div>
				</div>
				<div class="specialities-block aos" data-aos="fade-up">
					<div class="row rows-col-5">
						<div class="col-xl col-lg-4 col-sm-6 col-12 d-flex">
							<div class="specialities-item flex-fill">
								<div class="specialities-img">
									<div class="hexogen"><img src="{{URL::asset('/assets/img/icons/health-care-love.svg')}}" alt="heart-icon"></div>
								</div>
								<p>Personalized Health care</p>
							</div>
						</div>
						<div class="col-xl col-lg-4 col-sm-6 col-12 d-flex">
							<div class="specialities-item flex-fill">
								<div class="specialities-img">
									<div class="hexogen"><img src="{{URL::asset('/assets/img/icons/user-doctor.svg')}}" alt="male-doctor-icon"></div>
								</div>
								<p>World-Leading Experts for your Care</p>
							</div>
						</div>
						<div class="col-xl col-lg-4 col-sm-6 col-12 d-flex">
							<div class="specialities-item flex-fill">
								<div class="specialities-img">
									<div class="hexogen"><img src="{{URL::asset('/assets/img/icons/healthcare.svg')}}" alt="stethoscope-icon"></div>
								</div>
								<p>Regular Check Up of your Heart</p>
							</div>
						</div>
						<div class="col-xl col-lg-4 col-sm-6 col-12 d-flex">
							<div class="specialities-item flex-fill">
								<div class="specialities-img">
									<div class="hexogen"><img src="{{URL::asset('/assets/img/icons/drugs.svg')}}" alt="medicine-icon"></div>
								</div>
								<p>Treatment For Complex Conditions</p>
							</div>
						</div>
						<div class="col-xl col-lg-4 col-sm-6 col-12 d-flex">
							<div class="specialities-item flex-fill">
								<div class="specialities-img">
									<div class="hexogen"><img src="{{URL::asset('/assets/img/icons/syringe.svg')}}" alt="syringe-icon"></div>
								</div>
								<p>Minimally Invasive Procedures</p>
							</div>
						</div>
					</div>
				</div>
				<div class="specialities-wrap">
					<div class="row">
						<div class="col-lg-7">
							<div class="special-content">
								<h2>Don’t Make Delay on your Life</h2>
								<h4>Book An Appointment Today</h4>
								<p>If you have a primary care physician, you can reach out to their office and explain that you would like to see a cardiologist. They can typically provide referrals and help you schedule an appointment.</p>
								<div class="special-btn">
									<a href="#" class="btn btn-primary">Start a Consult</a>
									<a href="#" class="btn btn-outline-primary">Click Our Plan</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Specialities Section -->

		<!-- Steps To Follow-->
		<section class="need-to-know-section steps-to-follow">
			<div class="bg-shapes">
				<img src="{{URL::asset('/assets/img/bg/steps-bg.png')}}" alt="image">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto">						
						<div class="section-header-one section-header-slider text-center">
							<h2 class="section-title">Steps For New Patients</h2>
							<p>Connect with your chosen healthcare professional at the scheduled time. After your appointment, follow any post-visit instructions provided by the doctor. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
						<div class="box-detail">
							<div class="steps-list-box">
								<div class="steps-list-img">
									<span>1</span>
									<img src="{{URL::asset('/assets/img/icons/hreat-pulse.svg')}}" class="img-fluid" alt="heart-pulse">
								</div>
								<h6>Choose Your Doctor</h6>
								<p>Lorem Ipsum is simply dummy text of the printing..</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
						<div class="box-detail">
							<div class="steps-list-box">
								<div class="steps-list-img">
									<span>2</span>
									<img src="{{URL::asset('/assets/img/icons/hreat-pulse.svg')}}" class="img-fluid" alt="heart-pulse">
								</div>
								<h6>Set Appointment</h6>
								<p>After choose your preferred doctor, set your appointment.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
						<div class="box-detail">
							<div class="steps-list-box">
								<div class="steps-list-img">
									<span>3</span>
									<img src="{{URL::asset('/assets/img/icons/hreat-pulse.svg')}}" class="img-fluid" alt="heart-pulse">
								</div>
								<h6>Consult With Doctor</h6>
								<p>Discuss your health concerns with the doctor you choosed.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
						<div class="box-detail">
							<div class="steps-list-box">
								<div class="steps-list-img">
									<span>4</span>
									<img src="{{URL::asset('/assets/img/icons/hreat-pulse.svg')}}" class="img-fluid" alt="heart-pulse">
								</div>
								<h6>Get recommendation</h6>
								<p>After consulting you receive personalized advice & solution</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- /Steps To Follow -->

		<!-- Testimonials -->
		<div class="testimonial-section-ten need-to-know-section">
			<div class="section-floating-bg">
				<img src="{{URL::asset('/assets/img/bg/hexagen-group-1.png')}}" alt="design-image">
				<img src="{{URL::asset('/assets/img/bg/hexagon-group-2.png')}}" alt="design-image">
			</div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="section-header-one section-header-slider text-center">
							<h2 class="section-title">What Our Patients Say</h2>
							<p>Very happy with his care and would recommend to anyone else. Professional and informative.</p>
						</div>
					</div>
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="owl-carousel testimonial-sliders nav-center">
								<div class="testimonial-card">
									<div class="testimonial-user-details">
										<div class="d-flex align-items-center">
											<div class="testimonial-user-img">
												<img src="{{URL::asset('/assets/img/clients/client-07.jpg')}}" class="img-fluid" alt="Martin Philips">
											</div>
											<div class="testimonial-user-name">
												<h5>Andrew</h5>
												<p>Newyork, USA</p>
											</div>
										</div>
										<div class="rating">
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
										</div>
									</div>
									<div class="testmonial-user-coments">
										<h6>“ Awesome Impact ”</h6>
										<p>After suffering from a heart condition for a number of years I was very happy
											to meet Surna health, from the first consultation where he believed there was a
											solution...</p>
									</div>
								</div>
								<div class="testimonial-card">
									<div class="testimonial-user-details">
										<div class="d-flex align-items-center">
											<div class="testimonial-user-img">
												<img src="{{URL::asset('/assets/img/clients/client-08.jpg')}}" class="img-fluid" alt="James Anderson">
											</div>
											<div class="testimonial-user-name">
												<h5>James Anderson</h5>
												<p>Newyork, USA</p>
											</div>
										</div>
										<div class="rating">
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
										</div>
									</div>
									<div class="testmonial-user-coments">
										<h6>“ I am very grateful ”</h6>
										<p>A Doctors explains everything clearly and helps you to understand even the most complex medical term consultation</p>
									</div>
								</div>
								<div class="testimonial-card">
									<div class="testimonial-user-details">
										<div class="d-flex align-items-center">
											<div class="testimonial-user-img">
												<img src="{{URL::asset('/assets/img/clients/client-09.jpg')}}" class="img-fluid" alt="Christina Louis">
											</div>
											<div class="testimonial-user-name">
												<h5>Christina Louis</h5>
												<p>Newyork, USA</p>
											</div>
										</div>
										<div class="rating">
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
										</div>
									</div>
									<div class="testmonial-user-coments">
										<h6>“ Excellent Clinician ”</h6>
										<p>Excellent clinician. Endlessly patient and reassuring.Also a very efficient
											back up team. He was prepared to spend as long as I needed to understand
											what he was saying.</p>
									</div>
								</div>
								<div class="testimonial-card">
									<div class="testimonial-user-details">
										<div class="d-flex align-items-center">
											<div class="testimonial-user-img">
												<img src="{{URL::asset('/assets/img/clients/client-10.jpg')}}" class="img-fluid" alt="Christina Louis">
											</div>
											<div class="testimonial-user-name">
												<h5>Sofia Nick</h5>
												<p>Newyork, USA</p>
											</div>
										</div>
										<div class="rating">
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
											<i class="fa-solid fa-star filled"></i>
										</div>
									</div>
									<div class="testmonial-user-coments">
										<h6>“ Excellent Work ”</h6>
										<p>Doctors explains everything clearly and helps you to understand even the most
											complex medical terms</p>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Testimonials -->

		<!-- Pricing -->
		<section class="pricing-section pricing-section-ten">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-12 mx-auto text-center aos" data-aos="fade-up">
						<div class="section-header-one section-header-slider">
							<h2 class="section-title">Choose your Package </h2>
							<p>Clearly communicated the risks and outcomes of the procedure. Very happy with his care and would recommend to anyone else.</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-cente">
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 d-flex aos" data-aos="fade-up">
						<div class="card pricing-card pricing-card-active flex-fill">
							<div class="card-body">
								<div class="pricing-header">
									<div class="pricing-header-info">
										<div class="pricing-title">
											<h4>Free</h4>
										</div>
										<div class="pricing-tag">
											<div><img src="{{URL::asset('/assets/img/bg/heart-plus.png')}}" alt="icon"></div>
										</div>
									</div>
								</div>
								<div class="pricing-info">
									<div class="pricing-amount">
										<h2>$0 </h2>
										<span>per month</span>
									</div>
									<div class="pricing-btn">
										<a href="{{url('pricing')}}" class="btn">Request a Demo</a>
									</div>
									<div class="pricing-list">
										<ul>
											<li>100 Conversations p/m</li>
											<li>10 Websites</li>
											<li>2 GB Data Storage</li>

										</ul>
									</div>
									<div class="pricing-list pricing-list-two">
										<ul>
											<li>Chat Widget</li>
											<li>Real Time Support</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 d-flex aos" data-aos="fade-up">
						<div class="card pricing-card flex-fill">
							<div class="card-body">
								<div class="pricing-header">
									<div class="pricing-header-info">
										<div class="pricing-title">
											<h4>Essentials</h4>
										</div>
									</div>
								</div>
								<div class="pricing-info">
									<div class="pricing-amount">
										<h2>$50 </h2>
										<span>per month</span>
									</div>
									<div class="pricing-btn">
										<a href="{{url('pricing')}}" class="btn">Request A Demo</a>
									</div>
									<div class="pricing-list">
										<ul>
											<li>500 Conversations p/m</li>
											<li>20 Websites</li>
											<li>20 GB Data Storage</li>

										</ul>
									</div>
									<div class="pricing-list pricing-list-two">
										<ul>
											<li>Everything Off <span class="badge">Free</span></li>
											<li>Chat widget</li>
											<li>Real Time Support</li>
										</ul>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 d-flex aos" data-aos="fade-up">
						<div class="card pricing-card flex-fill">
							<div class="card-body">
								<div class="pricing-header">
									<div class="pricing-header-info">
										<div class="pricing-title d-flex align-items-center justify-content-between">
											<h4>Team</h4>
											<span class="badge">30% discount</span>
										</div>
									</div>
								</div>
								<div class="pricing-info">
									<div class="pricing-amount">
										<h2>$90 </h2>
										<span>per month</span>
									</div>
									<div class="pricing-btn">
										<a href="{{url('pricing')}}" class="btn">Request A Demo</a>
									</div>
									<div class="pricing-list">
										<ul>
											<li>1000 conversations p/m</li>
											<li>20 Websites</li>
											<li>20 GB Data Storage</li>
										</ul>
									</div>
									<div class="pricing-list pricing-list-two">
										<ul>
											<li>Everything Off <span class="badge">Free</span></li>
											<li>Chat widget</li>
											<li>Real Time Support</li>
										</ul>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 d-flex aos" data-aos="fade-up">
						<div class="card pricing-card flex-fill">
							<div class="card-body">
								<div class="pricing-header">
									<div class="pricing-header-info">
										<div class="pricing-title">
											<h4>Enterprises</h4>
										</div>
									</div>
								</div>
								<div class="pricing-info">
									<div class="pricing-amount">
										<h2>$150 </h2>
										<span>per month</span>
									</div>
									<div class="pricing-btn">
										<a href="{{url('pricing')}}" class="btn">Request A Demo</a>
									</div>
									<div class="pricing-list">
										<ul>
											<li>2000 Conversations p/m</li>
											<li>20 Websites</li>
											<li>20 GB Data Storage</li>
										</ul>
									</div>
									<div class="pricing-list pricing-list-two">
										<ul>
											<li>Everything Off <span class="badge">Free</span></li>
											<li>Chat widget</li>
											<li>Real Time Support</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="partners-info aos" data-aos="fade-up">
							<div class="section-header-one text-center">
								<h2 class="section-title mb-0">Top Business Organizations Collaborated With Us</h2>
							</div>
							<ul class="owl-carousel partners-slider d-flex">
							    <li>
							    	<a href="javascript:void(0);">
							    		<img class="img-fluid" src="{{URL::asset('/assets/img/partners/partners-1.svg')}}" alt="partners">
							    	</a>
							    </li>
							    <li>
							    	<a href="javascript:void(0);">
							    		<img class="img-fluid" src="{{URL::asset('/assets/img/partners/partners-2.svg')}}" alt="partners">
							    	</a>
							    </li>
							    <li>
							    	<a href="javascript:void(0);">
							    		<img class="img-fluid" src="{{URL::asset('/assets/img/partners/partners-3.svg')}}" alt="partners">
							    	</a>
							    </li>
							    <li>
							    	<a href="javascript:void(0);">
							    		<img class="img-fluid" src="{{URL::asset('/assets/img/partners/partners-4.svg')}}" alt="partners">
							    	</a>
							    </li>
							    <li>
							    	<a href="javascript:void(0);">
							    		<img class="img-fluid" src="{{URL::asset('/assets/img/partners/partners-5.svg')}}" alt="partners">
							    	</a>
							    </li>
							    <li>
							    	<a href="javascript:void(0);">
							    		<img class="img-fluid" src="{{URL::asset('/assets/img/partners/partners-6.svg')}}" alt="partners">
							    	</a>
							    </li>
							    <li>
							    	<a href="javascript:void(0);">
							    		<img class="img-fluid" src="{{URL::asset('/assets/img/partners/partners-1.svg')}}" alt="partners">
							    	</a>
							    </li>
							    <li>
							    	<a href="javascript:void(0);">
							    		<img class="img-fluid" src="{{URL::asset('/assets/img/partners/partners-2.svg')}}" alt="partners">
							    	</a>
							    </li>
							    <li>
							    	<a href="javascript:void(0);">
							    		<img class="img-fluid" src="{{URL::asset('/assets/img/partners/partners-3.svg')}}" alt="partners">
							    	</a>
							    </li>
							    <li>
							    	<a href="javascript:void(0);">
							    		<img class="img-fluid" src="{{URL::asset('/assets/img/partners/partners-4.svg')}}" alt="partners">
							    	</a>
							    </li>
							    <li>
							    	<a href="javascript:void(0);">
							    		<img class="img-fluid" src="{{URL::asset('/assets/img/partners/partners-5.svg')}}" alt="partners">
							    	</a>
							    </li>
							    <li>
							    	<a href="javascript:void(0);">
							    		<img class="img-fluid" src="{{URL::asset('/assets/img/partners/partners-6.svg')}}" alt="partners">
							    	</a>
							    </li>
							 </ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Pricing -->

		<!-- FAQ Section -->
		<section class="faq-section faq-section-ten">
			<div class="section-floating-bg">
				<img src="{{URL::asset('/assets/img/bg/hexagen-group-1.png')}}" alt="design-image">
				<img src="{{URL::asset('/assets/img/bg/hexagon-group-2.png')}}" alt="design-image">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12 aos" data-aos="fade-up">
						<div class="faq-img">
							<img src="{{URL::asset('/assets/img/faq-img-2.png')}}" class="img-fluid" alt="img">
							<div class="bg-shapes">
								<img src="{{URL::asset('/assets/img/bg/cardiac-bg-02.png')}}" alt="image">
							</div>
							<div class="faq-user">
								<div class="user-info">
									<span>
										<img src="{{URL::asset('/assets/img/clients/client-08.jpg')}}" class="img-fluid" alt="img">
									</span>
									<div class="flex-1">
										<h6>Andrew</h6>
										<p>Newyork, USA</p>
									</div>
								</div>
								<div class="rating">
									<i class="fa-solid fa-star filled"></i>
									<i class="fa-solid fa-star filled"></i>
									<i class="fa-solid fa-star filled"></i>
									<i class="fa-solid fa-star filled"></i>
									<i class="fa-solid fa-star filled"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="section-header-one aos" data-aos="fade-up">
							<h2 class="section-title mb-0">Frequently Asked Questions?</h2>
						</div>
						<div class="faq-info aos" data-aos="fade-up">
							<div class="accordion" id="faq-details">

								<!-- FAQ Item -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingThree">
										<a href="javascript:void(0);" class="accordion-button collapsed"
											data-bs-toggle="collapse" data-bs-target="#faqone"
											aria-expanded="false" aria-controls="faqone">
											Have you need an expert medical team in house?
										</a>
									</h2>
									<div id="faqone" class="accordion-collapse collapse"
										 data-bs-parent="#faq-details">
										<div class="accordion-body">
											<div class="accordion-content">
												<p>Simply visit our website and log in or create an account. Search for a doctor based on specialization, location, or availability & confirm your booking.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- /FAQ Item -->

								<!-- FAQ Item -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFour">
										<a href="javascript:void(0);" class="accordion-button collapsed"
											data-bs-toggle="collapse" data-bs-target="#collapseFour"
											aria-expanded="false" aria-controls="collapseFour">
											The medical Experts carefully Transplant the Heart
										</a>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse"
										data-bs-parent="#faq-details">
										<div class="accordion-body">
											<div class="accordion-content">
												<p>Yes, you can usually request a specific doctor when booking your appointment, though availability may vary based on their schedule.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- /FAQ Item -->

								<!-- FAQ Item -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<a href="javascript:void(0);" class="accordion-button"
											data-bs-toggle="collapse" data-bs-target="#collapseFive"
											aria-expanded="false" aria-controls="collapseFive">
											Experience in When to repair the mitral valve.
										</a>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse show"
										data-bs-parent="#faq-details">
										<div class="accordion-body">
											<div class="accordion-content">
												<p>Heart care and specialist doctors in the hospital. They are carefully and easily manage heart surgey.</p>
												<ul>
													<li>The extinction of plant and</li>
													<li>animal species is endangering</li>
													<li>the functioning of ecosystems</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /FAQ Item -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /FAQ Section -->

		<!-- Blog Section -->
		<section class="section section-blogs cardio-blogs">
			<div class="container">

				<!-- Section Header -->
				<div class="section-header-one aos" data-aos="fade-up">
					<h2 class="section-title">Latest News</h2>
					<p>Have a look on our news & Articles will help you to understand about the health</p>
				</div>
				<!-- /Section Header -->

				<div class="owl-carousel blog-slider nav-center">

					<!-- Blog Post -->
					<div class="blog grid-blog aos" data-aos="fade-up">
						<div class="blog-image">
							<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/cardio-blog-01.jpg')}}" alt="Post Image"></a>
							<div class="post-author">
								<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/doctor-thumb-01.jpg')}}" alt="Post Author"><span>Dr. Pamila Certis</span></a>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-slug">Prevention</div>
							<h3 class="blog-title"><a href="{{url('blog-details')}}">How To Get Pregnant: Tips to Increase Fertility</a></h3>
							<p class="mb-0">Embark on a fertility journey with expert advice on lifestyle changes, nutrition, and holistic...</p>
						</div>
					</div>
					<!-- /Blog Post -->

					<!-- Blog Post -->
					<div class="blog grid-blog aos" data-aos="fade-up">
						<div class="blog-image">
							<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/cardio-blog-02.jpg')}}"
									alt="Post Image"></a>
							<div class="post-author">
								<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="Post Author"><span>Dr. Ronald Jacobs</span></a>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-slug">Diet</div>
							<h3 class="blog-title"><a href="{{url('blog-details')}}">The prevalence of coronary artery disease in patients presenting ....</a></h3>
							<p class="mb-0">Explore the rich culinary heritage of Central loremipsm with a flavourful recipe thought to be...</p>
						</div>
					</div>
					<!-- /Blog Post -->

					<!-- Blog Post -->
					<div class="blog grid-blog aos" data-aos="fade-up">
						<div class="blog-image">
							<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/cardio-blog-03.jpg')}}"
									alt="Post Image"></a>
							<div class="post-author">
								<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/doctor-thumb-07.jpg')}}" alt="Post Author"><span>Dr. Marie Wells</span></a>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-slug">Medecine</div>
							<h3 class="blog-title"><a href="{{url('blog-details')}}">Benefits of consulting with an Online
									Doctor</a></h3>
							<p class="mb-0">
								Embark on a fertility journey with expert advice on lifestyle changes, nutrition, and holistic...
								</p>
						</div>
					</div>
					<!-- /Blog Post -->

					<!-- Blog Post -->
					<div class="blog grid-blog aos" data-aos="fade-up">
						<div class="blog-image">
							<a href="{{url('blog-details')}}"><img class="img-fluid" src="{{URL::asset('/assets/img/blog/cardio-blog-04.jpg')}}"
									alt="Post Image"></a>
							<div class="post-author">
								<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctor-profiles/doc-profile-01.jpg')}}" alt="Post Author"><span>Dr. Darcie Nixon</span></a>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-slug">Symptoms</div>
							<h3 class="blog-title"><a href="{{url('blog-details')}}">Understanding Heart Disease: Types, Symptoms, and Risk Factors</a></h3>
							<p class="mb-0">Explore the various forms of heart disease, their symptoms, and the factors that ...</p>
						</div>
					</div>
					<!-- /Blog Post -->

				</div>
				<div class="view-all text-center aos" data-aos="fade-up">
					<a href="{{url('blog-list')}}" class="btn btn-primary">All Articles</a>
				</div>
			</div>
		</section>
		<!-- /Blog Section -->

    @component('components.scrolltotop')
    @endcomponent
@endsection
