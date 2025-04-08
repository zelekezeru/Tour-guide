
@section('title') Contacts @endsection


<x-guest-layout>

	<aside id="colorlib-hero">
		<div class="flexslider">
			<ul class="slides">
				<li style="background-image: url( {{ asset('images/contact-us.jpg') }});">
					<div class="overlay"></div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
								<div class="slider-text-inner text-center">
									<h2>By GRACE 40 Tour And Travel</h2>
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
					<form  method="POST" action="{{ route('contacts.send') }}">
						@csrf
						<div class="row form-group">
							<div class="col-md-6 padding-bottom">
								<label for="fname">First Name</label>
								<input type="text" id="fname" name="firstName" value="{{ old('firstName') ? old('firstName') : '' }}" class="form-control" placeholder="Your firstname">
								@error('firstName')
									<div class="error text-danger">{{ $message }}</div>
								@enderror
							</div>
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input type="text" id="lname" name="lastName" value="{{ old('lastName') ? old('lastName') : '' }}" class="form-control" placeholder="Your lastname">
								@error('lastName')
									<div class="error text-danger">{{ $message }}</div>
								@enderror
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email" value="{{ old('email') ? old('email') : '' }}" class="form-control" placeholder="Your email address">
								@error('email')
									<div class="error text-danger">{{ $message }}</div>
								@enderror
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Subject</label>
								<input type="text" id="subject" name="subject" value="{{ old('subject') ? old('subject') : '' }}" class="form-control" placeholder="Your subject of this message">
								@error('subject')
									<div class="error text-danger">{{ $message }}</div>
								@enderror
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Message</label>
								<textarea name="message" id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Say something about us">{{ old('message') ? old('message') : '' }}</textarea>
								@error('message')
									<div class="error text-danger">{{ $message }}</div>
								@enderror
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
							<p><span><i class="icon-phone3"></i></span> <a href="tel://+251916279488">+251916279488</a></p>
						</div>
						<div class="col-md-3">
							<p><span><i class="icon-envelop"></i></span> <a href="mailto:info@grace40tours.com">info@grace40tours.com</a></p>
						</div>
						<div class="col-md-3">
							<p><span><i class="icon-globe"></i></span> <a href="grace40tours.com">grace40tours.com</a></p>
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
