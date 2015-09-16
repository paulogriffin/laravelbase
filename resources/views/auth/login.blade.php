@extends('layout')

@section('content')
	
<div class="col-md-6 col-md-offset-3">
	<h2 class = "text-muted">Login</h2>
	<hr>
	<div class="row">
		@include('partials.errors')
		<form method="POST" action="/auth/login">
		    {!! csrf_field() !!}

		    <div class="form-group">
		        Email
		        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
		    </div>

		    <div class="form-group">
		        Password
		        <input type="password"  class="form-control" name="password" id="password">
		    </div>

		    <div class="form-group">
		        <input type="checkbox" class="form-control" name="remember"> Remember Me
		    </div>

		   	<div class="form-group">
		        <button type="submit" class="form-control btn btn-danger">Login</button>
		    </div>
		</form>
	</div>
</div>
@stop