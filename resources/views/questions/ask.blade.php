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
	<script>
		tinymce.init({
			selector: 'textarea',
			branding: false,
			menubar : false,
			statusbar: false,
			forced_root_block : "",
			plugins: [ 'autosave', 'lists', 'autolink', 'link', 'image','code' ],
			toolbar: 'undo redo | styleselect | bold italic | link unlink image | alignleft aligncenter alignright outdent indent | bullist numlist | code',
		});
		jQuery(function() {
			// TEST DATA
			var alphabets = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
			var options = $('.questionOptions').val();
			// var nextIndex = 0;
			// console.log(options);
			// if (options.length > 0) {
			// 	options = options.split(',');
			// 	nextIndex = options.length;
			// }
			// alert(nextIndex);
			// console.log(typeof options, options);


			$(document).on('change', '.subCategoryRadio', function() {
				var subcategory = $(this).val();
				$('.subcategory').val(subcategory);
				$('#subCategoryModal').modal('hide');
			});

			$(document).on('change', '.radioOption', function() {
				var option = $(this).val();
				$('.optionsAnswer').val(option);
			});
			$(document).on('click', '.addNewOption', function() {
				$('#addOption').modal('show');
			});
			$(document).on('submit', '#addNewOptionForm', function(event) {
				event.preventDefault();
				var item = '';
				var newOption = $.trim($('#newOptionName').val());
				var options = $('.questionOptions').val();
				var nextIndex = 0;
				if (options.length > 0) {
					options = options.split(',');
					nextIndex = options.length -1;
				}
				if (newOption) {
					options += newOption +',';
					$('.emptyOptionsMessage').addClass('d-none');
					$('.questionOptions').val(options);
					item = '<li><input type="radio" name="option" class="radioOption" value="'+ newOption +'"> <label for="option-'+ alphabets[nextIndex] +'">'+ alphabets[nextIndex] +'</label> <span>'+ newOption +'</span> <small><span class="fa fa-check-circle-o"></span> Currect Answer</small> <div class="check"></div></li>';
					$('.single-question ul').append(item);
					$('#newOptionName').val('');
					$('#addOption').modal('hide');
				}
			});
		});
	</script>
@endsection
