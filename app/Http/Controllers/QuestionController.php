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
            'category'    => 'required',
            'question.*'    => 'required',
            'options.*'     => 'nullable',
            'answer.*'      => 'nullable',
            'explanation.*' => 'nullable',
            'direction.*'   => 'nullable',
            'title'         => 'nullable',
        ]);
        // dd($request->questions);
        $userID = Auth::id();
        for ($i=0; $i < $request->questions; $i++) { 
            $question = new Question;

            $question->question         = $request->question[$i];
            $question->explanation      = $request->explanation[$i];
            $question->options          = rtrim($request->options[$i], ',');
            $question->answer           = $request->answer[$i] ? $request->answer[$i] : 1;
            $question->subcategory_id   = $request->category[$i];
            $question->user_id          = $userID;
            $question->direction        = $request->direction[$i];

            $question->title            = $request->title;
            $question->type             = $request->type == 'saved' ? 'saved' : 'submited';
            $question->published        = $request->published ? '1' : '1';

            $question->save();
        }
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
