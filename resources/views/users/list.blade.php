@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
    
    <!-- Invoice Example -->
    <div class="col mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">USERS</h6>
                <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('users.create') }}">ADD USER</a>
            </div>
            <div class="table-responsive row">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light ">
                        <tr>
                            <th class="col-2">No</th>
                            <th class="col-4">Name</th>
                            <th class="col-4">Email</th>
                            <th class="col-2">Role</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- Roll Number --}}
                        @php
                            $num = 0;
                        @endphp
                        @foreach ($users as $user)

                            @php
                                $num++;
                            @endphp

                          <tr>
                            <td class="col-2 h3"> {{ $num }} </td>
                            <td class="col-4"> <a href="{{ route('users.detail', ['user' => $user->id]) }}" > <h3 style="">{{$user->name }} </h3> </a> </td>
                            <td class="col-4"> <h5 style="">{{$user->email }}, {{$user->city }} </h5></td>
                            <td class="col-2"> <h5 style="">{{$user->role }} </h5></td>                        
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

    
@endsection 