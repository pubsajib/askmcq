<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller {
	public function __construct() {
        $this->middleware('auth', ['except' => ['terms', 'privacypolicy']]);
    }
    public function report(Request $request, $question) {
    	return view('pages.report');
    }
    public function answer(Request $request, $question) {
    	return view('pages.answer');
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