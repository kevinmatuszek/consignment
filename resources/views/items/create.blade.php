@extends('layouts.master')

@section('content')

	<h1>Create a New Item</h1>
	<br>
	
	{!! Form::open(['url' => 'items']) !!}

		<div class="form-group">
			{!! Form::label('user_id', 'User ID') !!}
			{!! Form::text('user_id', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('brand_id', 'Brand ID') !!}
			{!! Form::text('brand_id', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id', 'Category ID') !!}
			{!! Form::text('category_id', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('description', 'Description') !!}
			{!! Form::text('description', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('price', 'Price') !!}
			{!! Form::text('price', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Add Item', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@stop