@extends('layouts.admin')
@section('title', 'Create New')
@section('styles')
@endsection
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form action="{{ route('user.store') }}" method="POST" role="form" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input type="email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Education</label>
							<input type="text" name="education" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Institution</label>
							<input type="text" name="institution" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Years of experience</label>
							<input type="text" name="exp_years" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Type of experience</label>
							<input type="text" name="exp_type" class="form-control">
						</div>
					</div>
					<div class="col-sm-6">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores saepe repudiandae, numquam cumque, qui distinctio est placeat delectus! Facilis minus dolorum cum molestiae odit ad sint vero libero voluptatum est.
					</div>
					<div class="col-sm-12 text-right">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
				
				
			
			</form>
		</div>
	</div>
@endsection