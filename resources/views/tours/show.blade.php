<x-guest-layout>

    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url({{ asset($tour->image) }});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2>By GRACE 40 Tour And Travel</h2>
                                    <h1>{{ $tour->title }}</h1>
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
                <div class="col-md-8">
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
                                                                <div class="room-img"
                                                                    style="background-image: url({{ $itenarary->image ? asset('storage/' . $itenarary->image) : asset($tour->image) }});">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="desc">
                                                                    <span class="day-tour">Day
                                                                        {{ $itenarary->day_number }}</span>
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
                                                                <div class="room-img"
                                                                    style="background-image: url({{ $itenarary->image ? asset('storage/' . $itenarary->image) : asset($tour->image) }});">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="desc">
                                                                    <span class="day-tour">Day
                                                                        {{ $itenarary->day_number }}</span>
                                                                    <h2> Sorry, Day {{ $itenarary->day_number }} Has Not
                                                                        Been Defined Yet </h2>
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


                                    <!-- Overall Rating -->
                                    <div class="col-md-12 animate-box">
                                        <h3>Overall Rating</h3>
                                        @php
                                            $reviewCount = $reviews->count();
                                            $averageRating = $reviewCount ? round($reviews->avg('rating'), 1) : 0;
                                        @endphp
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-0 mr-2">{{ $averageRating }}</h4>
                                            <div>
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <i
                                                        class="{{ $i <= $averageRating ? 'fas' : 'far' }} fa-star text-warning"></i>
                                                @endfor
                                            </div>
                                        </div>
                                        <p>Based on {{ $reviewCount }} review{{ $reviewCount !== 1 ? 's' : '' }}</p>
                                    </div>

                                    <!-- User Reviews -->
                                    <div class="col-md-12 animate-box mt-5">
                                        <h3>User Reviews</h3>
                                        @forelse($reviews as $review)
                                            <div class="p-3 mb-4"
                                                style="box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08); border-radius: 8px; background-color: #fff;">
                                                <div class="d-flex align-items-center mb-2">
                                                    @if ($review->photo)
                                                        <img src="{{ asset($review->photo) }}"
                                                            alt="{{ $review->full_name }}"
                                                            style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%; margin-right: 12px;">
                                                    @else
                                                        <div style="width: 40px; height: 40px; border-radius: 50%; background: #ccc; margin-right: 12px;"
                                                            class="d-flex align-items-center justify-content-center text-white font-weight-bold">
                                                            {{ strtoupper(substr($review->full_name, 0, 1)) }}
                                                        </div>
                                                    @endif
                                                    <div>
                                                        <strong>{{ $review->full_name }}</strong>
                                                        <small
                                                            class="text-muted d-block">{{ $review->created_at->diffForHumans() }}</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <i
                                                            class="{{ $i <= $review->rating ? 'fas' : 'far' }} fa-star text-warning"></i>
                                                    @endfor
                                                </div>
                                                <p class="mt-2 mb-1">{{ $review->review }}</p>
                                            </div>
                                        @empty
                                            <p>No reviews yet. Be the first to review this tour!</p>
                                        @endforelse
                                    </div>



                                    <div class="col-md-12 animate-box text-center">
                                        <p><a href="#" class="btn btn-primary">Book Now!</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SIDEBAR -->
                <div class="col-md-4">
                    <div class="sidebar-wrap">
                        <div class="side search-wrap animate-box">
                            <h3 class="sidebar-heading">Leave a Review</h3>
                            <form action="{{ route('reviews.store', $tour) }}" method="post"
                                enctype="multipart/form-data" class="colorlib-form">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Full Name:</label>
                                    <input type="text" id="name" name="full_name" class="form-control"
                                        placeholder="Your Full Name" value="{{ old('full_name') }}">
                                    @error('full_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email (optional):</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Your email (optional)" value="{{ old('email') }}">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="photo">Your Photo (optional):</label>
                                    <input type="file" id="photo" name="photo" class="form-control"
                                        accept="image/*">
                                    @error('photo')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="rating">Rating (1-5):</label>
                                    <select id="rating" name="rating" class="form-control">
                                        <option disabled selected class="text-dark">Select a rating</option>
                                        @for ($i = 5; $i >= 1; $i--)
                                            <option value="{{ $i }}"
                                                {{ old('rating') == $i ? 'selected' : '' }}>
                                                {{ $i }} Star{{ $i > 1 ? 's' : '' }}
                                            </option>
                                        @endfor
                                    </select>
                                    @error('rating')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="review">Your Review:</label>
                                    <textarea id="review" name="review" class="form-control" rows="4" placeholder="Write your review here...">{{ old('review') }}</textarea>
                                    @error('review')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <button class="btn btn-primary btn-block">Submit Review</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);"
        data-stellar-background-ratio="0.5">
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
                                    <input type="text" class="form-control" id="email"
                                        placeholder="Enter your email">
                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

		<style>
    select.form-control {
        background-color: #fff !important;
        color: #000 !important;
    }

    select.form-control option {
        background-color: #fff;
        color: #000;
    }
</style>
</x-guest-layout>
