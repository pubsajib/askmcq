<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Group;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $groups = Group::with('categories')->get();
        return view('welcome', compact('groups'));
    }
}
