@extends('layout')

@section('content')


	<div class="jumbotron">
        <h1>Spark</h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
          <a class="btn btn-lg btn-danger" href="/spark/create" role="button">Create a Spark &raquo;</a>
        </p>
      </div>


		<h2 class="text-muted">People</h2>
		       @foreach($people->chunk(4) as $userSet )
		       <div class ="row">
			        @foreach($userSet as $person)
			         <div class="col-md-3">
			        <div class="thumbnail">
			          <img src="{{ $person->photo }}" alt="...">
			          <div class="caption">
			            <h3><a href="/people/{{$person->id}}">{{ $person->name }}</a></h3>
			              <p>{{ $person->bio }}</p>
			              <p><i class="glyphicon glyphicon-map-marker"></i> {{  $person->location }}</p>
			              <p><i class="glyphicon glyphicon-time text-muted"></i> Joined {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $person->created_at)->format('F Y') }}</p> 
			              
			           	<button class="btn ntn-default">Follow +</button>
			          </div>
			          </div>
			        </div>
			   
			        @endforeach
		         </div>
		    	@endforeach
@stop