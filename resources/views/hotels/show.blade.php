@section('title') Hotels @endsection

<x-guest-layout>
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                <li style="background-image: url({{ asset($hotel->images->first()->image ) }});" alt="url(images/hotelCover.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                        <h2>By GRACE Tour And Travel</h2>
                                        <h1>{{ $hotel->name}}</h1>
                                        <h3 style="color:rgb(218, 234, 249)">{{ $hotel->location}}</h3>
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
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="wrap-division">
									<div class="col-md-12 col-md-offset-0 heading2 animate-box">
										<h2>{{ $hotel->name}}</h2>
									</div>
									<div class="row">
										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<img class="room-img" style="background-image"  src="{{ asset($hotel->images->first()->image ) }}">
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>{{ $hotel->name}}</h2>
															<p class="price"><span>{{ $hotel->price }} </span> <small> Birr/ night</small></p>
															<p>{{ $hotel->description }}</p>
															<p><a href="#" class="btn btn-primary">Book Now!</a></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel">
							@foreach ($hotel->images as $image)
                                @if($image->id == $hotel->images->first()->id)
                                    @continue
                                @endif

								<div class="item">
									<div class="hotel-entry">
										<img class="hotel-img" style="background-image"  src="{{ asset( $image->image ) }}">
									</div>
									<h4>{{ $image->description }}</h4>

								</div>

							@endforeach

						</div>
					</div>
				</div>
			</div>
		</div>

</x-guest-layout>
