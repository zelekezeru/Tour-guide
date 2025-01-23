@extends('admins.admin-layouts.admin-app')

@section('content')


<div class="container-fluid" id="container-wrapper">
    <ul>
      @foreach ($blogs as $blog)
        <li>
          <img width="50px" src="{{asset($blog->image)}}"/>{{$blog->name}}

          <a href="{{route('blogs.edit', $blog)}}">Edit</a>

          <form action="{{ route('blogs.destroy', $blog) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
          </form>
        </li>
      @endforeach
    </ul>
</div>


@endsection
