@extends('layouts.master')

@section('content')
	<h1>{{ $category->name }}</h1>
	<br>

	<h4>Items in Stock:</h4>
	<table class="table table-striped">
	<th>Item ID</th>
	<th>User ID</th>
	<th>Name</th>
	<th>Description</th>
	<th>Price</th>

	@foreach ($category->items as $item)
		<tr>
			<td><a href="/items/{{ $item->id }}">{{ $item->id }}</a></td>
			<td><a href="/users/{{ $item->user_id }}">{{ $item->user_id }}</a></td>
			<td>{{ $item->name }}</td>
			<td>{{ $item->description }}</td>
			<td>$ {{ $item->price }}</td>
		</tr>
	@endforeach
	</table>
@stop