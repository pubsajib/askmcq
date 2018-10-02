@extends('layouts.admin')
@section('title', 'Edit : '. $user->name)
@section('styles')
@endsection
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form action="{{ route('user.update', $user->id) }}" method="PATCH" role="form" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">label</label>
					<input type="text" class="form-control" id="" placeholder="Input field">
				</div>
			
				
			
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
				{{ $user }}
		</div>
	</div>
@endsection