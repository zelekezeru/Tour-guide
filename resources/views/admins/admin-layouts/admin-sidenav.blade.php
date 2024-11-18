<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('admin/img/logo/logo2.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">Grace Tour, Main</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admins.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Services
    </div>

    @if (auth()->user()->role === 'SUPER_ADMIN')
        {{-- Users --}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
                aria-expanded="true" aria-controls="collapseBootstrap1">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Users</span>
            </a>
            <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingBootstrap"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Users</h6>
                    <a class="collapse-item" href="{{ route('users.list') }}">Users List</a>
                    <a class="collapse-item" href="{{ route('register') }}">Register Users</a>
                </div>
        </li>
    @endif
    {{-- Tours --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
            aria-expanded="true" aria-controls="collapseBootstrap2">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Tour</span>
        </a>
        <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tour</h6>
                <a class="collapse-item" href="{{ route('tours.list') }}">Tour List</a>
                <a class="collapse-item" href="{{ route('tours.create') }}">Add Tour</a>
            </div>
        </div>
    </li>
    {{-- Testimonials --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap22"
            aria-expanded="true" aria-controls="collapseBootstrap22">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Testimonial</span>
        </a>
        <div id="collapseBootstrap22" class="collapse" aria-labelledby="headingBootstrap"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Testimonial</h6>
                <a class="collapse-item" href="{{ route('testimonials.index') }}">Testimonial List</a>
                <a class="collapse-item" href="{{ route('testimonials.create') }}">Add Testimonial</a>
            </div>
        </div>
    </li>
    {{-- Travel --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap8"
            aria-expanded="true" aria-controls="collapseBootstrap8">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Travel</span>
        </a>
        <div id="collapseBootstrap8" class="collapse" aria-labelledby="headingBootstrap"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Travel</h6>
                <a class="collapse-item" href="{{ route('travels.list') }}">Travels List</a>
                <a class="collapse-item" href="{{ route('travels.create') }}">Add Travel</a>
            </div>
        </div>
    </li>
    {{-- Hotels --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap3"
            aria-expanded="true" aria-controls="collapseBootstrap3">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Hotels</span>
        </a>
        <div id="collapseBootstrap3" class="collapse" aria-labelledby="headingBootstrap"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Hotels</h6>
                <a class="collapse-item" href="{{ route('hotels.list') }}">Hotels List</a>
                <a class="collapse-item" href="{{ route('hotels.create') }}">Add Hotel</a>
            </div>
        </div>
    </li>
    {{-- Bookings --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap4"
            aria-expanded="true" aria-controls="collapseBootstrap4">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Bookings</span>
        </a>
        <div id="collapseBootstrap4" class="collapse" aria-labelledby="headingBootstrap"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Bookings</h6>
                <a class="collapse-item" href="{{ route('bookings.index') }}">Bookings List</a>
                <a class="collapse-item" href="#">Buttons</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Website Structure
    </div>
    {{-- Blog --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap5"
            aria-expanded="true" aria-controls="collapseBootstrap5">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Blog</span>
        </a>
        <div id="collapseBootstrap5" class="collapse" aria-labelledby="headingBootstrap"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Blog</h6>
                <a class="collapse-item" href="{{ route('blogs.list') }}">Blogs List</a>
                <a class="collapse-item" href="{{ route('blogs.create') }}">Create Blog</a>
            </div>
        </div>
    </li>
    {{-- Contacts --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap6"
            aria-expanded="true" aria-controls="collapseBootstrap6">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Contacts</span>
        </a>
        <div id="collapseBootstrap6" class="collapse" aria-labelledby="headingBootstrap"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Contacts</h6>
                <a class="collapse-item" href="{{ route('contacts.list') }}">Messages</a>
                <a class="collapse-item" href="{{ route('testimonials.index') }}">Testimonials</a>
            </div>
        </div>
    </li>
    {{-- Meta Data --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap7"
            aria-expanded="true" aria-controls="collapseBootstrap7">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Meta Data</span>
        </a>
        <div id="collapseBootstrap7" class="collapse" aria-labelledby="headingBootstrap"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Meta Data</h6>
                <a class="collapse-item" href="{{ route('abouts.index') }}">About Us</a>
                <a class="collapse-item" href="#">Buttons</a>
            </div>
        </div>
    </li>
</ul>
<!-- Sidebar -->
