@extends('layouts.master')

@section('content')
	<h1>{{ $item->name }}</h1>
	<br>

	<h4>Brand:</h4>
	<p><a href="{!! route('admin.brands.show') !!}">{{ $item->brand_id }}</a></p>
	<br>

	<h4>Consigner:</h4>
	<p><a href="/users/{{ $item->user_id }}">{{ $item->user_id }}</a></p>
	<br>

	<h4>Description:</h4>
	<p>{{ $item->description }}</p>
	<br>

	<h4>Price:</h4>
	<p>$ {{ $item->price }}</p>
	<br>
@stop