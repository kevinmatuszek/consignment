@extends('layouts.master')

@section('content')
	<h1>{{ $user->first_name }} {{$user->last_name }}</h1>
	<br>

	<h4>Email:</h4>
	<p>{{ $user->email }}</p>
	<br>

	<h4>Admin:</h4>
	<p>{{ $user->admin }}</p>
	<br>
	
	<h4>Items:</h4>
	<table class="table table-striped">
		<th>Item</th>
		<th>Brand ID</th>
		<th>Description</th>
		<th>Price</th>

	@foreach($user->items as $item)
		<tr>
			<td><a href="{!! route('admin.items.show', [$item]) !!}">{{ $item->name }}</a></td>
			<td><a href="/brands/{{ $item->brand_id }}">{{ $item->brand_id }}</a></td>
			<td>{{ $item->description }}</td>
			<td>$ {{ $item->price }}</td>
		</tr>
	@endforeach
	</table>
@stop