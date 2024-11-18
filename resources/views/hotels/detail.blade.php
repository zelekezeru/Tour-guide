@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    
    <!-- Invoice Example -->
    <div class="col mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="col-8">
                    <h4 class="m-0 font-weight-bold text-primary">{{ $hotel->name}}</h4>
                </div>
                
                
            </div>
            
        </div>
    </div>

    <div class="colorlib-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap-division">
                                <div class="row">
                                    <div class="col-md-12 animate-box">
                                        <div class="room-wrap">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <img class="room-img" style="background-image"  src="{{ asset($hotel->images->first()->image ) }}">
                                                </div>

                                                <div class="col-md-6 col-sm-6">
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
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="desc">
                                                        <h2>{{ $hotel->name}}</h2>
                                                        <p class="price"><span>{{ $hotel->price }} </span> <small> Birr/ night</small></p>
                                                        <p>{{ $hotel->description }}</p>
                                                        {{-- <p><a href="#" class="btn btn-primary">Book Now!</a></p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 animate-box">
                    <div class="owl-carousel">
                        @foreach ($hotel->images as $image)
                            
                            <div class="item">
                                <div class="hotel-entry">
                                    <img class="hotel-img" style="background-image"  src="{{ asset( $image->image ) }}">
                                </div>
                                <h4>{{ $image->description }}</h4>
                                                
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection 