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
                            <th class="col-1">No</th>
                            <th class="col-3">Title</th>
                            <th class="col-2">Address</th>
                            <th class="col-2">Location</th>
                            <th class="col-1">Duration</th>
                            <th class="col-1">Price</th>
                            <th class="col-2">Rating</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- Roll Number --}}
                        @php
                            $num = 0;
                        @endphp
                        @foreach ($tours as $tour)

                            @php
                                $num++;
                            @endphp

                          <tr>
                            <td class="col-1 h3"> {{ $num }} </td>
                            <td class="col-3"> <a href="{{ route('tours.detail', ['tour' => $tour->id]) }}" > <h3 style="">{{$tour->title }} </h3> </a> </td>
                            <td class="col-2"> <h5 style="">{{$tour->country }}, {{$tour->city }} </h5></td>
                            <td class="col-2"> <h5 style="">{{$tour->location }} </h5></td>
                            <td class="col-1"> <h5 style="">{{$tour->duration}} </h5></td>
                            <td class="col-1"> <h5 style="">{{$tour->price}} </h5></td>
                            <td class="col-2"> 
                                @for ($i = 0; $i < $tour->rating; $i++)
                                    <img width="25px" src="{{ asset('images/star.png') }}"/>
                                @endfor
                            </td>
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