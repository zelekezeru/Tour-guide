

@section('title') Blogs @endsection


<x-guest-layout>

	<aside id="colorlib-hero">
		<div class="flexslider">
			<ul class="slides">
			<li style="background-image: url('{{ asset('images/blogcover.jpg') }}');">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
							<div class="slider-text-inner text-center">
								<h2>By GRACE 40 Tour And Travel</h2>
								<h1>Blog Posts</h1>
							</div>
						</div>
					</div>
				</div>
			</li>
			</ul>
		</div>
	</aside>

	<div id="colorlib-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="wrap-division">
						@foreach ($blogs as $blog)
							<article class="animate-box">
								<div class="blog-img" style="background-image: url('{{asset($blog->image)}}');"></div>
								<div class="desc">
									<div class="meta">
										<p>
											<span>{{ $blog->created_at }}</span>
											<span>admin </span>
											{{-- <span><a href="#">2 Comments</a></span> --}}
										</p>
									</div>
									<h2><a href="{{ route('blogs.show', $blog) }}">{{ $blog->title }}</a></h2>
									<p>{{ $blog->teaser }}</p>
								</div>
							</article>
						@endforeach
					</div>

					<div class="row">
						<div class="col-md-12 text-center">
							{{ $blogs->links() }}
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="sidebar-wrap">
						<div class="side animate-box">
							<h3 class="sidebar-heading">Recent Post</h3>
							@foreach($blogs as $blog)
								<div class="blog-entry-side">
									<a href="{{ route('blogs.show', $blog) }}" class="blog-post">
										<span class="img" style="background-image: url({{ $blog->image }});"></span>
										<div class="desc">
											<span class="date">{{ $blog->created_at }}</span>
											<p>{{ $blog->title  }}</p>
											<span class="cat"></span>
										</div>
									</a>
								</div>
							@endforeach

						</div>
						{{-- <div class="side animate-box">
							<div class="sidebar-heading">Categories</div>
							<ul class="category">
								<li><a href="#"><i class="icon-check"></i> Car rental<span>(2)</span></a></li>
								<li><a href="#"><i class="icon-check"></i> Flight<span>(2)</span></a></li>
								<li><a href="#"><i class="icon-check"></i> Activities<span>(3)</span></a></li>
								<li><a href="#"><i class="icon-check"></i> Hotel<span>(5)</span></a></li>
								<li><a href="#"><i class="icon-check"></i> Tour<span>(2)</span></a></li>
								<li><a href="#"><i class="icon-check"></i> Travel<span>(3)</span></a></li>
								<li><a href="#"><i class="icon-check"></i> Night<span>(2)</span></a></li>
								<li><a href="#"><i class="icon-check"></i> Cruises<span>(2)</span></a></li>
							</ul>
						</div> --}}
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


