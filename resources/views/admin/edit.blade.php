@extends('layouts.app')

@section('content')

	<form method="post" action="/stones/{{ $stone->id }}" enctype="multipart/form-data">
		@csrf
		@method('PUT')

		<a href="/stones" class="btn btn-secondary mb-5">Go back</a>

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
		
		
		<input class="mt-1" type="file" name="newImage" id="newImage"/><br>
		<a href="/stones" class="btn btn-secondary mt-5">Cancel</a>
		<button class="btn btn-primary mt-5" type="submit">Save</button>
		
	</form>

@endsection