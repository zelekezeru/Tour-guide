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
        <form action="{{ route('tours.update', $tour) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="row">
            <div class="form-group col-lg-4">
                <label for="title">Title</label>
                <input type="text" value="{{ old('title') ? old('title') : $tour->title }}" name="title"  class="form-control" id="title" aria-describedby="titleHelp"
                placeholder="Title">
                @if ($errors->has('title'))
                    <small id="nameHelp" class="form-text text-danger">{{$errors->first('title')}}</small>
                @else
                    <small id="addressHelp" class="form-text text-muted">Enter tour title here.</small>
                @endif
            </div>
            <div class="form-group col-lg-4">
                <label for="address">Country</label>
                <input type="text" value="{{ old('country') ? old('country') : $tour->country }}" name="country"  class="form-control" id="country" aria-describedby="countryHelp"
                placeholder="Country">
                @if ($errors->has('country'))
                    <small id="nameHelp" class="form-text text-danger">{{$errors->first('country')}}</small>
                @else
                    <small id="addressHelp" class="form-text text-muted">Enter of the country.</small>
                @endif
            </div>
            <div class="form-group col-lg-4">
                <label for="city">City</label>
                <input type="text" value="{{ old('city') ? old('city') : $tour->city }}" name="city" class="form-control" id="city" aria-describedby="nameHelp"
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
                  <label for="location">Location</label>
                  <input type="text" value="{{ old('location') ? old('location') : $tour->location }}" name="location" class="form-control" id="location" aria-describedby="nameHelp"
                  placeholder="Location" required>
                  @if ($errors->has('location'))
                      <small id="nameHelp" class="form-text text-danger">{{$errors->first('location')}}</small>
                  @else
                      <small id="nameHelp" class="form-text text-muted">Enter the name of the location.</small>
                  @endif
              </div>
              <div class="form-group col-lg-4">
                  <label for="image">Tour Thumbnail Picture</label>
                  <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="image">
                  <label class="custom-file-label" for="customFile">Change Picture</label>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="form-group col-lg-3">
                <label for="price">Price</label>
                <input type="number" value="{{ old('price') ? old('price') : $tour->price }}" name="price" class="form-control" id="name" aria-describedby="nameHelp"
                placeholder="Price" required>
                @if ($errors->has('price'))
                    <small id="nameHelp" class="form-text text-danger">{{$errors->first('price')}}</small>
                @else
                    <small id="nameHelp" class="form-text text-muted">Enter the price of the tour.</small>
                @endif
              </div>
              <div class="form-group col-lg-3">
                <label for="duration">Duration</label>
                <input type="number" value="{{ old('duration') ? old('duration') : $tour->duration }}" name="duration" class="form-control" id="name" aria-describedby="nameHelp"
                placeholder="Duration(In days)" required>
                @if ($errors->has('duration'))
                    <small id="nameHelp" class="form-text text-danger">{{$errors->first('duration')}}</small>
                @else
                    <small id="nameHelp" class="form-text text-muted">Enter the duration of the tour in days.</small>
                @endif
              </div>
              
          </div>
          <div class="row">
            <div class="form-group col-lg-3">
                <label for="rating">Rating</label>
                <input type="number" value="{{ old('rating') ? old('rating') : $tour->rating }}" name="rating" class="form-control" id="name" aria-describedby="nameHelp"
                placeholder="Rating" required>
                @if ($errors->has('rating'))
                    <small id="nameHelp" class="form-text text-danger">{{$errors->first('rating')}}</small>
                @else
                    <small id="nameHelp" class="form-text text-muted">Enter the rating of the tour.</small>
                @endif
              </div>
              <div class="form-group col-lg-3">
                <label for="reviews">Reviews</label>
                <input type="number" value="{{ old('reviews') ? old('reviews') : $tour->reviews }}" name="reviews" class="form-control" id="name" aria-describedby="nameHelp"
                placeholder="Reviews" required>
                @if ($errors->has('reviews'))
                    <small id="nameHelp" class="form-text text-danger">{{$errors->first('reviews')}}</small>
                @else
                    <small id="nameHelp" class="form-text text-muted">Enter the reviews of the tour.</small>
                @endif
              </div>
              
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>

    
@endsection