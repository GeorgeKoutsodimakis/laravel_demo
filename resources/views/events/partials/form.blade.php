

{{--  {!! Form::open(['route'=>'event.store']) !!}
    <div class="form-group">
      {!! Form::label('name','Events Name') !!}
			Form::label('price', null,'Price') 
      {!! Form::text('name', ,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('category','Category') !!}
      {!! Form::select('category',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('price','Price') !!}
			Form::label('price', null,'Price') 
      {!! Form::text('price', ,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('country','Country') !!}
			Form::label('price', null,'Price') 
      {!! Form::text('country', ,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('city','City') !!}
			Form::label('price', null,'Price') 
      {!! Form::text('city', ,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('date_from','Date From') !!}
			Form::label('price', null,'Price') 
      {!! Form::date('date_from', ,['class' => 'form-control']) !!}
    </div>
     <div class="form-group">
      {!! Form::label('date_to','Date To') !!}
			Form::label('price', null,'Price') 
      {!! Form::date('date_to', ,['class' => 'form-control']) !!}
    </div>

  <button type="submit" class="btn btn-primary">Create</button>  

  {!! Form::close() !!}  --}}

  <div class="container">
	<div class="form-group">
		 {!! 
			Form::label('name','Events Name') 
		!!}
		{!! 
			Form::text('name', null,[
			'class' => 'form-control'
			]) 
		!!}
	</div>
	<div class="form-group">
		{!! 
			Form::label('price','Price') 
		!!}
		{!! 
			Form::text('price', null,[
				'class' => 'form-control'
				])
		 !!}
	  </div>

	  <div class="form-group">
			{!! 
				Form::label('category_id','Category') 
			!!}
			{{
				Form::select('category_id', $category, $eventCategory, [
					'class' => 'form-control'					
				])
			}}
		  </div>

	  <div class="form-group">
		{!! 
			Form::label('country','Country') 
		!!}
		{!! 
			Form::text('country', null, [
				'class' => 'form-control'
			]) 
		!!}
	  </div>
	  <div class="form-group">
		{!! 
			Form::label('city','City') 
			!!}
		{!! 
			Form::text('city', null ,[
				'class' => 'form-control
				']) 
				!!}
	  </div>
	  <div class="form-group">
		{!! 
			Form::label('date_from', 'Date From') 
		!!}
		{!! Form::date('date_from', null ,[
			'class' => 'form-control'
			]) 
			!!}
	  </div>
	   <div class="form-group">
		{!! 
			Form::label('date_to','Date To') 
		!!}

		{!! Form::date('date_to', null ,[
			'class' => 'form-control'
			]) 
			!!}
	  </div>
  


  </div>