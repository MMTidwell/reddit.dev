{{-- this blade is very specific in what it needs --}}
@extends('layouts.master')

@section('content')
{{-- looking for email and password to verify in DB --}}
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
				{{-- porotects your site and DB --}}
				{{ csrf_field() }}
				<div class="form-group">
			    	<label for="email">Email:</label>
			    	<input type="text" class="form-control" name="email" value="{{ old('email') }}">
			  	</div>
				<div class="form-group">
			    	<label for="password">Password:</label>
			    	<input type="password" class="form-control" name="password">
			  	</div>
			  	<button type="submit" class="btn btn-success">Login</button>
			</form>
		</div>
	</div>

@stop