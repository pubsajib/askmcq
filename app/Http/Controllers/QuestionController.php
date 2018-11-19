<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Question;
use App\Group;
use DB;

class QuestionController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {}
    public function create() {}
    public function store(Request $request) {
        if ($request->qtype == 'single') {
            $this->storeSingle($request);
        } else {
            $this->storeMulti($request);
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
        $result = DB::Table('questions')->select('mq_id')->orderBy('mq_id', 'desc')->first(); 
        $mq_id = $result->mq_id + 1;
        return view('questions.ask', compact('groups', 'mq_id'));
    }
    public function storeMulti($request) {
        $request->validate([
            'mq_id'         => 'required',
            'title'         => 'required',
            'category'      => 'required',
            'question.*'    => 'required',
            'options.*'     => 'nullable',
            'answer.*'      => 'nullable',
            'explanation.*' => 'nullable',
            'direction.*'   => 'nullable',
        ]);
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

            $question->q_type           = 'multi'; // FOR DENOTING MULTI QUESTION
            $question->mq_id            = $request->mq_id;
            $question->title            = $request->title;
            $question->type             = $request->type == 'saved' ? 'saved' : 'submited';
            $question->published        = $request->published ? '1' : '1';

            $question->save();
        }
    }
    public function storeSingle($request) {
        $request->validate([
            'category'    => 'required',
            'question'    => 'required',
            'options'     => 'nullable',
            'answer'      => 'nullable',
            'explanation' => 'nullable',
            'direction'   => 'nullable',
        ]);

        $userID = Auth::id();
        $question = new Question;

        $question->question         = $request->question;
        $question->explanation      = $request->explanation;
        $question->options          = rtrim($request->options, ',');
        $question->answer           = $request->answer ? $request->answer : 1;
        $question->subcategory_id   = $request->category;
        $question->user_id          = $userID;
        $question->direction        = $request->direction;

        $question->title            = $request->title;
        $question->type             = $request->type == 'saved' ? 'saved' : 'submited';
        $question->published        = $request->published ? '1' : '1';

        $question->save();
    }

}
