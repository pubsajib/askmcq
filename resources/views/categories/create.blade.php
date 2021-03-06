@extends('layouts.admin')
@section('title', 'Create New')
@section('styles')
@endsection
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form action="{{ route('category.store') }}" method="post" role="form">
        		@csrf
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" name="name" value="" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Group</label>
							<select name="group" class="form-control" required="required">
								@foreach ($groups as $group)
									<option value="{{ $group->id }}"> {{ $group->name }} </option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">Description</label>
							<textarea name="description" class="form-control" rows="3"> </textarea>
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