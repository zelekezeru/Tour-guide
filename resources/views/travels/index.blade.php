@extends('admins.admin-layouts.admin-app')

@section('content')


<div class="container-fluid" id="container-wrapper">
    <ul>
      @foreach ($travels as $travel)
        <li>
          <img width="50px" src="{{asset($travel->image)}}"/>{{$travel->title}} 

          <a href="{{route('travels.edit', $travel)}}">Edit</a>
        
          <form action="{{ route('travels.destroy', $travel) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
          </form>
        </li>
      @endforeach
    </ul>
</div>

    
@endsection 