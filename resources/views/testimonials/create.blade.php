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
            
            @include('testimonials.form')

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>

    
@endsection