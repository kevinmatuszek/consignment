@extends('layouts.master')

@section('content')
	<h1>Items Index</h1>
	<br>

	<table class="table table-striped">
		<th>Item</th>
		<th>User ID</th>
		<th>Brand ID</th>
		<th>Category ID</th>
		<th>Name</th>
		<th>Description</th>
		<th>Price</th>

		@foreach ($items as $item)
			<tr>
				<td><a href="{!! route('admin.items.show', [$item]) !!}">{{ $item->getName() }}</a></td>
				<td><a href="{!! route('admin.users.show', [$item]) !!}">{{ $item->user_id }}</a></td>
				<td><a href="{!! route('admin.brands.show', [$item]) !!}">{{ $item->brand_id }}</a></td>
				<td><a href="{!! route('admin.categories.show', [$item]) !!}">{{ $item->category_id }}</a></td>
				<td>{{ $item->name }}</td>
				<td>{{ $item->description }}</td>
				<td>$ {{ $item->price }}</td>
			</tr>
		@endforeach
	</table>
@stop