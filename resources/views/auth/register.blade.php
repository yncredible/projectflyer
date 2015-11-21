@extends('layout')

@section('content')

	<div class="row">

		<div class="col-md-6 col-md-offset-3">

			<h1>Register</h1>

			<hr>
		
			<form method="POST" action="/auth/register">

		    {!! csrf_field() !!}

			    <div class="form-group">
			        Name
			        <input class="form-control" type="name" name="name" value="{{ old('name') }}" required>
			    </div>

			    <div class="form-group">
			        Email
			        <input class="form-control" type="email" name="email" value="{{ old('email') }}" required>
			    </div>

			    <div class="form-group">
			        Password
			        <input class="form-control" type="password" name="password" id="password" required>
			    </div>

			    <div class="form-group">
			        Confirm Password
			        <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" required>
			    </div>

			    <div class="form-group">
			        <button type="submit" class="btn btn-default">Register</button>
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