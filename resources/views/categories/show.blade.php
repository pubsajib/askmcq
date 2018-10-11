@extends('layouts.admin')
@section('title', $user->name .' Details')
@section('styles')
<link href="{{ asset('backend/css/profile.css') }}" rel="stylesheet">
@endsection
@section('breadcrumb')
	<a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-info pull-right btn-breadcrumb" title="Edit">Edit</a>
@endsection
@section('content')
	@if ($user)
		{{-- {{$user}} --}}
		<div class="row single-profile" style="background-image: url({{ asset('images/profile.jpg') }})">
			<div class="col-sm-3">
				<div class="profile-image">
					@if ($user->image)
						<img src="{{ asset('images/users/'.$user->image) }}" alt="{{ $user->name }} image">
					@else
						<img src="{{ asset('images/users/profile-img.png') }}" alt="{{ $user->name }} image">
					@endif
				</div>
			</div>
			<div class="col-sm-9">
				<div class="profile-info">
					<div class="name">
						{{ $user->name }}
						@if ($user->verified)
							<span class="verify"><span class="fa fa-check-circle-o"></span> VERIFIED</span>
						@endif
					</div>
					<div class="bio">{{ $user->bio }}</div>
					<div class="view">
						<p><span class="fa fa-calendar"></span> 100,548 Views in last 30 days</p>
						<p><span class="fa fa-line-chart"></span> 104,692 Lifetime Views</p>
					</div>
					<div class="option">
						<ul>
							<li><a href="#">18 Saved MCQ</a></li>
							<li><a href="#">18 Question</a></li>
							<li><a href="#">6 Answer</a></li>
							<li><a href="#">2 Following</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	@else
		<p class="text-center"><strong>Not Found!</strong></p>
	@endif
@endsection