@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    
    <!-- Invoice Example -->
    <div class="col mb-4">
        <div class="card shadow-sm rounded">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">TRAVELS</h6>
                <a class="btn btn-sm btn-success" href="{{ route('travels.create') }}">
                    <i class="fas fa-plus-circle"></i> Add Travel
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th class="col-2 text-center">Title</th>
                            <th class="col-3 text-center">Address</th>
                            <th class="col-2 text-center">Starting</th>
                            <th class="col-2 text-center">Destination</th>
                            <th class="col-1 text-center">Price</th>
                            <th class="col-2 text-center">Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($travels as $travel)
                          <tr>
                            <td class="text-center">
                                <a href="{{ route('travels.detail', $travel) }}">
                                    <h5 class="text-primary">{{ $travel->title }}</h5>
                                </a>
                            </td>
                            <td class="text-center">
                                <h5>{{ $travel->country }}, {{ $travel->city }}</h5>
                            </td>
                            <td class="text-center">
                                <h5>{{ $travel->starting }}</h5>
                            </td>
                            <td class="text-center">
                                <h5>{{ $travel->destination }}</h5>
                            </td>
                            <td class="text-center">
                                <h5>{{ $travel->price }}</h5>
                            </td>
                            <td class="text-center">
                                <h5>{{ $travel->duration }}</h5>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

@endsection
