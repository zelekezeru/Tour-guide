@extends('admins.admin-layouts.admin-app')

@section('content')


<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Forms</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('tours.index')}}">Tours</a></li>
        <li class="breadcrumb-item active" aria-current="page">Images</li>
      </ol>
    </div>

        <!-- Form Basic -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Add more Photos</h6>
        </div>
    </div>

        <div class="col-md-12">
            <div class="wrap-division">
                <div class="col-md-12 col-md-offset-0 heading2 animate-box">
                    <h2>{{ $tour->name }}, </h2>
                    <h4>{{ $tour->location }}</h4>
                </div>
            </div>
        </div>

        <div class="card-body">
        <form action="{{ route('tours.image') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <input type="text" name="tour_id" value="{{ $tour->id }}" hidden>

            <div class="form-group col-lg-4">
                <label for="image">Add More Pictures Here</label>
                <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="image" required>
                <label class="custom-file-label" for="customFile">Choose Picture</label>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-lg-8">
                    <label for="description">Description about the Image</label>
                    <textarea  class="form-control"  value="{{ old('description') ? old('description') : $tour->description }}" name="description" id="mytextarea"  rows="5"  placeholder="Enter Tour description Here" required></textarea>
                                
                    @if ($errors->has('description'))
                        <small id="nameHelp" class="form-text text-danger">{{$errors->first('description')}}</small>
                    @else
                        <small id="nameHelp" class="form-text text-muted">Description the tour.</small>
                    @endif
                </div>
            </div>

          <button type="submit" class="btn btn-primary">Add Image</button>
        </form>
        </div>
    </div>
</div>

    
@endsection