<div class="questions">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div id="tab-container" class="tab-container">
                    <!-- <div class="question-header"> -->
                        <ul class="etabs">
                            <li class="tab"><a href="#question" class="btn carve-left">Latest Question</a></li>
                            <li class="tab"><a href="#answer" class="btn gray carve-right">Latest Answer</a></li>
                        </ul>
                    <!-- </div> -->
                    <div id="question">
                        @if ($questions)
                            @foreach ($questions as $questionSN => $question)
                                <div class="single-question">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="question-number">
                                                <h3>Question: <strong>{{ $questionSN + 1 }}</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="question-meta">
                                                <div class="date">
                                                    <p><span class="fa fa-calendar-o"></span> {{ $question->created_at }}</p>
                                                </div>
                                                <div class="author">
                                                    <p><span class="fa fa-user-circle-o"></span> <a href="{{ route('profile.show', $question->user->id) }}">{{ $question->user->name }}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12"> 
                                            <h3 class="title">{{ $question->question }}</h3>
                                            @if ($options = options($question))
                                                <p>Select the correct answer</p>
                                                <ul>
                                                    @foreach ($options as $optionSN => $option)
                                                        <li>
                                                            <input type="radio" name="options">
                                                            <label for="option-{{ $optionSN }}">{{ $alphabets[$optionSN] }}</label>
                                                            <span>{{ $option }}</span>
                                                            <div class="check"></div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="single-footer">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <span><img src="{{ asset('images/icon/icon-3.png') }}" alt=""> <a href="{{ route('discussion', $question->id) }}">Explanation & discussion</a></span>
                                            <span><img src="{{ asset('images/icon/icon4.png') }}" alt=""> <a href="{{ route('report', $question->id) }}">Report</a></span>
                                        </div>
                                        <div class="col-sm-3">
                                            <a href="{{ route('answer', $question->id) }}" class="btn btn-theme lg block carve-left">Answer it</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <div id="answer">
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
                                                <input type="radio" id="option-aaaa" name="selector">
                                                <label for="option-aaaa">A</label>
                                                <span>Charles Wright Mills</span>
                                                <div class="check"></div>
                                            </li>

                                            <li>
                                                <input type="radio" id="option-bbbb" name="selector">
                                                <label for="option-bbbb">B</label>
                                                <span>Charles Wright Mills</span>
                                                <div class="check"><div class="inside"></div></div>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <input type="radio" id="option-cccc" name="selector">
                                                <label for="option-cccc">C</label>
                                                <span>Charles Wright Mills</span>
                                                <div class="check"></div>
                                            </li>

                                            <li>
                                                <input type="radio" id="option-dddd" name="selector">
                                                <label for="option-dddd">D</label>
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
                                    <span><img src="{{ asset('images/icon/icon-3.png') }}" alt=""> <a href="#">Explanation & discussion</a></span>
                                    <span><img src="{{ asset('images/icon/icon4.png') }}" alt=""> <a href="#">Report</a></span>
                                </div>
                                <div class="col-sm-3">
                                    <a href="#" class="btn btn-theme lg block carve-left">Answer it</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            <!-- Ads Widget -->
            <div class="col-sm-3">
                <div class="separator"></div>
                <div class="ads-widget">
                    <div class="ads">
                        <img src="{{ asset('images/ads.jpg') }}" alt="">
                    </div>
                    <div class="ads">
                        <img src="{{ asset('images/ads.jpg') }}" alt="">
                    </div>
                    <div class="ads">
                        <img src="{{ asset('images/ads.jpg') }}" alt="">
                    </div>
                    <div class="ads">
                        <img src="{{ asset('images/ads.jpg') }}" alt="">
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
<!-- / Questions -->