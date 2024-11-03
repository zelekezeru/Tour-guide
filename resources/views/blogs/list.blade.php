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
                            <th class="col-1">No</th>
                            <th class="col-3">Name</th>
                            <th class="col-3">Photo</th>
                            {{-- <th class="col-3">Teaser</th> --}}
                            <th class="col-5">Content</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- Roll Number --}}
                        @php
                            $num = 0;
                        @endphp

                        @foreach ($blogs as $blog)
                        
                            @php
                                $num++;
                            @endphp

                          <tr>                            
                            <td class="col-1 h3"> {{ $num }} </td>
                            <td class="col-3"> <a href="{{ route('blogs.detail', $blog) }}" >  <h5 style="">{{$blog->title}} </h5> </a> </td>
                            <td class="col-3"> <img width="250px" src="{{ asset($blog->image )}}"/> </td>
                            <td class="col-5"> <h5 style="">{!! Str::limit( $blog->content, 150, '...') !!} </h5></td>
                            {{-- <td class="col-5"> <h5 style="">{{$blog->teaser}} </h5></td>                         --}}
                            
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

    
@endsection 