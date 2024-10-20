@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    
    <!-- Invoice Example -->
    <div class="col mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">TRAVELS</h6>
                <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('travels.create') }}">ADD TRAVEL</a>
            </div>
            <div class="table-responsive row">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light ">
                        <tr>
                            <th class="col-2"> Title </th>
                            <th class="col-3">Address</th>
                            <th class="col-2">Starting</th>
                            <th class="col-2">Destination</th>
                            <th class="col-1">Price</th>
                            <th class="col-2">Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($travels as $travel)
                          <tr>
                            <td class="col-2"> <a href="{{ route('travels.detail', $travel) }}" > <h3 style="">{{$travel->title}} </h3> </a> </td>
                            <td class="col-3"> <h5 style="">{{$travel->country}}, {{$travel->city}} </h5></td>
                            <td class="col-2"> <h5 style="">{{$travel->starting}} </h5></td>
                            <td class="col-2"> <h5 style="">{{$travel->destination}} </h5></td>
                            <td class="col-1"> <h5 style="">{{$travel->price}} </h5></td>
                            <td class="col-2"> <h5 style="">{{$travel->duration}} </h5> </td>                            
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

    
@endsection 