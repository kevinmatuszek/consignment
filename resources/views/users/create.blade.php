@extends('layouts.master')

@section('content')
	
	<h1>Create a New User</h1>
	<br>

	{!! Form::open(['url' => 'users']) !!}
		
		<div class="form-group">
			{!! Form::label('first_name', 'First Name') !!}
			{!! Form::text('first_name', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('last_name', 'Last Name') !!}
			{!! Form::text('last_name', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password', ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('admin', 'Admin') !!}
			{!! Form::text('admin', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Add User', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@stop