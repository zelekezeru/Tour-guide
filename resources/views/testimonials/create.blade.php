@extends('admins.admin-layouts.admin-app')


    {{-- Blog Text api and cdn --}}

    @section('blogTextarea')
    <script src="{{ asset('/tinymce/tinymce/tinymce.min.js')}}" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '#mytextarea',
        license_key: 'gpl|<9z73ebkjltuhje2m75aqu41fp73kaqxigq4259ygoykka3es>'
      });
    </script>

@endsection

        {{-- Main Content --}}

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
        <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="name">Full Name</label>
                    <input type="text" value="{{ old('name') ? old('name') : '' }}" name="name" class="form-control" id="name" aria-describedby="nameHelp"
                    placeholder="Full Name" required>
                    @if ($errors->has('name'))
                        <small id="nameHelp" class="form-text text-danger">{{$errors->first('name')}}</small>
                    @else
                        <small id="nameHelp" class="form-text text-muted">Enter your name here.</small>
                    @endif
                </div>
                <div class="form-group col-lg-6">
                    <label for="address">Address</label>
                    <input type="text" value="{{ old('address') ? old('address') : '' }}" name="address"  class="form-control" id="address" aria-describedby="addressHelp"
                    placeholder="Address">
                    @if ($errors->has('address'))
                        <small id="nameHelp" class="form-text text-danger">{{$errors->first('address')}}</small>
                    @else
                        <small id="addressHelp" class="form-text text-muted">Enter your living address here.</small>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="email">Email address</label>
                    <input type="email" value="{{ old('email') ? old('email') : '' }}" name="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Enter email">
                    @if ($errors->has('email'))
                        <small id="nameHelp" class="form-text text-danger">{{$errors->first('email')}}</small>
                    @else
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    @endif
                </div>
                <div class="form-group col-lg-4">
                    <label for="email">Testimonial Picture</label>
                    <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Choose Picture</label>
                    </div>
                </div>
            </div>
            
            <div class="form-group col-lg">
                <label for="mytextarea">Testimony</label>
                
                <textarea  class="form-control" name="testimony" id="mytextarea"  rows="6"  placeholder="Enter testimony here" required></textarea>

                @if ($errors->has('testimony'))
                    <small class="form-text text-danger">{{$errors->first('testimony')}}</small>												
                @else
                    <small class="form-text text-muted">Type the testimony here.</small>
                @endif 
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>

    
@endsection