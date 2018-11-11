@extends('layouts.user')
@section('content')
<!-- Main Wrapper -->
<div class="wrapper no-padding">
	<!-- Profile -->
	<div class="single-profile">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="profile-image">
						<img src="{{ asset('images/profile-img.png') }}" alt="" />
					</div>
				</div>
				<div class="col-sm-9">
					<div class="profile-info">
						<div class="name">Rajesh Lamba <span class="verify"><span class="fa fa-check-circle-o"></span> VERIFIED</span></div>
						<div class="bio">Master Degree from KUK. Having 6 years Experience in Competition exams.</div>
						<div class="view">
							<p><span class="fa fa-calendar"></span> 100,548 Views in last 30 days</p>
							<p><span class="fa fa-line-chart"></span> 104,692 Lifetime Views</p>
						</div>
						<div class="follow">
							<a href="#" class="btn btn-theme pill">FOLLOW</a>
						</div>
						<div class="option">
							<ul>
								<li><a href="#">18 Saved MCQ</a></li>
								<li class="active"><a href="#">18 Question</a></li>
								<li><a href="#">6 Answer</a></li>
								<li><a href="#">2 Following</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- / Profile -->
	<!-- Questions -->
	<div class="questions padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div id="question">
						<div class="single-question">
							<div class="row">
								<div class="col-sm-7">
									<div class="question-number">
										<h3>Question: <strong>01</strong></h3>
									</div>
								</div>
								<div class="col-sm-5">
									<div class="question-meta">
										<div class="date">
											<p><span class="fa fa-calendar-o"></span> 09/11/2018</p>
										</div>
										<div class="author">
											<p><span class="fa fa-user-circle-o"></span> <a href="#">Abraham Linkon</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">	
									<h3 class="title">Who was the founder of the sociology ?</h3>
									<p>Select the correct answer</p>
									<form action="" method="">
										<ul>
											<li>
												<input type="radio" id="option-a" name="selector">
												<label for="option-a">A</label>
												<span>Charles Wright Mills</span>
												<div class="check"></div>
											</li>

											<li>
												<input type="radio" id="option-b" name="selector">
												<label for="option-b">B</label>
												<span>Charles Wright Mills</span>
												<div class="check"><div class="inside"></div></div>
											</li>
										</ul>
										<ul>
											<li>
												<input type="radio" id="option-c" name="selector">
												<label for="option-c">C</label>
												<span>Charles Wright Mills</span>
												<div class="check"></div>
											</li>

											<li>
												<input type="radio" id="option-d" name="selector">
												<label for="option-d">D</label>
												<span>Charles Wright Mills</span>
												<div class="check"><div class="inside"></div></div>
											</li>
										</ul>
									</form>
								</div>
							</div>
						</div>
						<div class="single-footer">
							<div class="row">
								<div class="col-sm-9">
									<span><img src="images/icon/icon-3.png" alt=""> <a href="#">Explanation & discussion</a></span>
									<span><img src="images/icon/icon4.png" alt=""> <a href="#">Report</a></span>
								</div>
								<div class="col-sm-3">
									<a href="#" class="btn btn-theme lg block carve-left">Answer it</a>
								</div>
							</div>
						</div>
						<div class="single-question">
							<div class="row">
								<div class="col-sm-7">
									<div class="question-number">
										<h3>Question: <strong>01</strong></h3>
									</div>
								</div>
								<div class="col-sm-5">
									<div class="question-meta">
										<div class="date">
											<p><span class="fa fa-calendar-o"></span> 09/11/2018</p>
										</div>
										<div class="author">
											<p><span class="fa fa-user-circle-o"></span> <a href="#">Abraham Linkon</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">	
									<h3 class="title">Who was the founder of the sociology ?</h3>
									<p>Select the correct answer</p>
									<form action="" method="">
										<ul>
											<li>
												<input type="radio" id="option-aa" name="selector">
												<label for="option-aa">A</label>
												<span>Charles Wright Mills</span>
												<div class="check"></div>
											</li>

											<li>
												<input type="radio" id="option-bb" name="selector">
												<label for="option-bb">B</label>
												<span>Charles Wright Mills</span>
												<div class="check"><div class="inside"></div></div>
											</li>
										</ul>
										<ul>
											<li>
												<input type="radio" id="option-cc" name="selector">
												<label for="option-cc">C</label>
												<span>Charles Wright Mills</span>
												<div class="check"></div>
											</li>

											<li>
												<input type="radio" id="option-dd" name="selector">
												<label for="option-dd">D</label>
												<span>Charles Wright Mills</span>
												<div class="check"><div class="inside"></div></div>
											</li>
										</ul>
									</form>
								</div>
							</div>
						</div>
						<div class="single-footer">
							<div class="row">
								<div class="col-sm-9">
									<span><img src="images/icon/icon-3.png" alt=""> <a href="#">Explanation & discussion</a></span>
									<span><img src="images/icon/icon4.png" alt=""> <a href="#">Report</a></span>
								</div>
								<div class="col-sm-3">
									<a href="#" class="btn btn-theme lg block carve-left">Answer it</a>
								</div>
							</div>
						</div>
						<div class="single-question">
							<div class="row">
								<div class="col-sm-7">
									<div class="question-number">
										<h3>Question: <strong>01</strong></h3>
									</div>
								</div>
								<div class="col-sm-5">
									<div class="question-meta">
										<div class="date">
											<p><span class="fa fa-calendar-o"></span> 09/11/2018</p>
										</div>
										<div class="author">
											<p><span class="fa fa-user-circle-o"></span> <a href="#">Abraham Linkon</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">	
									<h3 class="title">Who was the founder of the sociology ?</h3>
									<p>Select the correct answer</p>
									<form action="" method="">
										<ul>
											<li>
												<input type="radio" id="option-aaa" name="selector">
												<label for="option-aaa">A</label>
												<span>Charles Wright Mills</span>
												<div class="check"></div>
											</li>

											<li>
												<input type="radio" id="option-bbb" name="selector">
												<label for="option-bbb">B</label>
												<span>Charles Wright Mills</span>
												<div class="check"><div class="inside"></div></div>
											</li>
										</ul>
										<ul>
											<li>
												<input type="radio" id="option-ccc" name="selector">
												<label for="option-ccc">C</label>
												<span>Charles Wright Mills</span>
												<div class="check"></div>
											</li>

											<li>
												<input type="radio" id="option-ddd" name="selector">
												<label for="option-ddd">D</label>
												<span>Charles Wright Mills</span>
												<div class="check"><div class="inside"></div></div>
											</li>
										</ul>
									</form>
								</div>
							</div>
						</div>
						<div class="single-footer">
							<div class="row">
								<div class="col-sm-9">
									<span><img src="images/icon/icon-3.png" alt=""> <a href="#">Explanation & discussion</a></span>
									<span><img src="images/icon/icon4.png" alt=""> <a href="#">Report</a></span>
								</div>
								<div class="col-sm-3">
									<a href="#" class="btn btn-theme lg block carve-left">Answer it</a>
								</div>
							</div>
						</div>
					</div>
				</div>
					
				<!-- Ads Widget -->
				<div class="col-sm-3">
					<div class="ads-widget">
						<div class="ads">
							<img src="images/ads.jpg" alt="">
						</div>
						<div class="ads">
							<img src="images/ads.jpg" alt="">
						</div>
						<div class="ads">
							<img src="images/ads.jpg" alt="">
						</div>
						<div class="ads">
							<img src="images/ads.jpg" alt="">
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div><!-- / Questions -->
</div><!-- Main Wrapper -->
@endsection