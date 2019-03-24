@extends('layouts.user')
@section('content')
<!-- Main Wrapper -->
<div class="wrapper no-padding">
	<div class="single-profile">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="profile-image">
						@if ($user->image)
							<img src="{{ asset('images/users/'. $user->image) }}" alt="user image">
						@else
							<span class="fa fa-user circle-icon"></span>
							<a class="pill-sm edit" href="{{ route('profile.edit') }}">Edit <span class="fa fa-edit"></span></a>
							{{-- <img src="{{ asset('images/profile-img.png') }}" alt="user image" /> --}}
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
						<div class="bio">
							@if ($user->bio)
								{{ $user->bio }}
							@else
								<div class="bioInsert">
									<div class="defaultTxt">
										<span class="txt">Please insert your bio. </span>
										<a class="pill-sm edit" @click="bioInsert">Edit <span class="fa fa-edit"></span></a>
										<a class="pill-sm d-none done" @click="bioInserted"><span class="fa fa-check-circle-o"></span> Done</a>
									</div>
									<form @submit.prevent="bioInserted" class="d-none"><input type="text" class="form-control" placeholder="Example: MS in Economics"></form>
								</div>
							@endif
						</div>
						<div class="view">
							<p><span class="fa fa-calendar"></span> {{ $user->monthlyViews->count() }} Views in last 30 days</p>
							<p><span class="fa fa-line-chart"></span> {{ $user->views->count() }} Lifetime Views</p>
						</div>
						<div class="follow">
							@if (Route::currentRouteName() == 'profile.show' )
								<a href="#" class="btn btn-theme pill">FOLLOW</a>
							@else
								<a href="{{ route('question.ask') }}" class="btn btn-theme pill">ASKMCQ</a>
							@endif
						</div>
						<div class="option tabMenu">
							<ul>
								<li><a href="javascript:;" target=".saved">{{ $user->savedQuestions->count() }} Saved MCQ</a></li>
								<li class="active"><a href="javascript:;" target=".submited">{{ $user->submitedQuestions->count() }} Question</a></li>
								<li><a href="javascript:;" target=".answered">6 Answer</a></li>
								<li><a href="javascript:;" target=".following">2 Following</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- / Profile -->
	<!-- Questions -->
	<div class="tabContent saved">@include('questions.partials.submited')</div>
	<div class="tabContent submited active">@include('questions.partials.saved')</div>
	<div class="tabContent answered">answered</div>
	<div class="tabContent following">answered</div>
</div><!-- Main Wrapper -->
@endsection
@section('scripts')
<script>
jQuery(function($) {
	$(document).on('click', '.tabMenu li a', function(event) {
		event.preventDefault();
		var button = $(this);
		var activeItem = button.attr('target'); 
		// RESET ALL
		$('.tabMenu li').removeClass('active');
		$('.tabContent').removeClass('active');
		// ADD ACTIVE CLASS
		button.parents('li').addClass('active');
		$(activeItem).addClass('active');
	})
})
</script>
@endsection