@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">

    <!-- Invoice Example -->
    <div class="col mb-4">
        <div class="card shadow-sm rounded">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">HOTELS</h6>
                <a class="btn btn-sm btn-success" href="{{ route('hotels.create') }}">
                    <i class="fas fa-plus-circle"></i> Add Hotel
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th class="col-1 text-center">No</th>
                            <th class="col-3 text-center">Name</th>
                            <th class="col-2 text-center">Photo</th>
                            <th class="col-2 text-center">Location</th>
                            <th class="col-2 text-center">Rating</th>
                            <th class="col-2 text-center">Image</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- Roll Number --}}
                        @php
                            $num = 0;
                        @endphp
                        @foreach ($hotels as $hotel)

                            @php
                                $num++;
                            @endphp

                          <tr>
                            <td class="text-center">{{ $num }}</td>
                            <td class="text-center">
                                <a href="{{ route('hotels.detail', $hotel) }}">
                                    <h5 class="text-primary">{{ $hotel->name }}</h5>
                                </a>
                            </td>
                            <td class="text-center">
                                <img width="150px" class="img-fluid rounded" src="{{ asset($hotel->images->first()->image) }}" alt="Hotel Image" />
                            </td>
                            <td class="text-center">{{ $hotel->location }}</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center">
                                    @for ($i = 0; $i < $hotel->rating; $i++)
                                        <img width="25px" src="{{ asset('images/star.png') }}" alt="Star Rating"/>
                                    @endfor
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="btn btn-sm btn-info">
                                    <a href="{{ route('images.hotel', $hotel->id) }}" class="text-white">
                                        <i class="fas fa-camera"></i> Add Photos
                                    </a>
                                </span>
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
