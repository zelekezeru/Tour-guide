@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">

    <!-- Invoice Example -->
    <div class="col mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-primary">Contacts</h5>
                <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('contacts.index') }}">ADD Contact</a>
            </div>
            <div class="table-responsive row">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light ">
                        <tr>
                            <th class="col-1">No</th>
                            <th class="col-2">Name</th>
                            <th class="col-">Email</th>
                            <th class="col-3">Subject</th>
                            <th class="col-4">Message</th>
                            <th class="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- Roll Number --}}
                        @php
                            $num = 0;
                        @endphp

                        @foreach ($contacts as $contact)

                            @php
                                $num++;
                            @endphp

                          <tr>
                            <td class="col-1 h3"> {{ $num }} </td>
                            <td class="col-2 text-info"><h6 style=""> {{$contact->firstName }}  {{$contact->lastName }} </h6></td>
                            <td class="col-2"> <p style=""> {{ $contact->email }}</p></td>
                            <td class="col-3"> <p style="">{{ $contact->subject }} </p></td>
                            <td class="col-4"> <p style="">{{ $contact->message }} </p></td>
                            <td>
                              {{-- <div class="col-1 mb-4">
                                <span class="btn btn-sm btn-warning"><a href="{{route('contacts.edit', $contact)}}"> Reply </a></span>
                            </div> --}}
                              <div class="col-1">
                                  <form action="{{ route('contacts.destroy', $contact) }}" method="post">
                                      @csrf
                                      @method('delete')
                                      <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                  </form>
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


@endsection
