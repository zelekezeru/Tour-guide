
@section('title') Tours @endsection

<x-guest-layout>

	<aside id="colorlib-hero">
		<div class="flexslider">
			<ul class="slides">
				<li style="background-image: url('{{ asset('images/img_bg_3.jpg') }}');">
					<div class="overlay"></div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
								<div class="slider-text-inner text-center">
									<h2>By GRACE 40 Tour And Travel</h2>
									<h1>Available Tours</h1>
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
						<div class="wrap-division">
							@foreach ($tours as $tour)
								<div class="col-md-6 col-sm-6 animate-box">
									<div class="tour">
										<a href="{{ route('tours.show', ['tour' => $tour->id]) }}" class="tour-img" style="background-image: url({{ asset( $tour->image ) }});">
											<p class="price"><span>${{ $tour->price }}</span> <small>/ {{ $tour->days }} Days</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> {{$tour->reviews}} Reviews</p>
											<h2><a href="{{ route('tours.show', $tour) }}">{{ $tour->title }}</a></h2>
											<span class="city">{{ $tour->city }}</span>
										</span>
									</div>
								</div>
							@endforeach

						</div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                {{ $tours->links() }}
                            </div>
                        </div>
					</div>

				</div>

				<!-- SIDEBAR-->
				<div class="col-md-3">
					<div class="sidebar-wrap">
						<div class="side search-wrap animate-box">
							<h3 class="sidebar-heading">Find your tour</h3>
							<form action="{{ route('tours.search') }}" method="GET" class="colorlib-form">
								<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="date">Where:</label>
										<div class="form-field">
											<i class="icon icon-arrow-down3"></i>
											<select name="location" id="location" class="form-control bg-dark">
												<option class="text-primary">Choose Location</option>
												@foreach($tours as $tour)
													<option class="text-primary" value="{{ $tour->location }}">{{ $tour->location }}</option>
												@endforeach
											</select>
										</div>
									</div>
								</div>
							<div class="col-md-12">
								<div class="form-group">
                                    <label for="date">Check-In:</label>
                                    <div class="form-field">
										<i class="icon icon-calendar2"></i>
										<input type="text" id="date" class="form-control date"  name="check_in_date"  placeholder="Check-in date">
                                    </div>
                                </div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
                                    <label for="date">Check-out:</label>
                                    <div class="form-field">
                                    <i class="icon icon-calendar2"></i>
                                    <input type="text" id="date" class="form-control date"  name="check_out_date" placeholder="Check-out date">
                                    </div>
                                </div>
							</div>
							<div class="col-md-12">
								<input type="submit" name="submit" id="submit" value="Find Tours" class="btn btn-primary btn-block">
							</div>
							</div>
						</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	</div>

</x-guest-layout>
