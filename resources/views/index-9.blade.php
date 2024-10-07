<?php $page = 'index-9'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Home Banner -->
			<section class="banner-section-fourteen">
				<div class="container">
					<div class="row align-items-end">
						<div class="col-lg-8">
							<div class="banner-content banner-content-fourteen aos" data-aos="fade-up">
								<h1>Empowering Your Journey to Parenthood, Discover Fertility Solutions Today!</h1>
								<div class="banner-btns-fourteen">
									<a href="{{url('booking')}}" class="btn btn-primary"><i class="fa-solid fa-calendar-days"></i>Meet Our Specialist</a>
									<a href="{{url('booking-2')}}" class="btn btn-primarytwo"><i class="fa-solid fa-phone"></i>Schedule a Call</a>
								</div>
								<div class="search-box-fourteen
								 aos" data-aos="fade-up">
									<form action="{{url('search-2')}}" class="form-block d-flex">
										<div class="search-input">
											<div class="forms-block">
												<label>Date</label>
												<input type="text" class="form-control datetimepicker" placeholder="Thu, Mar 24, 2023">
											</div>
										</div>
										<div class="search-input">											
											<div class="forms-block mb-0">
												<label>Location</label>
												<input type="text" class="form-control" placeholder="San Diego Branch">
											</div>
										</div>
										<div class="search-btn">
											<button class="btn btn-primary" type="submit">Book Appointment</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="banner-img banner-img-fourteen aos" data-aos="fade-up">
								<img src="{{URL::asset('/assets/img/banner-six-2.png')}}" class="img-fluid" alt="Banner">
								<div class="banner-img1 banner-imgfourteen">
									<img src="{{URL::asset('/assets/img/icons/ban-six-icon1.svg')}}" class="img-fluid" alt="Icon">
								</div>
								<div class="banner-img2">
									<img src="{{URL::asset('/assets/img/icons/ban-six-icon3.svg')}}" class="img-fluid" alt="Icon">
								</div>
								<div class="banner-img3 banner-imgfourteen3">
									<img src="{{URL::asset('/assets/img/icons/ban-six-icon2.svg')}}" class="img-fluid" alt="Icon">
								</div>
								<div class="banner-imgfourteen4">
									<img src="{{URL::asset('/assets/img/icons/ban-img-icon-4.svg')}}" class="img-fluid" alt="Icon">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="banner-imgfourteen5">
					<img src="{{URL::asset('/assets/img/icons/ban-img-icon5.svg')}}" class="img-fluid" alt="Icon">
				</div>
				<div class="banner-imgfourteen6">
					<img src="{{URL::asset('/assets/img/icons/ban-img-icon6.svg')}}" class="img-fluid" alt="Icon">
				</div>
			</section>
			<!-- /Home Banner -->

			<!-- Benifit Section -->
			<section class="benifit-section">				
				<div class="bg-shapes">
					<img src="{{URL::asset('/assets/img/bg/benefit-bg.png')}}" alt="image" class="img-fluid">
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-header-fourteen text-center aos" data-aos="fade-up">
								<h2>Benefits <span>With Us</span></h2>
								<p>Pregnancy services typically refer to a range of medical, emotional, and practical support provided to individuals who are pregnant or planning a pregnancy.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-sm-6 d-flex aos" data-aos="fade-up">
							<div class="benifit-wrap flex-fill">
								<span>
									<img src="{{URL::asset('/assets/img/icons/benefit-icon-01.svg')}}" alt="img">
								</span>
								<h5>Qualified Doctors</h5>
								<p>Meet Our Trusted Team of Experienced Doctors.</p>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 d-flex aos" data-aos="fade-up">
							<div class="benifit-wrap flex-fill">
								<span>
									<img src="{{URL::asset('/assets/img/icons/benefit-icon-02.svg')}}" alt="img">
								</span>
								<h5>Modern Equipments</h5>
								<p>Experience Cutting-Edge Technology for Superior Care.</p>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 d-flex aos" data-aos="fade-up">
							<div class="benifit-wrap flex-fill">
								<span>
									<img src="{{URL::asset('/assets/img/icons/benefit-icon-03.svg')}}" alt="img">
								</span>
								<h5>Individual Approach</h5>
								<p>Experience Personalized Care Like Never Before.</p>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 d-flex aos" data-aos="fade-up">
							<div class="benifit-wrap flex-fill">
								<span>
									<img src="{{URL::asset('/assets/img/icons/benefit-icon-04.svg')}}" alt="img">
								</span>
								<h5>Qualified Doctors</h5>
								<p>Urgent Help When You Need It Most</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /Benifit Section -->

			<!-- services Section -->
			<section class="services-section-fourteen">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-header-fourteen text-center aos" data-aos="fade-up">
								<h2>Services <span>We Provide</span></h2>
								<p>Pregnancy services typically refer to a range of medical, emotional, and practical support provided to individuals who are pregnant or planning a pregnancy.</p>
							</div>
						</div>
						<div class="col-lg-12 aos" data-aos="fade-up">
							<div class="fertility-slider owl-carousel nav-center">
								<div class="card service-inner-fourt-all w-100">
									<div class="card-body service-inner-fourt-main">
										<div class="service-inner-item">
											<a href="{{url('search')}}">
												<div class="service-inner-img">
													<img src="{{URL::asset('/assets/img/service/fertility-01.jpg')}}" class="img-fluid" alt="image">
												</div>
											</a>
											<div class="service-body">
												<span class="service-icon">
													<img src="{{URL::asset('/assets/img/icons/care-01.svg')}}" class="img-fluid" alt="image">
												</span>
												<span class="service-icon-img">
													<img src="{{URL::asset('/assets/img/icons/care-big-01.svg')}}" class="img-fluid" alt="image">
												</span>
												<h4><a href="{{url('search')}}" class="service-inner-right-fourt-care">Prenatal care</a></h4>
												<p>Regular medical check-ups during pregnancy to monitor the health of the mother and the developing baby.</p>
												<a href="{{url('search')}}" class="service-link">Learn More<i class="fa-solid fa-chevron-right"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="card service-inner-fourt-all w-100">
									<div class="card-body service-inner-fourt-main">
										<div class="service-inner-item">
											<a href="{{url('search')}}">
												<div class="service-inner-img">
													<img src="{{URL::asset('/assets/img/service/fertility-02.jpg')}}" alt="image">
												</div>
											</a>
											<div class="service-body">
												<span class="service-icon">
													<img src="{{URL::asset('/assets/img/icons/care-02.svg')}}" class="img-fluid" alt="image">
												</span>
												<span class="service-icon-img">
													<img src="{{URL::asset('/assets/img/icons/care-big-02.svg')}}" class="img-fluid" alt="image">
												</span>
												<h4><a href="{{url('search')}}" class="service-inner-right-fourt-care">Obstetric care</a></h4>
												<p>Medical care provided by obstetricians or midwives throughout pregnancy, labor, and delivery.</p>
												<a href="{{url('search')}}" class="service-link">Learn More<i class="fa-solid fa-chevron-right"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="card service-inner-fourt-all w-100">
									<div class="card-body service-inner-fourt-main">
										<div class="service-inner-item">
											<a href="{{url('search')}}">
												<div class="service-inner-img">
													<img src="{{URL::asset('/assets/img/service/fertility-03.jpg')}}" alt="image">
												</div>
											</a>
											<div class="service-body">
												<span class="service-icon">
													<img src="{{URL::asset('/assets/img/icons/care-03.svg')}}" class="img-fluid" alt="image">
												</span>
												<span class="service-icon-img">
													<img src="{{URL::asset('/assets/img/icons/care-big-03.svg')}}" class="img-fluid" alt="image">
												</span>
												<h4><a href="{{url('search')}}" class="service-inner-right-fourt-care">Ultrasound imaging</a></h4>
												<p>Using sound waves to create images of the fetus in the womb, which helps monitor fetal development and detect any potential issues.</p>
												<a href="{{url('search')}}" class="service-link">Learn More<i class="fa-solid fa-chevron-right"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="card service-inner-fourt-all w-100">
									<div class="card-body service-inner-fourt-main">
										<div class="service-inner-item">
											<a href="{{url('search')}}">
												<div class="service-inner-img">
													<img src="{{URL::asset('/assets/img/service/fertility-04.jpg')}}" alt="image">
												</div>
											</a>
											<div class="service-body">
												<span class="service-icon">
													<img src="{{URL::asset('/assets/img/icons/care-04.svg')}}" class="img-fluid" alt="image">
												</span>
												<span class="service-icon-img">
													<img src="{{URL::asset('/assets/img/icons/care-big-04.svg')}}" class="img-fluid" alt="image">
												</span>
												<a href="{{url('search')}}" class="service-inner-right-fourt-care">Counseling & Education</a>
												<p>Providing information and support regarding pregnancy, childbirth, parenting, breastfeeding, and other related topics.</p>
												<a href="{{url('search')}}" class="service-link">Learn More<i class="fa-solid fa-chevron-right"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="card service-inner-fourt-all w-100">
									<div class="card-body service-inner-fourt-main">
										<div class="service-inner-item">
											<a href="{{url('search')}}">
												<div class="service-inner-img">
													<img src="{{URL::asset('/assets/img/service/fertility-05.jpg')}}" alt="image">
												</div>
											</a>
											<div class="service-body">
												<span class="service-icon">
													<img src="{{URL::asset('/assets/img/icons/care-05.svg')}}" class="img-fluid" alt="image">
												</span>
												<span class="service-icon-img">
													<img src="{{URL::asset('/assets/img/icons/care-big-05.svg')}}" class="img-fluid" alt="image">
												</span>
												<a href="{{url('search')}}" class="service-inner-right-fourt-care">Maternity and baby supplies</a>
												<p>Providing access to essential items such as prenatal vitamins, maternity clothes, diapers, and baby formula</p>
												<a href="{{url('search')}}" class="service-link">Learn More<i class="fa-solid fa-chevron-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-sec text-center">
								<a href="{{url('search')}}" class="btn btn-primary">Browse all services<i class="fa-solid fa-chevron-right"></i></a>
							</div>
						</div>
						<div class="bg-shapes">
							<img src="{{URL::asset('/assets/img/icons/ban-img-icon7.svg')}}" alt="image" class="img-fluid shape-1">
							<img src="{{URL::asset('/assets/img/icons/ban-img-icon8.svg')}}" alt="image" class="img-fluid shape-2">
							<img src="{{URL::asset('/assets/img/icons/ban-img-icon9.svg')}}" alt="image" class="img-fluid shape-3">
						</div>
					</div>
				</div>
			</section>
			<!-- /services Section -->

			<!-- Choose us -->
			<section class="choose-us-fourteen">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="choose-us-image  aos" data-aos="fade-up">
								<img src="{{URL::asset('/assets/img/choose-us-six.png')}}" alt="image" class="img-fluid">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="choose-content aos" data-aos="fade-up">
								<div class="section-header-fourteen">
									<h6>Why Choose us</h6>
									<h2>We’ll Ensure You Always Get the Best <span>Treatment.</span></h2>
									<p>We are effectively communicate the compassionate care, expertise, and comprehensive services offered by your fertility hospital, inspiring hope and confidence in patients seeking assistance with their fertility challenges.</p>
								</div>
								<ul>
									<li>Core of our mission is commitment to excellence in patient care. </li>
									<li>We strive to enhance the quality of life for individuals of all ages</li>
									<li>Addressing with precision  & latest medical advancements.</li>
								</ul>
								<div class="choose-list">
									<div class="num-item">
										<h3>500+</h3>
										<h5>Doctors Available</h5>
									</div>
									<div class="num-item">
										<h3>2k+</h3>
										<h5>Appointments</h5>
									</div>
									<div class="num-item">
										<h3>100%</h3>
										<h5>Patient Satisfaction</h5>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<div class="bg-shapes">
						<img src="{{URL::asset('/assets/img/icons/bg-icon-01.svg')}}" alt="image" class="img-fluid shape-1">
						<img src="{{URL::asset('/assets/img/icons/bg-icon-02.svg')}}" alt="image" class="img-fluid shape-2">
					</div>
				</div>
			</section>
			<!-- /Choose us -->

			<!-- Team Section -->
			<div class="team-section-fourteen">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-header-fourteen text-center aos" data-aos="fade-up">
								<h2>Qualified <span>Doctors</span></h2>
								<p>Pregnancy services typically refer to a range of medical, emotional, and practical support provided to individuals who are pregnant or planning a pregnancy.</p>
							</div>
						</div>
					</div>
					<div class="owl-carousel team-fourteen-slider nav-center owl-theme aos" data-aos="fade-up">
						<div class="item">
							<div class="our-doctors-card">
								<div class="doctors-header">
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/fertility-doc-01.jpg')}}" alt="Dr. Marie Wells" class="img-fluid"></a>
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
										<p><i class="feather-map-pin"></i>0.7 min - Baltimore, MD</p>
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
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/fertility-doc-02.jpg')}}" alt="Dr. Rebekah" class="img-fluid"></a>
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
										<p><i class="feather-map-pin"></i> 0.9 min - East Syracuse, NY</p>
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
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/fertility-doc-03.jpg')}}" alt="Dr. Johnson" class="img-fluid"></a>
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
										<p><i class="feather-map-pin"></i>10 min - Athens, AL</p>
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
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/fertility-doc-04.jpg')}}" alt="Darren Elder" class="img-fluid"></a>
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
										<p><i class="feather-map-pin"></i>15 min - Santa Cruz, CA</p>
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
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/fertility-doc-05.jpg')}}" alt="Dr. Johnson" class="img-fluid"></a>
								</div>
								<div class="doctors-body">
									<a href="{{url('doctor-profile')}}">
										<h4>Dr. Richard</h4>
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
										<p><i class="feather-map-pin"></i>15 min - 29 Webster St, NH</p>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<span class="view-btn" tabindex="0">$180</span>
										<a href="{{url('booking')}}" class="btn book-btn">Consult Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="our-doctors-card">
								<div class="doctors-header">
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/fertility-doc-06.jpg')}}" alt="Dr. Johnson" class="img-fluid"></a>
								</div>
								<div class="doctors-body">
									<a href="{{url('doctor-profile')}}">
										<h4>Dr. Angel</h4>
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
										<p><i class="feather-map-pin"></i>10 min - 48 Oak Lane, MO</p>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<span class="view-btn" tabindex="0">$210</span>
										<a href="{{url('booking')}}" class="btn book-btn">Consult Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>			
				<div class="bg-shapes">
					<img src="{{URL::asset('/assets/img/bg/benefit-bg.png')}}" alt="image" class="img-fluid">
				</div>
			</div>
			<!-- /Team Section -->

			<!-- Feedback -->
			<section class="clients-section-fourteen">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="client-inner-main">
								<img src="{{URL::asset('/assets/img/bg/feedback-six.png')}}" alt="image" class="img-fluid">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="section-header-fourteen">
								<h2>Our Happy <span>Clients</span></h2>
								<p>Our clients feedback about us</p>
							</div>
							<div class="owl-carousel feedback-slider-fourteen owl-theme aos" data-aos="fade-up">
								<div class="card feedback-card">
									<div class="card-body feedback-card-body">
										<div class="feedback-inner-main">
											<div class="rating rating-fourteen">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<p>My journey towards parenthood became a seamless and informed experience. The comprehensive resources, expert advice, and supportive community played a pivotal role in our successful conception. Grateful for this invaluable platform that guided us every step of the way.</p>
											<h4>Jenifer Robinson</h4>
											<h6>Texas, USA</h6>
										</div>
									</div>
								</div>
								<div class="card feedback-card">
									<div class="card-body feedback-card-body">
										<div class="feedback-inner-main">
											<div class="rating rating-fourteen">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<p>Doctors explains everything clearly and helps you to understand complex medical terms. Excellent clinician. Endlessly patient and reassuring.Also a very efficient
											back up team. He was prepared to spend as long as I needed to understand
											what he was saying.</p>
											<h4>Matthew George</h4>
											<h6>Texas, USA</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- /Feedback -->

			<!-- blog section -->
			<div class="blog-section-fourteen">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-header-fourteen text-center">
								<h2>Recent <span>Articles</span></h2>
								<p>Checkout latest articles from our experience doctors</p>
							</div>
						</div>
					</div>
					<div class="owl-carousel blog-slider-fourteen nav-center owl-theme aos" data-aos="fade-up">
						<div class="card blog-inner-fourt-all">
							<div class="card-body blog-inner-fourt-main">
								<div class="blog-inner-right-fourt">
									<a href="{{url('blog-details')}}">
										<div class="blog-inner-right-img">
											<img src="{{URL::asset('/assets/img/blog/blog-15.jpg')}}" alt="image" class="img-fluid blog-inner-right-inner">
											<div class="blog-inner-top-content">
												<img src="{{URL::asset('/assets/img/doctors/doctor-04.jpg')}}" alt="Doctor" class="me-2">
												<span>Dr. Pamila Certis</span>
											</div>
										</div>
									</a>
									<a href="{{url('blog-details')}}" class="blog-inner-right-fourt-care">How To Get Pregnant: Tips to Increas it Affect Fertility</a>
									<ul class="articles-list nav blog-articles-list">
										<li>
											<i class="feather-calendar"></i> 15 Nov 2024
										</li>
										<li>
											<i class="feather-message-square"></i> 68
										</li>
										<li>
											<i class="feather-eye"></i> 1.5k
										</li>
									</ul>
									<p>Embark on a fertility journey with expert advice on lifestyle changes, nutrition, and holistic...</p>
									<ul class="articles-list nav blog-articles-list-two">
										<li>Fertility</li>
										<li>Pregnancy</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card blog-inner-fourt-all">
							<div class="card-body blog-inner-fourt-main">
								<div class="blog-inner-right-fourt">
									<a href="{{url('blog-details')}}">
										<div class="blog-inner-right-img">
											<img src="{{URL::asset('/assets/img/blog/blog-16.jpg')}}" alt="image" class="img-fluid blog-inner-right-inner">
											<div class="blog-inner-top-content">
												<img src="{{URL::asset('/assets/img/doctors/doctor-05.jpg')}}" alt="Doctor" class="me-2">
												<span>Dr. James Matthew</span>
											</div>
										</div>
									</a>
									<a href="{{url('blog-details')}}" class="blog-inner-right-fourt-care">Flavourful Recipe of Central India to Boost Fertility</a>
									<ul class="articles-list nav blog-articles-list">
										<li>
											<i class="feather-calendar"></i> 18 Nov 2024
										</li>
										<li>
											<i class="feather-message-square"></i> 70
										</li>
										<li>
											<i class="feather-eye"></i> 1.2k
										</li>
									</ul>
									<p>Explore the rich culinary heritage of Central India with a flavourful recipe thought to be...</p>
									<ul class="articles-list nav blog-articles-list-two">
										<li>Diet</li>
										<li>Health</li>
										<li>Natural Foods</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card blog-inner-fourt-all">
							<div class="card-body blog-inner-fourt-main">
								<div class="blog-inner-right-fourt">
									<a href="{{url('blog-details')}}">
										<div class="blog-inner-right-img">
											<img src="{{URL::asset('/assets/img/blog/blog-17.jpg')}}" alt="image" class="img-fluid blog-inner-right-inner">
											<div class="blog-inner-top-content">
												<img src="{{URL::asset('/assets/img/doctors/doctor-06.jpg')}}" alt="Doctor" class="me-2">
												<span>Dr. James Certis</span>
											</div>
										</div>
									</a>
									<a href="{{url('blog-details')}}" class="blog-inner-right-fourt-care">Sperm Morphology – What is it & How Does it Affect Fertility</a>
									<ul class="articles-list nav blog-articles-list">
										<li>
											<i class="feather-calendar"></i> 20 Nov 2024
										</li>
										<li>
											<i class="feather-message-square"></i> 54
										</li>
										<li>
											<i class="feather-eye"></i> 1.4k
										</li>
									</ul>
									<p>Explore the intricacies of sperm morphology, its role in fertility, and insights into factors...</p>
									<ul class="articles-list nav blog-articles-list-two">
										<li>Health</li>
										<li>Fertility</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card blog-inner-fourt-all">
							<div class="card-body blog-inner-fourt-main">
								<div class="blog-inner-right-fourt">
									<a href="{{url('blog-details')}}">
										<div class="blog-inner-right-img">
											<img src="{{URL::asset('/assets/img/blog/fertility-blog-01.jpg')}}" alt="image" class="img-fluid blog-inner-right-inner">
											<div class="blog-inner-top-content">
												<img src="{{URL::asset('/assets/img/doctor-profiles/doc-profile-07.jpg')}}" alt="Doctor" class="me-2">
												<span>Dr. Kathleen Potts</span>
											</div>
										</div>
									</a>
									<a href="{{url('blog-details')}}" class="blog-inner-right-fourt-care">Top 10 Foods That Can Boost Fertility Naturally</a>
									<ul class="articles-list nav blog-articles-list">
										<li>
											<i class="feather-calendar"></i> 24 Nov 2024
										</li>
										<li>
											<i class="feather-message-square"></i> 63
										</li>
										<li>
											<i class="feather-eye"></i> 2.2k
										</li>
									</ul>
									<p>Discover the power of nutrition in enhancing fertility with a curated list of fertility-friendly...</p>
									<ul class="articles-list nav blog-articles-list-two">
										<li>Food</li>
										<li>Fertility</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="btn-sec text-center aos aos-init aos-animate" data-aos="fade-up">
						<a href="{{url('search')}}" class="btn btn-primary">Browse all blogs<i class="fa-solid fa-chevron-right"></i></a>
					</div>
					<div class="faq-info aos" data-aos="fade-up">
						<div class="row">
							<div class="col-lg-8 mx-auto">
								<div class="section-header-fourteen text-center">
									<h2>Frequently Asked <span>Questions</span></h2>
									<p>Questions  that solves the doubts of our patients</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 mx-auto">
								<div class="accordion" id="faq-details">

									<!-- FAQ Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingOne">
											<a href="javascript:void(0);" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												How do I book an appointment with a doctor?
											</a>
										</h2>
										<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq-details">
											<div class="accordion-body">
												<div class="accordion-content">
													<p>Yes, simply visit our website and log in or create an account. Search for a doctor based on specialization, location, or availability & confirm your booking.</p>
												</div> 
											</div>
										</div>
									</div>
									<!-- /FAQ Item -->

									<!-- FAQ Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingTwo">
											<a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Can I request a specific doctor when booking my appointment? 
											</a>
										</h2>
										<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq-details">
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
										<h2 class="accordion-header" id="headingThree">
											<a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												What should I do if I need to cancel or reschedule my appointment?
											</a>
										</h2>
										<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-details">
											<div class="accordion-body">
												<div class="accordion-content">
													<p>If you need to cancel or reschedule your appointment, contact the doctor as soon as possible to inform them and to reschedule for another available time slot.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /FAQ Item -->

									<!-- FAQ Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingFour">
											<a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												What if I'm running late for my appointment?
											</a>
										</h2>
										<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq-details">
											<div class="accordion-body">
												<div class="accordion-content">
													<p>If you know you will be late, it's courteous to call the doctor's office and inform them. Depending on their policy and schedule, they may be able to accommodate you or reschedule your appointment.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /FAQ Item -->

									<!-- FAQ Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingFive">
											<a href="javascript:void(0);" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
												Can I book appointments for family members or dependents?
											</a>
										</h2>
										<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-details">
											<div class="accordion-body">
												<div class="accordion-content">
													<p>Yes, in many cases, you can book appointments for family members or dependents. However, you may need to provide their personal information and consent to do so.</p>
												</div>
											</div>
										</div>
									</div>
									<!-- /FAQ Item -->
												
								</div>
							</div>
						</div>
					</div>
					<div class="bg-shapes">
						<img src="{{URL::asset('/assets/img/bg/article-bg.png')}}" alt="image" class="img-fluid shape-1">
					</div>
				</div>
			</div>
			<!-- /blog section -->
    @component('components.scrolltotop')
    @endcomponent
@endsection
