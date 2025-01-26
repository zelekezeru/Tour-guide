@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="row mb-4">
        <!-- Travel Details Card -->
        <div class="col-lg-12">
            <div class="card shadow-sm rounded">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="col-10">
                        <h4 class="m-0 font-weight-bold text-primary">{{ $travel->title }}</h4>
                    </div>

                    <div class="col-2 text-right">
                        <a href="{{ route('travels.edit', $travel) }}" class="btn btn-sm btn-warning mr-2">Edit</a>
                        <form action="{{ route('travels.destroy', $travel) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <!-- Travel Overview -->
                    <div class="row">
                        <div class="col-md-6">
                            <h5><strong>Starting:</strong> {{ $travel->starting }}</h5>
                            <h5><strong>Destination:</strong> {{ $travel->destination }}</h5>
                            <h5><strong>Price:</strong> ${{ number_format($travel->price, 2) }}</h5>
                        </div>

                        <div class="col-md-6 text-center">
                            <img class="img-fluid rounded" width="300px" src="{{ asset($travel->image) }}" alt="Travel Image">
                        </div>
                    </div>

                    <!-- Travel Description -->
                    <div class="mt-4">
                        <h5><strong>Description:</strong></h5>
                        <p>{{ $travel->description ?? 'No description available.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
