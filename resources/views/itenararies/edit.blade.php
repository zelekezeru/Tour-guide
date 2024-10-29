@extends('admins.admin-layouts.admin-app')

@section('content')


<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Add Itenararies To Tour "{{ $tour->title }}"</h1>
      <form action="" method="POST">
        @csrf
        @method('delete')
        <button class="btn btn-danger"> Delete The Last Day </button>
      </form>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tours</li>
        <li class="breadcrumb-item active" aria-current="page">Create Itenarary</li>
      </ol>
    </div>

        <!-- Form Basic -->
      @foreach ($tour->itenararies as $itenarary)
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h3 class="m-0 font-weight-bold text-primary">Day {{ $itenarary->day_number }}</h3>
            </div>
            <form action="{{route('itenararies.destroy', $itenarary)}}"></form>
            <div class="card-body">
              <form action="{{route('itenararies.update', $itenarary)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label for="title{{$itenarary->day_number}}">Title</label>
                    <input type="text" name="title" value="{{ $itenarary->title }}" class="form-control" id="title{{$itenarary->day_number}}" aria-describedby="nameHelp"
                    placeholder="Title" required>
                    @if ($errors->has('title'))
                      <small id="nameHelp" class="form-text text-danger">{{$errors->first('title')}}</small>
                        
                    @else
                      <small id="nameHelp" class="form-text text-muted">Blog Title Here.</small>
                        
                    @endif
                  </div>
    
                  <div class="form-group col-lg-4">
                    <label for="transport_type">Transport Type</label>
                    <input type="text" name="transport_type" value="{{ $itenarary->transport_type }}" class="form-control" id="transport_type" aria-describedby="nameHelp"
                    placeholder="Transport Type" required>
                    @if ($errors->has('transport_type'))
                      <small id="nameHelp" class="form-text text-danger">{{$errors->first('transport_type')}}</small>
                        
                    @else
                      <small id="nameHelp" class="form-text text-muted">Transport Type Here.</small>
                        
                    @endif
                  </div>

                  <div class="form-group col-lg-4">
                    <label for="mytextarea">Itenarary Description</label>
                    
                    <textarea name="description" id="editor"></textarea>
                    
                    @if ($errors->has('content'))
                      <small class="form-text text-danger">{{$errors->first('content')}}</small>												
                    @else
                      <small class="form-text text-muted">Type the blog content here.</small>
                    @endif 
                    
                  </div>

                  <div class="form-group col-lg-4">
                    <label for="hotel{{$itenarary->id}}">Hotel</label>
                    <select class="form-control" id="hotel{{$itenarary->id}}" name="hotel_id">
                      @foreach ($hotels as $hotel)
                        <option value="{{$hotel->id}}">{{ $hotel->name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group col-lg-4">
                    <label for="email">Itenarary Image</label>
                    <div class="custom-file">
                      <input type="file" name="image" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose Picture</label>
                      @error('image')
                        <small id="nameHelp" class="form-text text-danger">{{$message}}</small>
                      @enderror
                    </div>
                  </div>
                  
                </div>



                <button type="submit" class="btn btn-primary">Update Day {{ $itenarary->day_number }} </button>
              </form> 
            </div>
          </div>
      @endforeach
@endsection