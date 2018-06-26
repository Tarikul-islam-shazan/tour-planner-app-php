      @extends('layouts.master')
      @section('content')
      <div align="center">
      <div class="card" style="max-width: 600px;">
  <div class="card-header">
    Hotel List 
  </div>
       <ul class="list-group " style="list-style: none;">
		@foreach($hotels as $hotel)
		
		        <li  class="list-group-item" 
		        style="border:1px solid;float:left;margin:10px;border-radius:4px; color:#FFF; 
		        background-color: grey;
		            padding:10px;"><h2>{{$hotel->hotel_name}} </h2>
		        	<i>Avaiable Room: {{$hotel->vacancy}}</i>
		        	<hr>
		        	{{$hotel->address}}<br>
		        	 {{$hotel->city}}<br>
		        	 {{$hotel->country}}<br>

		        	<b>Mobile:</b> {{$hotel->contact_no}}<br> 
		        	<b>Email:</b>{{$hotel->email}}<br>
		        	<b>Rent fee(per room):</b>{{$hotel->cost}} BDT
		        	<br><br>
		        	   	<a  style="text-decoration: none;" href="/hotel/edit/{{  $hotel->id }}">
                	<button style="padding:2px;font-size:11px;" class="btn btn-primary">
                		Edit 
                	</button>
                	</a>
                	<a style="text-decoration:none;" href="/hotel/delete/{{  $hotel->id }}">
                	<button style="padding:2px;font-size:11px;" class="btn btn-danger">
                		Delete
                	</button>
                	</a>
		        </li>
  
		@endforeach
	</ul>
</div>
</div>
	<a align="center" class="badge badge-primary" href="/admin">Back to main page</a>
	@endsection


