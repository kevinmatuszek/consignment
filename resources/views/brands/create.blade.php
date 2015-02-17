@extends('layouts.master')

@section('content')

	<h1>Create a New Brand</h1>
	<br>

	{!! Form::open(['url' => 'brands']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Add Brand', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
	
@stop