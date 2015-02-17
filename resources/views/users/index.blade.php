@extends('layouts.master')

@section('content')
	<h1>Users Index</h1>
	<br>
	
	<table class="table table-striped">
		<th>Name</th>
		<th>Email</th>

		@foreach($users as $user)
			<tr>
				<td><a href="{!! route('admin.users.show', [$user]) !!}">{{ $user->getFullName() }}</a></td>
				<td>{{ $user->email }}</td>
			</tr>
		@endforeach
	</table>
@stop