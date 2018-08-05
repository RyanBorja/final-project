@extends('layouts.app')

@section('content')

	

	<form method="post" action="/stones" enctype="multipart/form-data">
		@csrf
		<a href="/home" class="btn btn-secondary mb-5">Go back</a>

		<div class="form-group">
			<label for="name">Stone Name</label>
			<input type="text" class="form-control" name="stoneName" id="name" value="{{ old('stoneName') }}">
		</div>

		<div class="form-group">
			<label for="description">Stone Description</label>
			<textarea class="form-control" id="description" name="stoneDescription" rows="3">{{ old('stoneDescription') }}</textarea>
		</div>

		<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="isStockFlag" name="isStock" {{ old('isStock') ? 'checked' : '' }}>
			<label class="form-check-label" for="isStockFlag">This stone is in stock</label>
        </div>
        
        <input type="file" name="image" id="image"/>

		<a href="/home" class="btn btn-secondary">Cancel</a>
		<button class="btn btn-primary" type="submit">Save</button>

	</form>

@endsection