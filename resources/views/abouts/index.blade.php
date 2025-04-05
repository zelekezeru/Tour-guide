
@section('title') About Us @endsection
<x-guest-layout>
	<aside id="colorlib-hero">
		<div class="flexslider">
			<ul class="slides">
			   <li style="background-image: url( {{ asset('images/about.jpg') }});">
				   <div class="overlay"></div>
				   <div class="container-fluid">
					   <div class="row">
						   <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
							   <div class="slider-text-inner text-center">
								   <h2>By GRACE 40 Tour And Travel</h2>
								   <h1>About us</h1>
							   </div>
						   </div>
					   </div>
				   </div>
			   </li>
			  </ul>
		  </div>
	</aside>

	<div id="colorlib-about">
		<div class="container">
			<div class="row">
				<div class="about-flex">
					<div class="col-one-forth aside-stretch animate-box">
						<div class="row">
							<div class="col-md-12 about">
								<h2>About</h2>

								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Crew</a></li>
									<li><a href="#">Connect with us</a></li>
									{{-- <li><a href="#">Faqs</a></li>
									<li><a href="#">Career</a></li> --}}
								</ul>
							</div>
						</div>
					</div>
					<div class="col-three-forth animate-box">
						<h2>About Us</h2>
						<div class="row">
							<div class="col-md-12">
								<p>GRACE 40 Tour And Travels, nestled in the vibrant city of Arba Minch in Ethiopia’s Southern region, invites you to explore the heart of this captivating land. Our mission is to curate unforgettable experiences for our guests, blending warm Ethiopian hospitality with authentic adventures.</p>

								<p>As you embark on your journey, discover the mystical Nechisar National Park, where wildlife roams freely against a backdrop of lush landscapes. Cruise the serene waters of Lake Chamo, where hippos and crocodiles thrive, and witness the sun’s golden embrace at sunset. Dive into the bustling markets of Arba Minch, where vibrant colors, aromatic spices, and friendly faces await.</p>

								<p>Our dedicated team crafts personalized itineraries, ensuring that every moment resonates with culture, discovery, and connection. From comfortable accommodations to expert guides, we take care of the details, allowing you to immerse yourself fully in Ethiopia’s rich heritage.</p>

								<div class="row row-pb-sm">
									<div class="col-md-6">
										<img class="img-responsive" src="{{ asset('images/about-info.jpg') }}" alt="">
									</div>
									<div class="col-md-6">
										<p>At Grace Tours, we view life as a canvas, each person wielding their own brush. Our mission? To transform your life into a masterpiece through travel and unforgettable experiences. With unwavering dedication, we curate amazing, fun, safe, and memorable adventures—all at a price that invites you to explore again and again.</p>
										<p>Our canvas awaits—each stroke a journey, each hue an adventure. Grace Tours: Crafting memories, one travel palette at a time. Affordable wanderlust, because life’s artistry knows no bounds.</p>
									</div>
								</div>


								<p>At Grace Tours, we are dedicated to fostering strong connections with our clients, ensuring their desires are met, and creating unforgettable experiences during their stay. Our commitment lies in curating exceptional moments that resonate with you, your family, your spouse, and your friends. From the moment you choose Grace Tours, we embark on a journey together—one that celebrates quality time, cherished memories, and genuine gratitude. Whether you’re exploring breathtaking landscapes, immersing yourself in local culture, or simply relaxing, we strive to exceed your expectations. Welcome to Grace Tours, where every moment is an opportunity to create lasting bonds and enrich your travel experience.</p>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="colorlib-testimony" class="colorlib-light-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
					<h2>Our Satisfied Guests says</h2>
					<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 animate-box">
					<div class="owl-carousel2">
						@foreach($testimonials as $testimonial)

						<div class="item">
								<div class="testimony text-center">
										<span class="img-user" style="background-image: url({{ asset($testimonial->image) }});"></span>
										<span class="user">{{ $testimonial->name }}</span>
										<small>{{ $testimonial->address }}</small>
										<blockquote>
												<p>{{ $testimonial->testimony }}</p>
										</blockquote>
								</div>
						</div>

				@endforeach
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



