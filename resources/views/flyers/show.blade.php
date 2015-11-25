@extends('layout')

@section('content')

	<div class="row">
		<div class="col-md-4">

			<h1>{!! $flyer->street !!}</h1>
			<h2>{!! $flyer->price !!}</h2>

			<hr>

			<div class="description">{!! nl2br($flyer->description) !!}</div>

		</div>

		<div class="col-md-8 gallery">
			@foreach ($flyer->photos->chunk(4) as $set)
				<div class="row">
					@foreach ($set as $photo)
						<div class="col-md-3 gallery__image">
							<img src="/{{ $photo->thumbnail_path }}" alt="">
						</div>
					@endforeach
				</div>
			@endforeach
		</div>
<!-- 
		<div class="col-md-8">
			@foreach($flyer->photos as $photo)
				<img src="/{{ $photo->thumbnail_path }}">
			@endforeach
		</div>
 -->		
	</div>

	<hr>

	<h2>Add photos here</h2>

	<form id="addPhotosForm" action="/{{ $flyer->zip }}/{{ $flyer->street }}/photos" method="POST" class="dropzone">
		{{ csrf_field() }}
	</form>

@stop

@section('scripts.footer')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.js"></script>

	<script>

	Dropzone.options.addPhotosForm = {
		paramName: 'photo',
		maxFileSize: 3,
		acceptedFiles: '.jpg, .jpeg, .png',
	};

	</script>

@stop