@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">

    <!-- Invoice Example -->
    <div class="col mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">HOTELS</h6>
                <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('hotels.create') }}">ADD HOTEL</a>
            </div>
            <div class="table-responsive row">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light ">
                        <tr>
                            <th class="col-1">No</th>
                            <th class="col-3">Name</th>
                            <th class="col-2">Photo</th>
                            <th class="col-2">Location</th>
                            <th class="col-2">Rating</th>
                            <th class="col-2">Image</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- Roll Number --}}
                        @php
                            $num = 0;
                        @endphp
                        @foreach ($hotels as $hotel)

                            @php
                                $num++;
                            @endphp

                          <tr>
                            <td class="col-1 h3"> {{ $num }} </td>
                            <td class="col-3"> <a href="{{ route('hotels.detail', $hotel) }}" > <h3 style="">{{$hotel->name}} </h3> </a> </td>
                            <td class="col-2"> <img width="200px" src="{{ asset($hotel->images->first()->image )}}"/> </td>
                            <td class="col-2"> <h5 style="">{{$hotel->location}} </h5></td>
                            <td  class="row">
                                @for ($i = 0; $i < $hotel->rating; $i++)
                                    <img width="25px" src="{{ asset('images/star.png') }}"/>
                                @endfor
                            </td>
                            <td class="col-2">
                                <span class="btn btn-sm btn-info"><a href="{{route('images.hotel', $hotel->id)}}"> Add Photos </a></span>
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
