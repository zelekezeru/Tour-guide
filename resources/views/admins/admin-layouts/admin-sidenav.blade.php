
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('admin/img/logo/logo2.png') }}">
                </div>
                <div class="sidebar-brand-text mx-3">Grace Tour</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Services
            </div>
            {{-- Users --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1" aria-expanded="true" aria-controls="collapseBootstrap1">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Users</span>
                </a>
                <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Users</h6>
                        <a class="collapse-item" href="#">Alerts</a>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                    </div>
                </div>
            </li>
            {{-- Tour and Travel --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2" aria-expanded="true" aria-controls="collapseBootstrap2">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Tour and Travel</span>
                </a>
                <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tour and Travel</h6>
                        <a class="collapse-item" href="{{ route('tours.index') }}">Tour</a>
                        <a class="collapse-item" href="{{ route('travels.index') }}">Travel</a>
                    </div>
                </div>
            </li>
            {{-- Hotels --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap3" aria-expanded="true" aria-controls="collapseBootstrap3">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Hotels</span>
                </a>
                <div id="collapseBootstrap3" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Hotels</h6>
                        <a class="collapse-item" href="{{ route('hotels.index') }}">Hotels List</a>
                        <a class="collapse-item" href="#">Buttons</a>
                    </div>
                </div>
            </li>
            {{-- Bookings --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap4" aria-expanded="true" aria-controls="collapseBootstrap4">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Bookings</span>
                </a>
                <div id="collapseBootstrap4" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
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
            {{-- Meta Data --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap7" aria-expanded="true" aria-controls="collapseBootstrap7">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Meta Data</span>
                </a>
                <div id="collapseBootstrap7" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Meta Data</h6>
                        <a class="collapse-item" href="{{ route('abouts.index') }}">About Us</a>
                        <a class="collapse-item" href="#">Buttons</a>
                    </div>
                </div>
            </li>
            {{-- Blog --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap5" aria-expanded="true" aria-controls="collapseBootstrap5">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Blog</span>
                </a>
                <div id="collapseBootstrap5" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Blog</h6>
                        <a class="collapse-item" href="{{ route('blogs.index') }}">Blogs List</a>
                        <a class="collapse-item" href="#">Buttons</a>
                    </div>
                </div>
            </li>
            {{-- Contacts --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap6" aria-expanded="true" aria-controls="collapseBootstrap6">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Contacts</span>
                </a>
                <div id="collapseBootstrap6" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Contacts</h6>
                        <a class="collapse-item" href="{{ route('contacts.index') }}">Contacts</a>
                        <a class="collapse-item" href="{{ route('testimonials.index') }}">Testimonials</a>
                    </div>
                </div>
            </li>
        </ul>
                <!-- Sidebar -->
