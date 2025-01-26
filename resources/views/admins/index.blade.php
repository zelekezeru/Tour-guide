@extends('admins.admin-layouts.admin-app')

@section('content')


                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>

                    <div class="row mb-3">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="{{ route('users.list') }}">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user }}</div>
                                            <div class="mt-2 mb-0 text-muted text-xs">
                                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> Total registered users</span>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            </a>
                        </div>
                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="{{ route('hotels.list') }}">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">Hotels</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $hotel }}</div>
                                            <div class="mt-2 mb-0 text-muted text-xs">
                                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> Registered Hotels in the System</span>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hotel fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <!-- New User Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="{{ route('tours.list') }}">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">Tours</div>
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $tour }}</div>
                                            <div class="mt-2 mb-0 text-muted text-xs">
                                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> Available Tour Options</span>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-map-pin fa-2x text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="{{ route('travels.list') }}">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">Travels</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $travel }}</div>
                                            <div class="mt-2 mb-0 text-muted text-xs">
                                                <span class="text-success mr-2"><i class="fas fa-arrow-down"></i> Travel Options Offered</span>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-plane fa-2x text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                        <!-- Message From Customer-->
                        <div class="col-xl-8 col-lg-8 ">
                            <div class="card">
                                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-light">Message From Clients</h6>
                                </div>
                                <div>
                                    @foreach ($contacts as $contact)
                                        <div class="customer-message align-items-center">
                                        <a class="font-weight-bold" href="{{ route('contacts.list') }}">
                                            <div class="text-truncate message-title">{{ Str::limit($contact->message, 100, '...') }}</div>
                                            <div class="small text-gray-500 message-time font-weight-bold">{{ $contact->firstName }} {{ $contact->lastName }}</div>
                                        </a>
                                    </div>
                                    @endforeach
                                    @if (count($contacts ) < 1)
                                        <div class="customer-message align-items-center">
                                            <a href="#">
                                                <div class="text-warning message-title">No comments yet!
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                    <div class="card-footer text-center">
                                        <a class="m-0 small text-primary card-link" href="{{ route('contacts.list') }}">View More <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Products Sold</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle btn btn-primary btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Month <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Select Periode</div>
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Week</a>
                                            <a class="dropdown-item active" href="#">Month</a>
                                            <a class="dropdown-item" href="#">This Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <div class="small text-gray-500">Oblong T-Shirt
                                            <div class="small float-right"><b>600 of 800 Items</b></div>
                                        </div>
                                        <div class="progress" style="height: 12px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="small text-gray-500">Gundam 90'Editions
                                            <div class="small float-right"><b>500 of 800 Items</b></div>
                                        </div>
                                        <div class="progress" style="height: 12px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="small text-gray-500">Rounded Hat
                                            <div class="small float-right"><b>455 of 800 Items</b></div>
                                        </div>
                                        <div class="progress" style="height: 12px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="small text-gray-500">Indomie Goreng
                                            <div class="small float-right"><b>400 of 800 Items</b></div>
                                        </div>
                                        <div class="progress" style="height: 12px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="small text-gray-500">Remote Control Car Racing
                                            <div class="small float-right"><b>200 of 800 Items</b></div>
                                        </div>
                                        <div class="progress" style="height: 12px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center">e
                                    <a class="m-0 small text-primary card-link" href="#">View More <i
                                      class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Invoice Example -->
                        <div class="col-xl-8 col-lg-7 mb-4">
                            <div class="card">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Invoice</h6>
                                    <a class="m-0 float-right btn btn-danger btn-sm" href="#">View More <i class="fas fa-chevron-right"></i></a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Customer</th>
                                                <th>Item</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#">RA0449</a></td>
                                                <td>Udin Wayang</td>
                                                <td>Nasi Padang</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </div>
                         --}}
                    </div>

                </div>
                <!---Container Fluid-->


@endsection
