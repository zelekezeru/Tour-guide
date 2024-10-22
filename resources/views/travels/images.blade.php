@extends('admins.admin-layouts.admin-app')

@section('content')


<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Forms</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('travels.index')}}">Travels</a></li>
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
                    <h2>{{ $travel->name }}, </h2>
                    <h4>{{ $travel->location }}</h4>
                </div>
            </div>
        </div>

        <div class="card-body">
        <form action="{{ route('travels.image') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <input type="text" name="travel_id" value="{{ $travel->id }}" hidden>

            <div class="form-group col-lg-4">
                <label for="image">Add More Pictures Here</label>
                <div class="custom-file">
                <input type="file" name="images[]" class="custom-file-input" id="images" multiple required>
                <label class="custom-file-label" for="customFile">Choose Picture</label>
                </div>
            </div>

            <div id="textAreasSection">

            </div>

          <button type="submit" class="btn btn-primary">Add Image</button>
        </form>
        </div>
    </div>
</div>

<script>
// document.getElementById('images').addEventListener('change', function() {
//     const fileCount = this.files.length;




//     for (let index = 0; index < fileCount; index++) {
    //     }
    
    // });
    
    document.getElementById('images').addEventListener('change', function() {
        let textAreas = "";
        let i = 0;
        let filesProcessed = 0; // Counter for processed files
        const totalFiles = this.files.length;

        Array.from(this.files).forEach(file => {
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    textAreas += `
                        <div class="row">
                            <img width="100px"  height="100px"src="${e.target.result}" />
                            <div class="form-group col-lg-8">
                                <label for="description">Description about the Image</label>
                                <textarea  class="form-control" value="{{ old('description') ? old('description') : $travel->description }}" name="descriptions[${filesProcessed}]" id="mytextarea" rows="5" placeholder="Enter Travel description Here" required></textarea>
                                @if ($errors->has('description'))
                                    <small id="nameHelp" class="form-text text-danger">{{$errors->first('description')}}</small>
                                @else
                                    <small id="nameHelp" class="form-text text-muted">Description the travel.</small>
                                @endif
                            </div>
                        </div>
                    `;
                    filesProcessed++;
                        
                    // Once all files have been processed, update the innerHTML
                    if (filesProcessed === totalFiles) {
                        console.log(textAreas);
                        document.getElementById('textAreasSection').innerHTML = textAreas;
                    }
                }
                reader.readAsDataURL(file);
            }
            i += 1;
        });
    });


</script>
    
@endsection