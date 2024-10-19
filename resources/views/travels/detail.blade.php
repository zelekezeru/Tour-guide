@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="col mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="col-10">
                    <h4 class="m-0 font-weight-bold text-primary">{{ $travel->name}}</h4>
                </div>
                <div class="col-1">
                    <span class="btn btn-lg btn-warning"><a href="{{route('travels.edit', $travel)}}"> Edit </a></span>
                </div>
                <div class="col-1">
                    <form action="{{ route('travels.destroy', $travel) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-lg btn-danger">
                    </form>
                </div>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-3"> <a href="{{ route('travels.detail', ['travel' => $travel->id]) }}" > <h3 style="">{{$travel->title}} </h3> </a> </td>
                                <td class="col-2"> <img width="200px" src="{{ asset($travel->image )}}"/> </td>
                                <td class="col-3"> <h5 style="">{{$travel->starting}} </h5></td>
                                <td class="col-3"> <h5 style="">{{$travel->destination}} </h5></td>
                                <td class="col-3"> <h5 style="">{{$travel->price}} </h5></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>



            
        </div>
    </div>
</div>

    
@endsection 