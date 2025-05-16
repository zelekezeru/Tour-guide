@extends('admins.admin-layouts.admin-app')

@section('content')
    <div class="container-fluid" id="container-wrapper">

        <!-- Invoice Example -->
        <div class="col mb-4">
            <div class="card shadow-sm rounded">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">BLOGS</h6>
                    <a class="btn btn-sm btn-success" href="{{ route('blogs.create') }}">
                        <i class="fas fa-plus-circle"></i> Add Blog
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th class="col-1 text-center">No</th>
                                <th class="col-3 text-center">Title</th>
                                <th class="col-3 text-center">Photo</th>
                                <th class="col-5 text-center">Content</th>
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
                                    <td class="text-center">{{ $num }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('blogs.detail', $blog) }}">
                                            <h5 class="text-primary">{{ $blog->title }}</h5>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <img width="250px" class="img-fluid rounded" src="{{ asset($blog->image) }}"
                                            alt="Blog Image" />
                                    </td>
                                    <td class="text-center">
                                        <h5>{!! Str::limit($blog->content, 150, '...') !!}</h5>
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
