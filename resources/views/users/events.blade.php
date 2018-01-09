@extends('layouts.app')

@section('content')



@foreach($userEvent as $userEvent )


<div class="container card">
  
	<p class="card-text">
    <h4>{{ $userEvent->user->name}}</h4>
    <hr>
    <h4>{{ $userEvent->name}}</h4>
    <h4>{{ $userEvent->category->title}}</h4>
    <h4>{{ $userEvent->country}}</h4>
    <h4>{{ $userEvent->city}}</h4>


	</p>
	
  
  </div>

  @endforeach



  @endsection
