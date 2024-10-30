<?php $page = 'index-6'; ?>
@extends('layout.mainlayout')
@section('content')
    	<!-- Home Banner -->
		<section class="doctor-search-section doctor-search-eleven">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 aos" data-aos="fade-up">
						<div class="banner-header">
							<p>Take Eye Care Solution from Experts</p>
							<h1>Eye care & holistic Care experts</h1>
						</div>
						<div class="search-box-fourteen aos" data-aos="fade-up">
							<form action="{{url('booking-2')}}" class="form-block d-flex">
								<div class="search-input">
									<div class="forms-block">
										<label class="mb-0">Date</label>
										<input type="text" class="form-control datetimepicker" placeholder="Thu, Mar 24, 2023">
									</div>
								</div>
								<div class="search-input">											
									<div class="forms-block mb-0">
										<label class="location-icon">Location</label>
										<input type="text" class="form-control" placeholder="San Diego Branch">
									</div>
								</div>
								<div class="search-btn">
									<button class="btn btn-primary" type="submit">Book Appointment</button>
								</div>
							</form>
						</div>
						<div class="banner-users">
							<h6><img src="{{URL::asset('/assets/img/icons/star.svg')}}" alt="img">4.8 Well Experienced</h6>
							<ul>
								<li>
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctor-profiles/doc-profile-01.jpg')}}" alt="img"></a>
								</li>
								<li>
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctor-profiles/doc-profile-02.jpg')}}" alt="img"></a>
								</li>
								<li>
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctor-profiles/doc-profile-03.jpg')}}" alt="img"></a>
								</li>
								<li>
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctor-profiles/doc-profile-04.jpg')}}" alt="img"></a>
								</li>
								<li>
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctor-profiles/doc-profile-05.jpg')}}" alt="img"></a>
								</li>
								<li>
									<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctor-profiles/doc-profile-06.jpg')}}" alt="img"></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 aos" data-aos="fade-up">
						<img src="{{URL::asset('/assets/img/banner-11.png')}}" class="img-fluid dr-img dr-eye-home-img" alt="eye-doctor">
					</div>
				</div>
			</div>
			<div class="ban-bg">
				<img src="{{URL::asset('/assets/img/bg/eyecare-home-bg-01.png')}}" class="bg-01" alt="Img">
			</div>
		</section>
		<!-- /Home Banner -->

		<!-- Specialties Section -->
		<section class="special-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="section-heading sec-heading-eye text-center">
							<h2><span>Our</span> Specialties</h2>
							<p>The Great Place Of Eyecare Hospital Center</p>
						</div>
					</div>
				</div>
				<div class="owl-carousel special owl-them aos" data-aos="fade-up">
					<div class="item">
						<div class="special-item">
							<div class="special-img">
								<a href="{{url('consultation')}}"><img src="{{URL::asset('/assets/img/clinic/clinic-06.png')}}" alt="eye-clinic"
										class="img-fluid"></a>
							</div>
							<div class="special-icon">
								<a href="{{url('consultation')}}"><i class="fa-solid fa-circle-chevron-right"></i></a>
							</div>
							<h6><a href="{{url('consultation')}}">Cataract</a></h6>
						</div>
					</div>
					<div class="item">
						<div class="special-item">
							<div class="special-img">
								<a href="{{url('consultation')}}"><img src="{{URL::asset('/assets/img/clinic/clinic-02.png')}}" alt="eye-clinic"
										class="img-fluid"></a>
							</div>
							<div class="special-icon">
								<a href="{{url('consultation')}}"><i class="fa-solid fa-circle-chevron-right"></i></a>
							</div>
							<h6><a href="{{url('consultation')}}">Corneal Ulcer </a></h6>
						</div>
					</div>
					<div class="item">
						<div class="special-item">
							<div class="special-img">
								<a href="{{url('consultation')}}"><img src="{{URL::asset('/assets/img/clinic/clinic-03.png')}}" alt="eye-clinic"
										class="img-fluid"></a>
							</div>
							<div class="special-icon">
								<a href="{{url('consultation')}}"><i class="fa-solid fa-circle-chevron-right"></i></a>
							</div>
							<h6><a href="{{url('consultation')}}">Keratoconus</a></h6>
						</div>
					</div>
					<div class="item">
						<div class="special-item">
							<div class="special-img">
								<a href="{{url('consultation')}}"><img src="{{URL::asset('/assets/img/clinic/clinic-01.png')}}" alt="eye-clinic"
										class="img-fluid"></a>
							</div>
							<div class="special-icon">
								<a href="{{url('consultation')}}"><i class="fa-solid fa-circle-chevron-right"></i></a>
							</div>
							<h6><a href="{{url('consultation')}}">Glaucoma</a></h6>
						</div>
					</div>
					<div class="item">
						<div class="special-item">
							<div class="special-img">
								<a href="{{url('consultation')}}"><img src="{{URL::asset('/assets/img/clinic/clinic-05.png')}}" alt="eye-clinic"
										class="img-fluid"></a>
							</div>
							<div class="special-icon">
								<a href="{{url('consultation')}}"><i class="fa-solid fa-circle-chevron-right"></i></a>
							</div>
							<h6><a href="{{url('consultation')}}">Keratoconus</a></h6>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Specialties Section -->

		<!-- Center Section -->
		<section class="center-section">
			<div class="ban-bg">
				<img src="{{URL::asset('/assets/img/bg/center-bg.png')}}" alt="design-image" class="img-fluid bg-05">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-5 aos" data-aos="fade-up">
						<div class="center-img">
							<img src="{{URL::asset('/assets/img/hospital.png')}}" alt="eye-checkup" class="img-fluid">
							<div class="center-service">
								<span><i class="fa-solid fa-headphones"></i></span>
								<div>
									<h6>24/7 Service</h6>
									<p>We are available when you want</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7 aos" data-aos="fade-up">
						<div class="center-info">
							<div class="section-heading sec-heading-eye">
								<h2><span>Who</span> We Are</h2>
								<p>The Great Place Of Eyecare Hospital Center</p>
							</div>
							<p>At Surna, we understand the importance of clear vision and
								comprehensive eye care. Our dedicated team of experienced optometrists 
								and ophthalmologists is committed to providing top-notch eye care services 
								tailored to your individual needs.
							</p>
							<p>We envision a world where everyone enjoys optimal eye 
								health and experiences the beauty of life with clear vision.
							</p>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="care-box">
									<span>
										<img src="{{URL::asset('/assets/img/icons/eyecare-icon-01.svg')}}" alt="doctor-image" class="img-fluid">
									</span>
									<h6>Expert Professionals and World Class Facilities</h6>
									<a href="{{url('doctor-search-grid')}}">Find Doctors<i class="fa-solid fa-chevron-right"></i></a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="care-box">
									<span>
										<img src="{{URL::asset('/assets/img/icons/eyecare-icon-02.svg')}}" alt="doctor-image" class="img-fluid">
									</span>
									<h6>Specialty Eyecare treatment for all</h6>
									<a href="{{url('booking')}}">Book Now<i class="fa-solid fa-chevron-right"></i></a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="care-box">
									<span>
										<img src="{{URL::asset('/assets/img/icons/eyecare-icon-03.svg')}}" alt="doctor-image" class="img-fluid">
									</span>
									<h6>Online Appointment and Excellent Treatment</h6>
									<a href="{{url('booking-2')}}">Make an Appointment<i
											class="fa-solid fa-chevron-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Center Section -->

		<!-- Counter Section -->
		<section class="counter-section">
			<div class="ban-bg">
				<img src="{{URL::asset('/assets/img/bg/counter-bg.png')}}" alt="design-image" class="img-fluid bg-06">
				<img src="{{URL::asset('/assets/img/bg/counter-bg-01.png')}}" alt="eye-image" class="img-fluid bg-07">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 ">
						<div class="count-box">
							<span class="count-icon">
								<img src="{{URL::asset('/assets/img/icons/count-01.svg')}}" alt="doctor-image" class="img-fluid">
							</span>
							<div class="count-info">
								<h3><span class="count-digit">180</span>+</h3>
								<p>Expert Doctors</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="count-box">
							<span class="count-icon">
								<img src="{{URL::asset('/assets/img/icons/count-02.svg')}}" alt="stethoscope" class="img-fluid">
							</span>
							<div class="count-info">
								<h3><span class="count-digit">26</span>+</h3>
								<p>Expert Services</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="count-box">
							<span class="count-icon">
								<img src="{{URL::asset('/assets/img/icons/count-03.svg')}}" alt="smiley-icon" class="img-fluid">
							</span>
							<div class="count-info">
								<h3><span class="count-digit">10</span>K+</h3>
								<p>Happy Customers</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="count-box">
							<span class="count-icon">
								<img src="{{URL::asset('/assets/img/icons/count-04.svg')}}" alt="award-icon" class="img-fluid">
							</span>
							<div class="count-info">
								<h3><span class="count-digit">150</span>+</h3>
								<p>Best Awards Winner</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Counter Section -->

		<!-- Clinic Section -->
		<section class="eyeclinics-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="section-heading text-center sec-heading-eye">
							<h2><span>Our</span> Specialties</h2>
							<p>The Great Place Of Eyecare Hospital Center</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="our-doctors-card eye-doc">
							<div class="doctors-header">
								<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/eye-special-doc-01.jpg')}}" alt="Andrea" class="img-fluid"></a>
								<span class="rating-top-img"><i class="fa-solid fa-star filled"></i>4.9</span>
							</div>
							<div class="doctors-body d-flex align-items-center justify-content-between">
								<div class="doc-card-info">
									<h4><a href="{{url('doctor-profile')}}">Dr. Carrie Rosario</a></h4>
									<p>MBBS, DOMS - Ophthalmology</p>
								</div>
								<div class="next-arrow">
									<a href="{{url('doctor-profile')}}"><i class="fa-solid fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="our-doctors-card eye-doc">
							<div class="doctors-header">
								<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/eye-special-doc-02.jpg')}}" alt="Andrea" class="img-fluid"></a>
								<span class="rating-top-img"><i class="fa-solid fa-star filled"></i>4.5</span>
							</div>
							<div class="doctors-body d-flex align-items-center justify-content-between">
								<div class="doc-card-info">
									<h4><a href="{{url('doctor-profile')}}">Dr. Eric Hansley</a></h4>
									<p>MBBS, MS - Surgeon</p>
								</div>
								<div class="next-arrow">
									<a href="{{url('doctor-profile')}}"><i class="fa-solid fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="our-doctors-card eye-doc">
							<div class="doctors-header">
								<a href="{{url('doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/eye-special-doc-03.jpg')}}" alt="Andrea" class="img-fluid"></a>
								<span class="rating-top-img"><i class="fa-solid fa-star filled"></i>4.3</span>
							</div>
							<div class="doctors-body d-flex align-items-center justify-content-between">
								<div class="doc-card-info">
									<h4><a href="{{url('doctor-profile')}}">Dr. Mary Wilkinson</a></h4>
									<p>MBBS, DNB - Ophthalmology</p>
								</div>
								<div class="next-arrow">
									<a href="{{url('doctor-profile')}}"><i class="fa-solid fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Clinic Section -->

		<!-- Store Section -->
		<section class="store-section">
			<div class="sec-bg-img">
				<img src="{{URL::asset('/assets/img/bg/our-store-bg.png')}}" alt="Img">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="section-heading text-center sec-heading-eye">
							<h2><span>Our</span> Store</h2>
							<p>Great Reasons For People Choose Surna Store</p>
						</div>
						<ul class="store-tab nav">
							<li>
								<a href="#" class="active" data-bs-toggle="tab" data-bs-target="#eyeglass">Eye
									Glasses</a>
							</li>
							<li>
								<a href="#" data-bs-toggle="tab" data-bs-target="#computer">Computer Glasses</a>
							</li>
							<li>
								<a href="#" data-bs-toggle="tab" data-bs-target="#kids">Kids Glasses</a>
							</li>
							<li>
								<a href="#" data-bs-toggle="tab" data-bs-target="#lense">Contact Lenses</a>
							</li>
							<li>
								<a href="#" data-bs-toggle="tab" data-bs-target="#sunglass">Sunglasses</a>
							</li>
							<li>
								<a href="#" data-bs-toggle="tab" data-bs-target="#readingglass">Reading Glasses</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="tab-content">

					<!-- Eye Glass -->
					<div class="tab-pane active" id="eyeglass">
						<div class="owl-carousel eye-blogslider owl-them aos" data-aos="fade-up">
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-01.jpg')}}" alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Power Glass</span>
										<span class="store-cat">New</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Nerdlane</a></h4>
										<p>Black Full Frame Wayfarer Eyeglasses</p>
										<div class="price-tag">
											<h5>$490</h5>											
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-02.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Power Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Mirar Aviator</a></h4>
										<p>Blue Full Frame Eyeglass</p>
										<div class="price-tag">
											<a href="{{url('cart')}}" class="cart-add">Add to Cart</a>
											<ul class="color-selection">
												<li>
													<span class="gold-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="grey-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-03.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Power Glass</span>
										<span class="store-cat">New</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Izibuko</a></h4>
										<p>Gold Rectangle Frame Eyeglass</p>
										<div class="price-tag">
											<h5>$450</h5>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-04.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Power Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Vistazo</a></h4>
										<p>Gold Full Frame Cateye Eyeglasses for Men and Women</p>
										<div class="price-tag">
											<h5>$490</h5>
											<ul class="color-selection">
												<li>
													<span class="sand-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-06.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Power Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Tintin</a></h4>
										<p>Full Frame tintin Eyeglasses</p>
										<div class="price-tag">
											<a href="{{url('cart')}}" class="cart-add">Add to Cart</a>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Eye Glass -->

					<!-- Computer Glass -->
					<div class="tab-pane fade" id="computer">
						<div class="owl-carousel eye-blogslider owl-them aos" data-aos="fade-up">
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-06.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Computer Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Danzier</a></h4>
										<p>Black Frame Eyeglasses</p>
										<div class="price-tag">
											<h5>$390</h5>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-02.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Computer Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Fasil</a></h4>
										<p>Black Frame Computer Eyeglasses</p>
										<div class="price-tag">
											<a href="{{url('cart')}}" class="cart-add">Add to Cart</a>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-05.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Computer Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Coolers</a></h4>
										<p>Gold Full Frame for Men and Women</p>
										<div class="price-tag">
											<h5>$370</h5>
											<ul class="color-selection">
												<li>
													<span class="grey-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="gold-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-04.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Computer Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Eye Protect</a></h4>
										<p>Frame Cateye Eyeglasses for Women</p>
										<div class="price-tag">
											<h5>$410</h5>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-03.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Computer Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Viratio</a></h4>
										<p>Gold Full Frame Cateye Eyeglasses for Men and Women</p>
										<div class="price-tag">
											<h5>$420</h5>
											<ul class="color-selection">
												<li>
													<span class="sand-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Computer Glass -->

					<!-- Kids Glass -->
					<div class="tab-pane fade" id="kids">
						<div class="owl-carousel eye-blogslider owl-them aos" data-aos="fade-up">
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-07.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Kids Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Readers</a></h4>
										<p>Black Full Frame kids Eyeglasses</p>
										<div class="price-tag">
											<h5>$490</h5>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-08.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Kids Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Sight Care</a></h4>
										<p>Black Full Frame Kids Eyeglasses</p>
										<div class="price-tag">
											<h5>$690</h5>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-09.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Kids Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Aviator</a></h4>
										<p>Gold Full Frame for Men and Women</p>
										<div class="price-tag">
											<h5>$240</h5>
											<ul class="color-selection">
												<li>
													<span class="grey-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="gold-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-10.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Kids Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Zibuko</a></h4>
										<p>Glossy Full Frame Cateye Eyeglasses for Women</p>
										<div class="price-tag">
											<a href="{{url('cart')}}" class="cart-add">Add to Cart</a>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-03.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Kids Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Seeier</a></h4>
										<p>Gold Full Frame Cateye Eyeglasses for Men and Women</p>
										<div class="price-tag">
											<h5>$480</h5>
											<ul class="color-selection">
												<li>
													<span class="sand-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Kids Glass -->

					<!-- Lense Glass -->
					<div class="tab-pane fade" id="lense">
						<div class="owl-carousel eye-blogslider owl-them aos" data-aos="fade-up">
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-14.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
												<span class="glass-cat">Kids Glass</span>
												<div class="overlay-top-items">
													<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
													<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
													<a href="#"><i class="fa-solid fa-layer-group"></i></a>
												</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Lenzomania</a></h4>
										<p>Wayfarer Contact Lense</p>
										<div class="price-tag">
											<h5>$120</h5>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-15.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
												<span class="glass-cat">Kids Glass</span>
												<div class="overlay-top-items">
													<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
													<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
													<a href="#"><i class="fa-solid fa-layer-group"></i></a>
												</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Contacto</a></h4>
										<p>Contact Lense</p>
										<div class="price-tag">
											<h5>$290</h5>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-16.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
												<span class="glass-cat">Kids Glass</span>
												<div class="overlay-top-items">
													<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
													<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
													<a href="#"><i class="fa-solid fa-layer-group"></i></a>
												</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Viator Lense</a></h4>
										<p>Contact Lense</p>
										<div class="price-tag">
											<h5>$190</h5>
											<ul class="color-selection">
												<li>
													<span class="grey-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="gold-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-14.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
												<span class="glass-cat">Kids Glass</span>
												<div class="overlay-top-items">
													<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
													<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
													<a href="#"><i class="fa-solid fa-layer-group"></i></a>
												</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Eizio Cart</a></h4>
										<p>Glossy Blue Lenses</p>
										<div class="price-tag">
											<h5>$430</h5>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-15.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
												<span class="glass-cat">Kids Glass</span>
												<div class="overlay-top-items">
													<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
													<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
													<a href="#"><i class="fa-solid fa-layer-group"></i></a>
												</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">ContactLense Cart</a></h4>
										<p>Gold Full Frame Cateye Eyeglasses for Men and Women</p>
										<div class="price-tag">
											<h5>$280</h5>
											<ul class="color-selection">
												<li>
													<span class="sand-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Lense Glass -->

					<!-- Sunglass Glass -->
					<div class="tab-pane fade" id="sunglass">
						<div class="owl-carousel eye-blogslider owl-them aos" data-aos="fade-up">
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-12.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Sun Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Sunglass</a></h4>
										<p>Black Sunglasses</p>
										<div class="price-tag">
											<h5>$350</h5>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-10.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Sun Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Carezio</a></h4>
										<p>Black Frame sun Eyeglasses</p>
										<div class="price-tag">
											<h5>$550</h5>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-11.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Sun Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Aviator Sunglasses</a></h4>
										<p>Gold Frame for Men and Women</p>
										<div class="price-tag">
											<h5>$390</h5>
											<ul class="color-selection">
												<li>
													<span class="grey-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="gold-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-04.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Sun Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Buzanio Glass</a></h4>
										<p>Glossy Blue sun Cateye Eyeglasses for Women</p>
										<div class="price-tag">
											<h5>$430</h5>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-13.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Sun Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Sunrace Buy</a></h4>
										<p>Full Frame Cateye Eyeglasses for Men and Women</p>
										<div class="price-tag">
											<h5>$480</h5>
											<ul class="color-selection">
												<li>
													<span class="sand-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Sun Glass -->

					<!-- Reading Glass -->
					<div class="tab-pane fade" id="readingglass">
						<div class="owl-carousel eye-blogslider owl-them aos" data-aos="fade-up">
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-01.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Power Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Nerdlane</a></h4>
										<p>Black Full Frame Wayfarer Eyeglasses</p>
										<div class="price-tag">
											<h5>$390</h5>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-02.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Power Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Mirar Aviator Eyeglasses</a></h4>
										<p>Gold Full Frame for Men and Women</p>
										<div class="price-tag">
											<h5>$580</h5>
											<ul class="color-selection">
												<li>
													<span class="gold-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="grey-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-03.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Power Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Izibuko</a></h4>
										<p>Blue Full Frame Eyeglasses for Women</p>
										<div class="price-tag">
											<h5>$450</h5>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-04.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Power Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Vistazo</a></h4>
										<p>Gold Full Frame Eyeglasses</p>
										<div class="price-tag">
											<h5>$370</h5>
											<ul class="color-selection">
												<li>
													<span class="sand-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="store-item">
									<div class="store-img">
										<a href="{{url('product-description')}}"><img src="{{URL::asset('/assets/img/stores/store-07.jpg')}}"
												alt="eye-glass" class="img-fluid"></a>
										<span class="glass-cat">Power Glass</span>
										<div class="overlay-top-items">
											<a href="javascript:void(0)" class="fav-icon"><i class="fa-solid fa-heart"></i></a>
											<a href="{{url('product-description')}}"><i class="fa-solid fa-eye"></i></a>
											<a href="#"><i class="fa-solid fa-layer-group"></i></a>
										</div>
									</div>
									<div class="store-content">
										<h4><a href="{{url('product-description')}}">Dlanerz</a></h4>
										<p>Full Frame Eyeglasses</p>
										<div class="price-tag">
											<h5>$320</h5>
											<ul class="color-selection">
												<li>
													<span class="black-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
												<li>
													<span class="blue-glass">
														<i class="fa-solid fa-circle"></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Reading Glass -->

				</div>
			</div>
		</section>
		<!-- /Store Section -->

		<!-- Offer Section -->
		<section class="offer-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 d-flex">
						<div class="offer-wrap flex-fill">
							<div class="row align-items-center">
								<div class="col-sm-6">
									<div class="off-img">
										<img src="{{URL::asset('/assets/img/offer-01.png')}}" alt="eye-test image" class="img-fluid">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="off-info">
										<h6>NEW USER OFFER</h6>
										<p>21 - 25 April 2024</p>
										<h5>Free Eye Camp </h5>
										<a href="#" class="btn btn-light-blue">Book Now</a>
									</div>
									<div class="eye-card-bg">
										<img src="{{URL::asset('/assets/img/bg/eye-card-bg-04.png')}}" class="bg-bottom" alt="Img">
										<img src="{{URL::asset('/assets/img/bg/eye-card-bg-02.png')}}" class="bg-top" alt="Img">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 d-flex">
						<div class="offer-wrap flat-offer flex-fill">
							<div class="row align-items-center">
								<div class="col-sm-6">
									<div class="off-img">
										<img src="{{URL::asset('/assets/img/offer-02.png')}}" alt="eye-glass" class="img-fluid">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="off-info">
										<h6>Flat 30% OffER</h6>
										<p>21 April 2024</p>
										<h5>Crystal Clear </h5>
										<a href="#" class="btn btn-light-blue">Buy Now</a>
									</div>
									<div class="eye-card-bg">
										<img src="{{URL::asset('/assets/img/bg/eye-card-bg-04.png')}}" class="bg-bottom" alt="Img">
										<img src="{{URL::asset('/assets/img/bg/eye-card-bg-03.png')}}" class="bg-top" alt="Img">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Offer Section -->

		<!-- Facility Section -->
		<section class="facilities-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="section-heading text-center sec-heading-eye">
							<h2><span>Top</span> Facilities</h2>
							<p>The Great Place Of Eyecare Hospital Center</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="facility-box">
							<div class="facility-img">
								<img src="{{URL::asset('/assets/img/features/facility-01.jpg')}}" alt="eye-test image" class="img-fluid">
							</div>
							<a href="{{url('consultation')}}" class="btn btn-primary consult-btn">Consultation rooms</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row">
							<div class="col-md-12">
								<div class="facility-box">
									<div class="facility-img">
										<img src="{{URL::asset('/assets/img/features/facility-02.jpg')}}" alt="eye-test image" class="img-fluid">
									</div>
									<a href="{{url('consultation')}}" class="btn btn-primary consult-btn">Consultation rooms</a>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="facility-box">
									<div class="facility-img">
										<img src="{{URL::asset('/assets/img/features/facility-03.jpg')}}" alt="eye-test image" class="img-fluid">
									</div>
									<a href="{{url('consultation')}}" class="btn btn-primary consult-btn">Consultation</a>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="facility-box">
									<div class="facility-img">
										<img src="{{URL::asset('/assets/img/features/facility-04.jpg')}}" alt="laboratory" class="img-fluid">
									</div>
									<a href="{{url('consultation')}}" class="btn btn-primary consult-btn">Consultation</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="facility-box">
									<div class="facility-img">
										<img src="{{URL::asset('/assets/img/features/facility-05.jpg')}}" alt="laboratory" class="img-fluid">
									</div>
									<a href="{{url('consultation')}}" class="btn btn-primary consult-btn">Consultation</a>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="facility-box">
									<div class="facility-img">
										<img src="{{URL::asset('/assets/img/features/facility-06.jpg')}}" alt="eye-test image" class="img-fluid">
									</div>
									<a href="{{url('consultation')}}" class="btn btn-primary consult-btn">Consultation</a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="facility-box">
									<div class="facility-img">
										<img src="{{URL::asset('/assets/img/features/facility-07.jpg')}}" alt="pharmacy-shop" class="img-fluid">
									</div>
									<a href="{{url('consultation')}}" class="btn btn-primary consult-btn">Consultation rooms</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Facility Section -->

		<!-- Blog Section -->
		<section class="our-blog-section eye-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="section-heading text-center sec-heading-eye">
							<h2><span>Blog</span> Post</h2>
							<p>The Great Place Of Eyecare Hospital Center</p>
						</div>
					</div>
				</div>
				<div class="owl-carousel eye-blogslider owl-them aos" data-aos="fade-up">
					<div class="item">
						<div class="our-blogs">
							<div class="blogs-img">
								<a href="{{url('blog-details')}}"><img src="{{URL::asset('/assets/img/blog/eye-blog-01.jpg')}}" alt="blog-image" class="img-fluid blog-inner-img"></a>
								<div class="blogs-overlay">
									<span class="blog-cat">Orthoptics</span>
								</div>
							</div>
							<div class="blogs-info">
								<h4><a href="{{url('blog-details')}}">Clear Vision: Understanding the Importance of  Eye Exams</a>
								</h4>
								<a href="{{url('blog-details')}}" class="blogs-btn">Read More<i class="fa-solid fa-chevron-right"></i></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="our-blogs">
							<div class="blogs-img">
								<a href="{{url('blog-details')}}"><img src="{{URL::asset('/assets/img/blog/eye-blog-02.jpg')}}" alt="blog-image" class="img-fluid blog-inner-img"></a>
								<div class="blogs-overlay">
									<span class="blog-cat">Glaucoma</span>
								</div>
							</div>
							<div class="blogs-info">
								<h4><a href="{{url('blog-details')}}">Foods for Healthy Vision and Age Degeneration Prevention</a></h4>
								<a href="{{url('blog-details')}}" class="blogs-btn">Read More<i class="fa-solid fa-chevron-right"></i></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="our-blogs">
							<div class="blogs-img">
								<a href="{{url('blog-details')}}"><img src="{{URL::asset('/assets/img/blog/eye-blog-03.jpg')}}" alt="blog-image" class="img-fluid blog-inner-img"></a>
								<div class="blogs-overlay">
									<span class="blog-cat">Corneal Ulcer </span>
								</div>
							</div>
							<div class="blogs-info">
								<h4><a href="{{url('blog-details')}}">Tips for Protecting Your Eyes in the Digital Age</a></h4>
								<a href="{{url('blog-details')}}" class="blogs-btn">Read More<i class="fa-solid fa-chevron-right"></i></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="our-blogs">
							<div class="blogs-img">
								<a href="{{url('blog-details')}}"><img src="{{URL::asset('/assets/img/blog/eye-blog-04.jpg')}}" alt="blog-image" class="img-fluid blog-inner-img"></a>
								<div class="blogs-overlay">
									<span class="blog-cat">Keratoconus</span>
								</div>
							</div>
							<div class="blogs-info">
								<a href="{{url('blog-details')}}">
									<h4>The ABCs of LASIK Surgery: What to Expect and Consider</h4>
								</a>
								<a href="{{url('blog-details')}}" class="blogs-btn">Read More<i class="fa-solid fa-chevron-right"></i></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="our-blogs">
							<div class="blogs-img">
								<a href="{{url('blog-details')}}"><img src="{{URL::asset('/assets/img/blog/eye-blog-04.jpg')}}" alt="blog-image" class="img-fluid blog-inner-img"></a>
								<div class="blogs-overlay">
									<span class="blog-cat">Orthoptics</span>
								</div>
							</div>
							<div class="blogs-info">
								<a href="{{url('blog-details')}}">
									<h4>There are many variations of passages</h4>
								</a>
								<a href="{{url('blog-details')}}" class="blogs-btn">Read More<i class="fa-solid fa-chevron-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Blog Section -->

		<!-- Testimonials Section -->
		<section class="eye-testimonial-section">
			<div class="sec-bg-img">
				<img src="{{URL::asset('/assets/img/bg/testi-round-bg.png')}}" alt="Img">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="section-heading text-center sec-heading-eye">
							<h2><span>Client</span> Testimonials</h2>
							<p>What our clients say about us</p>
						</div>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-md-5">
						<div class="testi-img">
							<img src="{{URL::asset('/assets/img/testimonial.jpg')}}" alt="client-image" class="img-fluid">
							<span class="testi-icon"><i class="fa-solid fa-quote-left"></i></span>
						</div>
						<div class="testi-users">
							<div class="nav nav-container slide-11"></div>
							<ul>
								<li>
									<img src="{{URL::asset('/assets/img/clients/client-01.jpg')}}" alt="client-image" class="img-fluid">
								</li>
								<li>
									<img src="{{URL::asset('/assets/img/clients/client-02.jpg')}}" alt="client-image" class="img-fluid">
								</li>
								<li>
									<img src="{{URL::asset('/assets/img/clients/client-03.jpg')}}" alt="client-image" class="img-fluid">
								</li>
								<li>
									<img src="{{URL::asset('/assets/img/clients/client-04.jpg')}}" alt="client-image" class="img-fluid">
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-7">
						<div class="owl-carousel eye-testislider">
							<div class="testimonial-wrap">
								<h4>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
									piece of classical</h4>
								<p>It is a long established fact that a reader will be distracted by the 
									readable content of a page when looking at its layout. The point of using 
									Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed 
									to using 'Content here, content here', making it look like readable English. Many desktop 
									publishing packages and web page editors now use Lorem Ipsum as their default model text, 
									and a search for 'lorem ipsum' will uncover many web sites still in their infancy
								</p>
								<div class="testimonial-user">
									<h6>Elizabeth Forsyth</h6>
									<p>Las Vegas, USA</p>
								</div>
							</div>
							<div class="testimonial-wrap">
								<h4>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
									piece of classical</h4>
								<p>It is a long established fact that a reader will be distracted by the readable
									content of a page when looking at its layout. The point of using Lorem Ipsum is that
									it has a more-or-less normal distribution of letters, as opposed to using 'Content
									here, content here', making it look like readable English. Many desktop publishing
									packages and web page editors now use Lorem Ipsum as their default model text, and a
									search for 'lorem ipsum' will uncover many web sites still in their infancy</p>
								<div class="testimonial-user">
									<h6>Leigh Baley</h6>
									<p>San Jose, USA</p>
								</div>
							</div>
							<div class="testimonial-wrap">
								<h4>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
									piece of classical</h4>
								<p>It is a long established fact that a reader will be distracted by the readable
									content of a page when looking at its layout. The point of using Lorem Ipsum is that
									it has a more-or-less normal distribution of letters, as opposed to using 'Content
									here, content here', making it look like readable English. Many desktop publishing
									packages and web page editors now use Lorem Ipsum as their default model text, and a
									search for 'lorem ipsum' will uncover many web sites still in their infancy</p>
								<div class="testimonial-user">
									<h6>Jon Sparks</h6>
									<p>Irvine, USA</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Testimonials Section -->

		<!-- Appointment Section -->
		<section class="appointment-section">
			<div class="appointment-form">
				<div class="container">
					<div class="row">
						<div class="col-md-12 aos" data-aos="fade-up">
							<div class="section-heading text-center sec-heading-eye">
								<h2 class="text-white">Book an appointment</h2>
							</div>
						</div>
					</div>
					<form action="#" class="doctor-search-form">
						<div class="row">
							<div class="col-md-4">
								<div class="forms-block">
									<div class="form-custom">
										<input type="text" class="form-control" placeholder="Name">
										<i class="feather-user"></i>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="forms-block">
									<div class="form-custom">
										<input type="email" class="form-control" placeholder="Email">
										<i class="feather-mail"></i>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="forms-block">
									<div class="form-custom">
										<input type="text" class="form-control" placeholder="Phone Number">
										<i class="feather-phone"></i>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="forms-block">
									<div class="form-custom">
										<select class="select">
											<option>Hospital</option>
											<option>Online</option>
											<option>Offline</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="forms-block">
									<div class="form-custom">
										<select class="select">
											<option>Doctor Name</option>
											<option>George</option>
											<option>Matthew</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="forms-block">
									<div class="form-custom">
										<select class="select">
											<option>Online Consultation</option>
											<option>Online</option>
											<option>Offline</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="forms-block">
									<div class="form-custom">
										<input type="text" class="form-control datetimepicker" placeholder="Date">
										<i class="feather-calendar"></i>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="forms-block">
									<div class="form-custom">
										<input type="text" class="form-control timepicker1" placeholder="Time">
										<i class="feather-clock"></i>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="forms-block">
									<div class="form-custom">
										<select class="select">
											<option>Appointment Type</option>
											<option>Online</option>
											<option>Offline</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12 text-center">
								<a href="{{url('search')}}" class="btn btn-light-blue app-btn">Book an Appointment</a>
							</div>
						</div>
					</form>
				</div>
				<div class="ban-bg">
					<img src="{{URL::asset('/assets/img/bg/vector-bg-01.png')}}" alt="eye-icon" class="img-fluid vector-right-bg">
					<img src="{{URL::asset('/assets/img/bg/vector-bg-02.png')}}" alt="eye-icon" class="img-fluid vector-left-bg">
				</div>
			</div>
		</section>
		<!-- /Appointment Section -->

		<!-- Facility Section -->
		<section class="faq-eye-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 aos" data-aos="fade-up">
						<div class="section-heading text-center sec-heading-eye">
							<h2><span>Frequently Asked </span> Questions</h2>
							<p>What our clients say about us</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="faq-wrap">
							<ul class="nav">
								<li>
									<a href="#" class="active" data-bs-toggle="tab" data-bs-target="#faq1">
										<span>Q</span>
										How Often should I need to test my eyes?
									</a>
								</li>
								<li>
									<a href="#" data-bs-toggle="tab" data-bs-target="#faq2">
										<span>Q</span>
										What are the symptoms of Cataract?
									</a>
								</li>
								<li>
									<a href="#" data-bs-toggle="tab" data-bs-target="#faq3">
										<span>Q</span>
										Do I need surgery for Cataract? How would I know that?
									</a>
								</li>
								<li>
									<a href="#" data-bs-toggle="tab" data-bs-target="#faq4">
										<span>Q</span>
										What is Myopia or Nearsightedness?
									</a>
								</li>
								<li>
									<a href="#" data-bs-toggle="tab" data-bs-target="#faq5">
										<span>Q</span>
										What is Hyperopia or farsightedness?
									</a>
								</li>
								<li>
									<a href="#" data-bs-toggle="tab" data-bs-target="#faq6">
										<span>Q</span>
										What is Presbyopia?
									</a>
								</li>
								<li>
									<a href="#" data-bs-toggle="tab" data-bs-target="#faq7">
										<span>Q</span>
										My eyes are fine, then why do I need to visit the doctor regularly?
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="tab-content pt-0">
							<div class="tab-pane active" id="faq1">
								<div class="faq-content">
									<img src="{{URL::asset('/assets/img/faq/faq-01.jpg')}}" alt="eye-test-icon" class="img-fluid">
									<p>As per the American Optometric Association adults who wear glasses or contact
										lenses and adults who are over 60 years should visit their eye care specialist
										every year or as suggested by the doctor. If the person doesn’t require any
										vision correction, then a person between 18 and 60 years should visit the doctor
										twice a year.</p>
									<p>This is a condition that results when the visual image is focused behind the
										retina rather than on the retina. It may be caused due to a small eyeball having
										a weak focusing power being.</p>
								</div>
							</div>
							<div class="tab-pane fade" id="faq2">
								<div class="faq-content">
									<img src="{{URL::asset('/assets/img/clients/re-image-1.jpg')}}" alt="eye-test-icon" class="img-fluid">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
										consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, sed do
										eiusmod.</p>
								</div>
							</div>
							<div class="tab-pane fade" id="faq3">
								<div class="faq-content">
									<img src="{{URL::asset('/assets/img/clients/re-image-2.jpg')}}" alt="eye-test-icon" class="img-fluid">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
										consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, sed do
										eiusmod.</p>
								</div>
							</div>
							<div class="tab-pane fade" id="faq4">
								<div class="faq-content">
									<img src="{{URL::asset('/assets/img/clients/re-image-3.jpg')}}" alt="eye-test-icon" class="img-fluid">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
										consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, sed do
										eiusmod.</p>
								</div>
							</div>
							<div class="tab-pane fade" id="faq5">
								<div class="faq-content">
									<img src="{{URL::asset('/assets/img/clients/re-image-4.jpg')}}" alt="eye-test-icon" class="img-fluid">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
										consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, sed do
										eiusmod.</p>
								</div>
							</div>
							<div class="tab-pane fade" id="faq6">
								<div class="faq-content">
									<img src="{{URL::asset('/assets/img/clients/re-image-5.jpg')}}" alt="eye-test-icon" class="img-fluid">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
										consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, sed do
										eiusmod.</p>
								</div>
							</div>
							<div class="tab-pane fade" id="faq7">
								<div class="faq-content">
									<img src="{{URL::asset('/assets/img/clients/re-image-6.jpg')}}" alt="eye-test-icon" class="img-fluid">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
										consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, sed do
										eiusmod.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ban-bg">
				<img src="{{URL::asset('/assets/img/bg/center-bg.png')}}" alt="design-image" class="img-fluid bg-05">
			</div>
		</section>
		<!-- /Facility Section -->

    @component('components.scrolltotop')
    @endcomponent
@endsection
