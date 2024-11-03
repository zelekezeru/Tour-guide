<div class="row">
    <div class="form-group col-lg-6">
        <label for="name">Full Name</label>
        <input type="text" value="{{ old('name') ? old('name') : $testimonial->name }}" name="name" class="form-control" id="name" aria-describedby="nameHelp"
        placeholder="Full Name" required>
        @if ($errors->has('name'))
            <small id="nameHelp" class="form-text text-danger">{{$errors->first('name')}}</small>
        @else
            <small id="nameHelp" class="form-text text-muted">Enter your name here.</small>
        @endif
    </div>
    <div class="form-group col-lg-6">
        <label for="address">Address</label>
        <input type="text" value="{{ old('address') ? old('address') : $testimonial->address }}" name="address"  class="form-control" id="address" aria-describedby="addressHelp"
        placeholder="Address">
        @if ($errors->has('address'))
            <small id="nameHelp" class="form-text text-danger">{{$errors->first('address')}}</small>
        @else
            <small id="addressHelp" class="form-text text-muted">Enter your living address here.</small>
        @endif
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-6">
        <label for="email">Email address</label>
        <input type="email" value="{{ old('email') ? old('email') : $testimonial->email }}" name="email" class="form-control" id="email" aria-describedby="emailHelp"
        placeholder="Enter email">
        @if ($errors->has('email'))
            <small id="nameHelp" class="form-text text-danger">{{$errors->first('email')}}</small>
        @else
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        @endif
    </div>
    <div class="form-group col-lg-4">
        <label for="email">Testimonial Picture</label>
        <div class="custom-file">
            @if($testimonial->image ?? null )
                <img width="50px" src="{{ asset($testimonial->image )}}"/>

                <input type="file" name="image" class="custom-file-input" id="customFile" required>
                <label class="custom-file-label" for="customFile">Choose Picture</label>
            @else
                <input type="file" name="image" class="custom-file-input" id="customFile" required>
                <label class="custom-file-label" for="customFile">Choose Picture</label>
            @endif
        
        </div>
    </div>
</div>

<div class="form-group col-lg">
    <label for="mytextarea">Testimony</label>
    
    <textarea  class="form-control" name="testimony" id="mytextarea"  rows="6"   text="" placeholder="Please, Write Your Testimony Here..." required> {{ $testimonial->testimony }} </textarea>

    @if ($errors->has('testimony'))
        <small class="form-text text-danger">{{$errors->first('testimony')}}</small>												
    @else
        <small class="form-text text-muted">Type the testimony here.</small>
    @endif 
</div>