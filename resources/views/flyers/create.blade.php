@extends('layout')

@section('content')

	<h1>Selling your home?</h1>


	<form method="POST" action="/flyers" enctype="multipart/form-data">

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


@stop