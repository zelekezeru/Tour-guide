<x-guest-layout>
    
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
            <li style="background-image: url('{{ asset('images/img_bg_1.jpg') }}');">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Grace Tour and Travel</h2>
                                <h1>Your satisfaction is our primary goal</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/img_bg_2.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Transportation</h2>
                                <h1> Best vehicles that consider the Landscape</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url('{{ asset('images/img_bg_3.jpg') }}');">
                <div class="overlay"></div>
                <div class="container-fluids">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Bucket-List Destinations</h2>
                                <h1>Must-visit Memorable locations</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url('{{ asset('images/img_bg_4.jpg') }}');">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Smart Guides</h2>
                                <h1>Caring, knowledgeable, and passionate</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>	   	
            </ul>
        </div>
    </aside>


    <div id="colorlib-reservation">
        <!-- <div class="container"> -->
        <div class="container-fluid">
            <div class="row">
                <div class="search-wrap">
                    <div class="container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tour"><i class="flaticon-plane"></i> Tour</a></li>
                            <li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
                            <li><a data-toggle="tab" href="#travel"><i class="flaticon-car"></i> Travel</a></li>
                        </ul>
                    </div>

                    {{-- Tour Search --}}
                    
                    <div class="tab-content">
                        <div id="tour" class="tab-pane fade in active">
                            <form action="{{ route('tours.search') }}" method="GET" class="colorlib-form">
                                <div class="row">
                                <div class="col-md-4">
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
                                
                                <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Check-In:</label>
                                    <div class="form-field">
                                    <i class="icon icon-calendar2"></i>
                                    <input type="text" id="date" class="form-control date"  name="check_in_date"  placeholder="Check-in date">
                                    </div>
                                </div>
                                </div>
                                
                                <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Check-out:</label>
                                    <div class="form-field">
                                    <i class="icon icon-calendar2"></i>
                                    <input type="text" id="date" class="form-control date"  name="check_out_date" placeholder="Check-out date">
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-2">
                                <input type="submit" name="submit" id="submit" value="Find Tours" class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>
                    </div>

                    {{-- Hotel Search --}}

                    <div id="hotel" class="tab-pane fade">
                        <form action="{{ route('hotels.search') }}" method="GET" class="colorlib-form">
                            <div class="row">
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label for="guests">Location</label>
                                    <div class="form-field">
                                    <i class="icon icon-arrow-down3"></i>
                                    <select name="location" id="location-hotel" class="form-control bg-dark">
                                        <option class="text-primary" value="">Choose Location</option>
                                        @foreach($hotels as $hotel)
                                            <option class="text-primary" value="{{ $hotel->location }}">{{ $hotel->location }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="date">Check-in:</label>
                                <div class="form-field">
                                <i class="icon icon-calendar2"></i>
                                <input type="text" id="date" class="form-control date"  name="check_in_date"  placeholder="Check-in date">
                            </div>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="date">Check-out:</label>
                                <div class="form-field">
                                <i class="icon icon-calendar2"></i>
                                <input type="text" id="date" class="form-control date"  name="check_out_date" placeholder="Check-out date">
                            </div>
                            </div>
                            </div>

                            <div class="col-md-2">
                            <input type="submit" name="submit" id="submit" value="Find Hotels" class="btn btn-primary btn-block">
                            </div>
                        </div>
                        </form>
                    </div>

                    {{-- Travel Search --}}
                    
                    <div id="travel" class="tab-pane fade">
                        <form action="{{ route('travels.search') }}" method="GET" class="colorlib-form">
                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="date">Where:</label>
                                <div class="form-field">
                                    <i class="icon icon-arrow-down3"></i>
                                    <select name="location" id="location-travel" class="form-control bg-dark">      
                                        <option class="text-primary" value="">Choose Location</option>
                                        @foreach($travels as $travel)                                        
                                            <option class="text-primary" value="{{ $travel->location }}">{{ $travel->location }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="date">Start Date:</label>
                                <div class="form-field">
                                <i class="icon icon-calendar2"></i>
                                <input type="text" id="date" class="form-control date"  name="check_in_date"  placeholder="Check-in date">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="date">Return Date:</label>
                                <div class="form-field">
                                <i class="icon icon-calendar2"></i>
                                <input type="text" id="date" class="form-control date"  name="check_out_date" placeholder="Check-out date">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-2">
                            <input type="submit" name="submit" id="submit" value="Find Travels" class="btn btn-primary btn-block">
                            </div>
                        </div>
                        </form>
                    </div>

                    
                </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="colorlib-services">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-3 animate-box text-center aside-stretch">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-around"></i>
                        </span>
                        <h3>Custom-made Service</h3>
                        <p>We do the research, pre-check all roads and routes, and consistently deliver the best guides, accommodations, food, and service.</p>
                    </div>
                </div>
                <div class="col-md-3 animate-box text-center">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-boat"></i>
                        </span>
                        <h3>Packages and pricing</h3>
                        <p>Travel should be life-changing. That’s why we offer diverse packages, allowing customers to choose what suits them based on their capacity—all at an affordable price without compromising quality. </p>
                    </div>
                </div>
                <div class="col-md-3 animate-box text-center">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-car"></i>
                        </span>
                        <h3>Smart Guides</h3>
                        <p>Caring, knowledgeable, and passionate—our guides bring the world to life with insights and stories that can only come from a local. We immerse you into local culture through our guides who knows the best cultural restaurants, shop, and lodges. </p>
                    </div>
                </div>
                <div class="col-md-3 animate-box text-center">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-postcard"></i>
                        </span>
                        <h3>Team Work </h3>
                        <p>Our biggest asset is a team of highly trained, multi-lingual, expert guides, drivers, and tour leaders. We pleasantly make sure that from the moment you get off the plane until the moment you leave, your trip is personally supervised.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="colorlib-tour colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Popular Destinations</h2>
                </div>
            </div>
        </div>
        <div class="tour-wrap">
            @foreach( $tours as $tour)
                <a href="#" class="tour-entry animate-box">
                    <div class="tour-img" style="background-image: url({{ $tour->image ? asset($tour->image) : asset($tour->image) }});">
                    </div>
                    <span class="desc">
                        {{-- <p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p> --}}
                        <h2>{{ $tour->title }}</h2>
                        <span class="city">{{ $tour->country }}, {{ $tour->city }}</span>
                        <span class="price">{{ $tour->location }}</span>
                    </span>
                </a>
            @endforeach
        </div>
    </div>
    
    
    <div id="colorlib-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="blog-flex">
                <div class="f-entry-img" style="background-image: url('{{ asset('images/blogcover.jpg') }}');">
                </div>
                <div class="blog-entry aside-stretch-right">
                    <div class="row">
                        @foreach($blogs as $blog)
                            <div class="col-md-12 animate-box">
                                <a href="blog.html" class="blog-post">
                                    <span class="img" style="background-image: url({{ asset($blog->image) }});"></span>
                                    <div class="desc">
                                        <span class="date">{{ $blog->created_at->format('M Y') }}</span>
                                        <h3>{{ $blog->title }}</h3>
                                        <span class="cat">Activities</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <div id="colorlib-hotel">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Recommended Hotels</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 animate-box">
                    <div class="owl-carousel">
                        @foreach ($hotels as $hotel)
                            
                            <div class="item">
                                <div class="hotel-entry">
                                    <a href="{{ route('hotels.show', ['hotel' => $hotel->id]) }}"> <img class="hotel-img" style="background-image"  src="{{ asset($hotel->images->first()->image ) }}">
                                        <p class="price"><span>{{ $hotel->price}}</span><small> /night</small></p>
                                    </a>
                                    <div class="desc">
                                        <p class="star">
                                            @for ($i = 0; $i < $hotel->rating; $i++)
                                            <span><i class="icon-star-full"></i></span>
                                            @endfor
                                            <h3><p>{{$hotel->name}} </p></h3>
                                        <span class="place">{{ $hotel->address}}</span>                                        
									    <p>{{ Str::limit($hotel->description, 95, '...') }}</p>
                                    </div>
                                </div>
                            </div>

                        @endforeach

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
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 animate-box">						
                    <div class="owl-carousel2">

                        @foreach($testimonials as $testimonial)

                            <div class="item">
                                <div class="testimony text-center">
                                    <span class="img-user" style="background-image: url({{ $testimonial->image }});"></span>
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
    
    <div class="colorlib-tour">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Most Popular Tour Options</h2>
                    {{-- <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    @foreach($tours as $tour)

                        <div class="f-tour">
                            <div class="row row-pb-md">
                                <div class="col-md-6">
                                    <div class="row">
                                        
                                        @if (count($tour->itenararies) !== 0)
                                        @foreach ($tour->itenararies as $itenarary)
                                            @if ($itenarary->title)
                                        
                                            <div class="col-md-6 animate-box">
                                                <a  href="tours.html" class="f-tour-img" style="background-image: url({{ $itenarary->image ? asset('storage/'.$itenarary->image) : asset($tour->image) }});">
                                                    <div class="desc">
                                                        <h3>{{ $itenarary->title }} </h3>
                                                        <p class="price"><span>{{ $itenarary->description }}</span> <small>, Day {{ $itenarary->day_number }}</small></p>
                                                    </div>
                                                </a>
                                            </div>                                        
											@endif
										@endforeach
								
									@else
											<h2>Great Experience!</h2>
									@endif
                                        <div class="col-md-6 animate-box">
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>{{ $tour->title }}</h3>
                                                <p>{{ $tour->country }}, {{ $tour->location }}, {{ $tour->city }}</p><br>
                                            </div>
                                            <div class="col-md-12">
                                                <h4>Tour Components</h4>
                                                <div class="row">
                                                    @if (count($tour->itenararies) !== 0)
                                                    @foreach ($tour->itenararies as $itenarary)
                                                        @if ($itenarary->title)
                                                    

                                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                                        <ul>
                                                            <li class="col"><p class="price"><span>Day {{ $itenarary->day_number }}, </span>{{ $itenarary->title }}, {{ $itenarary->hotel->name }}, By {{ $itenarary->transport_type }}</a></li>
                                                        </ul>
                                                    </div>                                    
                                                    @endif
                                                @endforeach
                                        
                                                @else
                                                        <h2>Great Tour!</h2>
                                                @endif
                                                    
                                                </div>
                                                <p><a href="tours.html" class="btn btn-primary">View All Tours</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    @endforeach
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

