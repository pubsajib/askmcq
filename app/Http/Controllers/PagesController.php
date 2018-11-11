<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PagesController extends Controller {
    public function report(Request $request, $question) {
    	return view('pages.report');
    }
    public function answer(Request $request, $question) {
    	return view('pages.answer');
    }
    public function discussion(Request $request, $question) {
    	return view('pages.discussion');
    }
}