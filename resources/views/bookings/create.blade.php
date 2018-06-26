@extends('layouts.master')

@section('content')

<form method="POST" action="/booking/create">
    @csrf
    <div class="form-group">
    	<label for="hotel_name">Hotel Name
            <span style="color:red;">*</span></label>
    	    <select class="form-control" name="hotel_name" 
            id="exampleSelect1">
    	    	<option selected> Choose hotel...</option>
    	    	@foreach($hotels as $hotel)
            		<option >{{$hotel->hotel_name}} </option>
                 @endforeach
           </select>
    </div>
    <div class="form-group">
        <label for="booking_seat">How many Seat you need?</label>
        <input type="text" class="form-control" name="booking_seat" placeholder="Enter seat amount">
    </div>
    <button type="submit" class="btn btn-secondary btn-lg btn-block">Submit</button>
</form>

@endsection