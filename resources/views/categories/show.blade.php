@extends('layouts.admin')
@section('title', $category->name .' Category Details')
@section('styles')
<link href="{{ asset('backend/css/profile.css') }}" rel="stylesheet">
@endsection
@section('breadcrumb')
	<a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-info pull-right btn-breadcrumb" title="Edit">Edit</a>
@endsection
@section('content')
	@if ($category)
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr> <th> Name </th> <td> {{ $category->name }} </td></tr>
						<tr> 
							<th> Parent </th> 
							<td> 
								@if ($parentCat)
									{{ $parentCat->name }}
								@else
									Main
								@endif
							</td> 
						</tr>
						<tr> <th> Description </th> <td> {{ $category->description }} </td> </tr>
					</tbody>
				</table>
			</div>
		</div>
	@else
		<p class="text-center"><strong>Not Found!</strong></p>
	@endif
@endsection