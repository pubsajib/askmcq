@extends('layouts.admin')
@section('title', $subcategory->name .' Sub Category Details')
@section('styles')
<link href="{{ asset('backend/css/profile.css') }}" rel="stylesheet">
@endsection
@section('breadcrumb')
	<a href="{{ route('subcategory.edit', $subcategory->id) }}" class="btn btn-sm btn-info pull-right btn-breadcrumb" title="Edit">Edit</a>
@endsection
@section('content')
	@if ($subcategory)
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr> <th> Name </th> <td> {{ $subcategory->name }} </td></tr>
						<tr> 
							<th> Parent </th> 
							<td> 
								@if ($subcategory->category)
									{{ $subcategory->category->name }}
								@endif
							</td> 
						</tr>
						<tr> <th> Description </th> <td> {{ $subcategory->description }} </td> </tr>
					</tbody>
				</table>
			</div>
		</div>
	@else
		<p class="text-center"><strong>Not Found!</strong></p>
	@endif
@endsection