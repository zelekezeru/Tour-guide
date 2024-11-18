@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    
    <!-- Invoice Example -->
    <div class="col mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="col-8">
                    <h4 class="m-0 font-weight-bold text-primary">{{ $user->name}}</h4>
                </div>
                
            </div>
                <div class="table-responsive row">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light ">
                            <tr>
                                <th class="col-3">Name</th>
                                <th class="col-3">Email</th>
                                <th class="col-4">Edit</th>
                                <th class="col-2">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-3"> <h3 style="">{{$user->name}} </h3> </a> </td>
                                <td class="col-3"> <h5 style="">{{$user->email}} </h5></td>
                                <td class="col-2">
                                    <span class="btn btn-lg btn-warning"><a href="{{route('users.edit', $user)}}"> Edit </a></span>
                                </td>
                                <td class="col-2">
                                    <form action="{{ route('users.destroy', $user) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete" class="btn btn-lg btn-danger">
                                    </form>
                                </td>
                                <td class="col-2"> <h5 style="">{{$user->role}} </h5></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>



            
        </div>
    </div>
</div>

    
@endsection 