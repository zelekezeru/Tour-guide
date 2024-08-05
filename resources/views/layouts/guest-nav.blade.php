<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6">
                    <div id="colorlib-logo"><a href="{{ route('home')}} ">GRACE TOUR</a></div>
                </div>
                <div class="col-xs-6 text-right menu-1">
                    <ul>
                        <li class="active"><a href="{{ route('home')}} ">Home</a></li>
                        <li class="has-dropdown">
                            <a href="{{ route('tours.index') }}">Tours</a>
                            <ul class="dropdown">
                                <li><a href="#">Destination</a></li>
                                <li><a href="#">Cruises</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Booking</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('hotels.index') }}">Hotels</a></li>
                        {{-- <li><a href="{{ route('services.index') }}">Services</a></li> --}}
                        <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                        <li><a href="{{ route('abouts.index') }}">About</a></li>
                        <li><a href="{{ route('contacts.index') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>