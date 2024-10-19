@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    
    <!-- Invoice Example -->
    <div class="col mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">BLOGS</h6>
                <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('blogs.create') }}">ADD BLOG</a>
            </div>
            <div class="table-responsive row">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light ">
                        <tr>
                            <th class="col-3">Name</th>
                            <th class="col-2">Photo</th>
                            <th class="col-3">Teaser</th>
                            <th class="col-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                          <tr>
                            {{-- <a href="{{ route('blogs.detail', ['id' => $blog->id]) }}">View Blog Details</a> --}}

                            <td class="col-3"> <a href="{{ route('blogs.detail', $blog) }}" > <h3 style="">{{$blog->title}} </h3> </a> </td>
                            <td class="col-2"> <img width="200px" src="{{ asset($blog->image )}}"/> </td>
                            <td class="col-3"> <h5 style="">{{$blog->teaser}} </h5></td>                        
                            <td class="col-2">
                              <span class="btn btn-sm btn-info"><a href="{{route('blogs.show', $blog)}}" target="_blank"> Read Blog </a></span>
                            </td>    
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

    
@endsection 