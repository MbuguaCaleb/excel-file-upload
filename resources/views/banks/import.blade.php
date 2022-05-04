@extends('layouts.master')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card mt-4">
			<div class="card-header text-white bg-primary mb-3">
				Excel Upload
			</div>
			<div class="card-body">
				@if (session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
				@endif

				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif

				<form class="row g-3" action="{{route('upload-file')}}" method="post" enctype="multipart/form-data">

					@csrf
					<div class="mb-3">
						<label for="formFile" class="form-label">Default file input example</label>
						<input class="form-control" type="file" name="file" id="file">
					</div>
					<div class="col-auto">
						<button type="submit" class="btn btn-primary mb-3">Upload</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection