@extends('layout')


@section('content')

	<h1>Dashboard</h1>

	<div><p class ="lead">Welcome {{ \Auth::user()->name }}</p></div>
@stop