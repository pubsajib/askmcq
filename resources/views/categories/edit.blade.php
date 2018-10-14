@extends('layouts.admin')
@section('title', 'Edit '. $category->name)
@section('styles')
@endsection
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form action="{{ route('category.update', $category->id) }}" method="post" role="form">
				@method('PATCH')
        		@csrf
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" name="name" value="{{ $category->name }}" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Parent</label>
							<select name="parent" class="form-control" required="required"{{ $hasSubCategories ? ' disabled' : ''}}>
								<option value="0"> Main </option>
								@foreach ($rootCats as $rootCat)
									@if ($category->id != $rootCat->id)
										<option value="{{ $rootCat->id }}" {{ $category->parent == $rootCat->id ? ' selected ' : '' }}> {{ $rootCat->name }} </option>
									@endif
								@endforeach
							</select>
							<small class="text-info">{{ $hasSubCategories ? ' Parent of sub categories' : ''}}</small>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							{{-- {{ $hasSubCategories }} --}}
							<label for="">Description</label>
							<textarea name="description" class="form-control" rows="3"> {{ $category->description }} </textarea>
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