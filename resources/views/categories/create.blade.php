@extends('layouts.master')

@section('content')

	<h1>Create a New Category</h1>
	<br>

	{!! Form::open(['url' => 'categories']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Add Category', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@stop