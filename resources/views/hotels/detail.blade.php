@extends('admins.admin-layouts.admin-app')

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card shadow-sm rounded">
                <div class="card-header py-3 d-flex flex-wrap align-items-center justify-content-between">
                    <h4 class="m-0 font-weight-bold text-primary">{{ $hotel->name }}</h4>

                    <div class="btn-group" role="group" aria-label="Hotel actions">
                        <a href="{{ route('images.hotel', $hotel->id) }}" class="btn mr-2 btn-sm btn-info">Add Photos</a>
                        <a href="{{ route('hotels.edit', $hotel) }}" class="btn mr-2 btn-sm btn-warning">Edit</a>

                        <form id="delete-form-{{ $hotel->id }}" action="{{ route('hotels.destroy', $hotel) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        <button onclick="confirmDelete({{ $hotel->id }})" class="btn mr-2 btn-sm btn-danger">Delete</button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <!-- Hotel Info -->
                        <div class="col-md-6 mb-3">
                            <h5><strong>Location:</strong> {{ $hotel->location }}</h5>
                            <h5><strong>Rating:</strong>
                                @for ($i = 0; $i < $hotel->rating; $i++)
                                    <img width="20" src="{{ asset('images/star.png') }}" alt="Star">
                                @endfor
                            </h5>
                        </div>

                        <!-- Hotel Image -->
                        <div class="col-md-6 text-center">
                            @if ($hotel->images->isNotEmpty())
                                <img class="img-fluid rounded" width="300" src="{{ asset($hotel->images->first()->image) }}" alt="Hotel Image">
                            @else
                                <p class="text-muted">No image available.</p>
                            @endif
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mt-4">
                        <h5><strong>Description:</strong></h5>
                        <p>{{ $hotel->description ?? 'No description available.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You can't undo this action.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        });
    }
</script>
@endsection
