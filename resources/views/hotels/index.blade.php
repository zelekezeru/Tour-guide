@extends('admins.admin-layouts.admin-app')

@section('content')


<div class="container-fluid" id="container-wrapper">
    <ul>
      @foreach ($hotels as $hotel)
        <li>
          <img width="50px" src="{{asset($hotel->image)}}"/>{{$hotel->name}} 

          <a href="{{route('hotels.edit', $hotel)}}">Edit</a>
        
          <form action="{{ route('hotels.destroy', $hotel) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
          </form>
        </li>
      @endforeach
    </ul>
</div>

    
@endsection 