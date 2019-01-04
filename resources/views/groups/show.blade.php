@extends('layouts.admin')
@section('title', $group->name .' Group Details')
@section('styles')
<link href="{{ asset('backend/css/profile.css') }}" rel="stylesheet">
@endsection
@section('breadcrumb')
	<a href="{{ route('group.edit', $group->id) }}" class="btn btn-sm btn-info pull-right btn-breadcrumb" title="Edit">Edit</a>
@endsection
@section('content')
	@if ($group)
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr> <th> Name </th> <td> {{ $group->name }} </td></tr>
						<tr> <th> Description </th> <td> {{ $group->description }} </td> </tr>
						<tr> 
							<th> Categories </th> 
							<td>  
								@if (!$group->categories->isEmpty())
									<ul class="list-unstyled">
										@foreach ($group->categories as $category)
											<li>{{ $category->name }}</li>
										@endforeach
									</ul>
								@endif
							</td> 
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	@else
		<p class="text-center"><strong>Not Found!</strong></p>
	@endif
@endsection