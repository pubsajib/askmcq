tinymce.init({
			selector: 'textarea',
			branding: false,
			menubar : false,
			statusbar: false,
			forced_root_block : "",
			plugins: [ 'autosave', 'lists', 'autolink', 'link', 'image','code' ],
			toolbar: 'undo redo | styleselect | bold italic | link unlink image | alignleft aligncenter alignright outdent indent | bullist numlist | code',
		});
		jQuery(function($) {
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
				var optionTxt = $('.subCategoryRadio:checked').attr('txt');
				$('.choosenCategory').html('Selected category : <strong class="text-danger">'+ optionTxt +'</strong>');
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