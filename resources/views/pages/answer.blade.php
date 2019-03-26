@extends('layouts.user')
@section('title', 'ANSWER')
@section('styles')
@endsection

@section('content')
	@include('partials/banner')
    @include('partials/breadcrumb')
    <div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div id="question">
					@if (!$question)
						<h3 class="text-center text-danger">Nothing Found!</h3>
					@else
						<div class="mt-5">	
							<h3 class="title text-danger m-0">{{ $question->question }}</h3>
						</div>
			            <div class="card mt-3 tab-card">
			                <div class="card-header tab-card-header">
			                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
			                        <li class="nav-item">
			                            <a class="nav-link show active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Answers</a>
			                        </li>
			                        <li class="nav-item">
			                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false"><img src="{{ asset('images/icon/icon-3.png') }}" alt=""> Discussions</a>
			                        </li>
			                        <li class="nav-item">
			                            <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false"><img src="{{ asset('images/icon/icon4.png') }}" alt=""> Reports</a>
			                        </li>
			                    </ul>
			                </div>
			                <div class="tab-content" id="myTabContent">
			                	<div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
			                		<input type="hidden" name="answer" value="" class="optionsAnswer">
				                    <div class="questions" style="padding: 0">
										<div class="single-question box">
											@if ($options = options($question))
												<p>Select the correct answer</p>
												<ul class="questionAnswerRadio">
													@foreach ($options as $optionSN => $option)
														<li>
														    <label class="optionLabel" for="option-{{ $alphabets[$optionSN] }}">A</label> 
														    <span class="txt">{{ $option }}</span> 
														    <small class="selectedText"></small> 
														    <div class="check"></div>
														</li>
													@endforeach
												</ul>
											@else
												<h3 class="text-danger">No option given</h3>
											@endif
										</div>          
				                    </div>
			                    </div>
			                    <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
			                        <h5 class="card-title">Tab Card Two</h5>
			                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			                        <a href="#" class="btn btn-primary">Go somewhere</a>              
			                    </div>
			                    <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
			                        <h5 class="card-title">Tab Card Three</h5>
			                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			                        <a href="#" class="btn btn-primary">Go somewhere</a>              
			                    </div>
			                </div>
			            </div>
					@endif
				</div>
			</div>
			@include('questions.partials.sidebar')
		</div>
	</div>
@endsection
@section('scripts')
	<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
	<script src='{{ asset('js/questions.js') }}'></script>
	<script>
		
	</script>
@endsection
