@extends('layouts.master')

@section('content')
<h1>Enter Hotel Information</h1>
<hr>
<form method="POST" action="/hotel/create">
    @csrf
    <div class="form-group">
    	<label for="hotel_name">Hotel Name<span style="color:red;">*</span></label>
    	<input type='text' class="form-control" name="hotel_name" placeholder="Enter hotel name">
        <small style="color:red;">{{$errors->first('hotel_name')}}</small>
    </div>
    <div class="form-group">
    	<label for="total_seat">Total Room<span style="color:red;">*</span></label>
    	<input type='text' class="form-control" name="total_seat" placeholder="Enter total seat amount">
        <small style="color:red;">{{$errors->first('total_seat')}}</small>
    </div>
    <div class="form-group">
    	<label for="vacancy">Vacancy<span style="color:red;">*</span></label>
    	<input type='text' class="form-control" name="vacancy" placeholder="Enter vacancy amount">
        <small style="color:red;">{{$errors->first('vacancy')}}</small>
    </div>
    <div class="form-group">
    	<label for="city">City<span style="color:red;">*</span></label>
    	<input type='text' class="form-control" name="city" placeholder="Enter city name">
        <small style="color:red;">{{$errors->first('city')}}</small>
    </div>
    <div class="form-group">
    	<label for="country">Country<span style="color:red;">*</span></label>
    	<input type='text' class="form-control" name="country" placeholder="Enter city name">
        <small style="color:red;">{{$errors->first('country')}}</small>
    </div>
    <div class="form-group">
    	<label for="contact_no">Contact Number<span style="color:red;">*</span></label>
    	<input type='text' class="form-control" name="contact_no" placeholder="Enter city name">
       <small style="color:red;">{{$errors->first('contact_no')}}</small>
    </div>
    <div class="form-group">
      	<label  for="address">Address<span style="color:red;">*</span>
      	</label>
		<input class="form-control" name="address" placeholder="Enter address ">
        <small style="color:red;">{{$errors->first('address')}}</small>
    </div>
     <div class="form-group">
    	<label for="email">Email<span style="color:red;">*</span></label>
    	<input type='email' class="form-control" name="email" placeholder="...com">
         <small style="color:red;">{{$errors->first('email')}}</small>
    </div>
    <div class="form-group">
        <label for="cost">Cost per room:<span style="color:red;">*</span></label>
        <input type='text' class="form-control" name="cost" placeholder="0BDT">
        <small style="color:red;">{{$errors->first('cost')}}</small>
    </div>
   
    <button type="submit" class="btn btn-secondary">Submit</button>
</form>



{{-- <script>
 

   $("button").click(function(){
    $("#hotel").load('/hotel/show', function(responseTxt, statusTxt, xhr){
        if(statusTxt == "success")
            alert("External content loaded successfully!");
        if(statusTxt == "error")
            alert("Error: " + xhr.status + ": " + xhr.statusText);
    });
});
</script> --}}

@endsection