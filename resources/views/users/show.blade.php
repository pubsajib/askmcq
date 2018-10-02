@extends('layouts.admin')
@section('title', $user->name .' Details')
@section('styles')
@endsection
@section('breadcrumb')
	<a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-info pull-right btn-breadcrumb" title="Edit">Edit</a>
@endsection
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@if ($user)
				{{ $user }}
			@else
				<p class="text-center"><strong>Not Found!</strong></p>
			@endif
		</div>
	</div>
@endsection