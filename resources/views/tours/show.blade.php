<x-guest-layout>
	
	<aside id="colorlib-hero">
		<div class="flexslider">
			<ul class="slides">
			   <li style="background-image: url({{asset($tour->image)}});">
				   <div class="overlay"></div>
				   <div class="container-fluid">
					   <div class="row">
						   <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
							   <div class="slider-text-inner text-center">
									<h2>By GRACE Tour And Travel</h2>
									<h1>Tour Overview</h1>
							   </div>
						   </div>
					   </div>
				   </div>
			   </li>
			  </ul>
		  </div>
	</aside>
	
	<div class="colorlib-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-12">
							<div class="wrap-division">
								<div class="col-md-12 col-md-offset-0 heading2 animate-box">
									<h2>{{ $tour->title }}</h2>
								</div>
								<div class="row">
									
									@if (count($tour->itenararies) !== 0)
										@foreach ($tour->itenararies as $itenarary)
											@if ($itenarary->title)
												<div class="col-md-12 animate-box">
													<div class="room-wrap">
														<div class="row">
															<div class="col-md-6 col-sm-6">
																<div class="room-img" style="background-image: url({{ $itenarary->image ? asset('storage/'.$itenarary->image) : asset($tour->image) }});"></div>
															</div>
															<div class="col-md-6 col-sm-6">
																<div class="desc">
																	<span class="day-tour">Day {{ $itenarary->day_number }}</span>
																	<h2>{{ $itenarary->title }}</h2>
																	<p>{{ $itenarary->description }}</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												@else
													<div class="col-md-12 animate-box">
														<div class="room-wrap">
															<div class="row">
																<div class="col-md-6 col-sm-6">
																	<div class="room-img" style="background-image: url({{ $itenarary->image ? asset('storage/'.$itenarary->image) : asset($tour->image) }});"></div>
																</div>
																<div class="col-md-6 col-sm-6">
																	<div class="desc">
																		<span class="day-tour">Day {{ $itenarary->day_number }}</span>
																		<h2> Sorry, Day {{ $itenarary->day_number }} 	Has Not Been Defined Yet </h2>
																		{{-- <p>{{ $itenarary->description }}</p> --}}
																	</div>
																</div>
															</div>
														</div>
													</div>

											@endif
										@endforeach
								
									@else
											<h2>Itenararies Coming Soon!</h2>
									@endif
									<div class="col-md-12 animate-box text-center">
										<p><a href="#" class="btn btn-primary">Book Now!</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	
				<!-- SIDEBAR-->
				<div class="col-md-3">
					<div class="sidebar-wrap">
						<div class="side search-wrap animate-box">
							<h3 class="sidebar-heading">Find your hotel</h3>
							<form method="post" class="colorlib-form">
							  <div class="row">
							<div class="col-md-12">
							  <div class="form-group">
								<label for="date">Check-in:</label>
								<div class="form-field">
								  <i class="icon icon-calendar2"></i>
								  <input type="text" id="date" class="form-control date" placeholder="Check-in date">
								</div>
							  </div>
							</div>
							<div class="col-md-12">
							  <div class="form-group">
								<label for="date">Check-out:</label>
								<div class="form-field">
								  <i class="icon icon-calendar2"></i>
								  <input type="text" id="date" class="form-control date" placeholder="Check-out date">
								</div>
							  </div>
							</div>
							<div class="col-md-12">
							  <div class="form-group">
								<label for="guests">Guest</label>
								<div class="form-field">
								  <i class="icon icon-arrow-down3"></i>
								  <select name="people" id="people" class="form-control">
									<option value="#">1</option>
									<option value="#">2</option>
									<option value="#">3</option>
									<option value="#">4</option>
									<option value="#">5+</option>
								  </select>
								</div>
							  </div>
							</div>
							<div class="col-md-12">
							  <input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block">
							</div>
						  </div>
						</form>
						</div>
						<div class="side animate-box">
							<div class="row">
								<div class="col-md-12">
									<h3 class="sidebar-heading">Price Range</h3>
									<form method="post" class="colorlib-form-2">
									  <div class="row">
									<div class="col-md-6">
									  <div class="form-group">
										<label for="guests">Price from:</label>
										<div class="form-field">
										  <i class="icon icon-arrow-down3"></i>
										  <select name="people" id="people" class="form-control">
											<option value="#">1</option>
											<option value="#">200</option>
											<option value="#">300</option>
											<option value="#">400</option>
											<option value="#">1000</option>
										  </select>
										</div>
									  </div>
									</div>
									<div class="col-md-6">
									  <div class="form-group">
										<label for="guests">Price to:</label>
										<div class="form-field">
										  <i class="icon icon-arrow-down3"></i>
										  <select name="people" id="people" class="form-control">
											<option value="#">2000</option>
											<option value="#">4000</option>
											<option value="#">6000</option>
											<option value="#">8000</option>
											<option value="#">10000</option>
										  </select>
										</div>
									  </div>
									</div>
								  </div>
								</form>
							</div>
							</div>
						</div>
						<div class="side animate-box">
							<div class="row">
								<div class="col-md-12">
									<h3 class="sidebar-heading">Review Rating</h3>
									<form method="post" class="colorlib-form-2">
									   <div class="form-check">
											<input type="checkbox" class="form-check-input" id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">
												<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
											</label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
											   <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										  </label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
											  <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										 </label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
											  <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
										 </label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
											  <p class="rate"><span><i class="icon-star-full"></i></span></p>
										 </label>
									   </div>
									</form>
								</div>
							</div>
						</div>
						<div class="side animate-box">
							<div class="row">
								<div class="col-md-12">
									<h3 class="sidebar-heading">Categories</h3>
									<form method="post" class="colorlib-form-2">
									   <div class="form-check">
											<input type="checkbox" class="form-check-input" id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">
												<h4 class="place">Apartment</h4>
											</label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
												<h4 class="place">Hotel</h4>
											</label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
												<h4 class="place">Hostel</h4>
											</label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
												<h4 class="place">Inn</h4>
											</label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
												<h4 class="place">Villa</h4>
											</label>
									   </div>
									</form>
								</div>
							</div>
						</div>
						<div class="side animate-box">
							<div class="row">
								<div class="col-md-12">
									<h3 class="sidebar-heading">Location</h3>
									<form method="post" class="colorlib-form-2">
									   <div class="form-check">
											<input type="checkbox" class="form-check-input" id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">
												<h4 class="place">Greece</h4>
											</label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
												<h4 class="place">Italy</h4>
											</label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
												<h4 class="place">Spain</h4>
											</label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
												<h4 class="place">Germany</h4>
											</label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
												<h4 class="place">Japan</h4>
											</label>
									   </div>
									</form>
								</div>
							</div>
						</div>
						<div class="side animate-box">
							<div class="row">
								<div class="col-md-12">
									<h3 class="sidebar-heading">Facilities</h3>
									<form method="post" class="colorlib-form-2">
									   <div class="form-check">
											<input type="checkbox" class="form-check-input" id="exampleCheck1">
											<label class="form-check-label" for="exampleCheck1">
												<h4 class="place">Airport Transfer</h4>
											</label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
												<h4 class="place">Resto Bar</h4>
											</label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
												<h4 class="place">Restaurant</h4>
											</label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
												<h4 class="place">Swimming Pool</h4>
											</label>
									   </div>
									   <div class="form-check">
										  <input type="checkbox" class="form-check-input" id="exampleCheck1">
										  <label class="form-check-label" for="exampleCheck1">
												<h4 class="place">Japan</h4>
											</label>
									   </div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
					<h2>Sign Up for a Newsletter</h2>
					<p>Sign up for our mailing list to get latest updates and offers.</p>
					<form class="form-inline qbstp-header-subscribe">
						<div class="row">
							<div class="col-md-12 col-md-offset-0">
								<div class="form-group">
									<input type="text" class="form-control" id="email" placeholder="Enter your email">
									<button type="submit" class="btn btn-primary">Subscribe</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</x-guest-layout>