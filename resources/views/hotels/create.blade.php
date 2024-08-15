@extends('admins.admin-layouts.admin-app')

@section('content')


<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Forms</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Hotels</li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
      </ol>
    </div>

        <!-- Form Basic -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Add new hotel</h6>
        </div>
        <div class="card-body">
        <form action="{{ route('hotels.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="form-group col-lg-4">
                <label for="name">Name</label>
                <input type="text" value="{{ old('name') ? old('name') : '' }}" name="name"  class="form-control" id="name" aria-describedby="nameHelp"
                placeholder="Name">
                @if ($errors->has('name'))
                    <small id="nameHelp" class="form-text text-danger">{{$errors->first('name')}}</small>
                @else
                    <small id="addressHelp" class="form-text text-muted">Enter the name of the hotel here.</small>
                @endif
            </div>
            <div class="form-group col-lg-4">
                <label for="location">Location</label>
                <input type="text" value="{{ old('location') ? old('location') : '' }}" name="location"  class="form-control" id="location" aria-describedby="locationHelp"
                placeholder="Location">
                @if ($errors->has('location'))
                    <small id="nameHelp" class="form-text text-danger">{{$errors->first('location')}}</small>
                @else
                    <small id="addressHelp" class="form-text text-muted">Enter location of the hotel.</small>
                @endif
            </div>
          </div>
          <div class="row">
            <div class="form-group col-lg-8">
              <label for="description">Description</label>
              <input type="text" value="{{ old('description') ? old('description') : '' }}" name="description" class="form-control" id="name" aria-describedby="nameHelp"
              placeholder="Description " required>
              @if ($errors->has('description'))
                  <small id="nameHelp" class="form-text text-danger">{{$errors->first('description')}}</small>
              @else
                  <small id="nameHelp" class="form-text text-muted">Description the hotel a short sentence or two.</small>
              @endif
            </div>
            <div class="form-group col-lg-4">
                <label for="image">Tour Thumbnail Picture</label>
                <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="image" required>
                <label class="custom-file-label" for="customFile">Choosfadgdsfe Picture</label>
                </div>
            </div>
          </div>
          <div class="row">
              <div class="form-group col-lg-4">
                <label for="price">Price</label>
                <input type="number" value="{{ old('price') ? old('price') : '' }}" name="price" class="form-control" id="name" aria-describedby="nameHelp"
                placeholder="Price (Per Night)" required>
                @if ($errors->has('price'))
                    <small id="nameHelp" class="form-text text-danger">{{$errors->first('price')}}</small>
                @else
                    <small id="nameHelp" class="form-text text-muted">Enter the price of a hotel room per night.</small>
                @endif
              </div>
              <div class="form-group col-lg-4">
                <label for="rating">Rating</label>
                <input type="number" value="{{ old('rating') ? old('rating') : '' }}" name="rating" class="form-control" id="name" aria-describedby="nameHelp"
                placeholder="Rating" required>
                @if ($errors->has('rating'))
                    <small id="nameHelp" class="form-text text-danger">{{$errors->first('rating')}}</small>
                @else
                    <small id="nameHelp" class="form-text text-muted">Enter the rating of the Hotel.</small>
                @endif
              </div>
              <div class="form-group col-lg-4">
                <label for="reviews">Reviews</label>
                <input type="number" value="{{ old('reviews') ? old('reviews') : '' }}" name="reviews" class="form-control" id="name" aria-describedby="nameHelp"
                placeholder="Reviews" required>
                @if ($errors->has('reviews'))
                    <small id="nameHelp" class="form-text text-danger">{{$errors->first('reviews')}}</small>
                @else
                    <small id="nameHelp" class="form-text text-muted">Enter the reviews of the Hotel.</small>
                @endif
              </div>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>

    
@endsection