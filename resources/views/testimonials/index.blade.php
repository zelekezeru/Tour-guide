@extends('admins.admin-layouts.admin-app')

@section('content')


<div class="container-fluid" id="container-wrapper">
    <ul>
      @foreach ($testimonials as $testimonial)
        <li>
          <img width="50px" src="{{asset($testimonial->image)}}"/>{{$testimonial->name}} 

          <a href="{{route('testimonials.edit', $testimonial)}}">Edit</a>
        
          <form action="{{ route('testimonials.destroy', $testimonial) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
          </form>
        </li>
      @endforeach
    </ul>
</div>

    
@endsection 