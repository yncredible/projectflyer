@extends('layout')

@section('content')

	<h1>Selling your home?</h1>

	<div class="row">

	<form method="POST" action="/flyers" enctype="multipart/form-data" class="col-md-6">

		@if (count($errors) > 0)

			<div class="alert alert-danger">
				
				<ul>
					
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach

				</ul>

			</div>

		@endif


		@include('flyers.form')

	</form>

	</div>

@stop