<?php
namespace App\Http\Controllers;
use App\User;
use App\Answer;
use App\Question;
use Illuminate\Http\Request;
class PageController extends Controller {
    public $alphabets = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
	public function __construct() {
        $this->middleware('auth', ['except' => ['terms', 'privacypolicy']]);
    }
    public function report(Request $request, $question) {
    	return view('pages.report');
    }
    public function answer(Request $request, $question) {
        $question = Question::with('answers', 'discussions', 'reports')->findOrFail($question);
        $alphabets = $this->alphabets;
        // dd($question);
    	return view('pages.answer', compact('question', 'alphabets'));
    }
    public function discussion(Request $request, $question) {
    	return view('pages.discussion');
    }
    public function terms() {
    	dd('var');
    	return view('pages.terms');
    }
    public function privacypolicy() {
    	return view('pages.privacypolicy');
    }
}