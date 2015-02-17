@extends('layouts.master')

@section('content')
	<h1>Categories Index</h1>
	<br>

	<table class="table table-striped">
		<th>ID</th>
		<th>Name</th>

		@foreach ($categories as $category)
			<tr>
				<td><a href="/categories/{{ $category->id }}">{{ $category->id }}</a></td>
				<td>{{ $category->name }}</td>
			</tr>
		@endforeach
	</table>

@stop