@extends('admins.admin-layouts.admin-app')

@section('content')


<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Create New Blog</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Blogs</li>
        <li class="breadcrumb-item active" aria-current="page">New Blog</li>
      </ol>
    </div>

        <!-- Form Basic -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Create the blog here</h6>
        </div>
        <div class="card-body">
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
            <div class="row">
								<input type="hidden" name="user_id" value="1" >
                <div class="form-group col-lg-6">
                    <label for="name">Title</label>
                    <input type="text" name="title" value="{{ old('title') ? old('title') : '' }}" class="form-control" id="name" aria-describedby="nameHelp"
                    placeholder="Title" required>
										@if ($errors->has('title'))
                    	<small id="nameHelp" class="form-text text-danger">{{$errors->first('title')}}</small>
												
										@else
                    	<small id="nameHelp" class="form-text text-muted">Enter The Title Of Your Blog Here.</small>
												
										@endif
                </div>

								<div class="form-group col-lg-4">
									<label for="email">Thubmnail Image</label>
									<div class="custom-file">
										<input type="file" name="image" class="custom-file-input" id="customFile" required>
										<label class="custom-file-label" for="customFile">Choose Picture</label>
										@error('image')
                    	<small id="nameHelp" class="form-text text-danger"{{$message}}</small>
										@enderror
									</div>
								</div>
            </div>
            <div class="form-group col-lg">
                <label for="longText">Blog Content</label>
                <textarea class="form-control" name="content" id="longText" rows="6" placeholder="Enter testimony here" required>{{ old('content') ? old('content') : '' }}</textarea>
								@if ($errors->has('content'))
									<small class="form-text text-danger">{{$errors->first('content')}}</small>												
								@else
									<small class="form-text text-muted">Type the blog content here.</small>
								@endif
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>

    
@endsection