@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card shadow-sm rounded">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">{{ $tour->title }}</h4>
                </div>

                <div class="card-body">
                    <!-- Action Buttons -->
                    <div class="row mb-4">
                        <div class="col-md-3 mb-2">
                            <a href="{{ route('images.tour', $tour->id) }}" class="btn btn-outline-primary btn-sm w-100">Add Photos</a>
                        </div>
                        <div class="col-md-3 mb-2">
                            <a href="{{ route('itenararies.edit', $tour->id) }}" class="btn btn-outline-secondary btn-sm w-100">Update Itineraries</a>
                        </div>
                        <div class="col-md-3 mb-2">
                            <a href="{{ route('tours.edit', $tour) }}" class="btn btn-warning btn-sm w-100">Edit</a>
                        </div>
                        <div class="col-md-3 mb-2">
                            <form id="delete-form-{{ $tour->id }}" action="{{ route('tours.destroy', $tour) }}" method="post">
                                @csrf
                                @method('delete')
                            </form>
                            <button onclick="confirmDelete({{ $tour->id }})" class="btn btn-danger btn-sm w-100">Delete</button>
                        </div>
                    </div>

                    <!-- Tour Overview -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5><strong>Location:</strong> {{ $tour->location }}</h5>
                            <h5><strong>Duration:</strong> {{ $tour->duration }} Days</h5>
                        </div>
                        <div class="col-md-6 text-center">
                            <img class="img-fluid rounded" width="300px" src="{{ asset($tour->image) }}" alt="Tour Image">
                        </div>
                    </div>

                    <!-- Rating -->
                    <div class="mb-4">
                        <h5><strong>Rating:</strong></h5>
                        <div>
                            @for ($i = 0; $i < $tour->rating; $i++)
                                <img width="25px" src="{{ asset('images/star.png') }}" alt="Star Rating"/>
                            @endfor
                        </div>
                    </div>

                    <!-- Description -->
                    <div>
                        <h5><strong>Description:</strong></h5>
                        <p>{{ $tour->description ?? 'No description available.' }}</p>
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
