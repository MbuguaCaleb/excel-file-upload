@extends('layouts.master')

@section('content')

<div class="card mt-4">
	<div class="card-header text-white bg-primary mb-3">
		Excel Upload
	</div>
	<div class="card-body">

		<form class="row g-3" >

			<div class="mb-3">
				<label for="formFile" class="form-label">Default file input example</label>
				<input class="form-control" type="file" id="formFile">
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
			</div>
		</form>
	</div>
</div>
@endsection