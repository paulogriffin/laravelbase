@extends('layout')

@section('content')
	
<div class="col-md-6 col-md-offset-3">
	<h1>Sign up</h1>
	<hr>
	<div class="row">
		@include('partials.errors')
		<form method="POST" action="/auth/register">
		    {!! csrf_field() !!}

		    <div class="form-group">
		        Name
		        <input type="name" class="form-control" name="name" value="{{ old('name') }}">
		    </div>

		    <div class="form-group">
		        Email
		        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
		    </div>

		    <div class="form-group">
		        Password
		        <input type="password"  class="form-control" name="password" id="password">
		    </div>

		   	<div class="form-group">
		        <button type="submit" class="form-control btn btn-danger">Login</button>
		    </div>
		</form>
	</div>
</div>
@stop