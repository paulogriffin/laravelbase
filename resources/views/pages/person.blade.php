@extends('layout')


@section('content')

<div class="row text-center">
	<h2>{{ $person->name }}</h2>
	<p><i class="glyphicon glyphicon-map-marker"></i> {{  $person->city }}, {{ $person->country }}</p>
	<p><i class="glyphicon glyphicon-time text-muted"></i> Joined {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $person->created_at)->format('F Y') }}</p> 

	<div>
		
		<img src="{{ $person->photo }}" alt="..." class="img-thumbnail">
		<hr>
		<button class="btn btn-danger">+ Follow</button>
		<p class ="lead">{{ $person->bio }}</p>
	</div>

</div>
@stop