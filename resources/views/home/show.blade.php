@extends('layouts.header')

@section('title', 'Add Movie')

@section('buttons')
	<hr/>
	<a class="btn btn-success" href="{{ action('HomeController@index') }}">Back</a>
@endsection
 
@section('add-movie')
	<table class="table table-striped table-hover">
		<caption>Details of a single movie</caption>
		<thead>
			<tr>
				<th>
					<h3>{{ $movie->title }}</h3>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td scope="row">{{ $movie->id }}</td>
			</tr>
			<tr>
				<td scope="row">{{ $movie->director }}</td>
			</tr>
			<tr>
				<td scope="row">{{ $movie->main_actor }}</td>
			</tr>
			<tr>
				<td scope="row">{{ $movie->production_company }}</td>
			</tr>
			<tr>
				<td scope="row">{{ $movie->released_date }}</td>
			</tr>
		</tbody>
	</table>
@endsection 