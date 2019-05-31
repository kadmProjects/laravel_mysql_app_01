<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Laravel-app-01 - @yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
	<script src="{{ asset('js/app.js') }}" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<br>
				<h2>Laravel CRUD Application 01</h2>				
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				@yield('buttons')				
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				@yield('add-movie')				
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				@yield('movies')				
			</div>
		</div>
	</div>
</body>
</html>