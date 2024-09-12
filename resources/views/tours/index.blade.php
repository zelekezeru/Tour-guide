@extends('admins.admin-layouts.admin-app')

@section('content')


<div class="container-fluid" id="container-wrapper">
    <ul>
      @foreach ($tours as $tour)
        <li>
          <img width="50px" src="{{asset($tour->image)}}"/>{{$tour->title}} 

          <a href="{{route('tours.edit', $tour)}}">Edit</a>
        
          <form action="{{ route('tours.destroy', $tour) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
          </form>
        </li>
      @endforeach
    </ul>
</div>

    
@endsection 