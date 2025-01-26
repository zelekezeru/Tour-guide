@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="row mb-4">
        <!-- Hotel Details Card -->
        <div class="col-lg-12">
            <div class="card shadow-sm rounded">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="col-8">
                        <h4 class="m-0 font-weight-bold text-primary">{{ $hotel->name }}</h4>
                    </div>

                    <div class="col-4 text-right">
                        <a href="{{ route('images.hotel', $hotel->id) }}" class="btn btn-sm btn-info mr-2">Add Photos</a>
                        <a href="{{ route('hotels.edit', $hotel) }}" class="btn btn-sm btn-warning mr-2">Edit</a>
                        <form action="{{ route('hotels.destroy', $hotel) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <!-- Hotel Overview -->
                    <div class="row">
                        <div class="col-md-6">
                            <h5><strong>Location:</strong> {{ $hotel->location }}</h5>
                            <h5><strong>Rating:</strong> 
                                @for ($i = 0; $i < $hotel->rating; $i++)
                                    <img width="20px" src="{{ asset('images/star.png') }}" alt="Star">
                                @endfor
                            </h5>
                        </div>

                        <div class="col-md-6 text-center">
                            <img class="img-fluid rounded" width="300px" src="{{ asset($hotel->images->first()->image) }}" alt="Hotel Image">
                        </div>
                    </div>

                    <!-- Hotel Description -->
                    <div class="mt-4">
                        <h5><strong>Description:</strong></h5>
                        <p>{{ $hotel->description ?? 'No description available.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
