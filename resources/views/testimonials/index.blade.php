@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    
    <!-- Invoice Example -->
    <div class="col mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-primary">Testimonials</h5>
                <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('testimonials.create') }}">ADD testimonial</a>
            </div>
            <div class="table-responsive row">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light ">
                        <tr>
                            <th class="col-1">No</th>
                            <th class="col-2">Name</th>
                            <th class="col-2">Photo</th>
                            <th class="col-3">Address</th>
                            <th class="col-5">Testimony</th>
                            <th class="col-5">Manage</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- Roll Number --}}
                        @php
                            $num = 0;
                        @endphp

                        @foreach ($testimonials as $testimonial)

                            @php
                                $num++;
                            @endphp

                          <tr>
                            <td class="col-1 h3"> {{ $num }} </td>
                            <td class="col-2 text-info"><h5 style="">{{$testimonial->name}} </h5></td>
                            <td class="col-2"> <img width="200px" src="{{ asset($testimonial->image )}}"/> </td>
                            <td class="col-3"> <p style="">{{$testimonial->address}}, {{$testimonial->email}}</p></td>
                            <td class="col-5"> <p style="">{{$testimonial->testimony}} </p></td>   
                            <td>                            
                              <div class="col-1 mb-4">
                                <span class="btn btn-sm btn-warning"><a href="{{route('testimonials.edit', $testimonial)}}"> Edit </a></span>
                            </div>
                              <div class="col-1">
                                    <form id="{{ "delete-form-".$testimonial->id }}" action="{{ route('testimonials.destroy', $testimonial) }}" method="post">
                                      @csrf
                                      @method('delete')
                                    </form>
                                    <button onclick="confirmDelete({{ $testimonial->id }})" class="btn btn-sm btn-danger">Delete</button>
                              </div>  
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
    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You can't undo this action.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        });
    }
</script>
@endsection 