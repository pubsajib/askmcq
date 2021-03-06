<form action="{{ route('question.store') }}" method="post">
	@csrf
	<div class="questionWrapper">
		<input type="hidden" name="qtype" value="single">
		<input type="hidden" name="category" class="subcategory">
		<div class="question">
			<div class="highlight-title no-margin"> <div class="title">Your Question</div> </div>
			<textarea name="question" class="form-control"></textarea> <br>
			<div class="highlight-title no-margin"> <div class="title">Options</div> </div>
			<input type="hidden" name="options" class="options questionOptions" value="">
			<input type="hidden" name="answer" class="optionsAnswer" value="">
			<div class="questions no-padding">
				<div class="single-question"> 
					<ul></ul> 
					<h6 class="text-center emptyOptionsMessage">Please add option using <strong class="text-danger addNewOption">Add Options</strong> button</h6>
				</div>
				<div class="answer">
					<div class="row">
						<div class="col-sm-9"> {{-- <p>Answer: <span class="currect-answer"></span> </p> --}} </div>
						<div class="col-sm-3"> <p class="text-right"><a class="addNewOption" href="javascript:;">Add Options</a></p> </div>
					</div>
				</div>
			</div>
			<div class="highlight-title white no-margin"> <div class="title">Explanation</div> </div>
			<textarea name="explanation" class="form-control"></textarea><br>
			<div class="highlight-title no-margin"> <div class="title">Direction to Solve</div> </div>
			<textarea name="direction" class="form-control"></textarea>
		</div>
	</div>
	<div class="editor-button">
		<button type="submit" name="type" value="saved" class="btn btn-theme gray carve-left">Save</button>
		<button type="submit" name="type" value="submited" class="btn btn-theme carve-right">Submit</button>
	</div>
</form>