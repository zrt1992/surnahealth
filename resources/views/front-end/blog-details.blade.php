<?php $page = 'blog-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Blog Details
        @endslot
        @slot('li_1')
            Blog Details
        @endslot
    @endcomponent
    <!-- Page Content -->
			<div class="content">
				<div class="container">
				
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="blog-view">
								<div class="blog blog-single-post">
									<div class="blog-image">
										<a href="javascript:void(0);"><img alt="blog-image" src="{{URL::asset('/assets/img/blog/blog-1.jpg')}}" class="img-fluid"></a>
									</div>
									<h3 class="blog-title">Surna – Making your clinic painless visit?</h3>
									<div class="blog-info clearfix">
										<div class="post-left">
											<ul>
												<li>
													<div class="post-author">
														<a href="{{url('frontend/doctor-profile')}}"><img src="{{URL::asset('/assets/img/doctors/doctor-thumb-02.jpg')}}" alt="Post Author"> <span>Dr. Darren Elder</span></a>
													</div>
												</li>
												<li><i class="far fa-calendar"></i>4 Dec 2023</li>
												<li><i class="far fa-comments"></i>12 Comments</li>
												<li><i class="fa fa-tags"></i>Health Tips</li>
											</ul>
										</div>
									</div>
									<div class="blog-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
									</div>
								</div>
								
								<div class="card blog-share clearfix">
									<div class="card-header">
										<h4 class="card-title">Share the post</h4>
									</div>
									<div class="card-body">
										<ul class="social-share">
											<li><a href="#" title="Facebook"><i class="fab fa-facebook"></i></a></li>
											<li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
											<li><a href="#" title="Google Plus"><i class="fab fa-google-plus"></i></a></li>
											<li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="card author-widget clearfix">
								<div class="card-header">
									<h4 class="card-title">About Author</h4>
									</div>
								<div class="card-body">
									<div class="about-author">
										<div class="about-author-img">
											<div class="author-img-wrap">
												<a href="{{url('frontend/doctor-profile')}}"><img class="img-fluid rounded-circle" alt="Darren Elder" src="{{URL::asset('/assets/img/doctor-banner1.png')}}"></a>
											</div>
										</div>
										<div class="author-details">
											<a href="{{url('frontend/doctor-profile')}}" class="blog-author-name">Dr. Darren Elder</a>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
										</div>
									</div>
								</div>
								</div>
								<div class="card blog-comments clearfix">
									<div class="card-header">
										<h4 class="card-title">Comments (12)</h4>
									</div>
									<div class="card-body pb-0">
									<ul class="comments-list">
										<li>
											<div class="comment">
												<div class="comment-author">
													<img class="avatar" alt="Michelle Fairfax" src="{{URL::asset('/assets/img/patients/patient-1.webp')}}">
												</div>
												<div class="comment-block">
													<span class="comment-by">
														<span class="blog-author-name">Michelle Fairfax</span>
													</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<p class="blog-date">Dec 6, 2023</p>
													<a class="comment-btn" href="#">
														<i class="fas fa-reply"></i> Reply
													</a>
												</div>
											</div>
											<ul class="comments-list reply">
												<li>
													<div class="comment">
														<div class="comment-author">
															<img class="avatar" alt="Gina Moore" src="{{URL::asset('/assets/img/patients/patient-2.jpg')}}">
														</div>
														<div class="comment-block">
															<span class="comment-by">
																<span class="blog-author-name">Gina Moore</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
															<p class="blog-date">Dec 6, 2023</p>
													<a class="comment-btn" href="#">
														<i class="fas fa-reply"></i> Reply
													</a>
														</div>
													</div>
												</li>
												<li>
													<div class="comment">
														<div class="comment-author">
															<img class="avatar" alt="Carl Kelly" src="{{URL::asset('/assets/img/patients/patient-3.webp')}}">
														</div>
														<div class="comment-block">
															<span class="comment-by">
																<span class="blog-author-name">Carl Kelly</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
															<p class="blog-date">December 7, 2023</p>
													<a class="comment-btn" href="#">
														<i class="fas fa-reply"></i> Reply
													</a>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li>
											<div class="comment">
												<div class="comment-author">
													<img class="avatar" alt="Elsie Gilley" src="{{URL::asset('/assets/img/patients/patient-1.webp')}}">
												</div>
												<div class="comment-block">
													<span class="comment-by">
														<span class="blog-author-name">Elsie Gilley</span>
													</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<p class="blog-date">December 11, 2023</p>
												</div>
											</div>
										</li>
										<li>
											<div class="comment">
												<div class="comment-author">
													<img class="avatar" alt="Joan Gardner" src="{{URL::asset('/assets/img/patients/patient-2.jpg')}}">
												</div>
												<div class="comment-block">
													<span class="comment-by">
														<span class="blog-author-name">Joan Gardner</span>
													</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<p class="blog-date">December 13, 2023</p>
													<a class="comment-btn" href="#">
														<i class="fas fa-reply"></i> Reply
													</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
								</div>
								
								<div class="card new-comment clearfix">
									<div class="card-header">
										<h4 class="card-title">Leave Comment</h4>
									</div>
									<div class="card-body">
										<form>
											<div class="mb-3">
												<label class="mb-2">Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
											<div class="mb-3">
												<label class="mb-2">Your Email Address <span class="text-danger">*</span></label>
												<input type="email" class="form-control">
											</div>
											<div class="mb-3">
												<label class="mb-2">Comments</label>
												<textarea rows="4" class="form-control"></textarea>
											</div>
											<div class="submit-section">
												<button class="btn btn-primary submit-btn" type="submit">Submit</button>
											</div>
										</form>
									</div>
								</div>
								
							</div>
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
												<a href="{{url('frontend/blog-details')}}">
													<img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-1.jpg')}}" alt="blog-image">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="{{url('frontend/blog-details')}}">Surna – Making your clinic painless visit?</a>
												</h4>
												<p>4 Dec 2023</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="{{url('frontend/blog-details')}}">
													<img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-2.jpg')}}" alt="blog-image">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="{{url('frontend/blog-details')}}">What are the benefits of Online Doctor Booking?</a>
												</h4>
												<p>3 Dec 2023</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="{{url('frontend/blog-details')}}">
													<img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-3.png')}}" alt="blog-image">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="{{url('frontend/blog-details')}}">Benefits of consulting with an Online Doctor</a>
												</h4>
												<p>3 Dec 2023</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="{{url('frontend/blog-details')}}">
													<img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-4.avif')}}" alt="blog-image">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="{{url('frontend/blog-details')}}">5 Great reasons to use an Online Doctor</a>
												</h4>
												<p>2 Dec 2023</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="{{url('frontend/blog-details')}}">
													<img class="img-fluid" src="{{URL::asset('/assets/img/blog/blog-1.jpg')}}" alt="blog-image">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="{{url('frontend/blog-details')}}">Online Doctor Appointment Scheduling</a>
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
										<li><a href="#">Cardiology <span>(62)</span></a></li>
										<li><a href="#">Health Care <span>(27)</span></a></li>
										<li><a href="#">Nutritions <span>(41)</span></a></li>
										<li><a href="#">Health Tips <span>(16)</span></a></li>
										<li><a href="#">Medical Research <span>(55)</span></a></li>
										<li><a href="#">Health Treatment <span>(07)</span></a></li>
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
										<li><a href="#" class="tag">Children</a></li>
										<li><a href="#" class="tag">Disease</a></li>
										<li><a href="#" class="tag">Appointment</a></li>
										<li><a href="#" class="tag">Booking</a></li>
										<li><a href="#" class="tag">Kids</a></li>
										<li><a href="#" class="tag">Health</a></li>
										<li><a href="#" class="tag">Family</a></li>
										<li><a href="#" class="tag">Tips</a></li>
										<li><a href="#" class="tag">Shedule</a></li>
										<li><a href="#" class="tag">Treatment</a></li>
										<li><a href="#" class="tag">Dr</a></li>
										<li><a href="#" class="tag">Clinic</a></li>
										<li><a href="#" class="tag">Online</a></li>
										<li><a href="#" class="tag">Health Care</a></li>
										<li><a href="#" class="tag">Consulting</a></li>
										<li><a href="#" class="tag">Doctors</a></li>
										<li><a href="#" class="tag">Neurology</a></li>
										<li><a href="#" class="tag">Dentists</a></li>
										<li><a href="#" class="tag">Specialist</a></li>
										<li><a href="#" class="tag">Surna</a></li>
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
