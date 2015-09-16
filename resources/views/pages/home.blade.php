@extends('layout')

@section('content')


	<div class="jumbotron">
        <h1>Spark</h1>

        <p>//Main Value Proposition</p>
        <p>Need //something?</p>
        <p>Spark will do it. It also does //x //y //z so you can //benefit goes here</p>
        <p>
          <a class="btn btn-lg btn-danger" href="/spark/create" role="button">Create a Spark &raquo;</a>
        </p>
      </div>


		<h2 class="text-muted">Success Stories from 2015</h2>
		       @foreach($people->chunk(4) as $userSet )
		       <div class ="row">
			        @foreach($userSet as $person)
			         <div class="col-md-3">
			        <div class="thumbnail">
			          <a href="/people/{{$person->id}}"><img src="{{ $person->photo }}" alt="..."></a>
			          <div class="caption">
			            <h3><a href="/people/{{$person->id}}">{{ $person->name }}</a></h3>
			              <p>{{ $person->bio }}</p>
			              <p><i class="glyphicon glyphicon-map-marker"></i> {{  $person->city }}, {{ $person->country }}</p>
			              <p><i class="glyphicon glyphicon-time text-muted"></i> Joined {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $person->created_at)->format('F Y') }}</p> 
			              
			           	<button class="btn btn-danger">+ Follow</button>
			          </div>
			          </div>
			        </div>
			   
			        @endforeach
		         </div>
		    	@endforeach
@stop