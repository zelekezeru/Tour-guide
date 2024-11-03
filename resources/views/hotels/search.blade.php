<div id="colorlib-reservation">
    <div class="container-fluid">
        <div class="row">
            <div class="search-wrap">
                <div class="container">
                    <ul class="nav nav-tabs">
                        <li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i>Search Hotel</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="hotel" class="tab-pane fade in active">
                        <form action="{{ route('hotels.search') }}" method="GET" class="colorlib-form">
                            <div class="row">
        
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="guests">Location</label>
                                        <div class="form-field">
                                        <i class="icon icon-arrow-down3"></i>
                                        <select name="location" id="location-hotel" class="form-control bg-dark">
                                            <option class="text-primary" value="">Choose Location</option>
                                            @foreach($hotels as $hotel)
                                                <option class="text-primary" value="{{ $hotel->location }}">{{ $hotel->location }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                </div>                         
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Check-in:</label>
                                        <div class="form-field">
                                        <i class="icon icon-calendar2"></i>
                                        <input type="text" id="date" class="form-control date"  name="check_in_date"  placeholder="Check-in date">
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Check-out:</label>
                                        <div class="form-field">
                                        <i class="icon icon-calendar2"></i>
                                        <input type="text" id="date" class="form-control date"  name="check_out_date" placeholder="Check-out date">
                                    </div>
                                </div>
                                </div>
        
                                <div class="col-md-2">
                                <input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>