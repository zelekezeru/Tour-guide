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
                                <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Check-in:</label>
                                    <div class="form-field">
                                    <i class="icon icon-calendar2"></i>
                                    <input type="text" name="check_in_date" id="date" class="form-control date" placeholder="Check-in date">
                                </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Check-out:</label>
                                    <div class="form-field">
                                    <i class="icon icon-calendar2"></i>
                                    <input type="text" name="check_out_date" id="date" class="form-control date" placeholder="Check-out date">
                                </div>
                                </div>
                                </div>
                                <div class="col-md-2">
                                <div class="form-group">
                                    <label for="guests">Guest</label>
                                    <div class="form-field">
                                    <i class="icon icon-arrow-down3"></i>
                                    <select name="guest" id="people" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5+</option>
                                    </select>
                                    </div>
                                </div>
                                </div>
        
                                <div class="col-md-2">
                                <div class="form-group">
                                    <label for="guests">Guest</label>
                                    <div class="form-field">
                                    <i class="icon icon-arrow-down3"></i>
                                    <select name="location" id="location" class="form-control bg-dark">
                                        <option value="Arbaminch, Gamo Zone, Ethiopia">Arbaminch</option>
                                        <option value="Hawassa, Ethiopia">Hawassa</option>
                                        <option value="Omo_Valley_Tribes, Ethiopia">Omo Valley Tribes</option>
                                        <option value="Konso, Ethiopia">Konso</option>
                                        <option value="Sodo, Ethiopia">Sodo</option>
                                    </select>
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