jQuery(function($) {
	var alphabets = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

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
		$('.question').removeClass('editing');
		$(this).parents('.question').addClass('editing');
		$('#addOption').modal('show');
	});
	$(document).on('click', '.addNewQuestinBtn', function() {
		$('#numberOfQuestions').val(parseInt($('#numberOfQuestions').val()) + 1);
		$('.question').first().clone().appendTo('.questionsWrapper');
	});
	$(document).on('click', '.optionLabel', function() {
		$(this).parents('.question').addClass('editing');
		$('.editing .single-question li').removeClass('active');
		$(this).parent().addClass('active');
		$('.editing .optionsAnswer').val($.trim($('.editing li.active .txt').text()));
		$('.question').removeClass('editing');
	});
	$(document).on('click', '.removeOption', function() {
		var items = questionOptions = '';
		var removeItem = $(this).parents('li').find('.txt').text();
		// OPTION ITEM AND ANSWERED ITEM RESET
		$(this).parents('.question').addClass('editing').find('.optionsAnswer').val('');

		// RESET THE OPTIONS INDEX
		var options = $('.editing .questionOptions').val();
		alert(options);
		options = options.replace(removeItem, '').replace(/^,|,$/g,'');
		if (options.length > 0) {
			options = options.split(',');
			for (var i = 0; i <= options.length - 1; i++) {
				if ($.trim(options[i])) {
					items += optionHtml(options[i], i);
					questionOptions += options[i] + ',';
				}
			}
		}
		$('.editing .single-question ul').html(items);
		$('.editing .questionOptions').val(questionOptions.replace(/^,|,$/g,''));
		$('.question').removeClass('editing');
	});
	$(document).on('submit', '#addNewOptionForm', function(event) {
		event.preventDefault();
		var item = '';
		var newOption = $.trim($('.newOptionName').val());
		var options = $('.editing .questionOptions').val().replace(/^,|,$/g,'');
		var nextIndex = 0;
		if (options.length > 0) {
			options = options.split(',');
			nextIndex = options.length;
		}
		if (newOption) {
			options += ',' +newOption +',';
			$('.emptyOptionsMessage').addClass('d-none');
			$('.editing .questionOptions').val(options);
			item = optionHtml(newOption, nextIndex);
			$('.editing .single-question ul').append(item);

			$('.newOptionName').val('');
			$('.question').removeClass('editing');
			$('#addOption').modal('hide');
		}
	});
	function optionHtml(newOption, nextIndex) {
		var item = null;
		item = '<li>'+ 
			// ' <input type="radio" class="radioOption" value="'+ newOption +'">'+
			' <label class="optionLabel" for="option-'+ alphabets[nextIndex] +'">'+ alphabets[nextIndex] +'</label>'+
			' <span class="txt">'+ newOption +'</span>'+
			' <small><span class="fa fa-check-circle-o"></span> Currect Answer</small>'+
			' <div class="check"></div>'+
			' <div class="fa fa-check-circle-o removeOption"></div>'+ 
		' </li>';
		return item;
	}
});
// tinymce.init({
// 	selector: 'textarea',
// 	branding: false,
// 	menubar : false,
// 	statusbar: false,
// 	forced_root_block : "",
// 	plugins: [ 'autosave', 'lists', 'autolink', 'link', 'image','code' ],
// 	toolbar: 'undo redo | styleselect | bold italic | link unlink image | alignleft aligncenter alignright outdent indent | bullist numlist | code',
// });