@extends('layouts.header')

@section('title', 'Update Movie')

@section('buttons')
	<hr/>
	<a class="btn btn-success" href="{{ action('HomeController@index') }}">Back</a>
@endsection

@section('add-movie')
	<br/>
	<div class="card text-center">
	  	<div class="card-header">
	    	<b>Edit movie</b>
	  	</div>
	  	<div class="card-body">		  		
	    	<form action="{{ action('HomeController@update', ['id' => $movie->id]) }}" method="post" accept-charset="utf-8">
	    		@csrf
	    		@method('patch')
				<div class="form-group row">
			    	<label for="movie_name" class="col-sm-2 col-form-label">Movie Name</label>
    				<div class="col-sm-10">
      				<input type="text" class="form-control" name="movie_name" placeholder="Movie Name" value="{{ $movie->title }}">
    				</div>
			  	</div>
				<div class="form-group row">
			    	<label for="director" class="col-sm-2 col-form-label">Director</label>
    				<div class="col-sm-10">
      				<input type="text" class="form-control" name="director" placeholder="Director" value="{{ $movie->director }}">
    				</div>
			  	</div>
				<div class="form-group row">
			    	<label for="main_actor" class="col-sm-2 col-form-label">Main Actor</label>
    				<div class="col-sm-10">
      				<input type="text" class="form-control" name="main_actor" placeholder="Main Actor" value="{{ $movie->main_actor }}">
    				</div>
			  	</div>
				<div class="form-group row">
			    	<label for="company" class="col-sm-2 col-form-label">Production Company</label>
    				<div class="col-sm-10">
      				<input type="text" class="form-control" name="company" placeholder="Production Company" value="{{ $movie->production_company }}">
    				</div>
			  	</div>
				<div class="form-group row">
			    	<label for="released_date" class="col-sm-2 col-form-label">Released Date</label>
    				<div class="col-sm-10">
      				<input type="text" class="form-control" name="released_date" placeholder="Released Date" value="{{ $movie->released_date }}">
    				</div>
			  	</div>
		  		<input type="reset" name="reset" value="Reset" class="btn btn-danger float-right" />
		  		<input type="submit" name="submit" value="Submit" class="btn btn-primary float-right" />
  			</form>
	  	</div>
	</div>
@endsection
