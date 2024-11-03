
@section('title') Hotels @endsection


<x-guest-layout>

	<aside id="colorlib-hero">
		<div class="flexslider">
			<ul class="slides">
				<li style="background-image: url('{{ asset('images/cover-img-4.jpg') }}');">
				   <div class="overlay"></div>
				   <div class="container-fluid">
					   <div class="row">
						   <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
							   <div class="slider-text-inner text-center">
									<h2>By GRACE Tour And Travel</h2>
									<h1>Find Hotel</h1>
							   </div>
						   </div>
					   </div>
				   	</div>
			   		</div>
			   </li>
			</ul>
		</div>
	</aside>

	@include('hotels.search')

	<div class="colorlib-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="wrap-division">
              
							@foreach ($hotels as $hotel)
								<div class="col-md-4 col-sm-4 animate-box">
								<div class="hotel-entry">
									<a href="{{ route('hotels.show', ['hotel' => $hotel->id]) }}" class="hotel-img" style="background-image: url({{ asset( $hotel->images->first()->image ) }});">
									<p class="price"><span>{{$hotel->price}} </span><small> Birr /night</small></p>
									</a>
									<div class="desc">
									<p class="star"><span>                        
										@for ($i = 0; $i < $hotel->rating; $i++)
										<img width="20px" src="{{ asset('images/star.png') }}"/>
										@endfor
									</span> {{$hotel->reviews}} Reviews</p>
									<h3><a href="hotel-room.html">{{$hotel->name}}</a></h3>
									<span class="place">{{$hotel->location}}</span>
									<p>{{ Str::limit($hotel->description, 95, '...') }}</p>
									</div>
								</div>
								</div>
							@endforeach

						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="pagination">
								<li class="disabled"><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
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