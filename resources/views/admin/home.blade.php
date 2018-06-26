@extends('layouts.master')

@section('content')
  @if (Auth::id() == '1')
  <h1>Welcome {{\Auth::user()->name }}sir!</h1>
  @endif

<a href="/hotel/show" class="badge badge-info" >Show hotel list</a>
<a href="/hotel" class="badge badge-success">Enter  Hotel info</a>

<a href="/logout" class="badge badge-success">Logout</a>

@endsection

