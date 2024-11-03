@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    
    <!-- Invoice Example -->
    <div class="col mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="col-10">
                    <h4 class="m-0 font-weight-bold text-primary">{{ $blog->name}}</h4>
                </div>
                <div class="col-1">
                    <span class="btn btn-lg btn-warning"><a href="{{route('blogs.edit', $blog)}}"> Edit </a></span>
                </div>
                <div class="col-1">
                    <form action="{{ route('blogs.destroy', $blog) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-lg btn-danger">
                    </form>
                </div>
            </div>
                <div class="table-responsive row">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light ">
                            <tr>
                                <th class="col-3">Name</th>
                                <th class="col-4">Photo</th>
                                {{-- <th class="col-3">Teaser</th> --}}
                                <th class="col-5">Content</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-3"> <a href="{{ route('blogs.show', ['blog' => $blog->id]) }}" > <h5 style="">{{$blog->title}} </h5> </a> </td>
                                <td class="col-4"> <img width="300px" src="{{ asset($blog->image )}}"/> </td>
                                {{-- <td class="col-3"> <h5 style="">{{$blog->teaser}} </h5></td> --}}
                                <td class="col-5"> <h5 style="">{!! Str::limit( $blog->content, 150, '...') !!} </h5></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>            
        </div>
    </div>
</div>

    
@endsection 