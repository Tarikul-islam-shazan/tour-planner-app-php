@extends('layouts.master')
@section('content')
<h1>Change Hotel Information</h1>
<hr>
<form method="POST" action="/hotel/edit/{{$id}}">
    @csrf
    <div class="form-group">
    	<label for="hotel_name">Hotel Name </label>
        <a  style="cursor:pointer;float:right;" id="name">change</a>
        <p id="name_form"></p>
    </div>
    <div class="form-group">
    	<label for="total_seat">Total Seat</label>
        <a  style="cursor:pointer;float:right;" id="total_seat">change</a>
        <p  id="total_seat_form"></p>
    	
    </div>
    <div class="form-group">
    	<label for="vacancy">Vacancy</label>
        <a  style="cursor:pointer;float:right;" id="vacancy">change</a>
        
        <p id="vacancy_form"></p>
    	
    </div>
    <div class="form-group">
    	<label for="city">City</label>
        <a  style="cursor:pointer;float:right;" id="city">change</a>
        <p id="city_form"></p>
    	
    </div>
    <div class="form-group">
    	<label for="country">Country</label>
        <a  style="cursor:pointer;float:right;" id="country">change</a>
        <p id="country_form"></p>
    	
    </div>
    <div class="form-group">
    	<label for="contact_no">Contact Number</label>
        <a  style="cursor:pointer;float:right;" id="contact_no">change</a>
        <p id="contact_no_form"></p>
    	
    </div>
    <div class="form-group">
      	<label  for="address">Address
      	</label>
        <a  style="cursor:pointer;float:right;" id="address">change</a>
        <p id="address_form"></p>
		
    </div>
     <div class="form-group">
    	<label for="email">Email</label>
        <a  style="cursor:pointer;float:right;" id="email">change</a>
        <p id="email_form"></p>
    	
    </div>
    <div class="form-group">
        <label  for="cost">Cost Per Room:
        </label>
        <a  style="cursor:pointer;float:right;" id="cost">change</a>
        <p id="cost_form"></p>
        
    </div>
   
    <button type="submit" class="btn btn-secondary">
    Update Changes
    </button>
</form>

<script>
    
    $('#name').click(function(){
        var html_form = '<input type="text" class="form-control" name="hotel_name" placeholder="Enter hotel name">';
        $('#name_form').append(html_form);
    });
    $('#total_seat').click(function(){
        var html_form = '<input type="text" class="form-control" name="total_seat" placeholder="Enter total seat amount">';
        $('#total_seat_form').append(html_form);
    });
    $('#vacancy').click(function(){
        var html_form = '<input type="text" class="form-control" name="vacancy" placeholder="Enter vacancy amount">';
        $('#vacancy_form').append(html_form);
    });
    $('#city').click(function(){
        var html_form = '    <input type="text" class="form-control" name="city" placeholder="Enter city name">';
        $('#city_form').append(html_form);
    });
    $('#country').click(function(){
        var html_form = '    <input type="text" class="form-control" name="country" placeholder="Enter city name">';
        $('#country_form').append(html_form);
    });
    $('#contact_no').click(function(){
        var html_form = ' <input type="text" class="form-control" name="contact_no" placeholder="Enter contact number here : 011xxxx">';
        $('#contact_no_form').append(html_form);
    });
    $('#address').click(function(){
        var html_form = '<input type="text" class="form-control" name="address" placeholder="Enter address: Road no, house no, etc. ">';
        $('#address_form').append(html_form);
    });
    $('#email').click(function(){
        var html_form = '<input type="email" class="form-control" name="email" placeholder="...com">';
        $('#email_form').append(html_form);
    });
    $('#cost').click(function(){
        var html_form = ' <input type="text" class="form-control" name="cost" placeholder="0BDT ">';
        $('#cost_form').append(html_form);
    });
  

    </script>

@endsection