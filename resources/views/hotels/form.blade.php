<div class="row">
    <div class="form-group col-lg-4">
        <label for="name">Name</label>
        <input type="text" value="{{ old('name') ? old('name') : $hotel->name }}" name="name"  class="form-control" id="name" aria-describedby="nameHelp"
        placeholder="Name">
        @if ($errors->has('name'))
             <small id="nameHelp" class="form-text text-danger">{{$errors->first('name')}}</small>
        @else
            <small id="addressHelp" class="form-text text-muted">Enter the name of the hotel here.</small>
        @endif
    </div>
    <div class="form-group col-lg-4">
        <label for="location">Location</label>
        <input type="text" value="{{ old('location') ? old('location') : $hotel->location }}" name="location"  class="form-control" id="location" aria-describedby="locationHelp"
        placeholder="Location">
        @if ($errors->has('location'))
            <small id="nameHelp" class="form-text text-danger">{{$errors->first('location')}}</small>
        @else
            <small id="addressHelp" class="form-text text-muted">Enter location of the hotel.</small>
        @endif
    </div>

    <div class="form-group col-lg-4">
        <label for="capacity">Guest Capacity</label>
        <input type="number" value="{{ old('capacity') ? old('capacity') : $hotel->capacity }}" name="capacity"  class="form-control" id="capacity" aria-describedby="capacityHelp"
        placeholder="Capacity">
        @if ($errors->has('capacity'))
            <small id="nameHelp" class="form-text text-danger">{{$errors->first('capacity')}}</small>
        @else
            <small id="addressHelp" class="form-text text-muted">Enter capacity of the hotel.</small>
        @endif
    </div>
    </div>
    <div class="row">
    <div class="form-group col-lg-8">
    <label for="description">Description</label>
    <textarea  class="form-control"  value="{{ old('description') ? old('description') : $hotel->description }}" name="description" id="mytextarea"  rows="5"  placeholder="Enter Hotel description Here" required> {{ $hotel->description }} </textarea>

    @if ($errors->has('description'))
        <small id="nameHelp" class="form-text text-danger">{{$errors->first('description')}}</small>
    @else
        <small id="nameHelp" class="form-text text-muted">Description the hotel.</small>
    @endif
    </div>
    <div class="form-group col-lg-4">
        <label for="image">Hotel Thumbnail Picture</label>
        <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="image">
            <label class="custom-file-label" for="customFile">Choose Picture</label>
        </div>
        @if ($hotel->image)
            <img src="{{ $hotel->image }}" alt="Hotel Image" class="img-thumbnail mt-2" width="150">
        @else
            <img src="{{ old('image') }}" alt="Hotel Image" class="img-thumbnail mt-2" width="150">
        @endif
    </div>
    </div>
    <div class="row">
    <div class="form-group col-lg-4">
        <label for="price">Price</label>
        <input type="number" value="{{ old('price') ? old('price') : $hotel->price }}" name="price" class="form-control" id="name" aria-describedby="nameHelp"
        placeholder="Price (Per Night)" required>
        @if ($errors->has('price'))
            <small id="nameHelp" class="form-text text-danger">{{$errors->first('price')}}</small>
        @else
            <small id="nameHelp" class="form-text text-muted">Enter the price of a hotel room per night.</small>
        @endif
    </div>
    <div class="form-group col-lg-4">
        <label for="rating">Rating</label>
        <input type="number" value="{{ old('rating') ? old('rating') : $hotel->rating }}" name="rating" class="form-control" id="name" aria-describedby="nameHelp"
        placeholder="Rating" required>
        @if ($errors->has('rating'))
            <small id="nameHelp" class="form-text text-danger">{{$errors->first('rating')}}</small>
        @else
            <small id="nameHelp" class="form-text text-muted">Enter the rating of the Hotel.</small>
        @endif
    </div>
    <div class="form-group col-lg-4">
        <label for="reviews">Reviews</label>
        <input type="number" value="{{ old('reviews') ? old('reviews') : $hotel->reviews }}" name="reviews" class="form-control" id="name" aria-describedby="nameHelp"
        placeholder="Reviews" required>
        @if ($errors->has('reviews'))
            <small id="nameHelp" class="form-text text-danger">{{$errors->first('reviews')}}</small>
        @else
            <small id="nameHelp" class="form-text text-muted">Enter the reviews of the Hotel.</small>
        @endif
    </div>
</div>
