@extends('admins.admin-layouts.admin-app')

@section('content')


<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="row">
            <h1 class="h3 mb-0 text-gray-800">{{ $hotel->name }}, </h1>
        </div>
        <div class="row">
            <h4>{{ $hotel->location }}</h4>
        </div>

      <br>

      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('hotels.index')}}">Hotels</a></li>
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
                <h2>{{ $hotel->name }}, </h2>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="{{ route('hotels.image') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="text" name="hotel_id" value="{{ $hotel->id }}" hidden>

                  <div class="form-group col-lg-6">
                      <label for="image">Add More Pictures Here</label>
                      <div class="custom-file">
                      <input type="file" name="images[]" class="custom-file-input" id="images" multiple required>
                      <label class="custom-file-label" for="customFile">Choose Picture</label>
                      </div>
                  </div>

                  <div id="textAreasSection">
                    <textarea  class="form-control" value="{{ old('description') }}" name="description" id="mytextarea" rows="2" placeholder="Enter Image description Here" required></textarea>
                            @if ($errors->has('description'))
                                <small id="nameHelp" class="form-text text-danger">{{$errors->first('description')}}</small>
                            @else
                                <small id="nameHelp" class="form-text text-muted">Description about the Image.</small>
                            @endif
                  </div>

                <button type="submit" class="btn btn-primary">Add Image</button>
            </form>

        </div>
    <div class="col">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Images uploaded to {{ $hotel->name }}</h6>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hotel->images as $image)
                        <tr>
                            <td><img width="100px" src="{{ asset($image->image) }}" alt=""></td>
                            <td>{{ $image->description }}</td>
                            <td>
                                {{-- <a href="{{ route('hotels.images.destroy', $image->id) }}"
                                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $image->id }}').submit();">
                                    Delete
                                </a> --}}
                                    <form id="delete-form-{{ $image->id }}" action="{{ route('hotels.images.destroy', $image->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<script>

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
                                <textarea  class="form-control" value="{{ old('description') ? old('description') : $hotel->description }}" name="descriptions[${filesProcessed}]" id="mytextarea" rows="5" placeholder="Enter Hotel description Here" required></textarea>
                                @if ($errors->has('description'))
                                    <small id="nameHelp" class="form-text text-danger">{{$errors->first('description')}}</small>
                                @else
                                    <small id="nameHelp" class="form-text text-muted">Description the hotel.</small>
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
