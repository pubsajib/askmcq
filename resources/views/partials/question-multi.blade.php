<form action="{{ route('question.store') }}" method="post">
	@csrf
	<div class="highlight-title no-margin"> <div class="title">Title</div></div>
	<textarea name="title" class="form-control"></textarea> <br>
	<div class="highlight-title no-margin"> <div class="title">Direction to Solve</div> </div>
	<textarea name="direction"></textarea> <br> 
	<div class="highlight-title no-margin"> <div class="title">Your Question</div> </div>
	<textarea name="question" cols="30" rows="10" class="form-control"></textarea> <br>
	<div class="highlight-title no-margin"> <div class="title">Options</div> </div>
	<input type="hidden" name="options" class="options questionOptions" value="">
	<input type="hidden" name="answer" class="optionsAnswer" value="">
	<input type="hidden" name="subcategory" class="subcategory" value="">
	<div class="questions no-padding">
		<div class="single-question"> <ul></ul> </div>
		<div class="answer">
			<div class="row">
				<div class="col-sm-9"> <p>Answer: <span class="currect-answer"></span> </p> </div>
				<div class="col-sm-3"> <p class="text-right"><a class="addNewOption" href="javascript:;">Add Options</a></p> </div>
			</div>
		</div>
		<div class="highlight-title white no-margin"> <div class="title">Explanation</div> </div>
		<textarea name="explanation"></textarea>
	</div>
	<div class="editor-button">
		<button type="button" class="btn btn-theme gray carve-left">Save</button>
		<button type="submit" class="btn btn-theme carve-right">Submit</button>
	</div>
</form>