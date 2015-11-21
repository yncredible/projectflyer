@extends('layout')

@section('content')

	<div class="row">

		<div class="col-md-6 col-md-offset-3">

			<h1>Login</h1>

			<hr>
		
			<form method="POST" action="/auth/login">

		    {!! csrf_field() !!}

			    <div class="form-group">
			        Email
			        <input class="form-control" type="email" name="email" value="{{ old('email') }}" required>
			    </div>

			    <div class="form-group">
			        Password
			        <input class="form-control" type="password" name="password" id="password" required>
			    </div>

			    <div class="form-group">
			        <input type="checkbox" name="remember"> Remember Me
			    </div>

			    <div class="form-group">
			        <button type="submit" class="btn btn-default">Login</button>
			    </div>

			</form>

			@if(count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

		</div>

	</div>

@stop