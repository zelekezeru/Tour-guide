@extends('admins.admin-layouts.admin-app')

@section('content')

<div class="container-fluid" id="container-wrapper">
  <div class="card shadow mb-4">
    {{-- Card Header with Approve/Delete --}}
    <div class="card-header d-flex justify-content-between align-items-center">
      <h4 class="m-0 text-primary">Review by {{ $review->full_name }}</h4>
      <div>
        {{-- Approve Button --}}
        @if (! $review->isApproved)
            <form action="{{ route('reviews.approve', $review) }}" method="POST" class="d-inline">
            @method('put')
            @csrf
            <button type="submit" class="btn btn-sm btn-warning">Approve</button>
            </form>
        @endif
        {{-- Delete Button --}}
        <form action="{{ route('reviews.destroy', $review) }}" method="POST" class="d-inline" 
              onsubmit="return confirm('Are you sure you want to delete this review?')">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
      </div>
    </div>

    {{-- Card Body --}}
    <div class="card-body">
      {{-- Reviewer Info --}}
      <div class="d-flex align-items-center mb-4">
        @if($review->photo)
          <img src="{{ asset($review->photo) }}" alt="Photo of {{ $review->full_name }}"
               class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
        @else
          <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center me-3"
               style="width: 60px; height: 60px; font-size: 1.25rem;">
            {{ strtoupper(substr($review->full_name, 0, 1)) }}
          </div>
        @endif
        <div>
          <h5 class="mb-0">{{ $review->full_name }}</h5>
          @if($review->email)
            <small class="text-muted">{{ $review->email }}</small>
          @endif
        </div>
      </div>

      {{-- Rating --}}
      <div class="mb-4">
        <strong>Rating:</strong>
        @for ($i = 1; $i <= 5; $i++)
          <i class="{{ $i <= $review->rating ? 'fas' : 'far' }} fa-star text-warning"></i>
        @endfor
      </div>

      {{-- Review Content --}}
      <div>
        <strong>Review:</strong>
        <p class="mt-2">{{ $review->review }}</p>
      </div>
    </div>
  </div>
</div>

@endsection
