@extends('layouts.admin')
@section('title', 'Edit '. $group->name)
@section('styles')
@endsection
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form action="{{ route('group.update', $group->id) }}" method="post" role="form">
				@method('PATCH')
        		@csrf
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" name="name" value="{{ $group->name }}" class="form-control">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">Description</label>
							<textarea name="description" class="form-control" rows="3"> {{ $group->description }} </textarea>
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