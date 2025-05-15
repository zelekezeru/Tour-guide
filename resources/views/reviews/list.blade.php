@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">

  {{-- Reviews List --}}
  <div class="col mb-4">
    <div class="card shadow-sm rounded">
      <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">REVIEWS</h6>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-items-center table-flush">
          <thead class="thead-light text-center">
            <tr>
              <th>No</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Photo</th>
              <th>Rating</th>
              <th>Review</th>
              <th class="text-nowrap">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php $i = 0; @endphp
            @foreach($reviews as $review)
              @php $i++; @endphp
              <tr class="text-center">
                <td>{{ $i }}</td>
                <td><a href="{{ route('reviews.detail', $review) }}">{{ $review->full_name }}</a></td>
                <td>{{ $review->email ?? '—' }}</td>
                <td>
                  @if($review->photo)
                    <img src="{{ asset($review->photo) }}" alt="" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                  @else
                    <span class="text-muted">—</span>
                  @endif
                </td>
                <td>
                  @for($star = 1; $star <= 5; $star++)
                    <i class="{{ $star <= $review->rating ? 'fas' : 'far' }} fa-star text-warning"></i>
                  @endfor
                </td>
                <td class="text-left">
                  {!! Str::limit(e($review->review), 100, '...') !!}
                </td>
                <td class="text-nowrap">
                  @if (! $review->isApproved)
                  <form action="{{ route( 'reviews.approve', $review) }}" method="POST" class="d-inline">
                    @csrf
                    @method('put')
                    <button class="btn btn-sm btn-warning" type="submit">Approve</button>
                  </form>
                      
                  @endif
                  <form action="{{ route('reviews.destroy', $review) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Delete this review permanently?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
            @if($reviews->isEmpty())
              <tr>
                <td colspan="7" class="text-center text-muted">No reviews found.</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
      {{-- Optional pagination --}}
      <div class="card-footer">
        {{ $reviews->links() }}
      </div>
    </div>
  </div>

</div>
@endsection
