<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>

	<!-- Latest compiled and minified bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!---Js plugin-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!---style-->
	<link rel="stylesheet" href="css/nav.css">
	
</head>
<body>
	<!--nav bar-->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="/">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Other</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!---slide-->
	@include('layouts.slide')
	<h2 align="center"> Available Hotel info</h2>
	<hr>

	    <ul style="list-style: none;">
		@foreach($hotels as $hotel)
		
		        <li  style="border:1px solid;float:left;margin:10px;border-radius:4px; color:#FFF; background-color: grey;
		            padding:10px;"><h2>{{$hotel->hotel_name}} </h2>
		        	<i>Avaiable Room: {{$hotel->vacancy}}</i>
		        	<hr>
		        	{{$hotel->address}}<br>
		        	 {{$hotel->city}}<br>
		        	 {{$hotel->country}}<br>

		        	<b>Mobile:</b> {{$hotel->contact_no}}<br> 
		        	<b>Email:</b>{{$hotel->email}}<br>
		        	<b>Rent fee(per room):</b>{{$hotel->cost}} BDT
		        	
		        	
		        </li>
  
		@endforeach
	</ul>

</body>

</html>