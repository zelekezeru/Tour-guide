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
        <form action="{{ route('hotels.update', $hotel) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          @include('hotels.form')

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>

    
@endsection