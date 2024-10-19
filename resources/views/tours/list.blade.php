@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    
    <!-- Invoice Example -->
    <div class="col mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">TOURS</h6>
                <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('tours.create') }}">ADD TOUR</a>
            </div>
            <div class="table-responsive row">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light ">
                        <tr>
                            <th class="col-3">Name</th>
                            <th class="col-2">Photo</th>
                            <th class="col-3">Starting</th>
                            <th class="col-2">Destination</th>
                            <th class="col-2">Price</th>
                            <th class="col-2">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tours as $tour)
                          <tr>
                            {{-- <a href="{{ route('tours.detail', ['id' => $tour->id]) }}">View Tour Details</a> --}}

                            <td class="col-3"> <a href="{{ route('travels.show', ['travel' => $travel->title]) }}" > <h3 style="">{{$travel->name}} </h3> </a> </td>
                            <td class="col-2"> <img width="200px" src="{{ asset($travel->image )}}"/> </td>
                            <td class="col-3"> <h5 style="">{{$travel->starting}} </h5></td>
                            <td class="col-3"> <h5 style="">{{$travel->destination}} </h5></td>
                            <td class="col-3"> <h5 style="">{{$travel->price}} </h5></td>
                            <td class="col-2">
                                <span class="btn btn-sm btn-info"><a href="{{route('images.tour', $tour->id)}}"> Add Photos </a></span>
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