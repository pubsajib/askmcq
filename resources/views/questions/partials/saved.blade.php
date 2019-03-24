<div class="questions padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div id="question">
					@if ($user->savedQuestions->isEmpty())
						<h3 class="text-center text-danger">Nothing Found!</h3>
					@else
						@foreach ($user->savedQuestions as $key => $question)
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
										<span><img src="{{ asset('images/icon/icon-3.png') }}" alt=""> <a href="{{ route('discussion', $question->id) }}">Explanation & discussion</a></span>
										<span><img src="{{ asset('images/icon/icon4.png') }}" alt=""> <a href="{{ route('report', $question->id) }}">Report</a></span>
									</div>
									<div class="col-sm-3">
										<a href="{{ route('answer', $question->id) }}" class="btn btn-theme lg block carve-left">Answer it</a>
									</div>
								</div>
							</div>
						@endforeach
					@endif
				</div>
			</div>
			@include('questions.partials.sidebar')
		</div>
	</div>
</div><!-- / Questions -->