<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tour Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
        
        <!-- Animate.css -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

        <!-- Flexslider  -->
        <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        
        <!-- Date Picker -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
        <!-- Flaticons  -->
        <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

        <!-- Theme style  -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Modernizr JS -->
        <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js') }}"></script>
        <![endif]-->

	</head>
	<body>
        <div class="colorlib-loader"></div>
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="colorlib-logo"><a href="index.html">AlphaTour</a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li class="has-dropdown">
                                    <a href="tours.html">Tours</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Destination</a></li>
                                        <li><a href="#">Cruises</a></li>
                                        <li><a href="#">Hotels</a></li>
                                        <li><a href="#">Booking</a></li>
                                    </ul>
                                </li>
                                <li><a href="hotels.html">Hotels</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

                                {{-- Main Page Contents go here --}}
                                
        {{ $slot }}


        <div id="page">
            <footer id="colorlib-footer" role="contentinfo">
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col-md-3 colorlib-widget">
                            <h4>Tour Agency</h4>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                            <p>
                                <ul class="colorlib-social-icons">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-md-2 colorlib-widget">
                            <h4>Book Now</h4>
                            <p>
                                <ul class="colorlib-footer-links">
                                    <li><a href="#">Flight</a></li>
                                    <li><a href="#">Hotels</a></li>
                                    <li><a href="#">Tour</a></li>
                                    <li><a href="#">Car Rent</a></li>
                                    <li><a href="#">Beach &amp; Resorts</a></li>
                                    <li><a href="#">Cruises</a></li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-md-2 colorlib-widget">
                            <h4>Top Deals</h4>
                            <p>
                                <ul class="colorlib-footer-links">
                                    <li><a href="#">Edina Hotel</a></li>
                                    <li><a href="#">Quality Suites</a></li>
                                    <li><a href="#">The Hotel Zephyr</a></li>
                                    <li><a href="#">Da Vinci Villa</a></li>
                                    <li><a href="#">Hotel Epikk</a></li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-md-2">
                            <h4>Blog Post</h4>
                            <ul class="colorlib-footer-links">
                                <li><a href="#">The Ultimate Packing List For Female Travelers</a></li>
                                <li><a href="#">How These 5 People Found The Path to Their Dream Trip</a></li>
                                <li><a href="#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
                            </ul>
                        </div>
    
                        <div class="col-md-3 col-md-push-1">
                            <h4>Contact Information</h4>
                            <ul class="colorlib-footer-links">
                                <li>Around xyz Street, <br> Addis Ababa</li>
                                <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                                <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                                <li><a href="#">yoursite.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Alpha</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
                                <span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Alpha</a> , <a href="http://pexels.com/" target="_blank">Alpha</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	    </div>
	
	<!-- jQuery -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
	<!-- Owl carousel -->
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
	<!-- Date Picker -->
	<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>