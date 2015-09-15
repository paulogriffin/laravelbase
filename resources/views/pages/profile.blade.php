@extends('layout')


@section('content')

      <div class="col-sm-12 col-md-3">
        <div class="thumbnail">
          <img src="{{ $user->photo }}" alt="...">
          <div class="caption">
            <h3>{{ $user->name }}</h3>
            <p>Id {{ \Auth::user()->id }}</p>
              <p>{{ $user->email }}</p>
              <p>{{ $user->bio }}</p>
              <p><i class="glyphicon glyphicon-map-marker"></i> {{  $user->location }}</p>
              <p><i class="glyphicon glyphicon-time text-muted"></i> Joined {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at)->format('F Y') }}</p> 
          </div>
        </div>

      </div>
      

      <div class="col-md-7">

                <h2>Profile</h2>


        <form method="POST" action="/profile">
                 <input type="hidden" name="_method" value="PATCH">

                {!! csrf_field() !!}

                <div class="form-group">
                      <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Your Name" id="" >
                </div>
                
                <div class="form-group">
                </div>
                
                <div class="form-group form-inline">
                      <input type="text" name="location" class="form-control" id="title" placeholder="City" value="{{ $user->location }}">
                      <input type="text" name="activity" class="form-control" id="title" placeholder="Country" value="">

                </div>

                <div class="form-group">
                  <textarea class="form-control" name = "bio" rows="4" placeholder="Describe yourself">{{ $user->bio }}</textarea>
                </div>




                <div class="form-group">
                    <button class="btn btn-danger" type="submit">Save Profile</button>
                </div>
        </form>



        <form action="/foo" class="dropzone" id = "addProfilePic">
          <input type="hidden" name="_method" value="POST">
          {!! csrf_field() !!}
        </form>
            </div>
            <div class="col-md-3"></div>
@stop

