<x-guest-layout>

	<aside id="colorlib-hero">
		<div class="flexslider">
			<ul class="slides">
				<li style="background-image: url(images/cover-img-3.jpg);">
					<div class="overlay"></div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
								<div class="slider-text-inner text-center">
									<h2>By GRACE Tour And Travel</h2>
									<h1>Contact us</h1>
								</div>
							</div>
						</div>
					</div>
				</li>
				</ul>
			</div>
	</aside>

	<div id="colorlib-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<h3>Get In Touch</h3>
<<<<<<< Updated upstream
					<form action="{{ route('contacts.send') }}" method="POST">
=======
					<form  method="POST" action="{{ route('contacts.send') }}">
>>>>>>> Stashed changes
						@csrf
						<div class="row form-group">
							<div class="col-md-6 padding-bottom">
								<label for="fname">First Name</label>
<<<<<<< Updated upstream
								<input type="text" id="fname" name="first_name" value="{{ old('first_name') ? old('first_name') : '' }}" class="form-control" placeholder="Your firstname">
								@error('first_name')
									<div class="error text-danger">{{ $message }}</div>
								@enderror
							</div>
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input type="text" id="lname" name="last_name" value="{{ old('last_name') ? old('last_name') : '' }}" class="form-control" placeholder="Your lastname">
								@error('last_name')
									<div class="error text-danger">{{ $message }}</div>
								@enderror
=======
								<input type="text" id="fname" name="first_name" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input type="text" id="lname" name="last_name" class="form-control" placeholder="Your lastname">
>>>>>>> Stashed changes
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email</label>
<<<<<<< Updated upstream
								<input type="text" id="email" name="email" value="{{ old('email') ? old('email') : '' }}" class="form-control" placeholder="Your email address">
								@error('email')
									<div class="error text-danger">{{ $message }}</div>
								@enderror
=======
								<input type="text" id="email" name="email" class="form-control" placeholder="Your email address">
>>>>>>> Stashed changes
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Subject</label>
<<<<<<< Updated upstream
								<input type="text" id="subject" name="subject" value="{{ old('subject') ? old('subject') : '' }}" class="form-control" placeholder="Your subject of this message">
								@error('subject')
									<div class="error text-danger">{{ $message }}</div>
								@enderror
=======
								<input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message">
>>>>>>> Stashed changes
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Message</label>
<<<<<<< Updated upstream
								<textarea name="message" id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Say something about us">{{ old('message') ? old('message') : '' }}</textarea>
								@error('message')
									<div class="error text-danger">{{ $message }}</div>
								@enderror
=======
								<textarea name="message" name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
>>>>>>> Stashed changes
							</div>
						</div>
						<div class="form-group text-center">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
				<div class="col-md-10 col-md-offset-1 animate-box">
					<h3>Contact Information</h3>
					<div class="row contact-info-wrap">
						<div class="col-md-3">
							<p><span><i class="icon-location"></i></span> Southern region of Ethiopia, <br>  Arba Minch city</p>
						</div>
						<div class="col-md-3">
							<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+251 9162 79488</a></p>
						</div>
						<div class="col-md-3">
							<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@gracetourtravel.com</a></p>
						</div>
						<div class="col-md-3">
							<p><span><i class="icon-globe"></i></span> <a href="#">gracetourtravel.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="map" class="colorlib-map"></div>

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