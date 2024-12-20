<?php $page = 'index-10'; ?>
@extends('layout.mainlayout')
@section('content')
   <!-- Home Banner -->
		<section class="banner-section-fifteen">
			<div class="sec-bg">
				<img src="{{URL::asset('/assets/img/bg/ent-banner-bg-01.png')}}" class="ban-blue-bg" alt="Img">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner-content banner-content-fifteen aos" data-aos="fade-up">
							<h2>Painless, Safe Treatment</h2>
							<h1>Hear what you have been Missing</h1>
							<div class="banner-btns-fifteen">
								<a href="{{url('doctor/doctor-appointments')}}" class="btn btn-primary me-2">Make an Appointment</a>
								<a href="{{url('booking')}}" class="btn btn-primary btns-primarytwo">Quick Consultation</a>
							</div>
							<div class="d-sm-flex align-items-center">
								<div class="aboutus-companyimg">
									<a href="#">
										<img src="{{URL::asset('/assets/img/banner-fifteen-vd.jpg')}}" alt="image" class="img-fluid">
									</a>
									<a href="https://www.youtube.com/embed/VXjGBqpbra0" data-fancybox>
										<div class="playicon">
											<span>
												<i class="fa-solid fa-play"></i>
											</span>
										</div>
									</a>
								</div>
								<div class="support-consult-main">
									<div class="support-consult">
										<div class="support-consult-img">
											<img src="{{URL::asset('/assets/img/icons/customer-service-2.svg')}}" alt="Service">
										</div>
										<div class="support-consult-right">
											<h6>24/7 Support</h6>
											<div class="rating rating-fifteen">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
											</div>
										</div>
									</div>
									<div class="support-consult">
										<div class="support-consult-img">
											<img src="{{URL::asset('/assets/img/icons/customer-service-1.svg')}}" alt="Service">
										</div>
										<div class="support-consult-right">
											<h6>Online Consultation</h6>
											<span>Just 60 Secs</span>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-lg-5">
						<div class="banner-right-fifteen">
							<img src="{{URL::asset('/assets/img/banner-fifteen-ryt.png')}}" alt="image" class="img-fluid">
							<div class="banner-right-fifteenone">
								<img src="{{URL::asset('/assets/img/ban-fift-icon1.png')}}" alt="Icon">
							</div>
							<div class="banner-right-fifteentwo">
								<img src="{{URL::asset('/assets/img/ban-fift-icon2.png')}}" alt="Icon">
							</div>
							<div class="banner-right-fifteenthree">
								<img src="{{URL::asset('/assets/img/ban-fift-icon3.png')}}" alt="Icon">
							</div>
							<div class="banner-right-fifteenfour">
								<img src="{{URL::asset('/assets/img/ban-fift-icon4.png')}}" alt="Icon">
							</div>
							<div class="banner-right-fifteenseven">
								<img src="{{URL::asset('/assets/img/ban-fift-icon7.png')}}" alt="Icon">
							</div>
							<div class="banner-right-fifteeneight">
								<img src="{{URL::asset('/assets/img/ban-fift-icon8.png')}}" alt="Icon">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Home Banner -->

		<!-- services Section -->
		<section class="services-section-fifteen">
			<div class="service-bg-icon">
				<img src="{{URL::asset('/assets/img/serive-bg-icon.png')}}" alt="Icon">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header-fifteen text-center">
							<h2>Our <span>Services</span></h2>
							<p>Our goal is to give the patient maximum relief within minimal pain inflicted</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="item">
							<div class="doctor-profile-widget-fifteen">
								<div class="doc-pro-img">
									<a href="{{url('doctor-profile')}}">
										<div class="doctor-profile-img">
											<img src="{{URL::asset('/assets/img/service/service-3.jpg')}}" class="img-fluid" alt="Service">
										</div>
									</a>
								</div>
								<div class="doc-content-bottom">
									<div class="doc-content-split">
										<a href="{{url('doctor-profile')}}">EAR Treatment</a>
									</div>
									<p>we are dedicated to providing the highest standard of care 
										for all ear-related concerns
									</p>
									<span>5+ Services</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="item">
							<div class="doctor-profile-widget-fifteen">
								<div class="doc-pro-img">
									<a href="{{url('doctor-profile')}}">
										<div class="doctor-profile-img">
											<img src="{{URL::asset('/assets/img/service/service-2.jpg')}}" class="img-fluid" alt="Service">
										</div>
									</a>
								</div>
								<div class="doc-content-bottom">
									<div class="doc-content-split">
										<a href="{{url('doctor-profile')}}">Nose and Sinus</a>
										
									</div>
									<p>The cranial aspect of the human body commanded respect from patients and doctors
										alike.</p>
										<span>10+ Services</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="item">
							<div class="doctor-profile-widget-fifteen">
								<div class="doc-pro-img">
									<a href="{{url('doctor-profile')}}">
										<div class="doctor-profile-img">
											<img src="{{URL::asset('/assets/img/service/service-1.jpg')}}" class="img-fluid" alt="Service">
										</div>
									</a>
								</div>
								<div class="doc-content-bottom">
									<div class="doc-content-split">
										<a href="{{url('doctor-profile')}}">Throat / Larynx Surgery</a>
										
									</div>
									<p>Laryngoplasty was introduced and popularised by Isshiki in the 1970’s.</p>
									<span>15+ Services</span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- /services Section -->

		<!-- Patients Section -->
		<div class="Patients-section-fifteen">
			<div class="patient-fifteen-icon">
				<img src="{{URL::asset('/assets/img/fifteen-bg-icon-3.png')}}" alt="Icon">
			</div>
			<div class="sec-bg-img">
				<img src="{{URL::asset('/assets/img/bg/rectangle-bg.png')}}" class="blue-rec-bg" alt="Img">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="patients-left-front patients-left-img">
							<img src="{{URL::asset('/assets/img/patients-img-fifteen.png')}}" alt="Patients" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="section-header-fifteen section-header-fifteenpatient">
							<h2>Who <span>We Are</span></h2>
							<p>Our goal is to give the patient maximum relief within minimal pain inflicted</p>
						</div>
						<p>At Surna, we are dedicated to providing comprehensive and compassionate care for all your
							ENT needs. Our team of experienced and highly skilled ENT specialists is
							committed to ensuring the well-being of our patients through state-of-the-art medical services.
						</p>
						<p>At the core of our mission is a commitment to excellence in patient care. We strive 
							to enhance the quality of life for individuals of all ages by addressing a wide range 
							of ENT issues with precision, empathy, and the latest medical advancements.
						</p>
						<div class="row">
							<div class="col-md-4">
								<div class="service-patient-inflict">
									<div class="service-patient-inflictimg">
										<span>
											<img src="{{URL::asset('/assets/img/icons/we-are-icon3.svg')}}" alt="Icon">
										</span>
									</div>
									<div class="clients-fifteen-span">
										<h3 class="counter">14,500</h3>
									</div>
									<h6>ENT Surgery</h6>
								</div>
							</div>
							<div class="col-md-4">
								<div class="service-patient-inflict">
									<div class="service-patient-inflictimg">
										<span>
											<img src="{{URL::asset('/assets/img/icons/we-are-icon2.svg')}}" alt="Icon">
										</span>
									</div>
									<div class="clients-fifteen-span">
										<h3 class="counter">50,000</h3>
										<span>+</span>
									</div>
									<h6>Happy Patients</h6>
								</div>
							</div>
							<div class="col-md-4">
								<div class="service-patient-inflict">
									<div class="service-patient-inflictimg">
										<span>
											<img src="{{URL::asset('/assets/img/icons/we-are-icon1.svg')}}" alt="Icon">
										</span>
									</div>
									<div class="clients-fifteen-span">
										<h3 class="counter">30</h3>
										<span>+</span>
									</div>
									<h6>Years of Service</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Patients Section -->

		<!-- Doctors section -->
		<div class="doctors-section-fifteen">
			<div class="doctor-fifteen-icon">
				<img src="{{URL::asset('/assets/img/fifteen-bg-icon-2.png')}}" alt="Icon">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header-fifteen text-center">
							<h2>Our <span>Expert Doctors</span></h2>
							<p>The Great Place Of ENT Hospital Center</p>
						</div>
					</div>
				</div>
				<div class="owl-carousel doctor-slider-fifteen owl-theme aos" data-aos="fade-up">
					<div class="item item-fifteen">
						<div class="doctor-profile-widget">
							<div class="doc-pro-img">
								<a href="{{url('doctor-profile')}}">
									<div class="doctor-profile-img">
										<img src="{{URL::asset('/assets/img/doctors/doctor-28.jpg')}}" class="img-fluid" alt="Icon">
									</div>
								</a>
								<div class="doctor-amount">
									<a href="javascript:void(0)" class="fav-icon">
										<i class="feather-heart"></i>
									</a>
								</div>
								<div class="item-info">
									<h6>15+ Years Experience</h6>
								</div>
							</div>
							<div class="doc-content-fift">
								<a href="{{url('doctor-profile')}}">Dr. Brandon Nicholas</a>
								<p>MBBS, MS - ENT</p>
								<div class="rate-fifteen">
									<div class="rate-four">
										<i class="fa-regular fa-star me-2"></i><span>4.9</span>
									</div>
									<ul>
										<li>
											Mo
										</li>
										<li>
											Tu
										</li>
										<li>
											We
										</li>
										<li>
											Th
										</li>
										<li>
											Fri
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="item item-fifteen">
						<div class="doctor-profile-widget">
							<div class="doc-pro-img">
								<a href="{{url('doctor-profile')}}">
									<div class="doctor-profile-img">
										<img src="{{URL::asset('/assets/img/doctors/doctor-29.jpg')}}" class="img-fluid" alt="Doctor">
									</div>
								</a>
								<div class="doctor-amount">
									<a href="javascript:void(0)" class="fav-icon">
										<i class="feather-heart"></i>
									</a>
								</div>
								<div class="item-info">
									<h6>5+ Years Experience</h6>
								</div>
							</div>
							<div class="doc-content-fift">
								<a href="{{url('doctor-profile')}}">Dr. Katherine Victoria</a>
								<p>MBBS, MS - ENT</p>
								<div class="rate-fifteen">
									<div class="rate-four">
										<i class="fa-regular fa-star me-2"></i><span>4.6</span>
									</div>
									<ul>
										<li>
											We
										</li>
										<li>
											Th
										</li>
										<li>
											Fri
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="item item-fifteen">
						<div class="doctor-profile-widget">
							<div class="doc-pro-img">
								<a href="{{url('doctor-profile')}}">
									<div class="doctor-profile-img">
										<img src="{{URL::asset('/assets/img/doctors/doctor-11.jpg')}}" class="img-fluid" alt="Doctor">
									</div>
								</a>
								<div class="doctor-amount">
									<a href="javascript:void(0)" class="fav-icon">
										<i class="feather-heart"></i>
									</a>
								</div>
								<div class="item-info">
									<h6>7+ Years Experience</h6>
								</div>
							</div>
							<div class="doc-content-fift">
								<a href="{{url('doctor-profile')}}">Dr. Lisa Madeleine</a>
								<p>MBBS, MS - ENT</p>
								<div class="rate-fifteen">
									<div class="rate-four">
										<i class="fa-regular fa-star me-2"></i><span>4.4</span>
									</div>
									<ul>
										<li>
											Mo
										</li>
										<li>
											Tu
										</li>
										<li>
											Th
										</li>
										<li>
											Fri
										</li>
										<li>
											Sat
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="item item-fifteen">
						<div class="doctor-profile-widget">
							<div class="doc-pro-img">
								<a href="{{url('doctor-profile')}}">
									<div class="doctor-profile-img">
										<img src="{{URL::asset('/assets/img/doctors/doctor-09.jpg')}}" class="img-fluid" alt="Doctor">
									</div>
								</a>
								<div class="doctor-amount">
									<a href="javascript:void(0)" class="fav-icon">
										<i class="feather-heart"></i>
									</a>
								</div>
								<div class="item-info">
									<h6>15+ Years Experience</h6>
								</div>
							</div>
							<div class="doc-content-fift">
								<a href="{{url('doctor-profile')}}">Dr. Brandon Nicholas</a>
								<p>Ear-Nose-Throat (ENT) Specialist</p>
								<div class="rate-fifteen">
									<div class="rate-four">
										<i class="fa-regular fa-star me-2"></i><span>4.8</span>
									</div>
									<ul>
										<li>
											Mo
										</li>
										<li>
											Tu
										</li>
										<li>
											We
										</li>
										<li>
											Th
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /blog section -->

		<!-- Pharmacy Section -->
		<section class="pharmacy-section-fifteen">
			<div class="sec-bg">
				<img src="{{URL::asset('/assets/img/bg/tablet-bg.png')}}" class="tablet-left" alt="Img">
				<img src="{{URL::asset('/assets/img/bg/round-tablet-bg.png')}}" class="tablet-right" alt="Img">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header-fifteen text-center">
							<h2>Online <span>Pharmacy Store</span></h2>
							<p>More the quantity, higher the discount. Hurry, Buy Now!</p>
						</div>
					</div>
				</div>
				<div class="owl-carousel pharmacy-slider-fifteen owl-theme aos" data-aos="fade-up">
					<div class="item item-fifteen">
						<div class="doctor-profile-widget doctor-profile-widget-fift">
							<div class="doc-pro-img doc-pro-img-fifteen">
								<a href="{{url('doctor-profile')}}">
									<div class="doctor-profile-img doctor-profile-img-fifteen">
										<img src="{{URL::asset('/assets/img/pharmacy-1.png')}}" class="img-fluid" alt="Doctor">
									</div>
								</a>
								<div class="doctor-amount">
									<a href="javascript:void(0)" class="fav-icon fav-icon-fifteen">
										<i class="feather-heart"></i>
									</a>
								</div>
								<div class="item-info">
									<h6>10% Off</h6>
								</div>
								<div class="overlay-icons">
									<a href="{{url('cart')}}"><i class="fa-solid fa-cart-shopping"></i></a>
									<a href="#"><i class="fa-solid fa-heart"></i></a>
								</div>
							</div>
							<div class="doc-content-fift d-flex justify-content-between align-items-center">
								<div class="name-product">
									<a href="#">Otogesic Ear Drops</a>
									<p>Sold by: ERIS LIFESCIENCES LTD</p>
								</div>
								<h3 class="product-price">$150</h3>
							</div>
						</div>
					</div>
					<div class="item item-fifteen">
						<div class="doctor-profile-widget doctor-profile-widget-fift">
							<div class="doc-pro-img doc-pro-img-fifteen">
								<a href="{{url('doctor-profile')}}">
									<div class="doctor-profile-img doctor-profile-img-fifteen">
										<img src="{{URL::asset('/assets/img/pharmacy-2.png')}}" class="img-fluid" alt="Doctor">
									</div>
								</a>
								<div class="doctor-amount">
									<a href="javascript:void(0)" class="fav-icon fav-icon-fifteen">
										<i class="feather-heart"></i>
									</a>
								</div>
								<div class="item-info">
									<h6>15% Off</h6>
								</div>
								<div class="overlay-icons">
									<a href="{{url('cart')}}"><i class="fa-solid fa-cart-shopping"></i></a>
									<a href="#"><i class="fa-solid fa-heart"></i></a>
								</div>
							</div>
							<div class="doc-content-fift d-flex justify-content-between align-items-center">
								<div class="name-product">
									<a href="#">Himalaya Bresol-NS</a>
									<p>Sold by: THE HIMALAYA </p>
								</div>
								<h3 class="product-price">$120</h3>
							</div>
						</div>
					</div>
					<div class="item item-fifteen">
						<div class="doctor-profile-widget doctor-profile-widget-fift">
							<div class="doc-pro-img doc-pro-img-fifteen">
								<a href="{{url('doctor-profile')}}">
									<div class="doctor-profile-img doctor-profile-img-fifteen">
										<img src="{{URL::asset('/assets/img/pharmacy-3.png')}}" class="img-fluid" alt="Pharmacy">
									</div>
								</a>
								<div class="doctor-amount">
									<a href="javascript:void(0)" class="fav-icon fav-icon-fifteen">
										<i class="feather-heart"></i>
									</a>
								</div>
								<div class="item-info">
									<h6>10% Off</h6>
								</div>
								<div class="overlay-icons">
									<a href="{{url('cart')}}"><i class="fa-solid fa-cart-shopping"></i></a>
									<a href="#"><i class="fa-solid fa-heart"></i></a>
								</div>
							</div>
							<div class="doc-content-fift d-flex justify-content-between align-items-center">
								<div class="name-product">
									<a href="#">Otogesic Ear Drops</a>
									<p>Sold by: BOIRON</p>
								</div>
								<h3 class="product-price">$130</h3>
							</div>
						</div>
					</div>
					<div class="item item-fifteen">
						<div class="doctor-profile-widget doctor-profile-widget-fift">
							<div class="doc-pro-img doc-pro-img-fifteen">
								<a href="{{url('doctor-profile')}}">
									<div class="doctor-profile-img doctor-profile-img-fifteen">
										<img src="{{URL::asset('/assets/img/pharmacy-1.png')}}" class="img-fluid" alt="Pharmacy">
									</div>
								</a>
								<div class="doctor-amount">
									<a href="javascript:void(0)" class="fav-icon fav-icon-fifteen">
										<i class="feather-heart"></i>
									</a>
								</div>
								<div class="item-info">
									<h6>10% Off</h6>
								</div>
								<div class="overlay-icons">
									<a href="{{url('cart')}}"><i class="fa-solid fa-cart-shopping"></i></a>
									<a href="#"><i class="fa-solid fa-heart"></i></a>
								</div>
							</div>
							<div class="doc-content-fift d-flex justify-content-between align-items-center">
								<div class="name-product">
									<a href="#">Otogesic Ear Drops</a>
									<p><span>Sold by:</span> ERIS LIFESCIENCES LTD</p>
								</div>
								<h3 class="product-price">$150</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Pharmacy section -->

		<!-- Feedback -->
		<section class="feedback-section-fifteen">
			<div class="container">
				<div class="feedback-schedule-all">
					<div class="row">
						<div class="col-lg-5">
							<div class="feedback-inner-main">
								<img src="{{URL::asset('/assets/img/feedback-fifteen.png')}}" alt="image" class="img-fluid">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="feedback-fifteen-content">
								<h3>Consult top doctors online for any health concern</h3>
								<p>Connect within 60secs</p>
								<a href="{{url('register')}}">Signup Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Feedback -->

		<!-- contact -->
		<section class="appointment-section-fifteen">
			<div class="container">
				<div class="row ">
					<div class="col-lg-7">
						<div class="appointment-schedule-main">
							<h2>Book Appointment</h2>
							<h6>More the quantity, higher the discount. Hurry, Buy Now!</h6>
							<p>
								We approach each patient with empathy and understanding, recognizing the importance of a 
								supportive and caring environment. Striving for excellence in everything we do, we are committed to 
								staying at the forefront of medical advancements to provide the best possible care.
							</p>
							<ul>
								<li>
									<div class="appointment-schedule-img">
										<img src="{{URL::asset('/assets/img/icons/experience-4.svg')}}" alt="Experience">
										<div class="appoint-inner-img">
											<img src="{{URL::asset('/assets/img/icons/experience-3.svg')}}" alt="Experience">
										</div>
									</div>
									<span>Find Experience Doctors</span>
								</li>
								<li>
									<div class="appointment-schedule-img">
										<img src="{{URL::asset('/assets/img/icons/experience-5.svg')}}" alt="Experience">
										<div class="appoint-inner-img">
											<img src="{{URL::asset('/assets/img/icons/experience-1.svg')}}" alt="Experience">
										</div>
									</div>
									<span>Share your
										Health Issues</span>
								</li>
								<li>
									<div class="appointment-schedule-img">
										<img src="{{URL::asset('/assets/img/icons/experience-6.svg')}}" alt="Experience">
										<div class="appoint-inner-img">
											<img src="{{URL::asset('/assets/img/icons/experience-2.svg')}}" alt="Experience">
										</div>
									</div>
									<span>Get solution
										about health</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="appointment-right-image appoint-fift-img">
							<img src="{{URL::asset('/assets/img/appointment-ryt-1.png')}}" alt="Experience" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /contact -->

		<!-- Patient About us -->
		<section class="about-us-section-fifteen">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header-fifteen text-center">
							<h2>Our <span>Patients Says</span></h2>
							<p>What our Patients say about us</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="aboutus-img-main">
							<img src="{{URL::asset('/assets/img/aboutus-fift-1.jpg')}}" alt="image" class="img-fluid">
							<div class="aboutus-img-one">
								<img src="{{URL::asset('/assets/img/icons/aboutus-icon1.svg')}}" alt="Icon">
							</div>
						</div>
					</div>
					<div class="col-lg-6 position-relative">
						<div class="slider vertical-slider">
							<div class="aboutus-fifteen-main">
								<div class="aboutus-profile-left">
									<div class="aboutus-image">
										<img src="{{URL::asset('/assets/img/clients/client-01.jpg')}}" alt="Client" class="img-fluid">
									</div>
									<div class="aboutus-contents">
										<h6>Madeleine Jennifer</h6>
										<span>Chennai, Tamilnadu</span>
									</div>
								</div>
								<p> The team's commitment to finding the best solutions impact on my life</p>
							</div>
							<div class="aboutus-fifteen-main">
								<div class="aboutus-profile-left">
									<div class="aboutus-image">
										<img src="{{URL::asset('/assets/img/clients/client-01.jpg')}}" alt="Client" class="img-fluid">
									</div>
									<div class="aboutus-contents">
										<h6>Madeleine Jennifer</h6>
										<span>Chennai, Tamilnadu</span>
									</div>
								</div>
								<p>After struggling with chronic sinus problems, I found relief at Surna.
									The ENT specialists here are not only highly skilled but also genuinely caring. 
									They took the time to understand my concerns, provided a detailed diagnosis, 
									and guided me through a treatment plan that has greatly improved my quality of life.</p>
							</div>
							<div class="aboutus-fifteen-main">
								<div class="aboutus-profile-left">
									<div class="aboutus-image">
										<img src="{{URL::asset('/assets/img/clients/client-02.jpg')}}" alt="Client" class="img-fluid">
									</div>
									<div class="aboutus-contents">
										<h6>Madeleine Jennifer</h6>
										<span>Chennai, Tamilnadu</span>
									</div>
								</div>
								<p>The staff was friendly and attentive, and Doctor performed well</p>
							</div>
							<div class="aboutus-fifteen-main">
								<div class="aboutus-profile-left">
									<div class="aboutus-image">
										<img src="{{URL::asset('/assets/img/clients/client-03.jpg')}}" alt="Client" class="img-fluid">
									</div>
									<div class="aboutus-contents">
										<h6>Madeleine Jennifer</h6>
										<span>Chennai, Tamilnadu</span>
									</div>
								</div>
								<p>The staff was friendly and attentive, and Doctor performed well</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Patient About us -->

		<!-- Frequent section -->
		<section class="frequently-section-fifteen">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header-fifteen text-center">
							<h2>Frequently <span>Asked Questions</span></h2>
							<p>What our clients say about us</p>
						</div>
					</div>
				</div>
				<div class="faq-main-cards" id="accordionExample">
					<div class="faq-card aos" data-aos="fade-up">
						<div class="faq-title">
							<a data-bs-toggle="collapse" href="#faqOne" aria-expanded="false"> 
								<span>How do I book an appointment with a doctor?</span>
							</a>
							<div id="faqOne" class="card-collapse collapse show" data-bs-parent="#accordionExample">
								<p>Yes, simply visit our website and log in or create an account. Search for a doctor based on specialization, location, or availability & confirm your booking.</p>
							</div>	
						</div>
					</div>
					<div class="faq-card aos" data-aos="fade-up">																																
						<div class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqtwo" aria-expanded="false">
								<span>Can I request a specific doctor when booking my appointment?</span>
							</a>
							<div id="faqtwo" class="card-collapse collapse" data-bs-parent="#accordionExample">
								<p>Yes, you can usually request a specific doctor when booking your appointment, though availability may vary based on their schedule.</p>
							</div>
						</div>
					</div>
					<div class="faq-card aos" data-aos="fade-up">
						<div class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqthree" aria-expanded="false">
								<span>What should I do if I need to cancel or reschedule my appointment?</span>							
							</a>
							<div id="faqthree" class="card-collapse collapse" data-bs-parent="#accordionExample">
								<p>If you need to cancel or reschedule your appointment, contact the doctor as soon as possible to inform them and to reschedule for another available time slot.</p>
							</div>
						</div>
					</div>	
					<div class="faq-card aos" data-aos="fade-up">
						<div class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqfour" aria-expanded="false">
								<span>What if I'm running late for my appointment?</span>							
							</a>
							<div id="faqfour" class="card-collapse collapse" data-bs-parent="#accordionExample">
								<p>If you know you will be late, it's courteous to call the doctor's office and inform them. Depending on their policy and schedule, they may be able to accommodate you or reschedule your appointment.</p>
							</div>
						</div>
					</div>
					<div class="faq-card aos" data-aos="fade-up">
						<div class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqfive" aria-expanded="false">
								<span>Can I book appointments for family members or dependents?</span>						
							</a>
							<div id="faqfive" class="card-collapse collapse" data-bs-parent="#accordionExample">
								<p>Yes, in many cases, you can book appointments for family members or dependents. However, you may need to provide their personal information and consent to do so.</p>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</section>
		<!-- /Frequent section -->


    @component('components.scrolltotop')
    @endcomponent
@endsection
