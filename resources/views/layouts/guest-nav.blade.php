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
                            {{-- <ul class="dropdown">
                                <li><a href="{{ route('tours.index') }}">Tours</a></li>
                                <li><a href="#">Travels</a></li>
                                <li><a href="#">Bookings</a></li>
                                <li><a href="#">Destinations</a></li>
                            </ul> --}}
                        </li>
                        <li><a href="{{ route('hotels.index') }}">Hotels</a></li>
                        <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                        <li><a href="{{ route('abouts.index') }}">About</a></li>
                        <li><a href="{{ route('contacts.index') }}">Contact</a></li>
                        <li class="has-dropdown">
                            @if( Auth::user() )
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="img-profile rounded-circle" src="{{ asset( 'images/userIcon.png' ) }}" style="max-width: 60px">
                                        <span class="ml-2 d-none d-lg-inline text-white small">{{ Auth::user()->name }}</span>
                                    </a>
                                    <div class="dropdown">

                                        <a class="" href="{{ route('profile.edit') }}">
                                            <i class="fas fa-user fa-sm fa-fw mr-2"></i> Profile
                                        </a>
                                        <a class="" href="{{ route('admin.dashboard') }}">
                                            <i class="fas fa-cogs fa-sm fa-fw mr-2"></i> Dashbord
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-responsive-nav-link :href="route('logout')" class="text-white"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-responsive-nav-link>
                                        </form>
                                    </div>
                            @else
                                <li class="btn btn-md btn-info mr-5"><a href="{{ route('login') }}">Login</a></li>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
