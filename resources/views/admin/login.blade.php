@extends('layouts.master')

@section('content')

<div class="card">
	<div class="card-body">
		<h2 class="card-title">Admin Login Page</h2>
<form method="POST" action="/login">
    @csrf
    <div class="form-group">
    	<label for="name">Name</label>
    	<input type='text' class="form-control" name="name" placeholder="Enter  name">
    </div>
    <div class="form-group">
    	<label for="password">Password</label>
    	<input type='password' class="form-control" name="password"
    	placeholder="enter password">
        
    </div>
 
   
    <button type="submit" class="btn btn-secondary btn-block">Login </button>
</form>
</div>
</div>

@endsection