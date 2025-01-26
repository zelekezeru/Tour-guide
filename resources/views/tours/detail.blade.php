@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="row mb-4">
        <!-- Tour Details Card -->
        <div class="col-lg-12">
            <div class="card shadow-sm rounded">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="col-10">
                        <h4 class="m-0 font-weight-bold text-primary">{{ $tour->title }}</h4>
                    </div>
                </div>

                <div class="card-body">
                    <!-- Action Buttons in a row -->
                    <div class="row mb-4">
                        <div class="col-3">
                            <a href="{{route('images.tour', $tour->id)}}" class="btn btn-outline-primary btn-sm w-100">Add Photos</a>
                        </div>
                        <div class="col-3">
                            <a href="{{route('itenararies.edit', $tour->id)}}" class="btn btn-outline-secondary btn-sm w-100">Update Itineraries</a>
                        </div>
                        <div class="col-3">
                            <a href="{{route('tours.edit', $tour)}}" class="btn btn-warning btn-sm w-100">Edit</a>
                        </div>
                        <div class="col-3">
                            <form action="{{ route('tours.destroy', $tour) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm w-100">Delete</button>
                            </form>
                        </div>
                    </div>

                    <!-- Tour Overview Section -->
                    <div class="row">
                        <div class="col-md-6">
                            <h5><strong>Location:</strong> {{ $tour->location }}</h5>
                            <h5><strong>Duration:</strong> {{ $tour->duration }} Days</h5>
                        </div>

                        <div class="col-md-6 text-center">
                            <img class="img-fluid rounded" width="300px" src="{{ asset($tour->image) }}" alt="Tour Image">
                        </div>
                    </div>

                    <!-- Tour Rating Section -->
                    <div class="mt-4">
                        <h5><strong>Rating:</strong></h5>
                        <div>
                            @for ($i = 0; $i < $tour->rating; $i++)
                                <img width="25px" src="{{ asset('images/star.png') }}" alt="Star Rating"/>
                            @endfor
                        </div>
                    </div>

                    <!-- Tour Description Section -->
                    <div class="mt-4">
                        <h5><strong>Description:</strong></h5>
                        <p>{{ $tour->description ?? 'No description available.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
