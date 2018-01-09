@extends('layouts.app')

@section('content')

<div class="container">
<h2>Edit Event</h2>

{{
	Form::model($event,[
		'method'=>'PATCH',
		'route'=> ['event.update', $event]
	])
}}
	@include('events.partials.form')
	<button type="submit" class="btn btn-primary">Update</button> 
{{
	Form::close()	
}}




</div>
    @include('layouts.errors')

@endsection