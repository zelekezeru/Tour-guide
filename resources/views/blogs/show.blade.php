
@section('title') Blogs @endsection


<x-guest-layout>

  <article>
  <aside id="colorlib-hero">
      <div class="flexslider">
        <ul class="slides">
          <li style="background-image: url({{ asset($blog->image) }});">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
							<div class="slider-text-inner text-center">
								<h2>By GRACE 40 Tour And Travel</h2>
								<h1>{{ $blog->title }}</h1>
							</div>
						</div>
					</div>
				</div>
			</li>
    </ul>
		</div>
	</aside>

	<div id="colorlib-blog">
    <div class="container blog-content">
      <p class="blog-teaser">{{ $blog->teaser }}</p>
      {!! $blog->content !!}
    </div>
  </div>
  </article>

  <div id="colorlib-subscribe" style="background-image: url( {{ asset('images/img_bg_2.jpg') }});" data-stellar-background-ratio="0.5">
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


