@extends('layouts.app')

@section('content')

<div class="container">
<h2>Create new event</h2>

<div class="container">

	{{
		Form::model($event,[
		'method'=>'POST',
		'route'=>'event.store'
		])
	}}
		@include('events.partials.form')
		<button type="submit" class="btn btn-primary">Create</button> 
	{{
		Form::close()	
	}}
</div>
</div>
    @include('layouts.errors')

@endsection