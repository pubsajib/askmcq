<form action="{{ route('question.store') }}" method="post">
	@csrf
	<div class="highlight-title no-margin"> <div class="title">Title</div></div>
	<textarea name="title" class="form-control"></textarea>

	<div class="questionsWrapper">
		<input type="hidden" name="qtype" value="multi">
		<input type="hidden" name="mq_id" value="{{ $mq_id }}">
		<input type="hidden" name="questions" id="numberOfQuestions" value="1">
		<input type="hidden" name="category" class="subcategory">
		<div class="question">
			<input type="hidden" name="answer[]" class="optionsAnswer">
			<input type="hidden" name="options[]" class="options questionOptions">
			<div class="highlight-title no-margin row"> 
				<div class="title col-sm-6">Your Question</div> 
				<div class="col-sm-6 text-right"><a href="javascript:;" class="removeBtn"><span class="fa fa-trash"></span></a></div>
			</div>
			<div class="questionContainer">
				<textarea name="question[]" class="form-control"></textarea> <br>
				<div class="highlight-title no-margin"> <div class="title">Options</div> </div>
				<div class="questions no-padding">
					<div class="single-question"> 
						<ul></ul> 
						<h6 class="text-center emptyOptionsMessage">Please add option using <strong class="text-danger addNewOption">Add Options</strong> button</h6>
					</div>
					<div class="answer">
						<div class="row">
							<div class="col-sm-9"></div>
							<div class="col-sm-3"> <p class="text-right"><a class="addNewOption" href="javascript:;">Add Options</a></p> </div>
						</div>
					</div>
				</div>
				<div class="highlight-title no-margin"> <div class="title">Explanation</div> </div>
				<textarea name="explanation[]" class="form-control"></textarea><br>
				<div class="highlight-title no-margin"> <div class="title">Direction to Solve</div> </div>
				<textarea name="direction[]" class="form-control"></textarea>
			</div>
		</div>
	</div>
	<div class="editor-button">
		<button type="button" class="btn btn-theme addNewQuestinBtn" style="float:left">Add New</button>
		<button type="submit" name="type" value="saved" class="btn btn-theme gray carve-left">Save</button>
		<button type="submit" name="type" value="submited" class="btn btn-theme carve-right">Submit</button>
	</div>
</form>