@extends('layouts.app')

@section('content')

	

	<form method="post" action="/stones" enctype="multipart/form-data" class="mb-5">
		@csrf
		<a href="/home" class="btn btn-secondary my-4">Go back</a>

		<div class="form-group mb-4">
			<label for="name" class="mb-2">Stone Name</label>
			<input type="text" class="form-control mb-4" name="stoneName" id="name" value="{{ old('stoneName') }}">
		</div>

		<div class="form-group mb-4">
			<label for="description" class="mb-2">Stone Description</label>
			<textarea class="form-control mb-4" id="description" name="stoneDescription" rows="3">{{ old('stoneDescription') }}</textarea>
		</div>

		<div class="form-group form-check mb-1">
			<input type="checkbox" class="form-check-input mb-4" id="isStockFlag" name="isStock" {{ old('isStock') ? 'checked' : '' }}>
			<label class="form-check-label mb-4" for="isStockFlag">This stone is in stock</label>
        </div>
        
        <input type="file" name="image" id="image"/>

		<div class="mt-5">
			<a href="/home" class="btn btn-secondary p-3 px-5 mr-5">Cancel</a>
			<button class="btn btn-primary p-3 px-5 ml-5" type="submit">Save</button>
		</div>
	</form>

@endsection