@extends('layouts.app')

@section('content')



@foreach($eventCategory as $eventCategory )


<div class="container card">
  
	<p class="card-text">
	<h2>{{ $eventCategory->category->title}}</h2>
	<hr>
	
	<h4> {{$eventCategory->name}}</h4>
	<h4> {{$eventCategory->name}}</h4>
	<h4> {{$eventCategory->name}}</h4>
	<h4> {{$eventCategory->name}}</h4>
	</p>
	
  
  </div>

  @endforeach



  @endsection
