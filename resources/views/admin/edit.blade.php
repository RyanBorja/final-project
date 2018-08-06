@extends('layouts.app')

@section('content')

	<form method="post" action="/stones/{{ $stone->id }}" enctype="multipart/form-data">
		@csrf
		@method('PUT')

		<a href="/stones" class="btn btn-secondary my-3">Go back</a>

		<div class="form-group">
			<label for="name">Stone Name</label>
			<input type="text" class="form-control" name="stoneName" id="name" value="{{ $stone->name }}">
		</div>

		<div class="form-group">
			<label for="description">Stone Description</label>
			<textarea class="form-control" id="description" name="stoneDescription" rows="3">{{ $stone->description }}</textarea>
		</div>

		<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="isStockFlag" name="isStock" {{ $stone->in_stock ? 'checked' : '' }}>
			<label class="form-check-label" for="isStockFlag">This stone is in stock</label>
		</div>

		<img src="{{ url($stone->path) }}" alt="material image" style="height:160px; overflow:hidden;"><br>
			
		<div class="text-left mt-3 p-4 border border-secondary">
			<label for="newImage">Replace the old photo here</label><br>
			<input type="file" name="newImage" id="newImage"/><br>
		</div>

		<div class=" mt-4 mb-4">
			<a href="/stones" class="btn btn-secondary mr-5 p-3 px-5">Cancel</a>
			<button class="btn btn-primary ml-5 p-3 px-5" type="submit">Save</button>
		</div>
	</form>

@endsection