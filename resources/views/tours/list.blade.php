@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    
    <!-- Invoice Example -->
    <div class="col mb-4">
        <div class="card shadow-sm rounded">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">TOURS</h6>
                <a class="btn btn-sm btn-success" href="{{ route('tours.create') }}">
                    <i class="fas fa-plus-circle"></i> Add Tour
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th class="col-1 text-center">No</th>
                            <th class="col-3 text-center">Title</th>
                            <th class="col-2 text-center">Address</th>
                            <th class="col-2 text-center">Location</th>
                            <th class="col-1 text-center">Duration</th>
                            <th class="col-1 text-center">Price</th>
                            <th class="col-2 text-center">Rating</th>
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
                            <td class="text-center">{{ $num }}</td>
                            <td class="text-center">
                                <a href="{{ route('tours.detail', ['tour' => $tour->id]) }}">
                                    <h5 class="text-primary">{{ $tour->title }}</h5>
                                </a>
                            </td>
                            <td class="text-center">
                                <h5>{{ $tour->country }}, {{ $tour->city }}</h5>
                            </td>
                            <td class="text-center">
                                <h5>{{ $tour->location }}</h5>
                            </td>
                            <td class="text-center">
                                <h5>{{ $tour->duration }}</h5>
                            </td>
                            <td class="text-center">
                                <h5>{{ $tour->price }}</h5>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center">
                                    @for ($i = 0; $i < $tour->rating; $i++)
                                        <img width="25px" src="{{ asset('images/star.png') }}" alt="Star Rating"/>
                                    @endfor
                                </div>
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
