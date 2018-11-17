@extends('layouts.user')
@section('title', 'ASK QUESTION')
@section('styles')
@endsection

@section('content')
	@include('partials/banner')
    @include('partials/breadcrumb')
    @include('partials/categories')
    <div class="question-submit">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="tab-container" class="tab-container">
						<ul class="etabs">
				    		<li class="tab"><a href="#single-question" class="btn lg gray">Single Question<br><img src="images/icon/info.png" alt=""></a></li>
				    		<li class="tab"><a href="#multi-question" class="btn lg gray">Multi Question<br><img src="images/icon/collaboration.png" alt=""></a></li>
						</ul>
						<div id="single-question"> @include('partials/question-single') </div>
						<div id="multi-question"> @include('partials/question-multi') </div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- / Question Submition -->
    @include('partials/modal-categories')
    @include('partials/modal-option')
@endsection
@section('scripts')
	<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
	<script src={{ asset('/js/questions.js') }}></script>
	<script>
		
	</script>
@endsection
