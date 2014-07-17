@extends('templates.default')

@section('content')
	
	{{ Form::open( ['route' => 'sessions.store'] ) }}
		<div>
			{{ Form::label('username', 'Username: ') }}
			{{ Form::text('username') }}
			{{ $errors->first('username') }}
		</div>
		<div>
			{{ Form::label('password', 'Password: ') }}
			{{ Form::password('password') }}
		</div>
		@if ($error = $errors->first('combination'))
		  <div class="alert alert-danger">
		    {{ $error }}
		  </div>
		@endif
		<div>{{ Form::submit('Login') }}</div>
	{{ Form::close() }}
@stop