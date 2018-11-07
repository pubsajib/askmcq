<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Group;

class QuestionController extends Controller {
    public function index() {}
    public function create() {}
    public function store(Request $request) {}
    public function show(Question $question) {}
    public function edit(Question $question) {}
    public function update(Request $request, Question $question) {}
    public function destroy(Question $question) {}
    public function ask() {
        $groups = Group::with('categories')->get();
        return view('questions.ask', compact('groups'));
    }

}
