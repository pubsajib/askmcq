<form action="" method="">
	<div class="highlight-title no-margin"> <div class="title">Direction to Solve</div> </div>
	<textarea name="direction"></textarea>
	<br>
	<div class="highlight-title no-margin"> <div class="title">Your Question</div> </div>
	<textarea name="question" cols="30" rows="10" class="form-control"></textarea>
	<br>
	<div class="highlight-title no-margin"> <div class="title">Options</div> </div>
	<div class="questions no-padding questionOptions" options="{}">
		<div class="single-question">
			<ul>
				<li>
					<input type="radio" name="option" value="a">
					<label for="option-aa">A</label>
					<span>Charles Wright Mills</span>
					<small><span class="fa fa-check-circle-o"></span> Currect Answer</small>
					<div class="check"></div>
				</li>
				<li>
					<input type="radio" name="option" value="b">
					<label for="option-bb">B</label>
					<span>Charles Wright Mills</span>
					<small><span class="fa fa-check-circle-o"></span> Currect Answer</small>
					<div class="check"></div>
				</li>
			</ul>
			<ul class="d-none">
				<li>
					<input type="radio" name="option" value="c">
					<label for="option-cc">C</label>
					<span>Charles Wright Mills</span>
					<small><span class="fa fa-check-circle-o"></span> Currect Answer</small>
					<div class="check"></div>
				</li>
				<li>
					<input type="radio" name="option" value="d">
					<label for="option-dd">D</label>
					<span>Charles Wright Mills</span>
					<small><span class="fa fa-check-circle-o"></span> Currect Answer</small>
					<div class="check"></div>
				</li>
			</ul>
		</div>
		<div class="answer">
			<div class="row">
				<div class="col-sm-9">
					<p>Answer: 
						<span class="currect-answer"></span>
					</p>
				</div>
				<div class="col-sm-3">
					<p class="text-right"><a class="addNewOption" href="javascript:;">Add More Options</a></p>
				</div>
			</div>
		</div>
		<div class="highlight-title white no-margin">
			<div class="title">Explanation</div>
		</div>
		<textarea id="explanation-one"></textarea>
	</div>
	<div class="editor-button">
		<button type="button" class="btn btn-theme gray carve-left">Save</button>
		<button type="submit" class="btn btn-theme carve-right">Submit</button>
	</div>
</form>