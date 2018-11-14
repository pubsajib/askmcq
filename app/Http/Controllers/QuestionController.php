<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Question;
use App\Group;

class QuestionController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {}
    public function create() {}
    public function store(Request $request) {
        $request->validate([
            'category' => 'required',
            'question' => 'required',
            'options' => 'nullable',
            'answer' => 'nullable',
            'explanation' => 'nullable',
            'direction' => 'nullable',
            'title' => 'nullable',
        ]);
        $userID = Auth::id();
        $question = new Question;

        $question->question         = $request->question;
        $question->explanation      = $request->explanation;
        $question->options          = rtrim($request->options, ',');
        $question->answer           = $request->answer ? $request->answer : 1;
        $question->subcategory_id   = $request->category;
        $question->user_id          = $userID;
        $question->title            = $request->title;
        $question->direction        = $request->direction;
        $question->direction        = $request->direction;
        $question->type             = $request->type == 'saved' ? 'saved' : 'submited';
        $question->published        = $request->published ? '1' : '1';

        $question->save();
        // return redirect()->back();
        return redirect()->route('profile');
    }
    public function show(Question $question) {}
    public function edit(Question $question) {}
    public function update(Request $request, Question $question) {}
    public function destroy(Question $question) {}
    public function ask() {
        $groups = Group::with('categories')->get();
        return view('questions.ask', compact('groups'));
    }

}
