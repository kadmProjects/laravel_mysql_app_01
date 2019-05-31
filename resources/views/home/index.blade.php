@extends('layouts.header')

@section('title', 'View Movies')

@section('buttons')
	<hr/>
	<a class="btn btn-success" href="{{ action('HomeController@create') }}">Add new movie</a>
@endsection

@section('movies')
	<br/>
	<table class="table table-striped table-hover">
		<caption>List of popular Movies</caption>
	  	<thead>
	    	<tr>
		      <th scope="col">#</th>
		      <th scope="col">Title</th>
		      <th scope="col">Director</th>
		      <th scope="col">Main Actor</th>
		      <th scope="col">Production Company</th>
		      <th scope="col">Released Date</th>
		      <th scope="col">Created At</th>
		      <th scope="col">Updated At</th>
		      <th scope="col">Action</th>
	    	</tr>
	  	</thead>
	  	<tbody>
			@foreach ($movies as $movie)
				<tr>
					<td scope="row">{{ $movie->id }}</td>
					<td>{{ $movie->title }}</td>
					<td>{{ $movie->director }}</td>
					<td>{{ $movie->main_actor }}</td>
					<td>{{ $movie->production_company }}</td>
					<td>{{ $movie->released_date }}</td>
					<td>{{ $movie->created_at }}</td>
					<td>{{ $movie->updated_at }}</td>						
					<td>
						<a class="btn btn-sm btn-info" href="{{ action('HomeController@edit', ['id' => $movie->id]) }}">Update</a>
						{{-- <a class="btn btn-sm btn-info" href="{{ route('edit', ['id' => $movie->id]) }}">Update</a> --}}
						<a class="btn btn-sm btn-success" href="{{ action('HomeController@show', ['id' => $movie->id]) }}">View</a>
						{{-- <a class="btn btn-sm btn-danger" href="{{ route('destroy', ['id' => $movie->id]) }}">Delete</a> --}}
						<form action="home/{{ $movie->id }}" method="post" accept-charset="utf-8">
							{{-- @method('DELETE') --}}
							@csrf
							@method('DELETE')
							{{-- {{ method_field('DELETE') }} --}}
							<button class="btn btn-sm btn-danger" type="submit">Delete</button>
						</form>
					</td>						
				</tr>	
			@endforeach
	  	</tbody>
	</table>
@endsection