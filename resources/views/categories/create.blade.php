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
							<label for="">BIO</label>
							<textarea name="bio" class="form-control" rows="3"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">Type of experience</label>
							<input type="file" name="image" class="form-control">
						</div>
					</div>
					<div class="col-sm-12 text-right">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
				
				
			
			</form>
		</div>
	</div>
@endsection