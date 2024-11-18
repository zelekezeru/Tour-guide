@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="col mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="col-8">
                    <h4 class="m-0 font-weight-bold text-primary">{{ $hotel->name}}</h4>
                </div>
                
                <div class="col-1">
                    <span class="btn btn-sm btn-info"><a href="{{route('images.hotel', $hotel->id)}}"> Add Photos </a></span>
                </div>
                <div class="col-1">
                    <span class="btn btn-lg btn-warning"><a href="{{route('hotels.edit', $hotel)}}"> Edit </a></span>
                </div>
                <div class="col-1">
                    <form action="{{ route('hotels.destroy', $hotel) }}" method="post">
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
                                <th class="col-3">Location</th>
                                <th class="col-2">Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-3"> <a href="{{ route('hotels.show', ['hotel' => $hotel->id]) }}" > <h3 style="">{{$hotel->name}} </h3> </a> </td>
                                <td class="col-2"> <img width="200px" src="{{ asset($hotel->images->first()->image )}}"/> </td>
                                <td class="col-3"> <h5 style="">{{$hotel->location}} </h5></td>
                                <td  class="row">
                                    @for ($i = 0; $i < $hotel->rating; $i++)
                                        <img width="25px" src="{{ asset('images/star.png') }}"/>
                                    @endfor
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>



            
        </div>
    </div>
</div>

    
@endsection 