
@extends('layouts.master')

@section('content')
	
<div class="card card-inverse" 
style="background-color: #333; border-color: #333; 
color:#FFF;padding:20px;">
  <div class="card-block">
    <h3 class="card-title">Your selected hotel: {{$name}}</h3>
    <p class="card-text">You requested for booking: {{$booking}} room(s)</p>
    <a href="#" class="btn btn-primary">Proceed to booking</a>
  </div>
</div>
@endsection