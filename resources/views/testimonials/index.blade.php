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
        <form>
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp"
                    placeholder="Full Name">
                    <small id="nameHelp" class="form-text text-muted">Enter your name here.</small>
                </div>
                <div class="form-group col-lg-6">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" aria-describedby="addressHelp"
                    placeholder="Address">
                    <small id="addressHelp" class="form-text text-muted">Enter your living address here.</small>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your
                    email with anyone else.</small>
                </div>
                <div class="form-group col-lg-4">
                    <label for="email">Testimonial Picture</label>
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose Picture</label>
                    </div>
                </div>
            </div>
            <div class="form-group col-lg-8">
                <label for="longText">Testimony</label>
                <textarea class="form-control" id="longText" rows="6" placeholder="Enter testimony here"></textarea>
                <small class="form-text text-muted">Type the testimony in the field.</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>

    
@endsection