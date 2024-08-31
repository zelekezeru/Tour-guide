@extends('admins.admin-layouts.admin-app')

@section('content')


<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Forms</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
      </ol>
    </div>

        <!-- Form Basic -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
        </div>
        <div class="card-body">
        <form action="{{ route('travels.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="form-group col-lg-4">
                <label for="title">Title</label>
                <input type="text" value="{{ old('title') ? old('title') : '' }}" name="title"  class="form-control" id="title" aria-describedby="titleHelp"
                placeholder="Title">
                @if ($errors->has('title'))
                    <small id="n  ameHelp" class="form-text text-danger">{{$errors->first('title')}}</small>
                @else
                    <small id="addressHelp" class="form-text text-muted">Enter the title of the tour here.</small>
                @endif
            </div>
            <div class="form-group col-lg-4">
                <label for="address">Country</label>
                <input type="text" value="{{ old('country') ? old('country') : '' }}" name="country"  class="form-control" id="country" aria-describedby="countryHelp"
                placeholder="Country">
                @if ($errors->has('country'))
                    <small id="nameHelp" class="form-text text-danger">{{$errors->first('country')}}</small>
                @else
                    <small id="addressHelp" class="form-text text-muted">Enter of the country.</small>
                @endif
            </div>
            <div class="form-group col-lg-4">
                <label for="city">City</label>
                <input type="text" value="{{ old('city') ? old('city') : '' }}" name="city" class="form-control" id="city" aria-describedby="nameHelp"
                placeholder="City" required>
                @if ($errors->has('city'))
                    <small id="nameHelp" class="form-text text-danger">{{$errors->first('city')}}</small>
                @else
                    <small id="nameHelp" class="form-text text-muted">Enter the name of the city.</small>
                @endif
            </div>
          </div>
          <div class="row">
              <div class="form-group col-lg-4">
                  <label for="starting">Starting</label>
                  <input type="starting" value="{{ old('starting') ? old('starting') : '' }}" name="starting" class="form-control" id="starting" aria-describedby="emailHelp"
                  placeholder="Enter starting">
                  @if ($errors->has('starting'))
                      <small id="nameHelp" class="form-text text-danger">{{$errors->first('starting')}}</small>
                  @else
                      <small id="emailHelp" class="form-text text-muted">Enter Starting here.</small>
                  @endif
              </div>
              <div class="form-group col-lg-4">
                  <label for="destination">Destination</label>
                  <input type="destination" value="{{ old('destination') ? old('destination') : '' }}" name="destination" class="form-control" id="destination" aria-describedby="emailHelp"
                  placeholder="Enter destination">
                  @if ($errors->has('destination'))
                      <small id="nameHelp" class="form-text text-danger">{{$errors->first('destination')}}</small>
                  @else
                      <small id="emailHelp" class="form-text text-muted">Enter Destination here.</small>
                  @endif
              </div>
              <div class="form-group col-lg-4">
                  <label for="image">Tour Thumbnail Picture</label>
                  <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="image" required>
                  <label class="custom-file-label" for="customFile">Choose Picture</label>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="form-group col-lg-2">
              <label for="price">Price</label>
              <input type="number" value="{{ old('price') ? old('price') : '' }}" name="price" class="form-control" id="name" aria-describedby="nameHelp"
              placeholder="Price" required>
              @if ($errors->has('price'))
                  <small id="nameHelp" class="form-text text-danger">{{$errors->first('price')}}</small>
              @else
                  <small id="nameHelp" class="form-text text-muted">Enter the price of the tour.</small>
              @endif
            </div>
            <div class="form-group col-lg-2">
              <label for="duration">Duration</label>
              <input type="number" value="{{ old('duration') ? old('duration') : '' }}" name="duration" class="form-control" id="name" aria-describedby="nameHelp"
              placeholder="Duration(In days)" required>
              @if ($errors->has('duration'))
                  <small id="nameHelp" class="form-text text-danger">{{$errors->first('duration')}}</small>
              @else
                  <small id="nameHelp" class="form-text text-muted">Enter the duration of the tour in days.</small>
              @endif
            </div>
            <div class="form-group col-lg-2">
              <label for="people">People</label>
              <input type="number" value="{{ old('people') ? old('people') : '' }}" name="people" class="form-control" id="name" aria-describedby="nameHelp"
              placeholder="People(In days)" required>
              @if ($errors->has('people'))
                  <small id="nameHelp" class="form-text text-danger">{{$errors->first('people')}}</small>
              @else
                  <small id="nameHelp" class="form-text text-muted">Enter the people of the tour in days.</small>
              @endif
            </div>
            <div class="form-group col-lg-2">
              <label for="rating">Rating</label>
              <input type="number" value="{{ old('rating') ? old('rating') : '' }}" name="rating" class="form-control" id="name" aria-describedby="nameHelp"
              placeholder="Rating" required>
              @if ($errors->has('rating'))
                  <small id="nameHelp" class="form-text text-danger">{{$errors->first('rating')}}</small>
              @else
                  <small id="nameHelp" class="form-text text-muted">Enter the rating of the tour.</small>
              @endif
            </div>
            <div class="form-group col-lg-2">
              <label for="reviews">Reviews</label>
              <input type="number" value="{{ old('reviews') ? old('reviews') : '' }}" name="reviews" class="form-control" id="name" aria-describedby="nameHelp"
              placeholder="Reviews" required>
              @if ($errors->has('reviews'))
                  <small id="nameHelp" class="form-text text-danger">{{$errors->first('reviews')}}</small>
              @else
                  <small id="nameHelp" class="form-text text-muted">Enter the reviews of the tour.</small>
              @endif
            </div>
            <div class="form-group ">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="round_trip" value="1" class="custom-control-input" id="customControlAutosizing">
                <label class="custom-control-label" for="customControlAutosizing">The travel has round trip</label>
                @if ($errors->has('round_trip'))
                  <small id="nameHelp" class="form-text text-danger">{{$errors->first('round_trip')}}</small>
                @endif
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>

    
@endsection