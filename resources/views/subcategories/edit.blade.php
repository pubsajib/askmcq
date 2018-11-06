@extends('layouts.admin')
@section('title', 'Edit '. $subcategory->name)
@section('styles')
@endsection
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form action="{{ route('subcategory.update', $subcategory->id) }}" method="post" role="form">
				@method('PATCH')
        		@csrf
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" name="name" value="{{ $subcategory->name }}" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Parent</label>
							<select name="category" class="form-control" required="required">
								@foreach ($categories as $category)
									<option value="{{ $category->id }}" {{ $category->id == $subcategory->category->id ? ' selected ' : '' }}> {{ $category->name }} </option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{{-- {{ $hasSubCategories }} --}}
							<label for="">Description</label>
							<textarea name="description" class="form-control" rows="3"> {{ $subcategory->description }} </textarea>
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