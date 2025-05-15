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

    {{-- Main Content Here --}}

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
          <form action="{{ route('blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
              <div class="row">
                  <div class="form-group col-lg-4">
                      <label for="name">Title</label>
                      <input type="text" name="title" value="{{ old('title') ? old('title') : $blog->title }}" class="form-control" id="name" aria-describedby="nameHelp"
                      placeholder="Title" required>
                      @if ($errors->has('title'))
                        <small id="nameHelp" class="form-text text-danger">{{$errors->first('title')}}</small>
                          
                      @else
                        <small id="nameHelp" class="form-text text-muted">Blog Title Here.</small>
                          
                      @endif
                  </div>
                  <div class="form-group col-lg-4">
                      <label for="teaser">Teaser</label>
                      <input type="text" name="teaser" value="{{ old('teaser') ? old('teaser') : $blog->teaser }}" class="form-control" id="teaser" aria-describedby="nameHelp"
                      placeholder="Teaser" required>
                      @if ($errors->has('teaser'))
                        <small id="nameHelp" class="form-text text-danger">{{$errors->first('teaser')}}</small>
                          
                      @else
                        <small id="nameHelp" class="form-text text-muted">Blog Teaser Here.</small>
                          
                      @endif
                  </div>
  
                  <div class="form-group col-lg-4">
                    <label for="email">Thubmnail Image</label>
                    <div class="custom-file">
                      <input type="file" name="image" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose Picture</label>
                      @error('image')
                        <small id="nameHelp" class="form-text text-danger">{{$message}}</small>
                      @enderror
                    </div>
                  </div>
              </div>
  

              <div class="form-group col-lg">
                <label for="mytextarea">Blog Content</label>
                
                <textarea name="content" id="editor"> {!! $blog->content !!}</textarea>
                
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

    
    
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js">{{old('title')}}</script>

<script>
  // Initialize CKEditor
  ClassicEditor
      .create(document.querySelector('#editor'),{ ckfinder: {
        uploadUrl: "{{ route('ckeditor.blog.upload', ['_token'=>csrf_token()]) }}"
      }})
      .then(editor => {
          console.log('Editor was initialized', editor);
      })
      .catch(error => {
          console.error('Error during initialization of the editor', error);
      });

  document.getElementById('file-input').addEventListener('change', function() {
    const file = this.files[0];
      if (file) {
          const reader = new FileReader();
        reader.onload = function(e) {
        document.getElementById('preview').src = e.target.result;
      }
        reader.readAsDataURL(file);
      }
  });
</script>
@endsection