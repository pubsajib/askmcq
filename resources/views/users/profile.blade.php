@extends('layouts.user')
@section('content')
<!-- Main Wrapper -->
<div class="wrapper no-padding">
	<!-- Profile -->
	<div class="single-profile">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="profile-image">
						@if ($user->image)
							<img src="{{ asset('images/users/'. $user->image) }}" alt="user image">
						@else
							<img src="{{ asset('images/profile-img.png') }}" alt="user image" />
						@endif
					</div>
				</div>
				<div class="col-sm-9">
					<div class="profile-info">
						<div class="name">
							{{ $user->name }} 
							@if ($user->is_active)
								<span class="verify"><span class="fa fa-check-circle-o"></span> VERIFIED</span>
							@endif
						</div>
						<div class="bio">{{ $user->bio }}</div>
						<div class="view">
							<p><span class="fa fa-calendar"></span> 100,548 Views in last 30 days</p>
							<p><span class="fa fa-line-chart"></span> 104,692 Lifetime Views</p>
						</div>
						<div class="follow">
							<a href="#" class="btn btn-theme pill">FOLLOW</a>
						</div>
						<div class="option">
							<ul>
								<li><a href="#">18 Saved MCQ</a></li>
								<li class="active"><a href="#">{{ published($user) }} Question</a></li>
								<li><a href="#">6 Answer</a></li>
								<li><a href="#">2 Following</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- / Profile -->
	<!-- Questions -->
	<div class="questions padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					@if ($user->questions)
						<div id="question">
							@foreach ($user->questions as $key => $question)
								<div class="single-question">
									<div class="row">
										<div class="col-sm-7">
											<div class="question-number">
												<h3>Question: <strong>{{ $key + 1 }}</strong></h3>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="question-meta">
												<div class="date">
													<p><span class="fa fa-calendar-o"></span> {{ $question->created_at }}</p>
												</div>
												<div class="author">
													<p><span class="fa fa-user-circle-o"></span> <a href="#">{{ $user->name }}</a></p>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">	
											<h3 class="title">{{ $question->question }}</h3>
											@if ($options = options($question))
												<p>Select the correct answer</p>
												<ul>
													@foreach ($options as $optionSN => $option)
														<li>
															<input type="radio" name="options">
															<label for="option-{{ $optionSN }}">{{ $alphabets[$optionSN] }}</label>
															<span>{{ $option }}</span>
															<div class="check"></div>
														</li>
													@endforeach
												</ul>
											@endif
										</div>
									</div>
								</div>
								<div class="single-footer">
									<div class="row">
										<div class="col-sm-9">
											<span><img src="images/icon/icon-3.png" alt=""> <a href="{{ route('discussion', $question->id) }}">Explanation & discussion</a></span>
											<span><img src="images/icon/icon4.png" alt=""> <a href="{{ route('report', $question->id) }}">Report</a></span>
										</div>
										<div class="col-sm-3">
											<a href="{{ route('answer', $question->id) }}" class="btn btn-theme lg block carve-left">Answer it</a>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					@else
						<h3 class="text-center text-danger">Nothing Found!</h3>
					@endif
				</div>
				<!-- Ads Widget -->
				<div class="col-sm-3">
					<div class="ads-widget">
						<div class="ads">
							<img src="images/ads.jpg" alt="">
						</div>
						<div class="ads">
							<img src="images/ads.jpg" alt="">
						</div>
						<div class="ads">
							<img src="images/ads.jpg" alt="">
						</div>
						<div class="ads">
							<img src="images/ads.jpg" alt="">
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div><!-- / Questions -->
</div><!-- Main Wrapper -->
@endsection