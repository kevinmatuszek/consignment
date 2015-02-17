@extends('layouts.master')

@section('content')
	<h1>Brands Index</h1>
	<br>

	<table class="table table-striped">
		<th>ID</th>
		<th>Name</th>

		@foreach ($brands as $brand)
			<tr>
				<td><a href="/brands/{{ $brand->id }}">{{ $brand->id }}</a></td>
				<td>{{ $brand->name }}</td>
			</tr>
		@endforeach
	</table>
@stop