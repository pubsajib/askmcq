<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Profileview;
use App\User;
use Session;
use Image;
use File;
use Auth;
class ProfileController extends Controller {
    public $alphabets = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    public function __construct() {
        $this->middleware('auth')->except('show','incrementProfileView');
    }
    public function view() {
        $user_id = auth()->user()->id;
        $alphabets = $this->alphabets;
        $user = User::with('questions', 'views', 'monthlyViews')->find($user_id);
        $questions = filter_questions($user);
        return view('profile.show', compact('user', 'alphabets', 'questions'));
    }
    public function show(Request $request, $user_id=null) {
        $ip = request()->ip();
        // $ip = $_SERVER['DB_HOST']; // Should be removed for server
        $this->incrementProfileView($user_id, $ip);
        $alphabets = $this->alphabets;
        $user = User::with('questions')->find($user_id);
        $questions = filter_questions($user);
        return view('profile.show', compact('user', 'alphabets', 'questions'));
    }
    public function edit() {
        $alphabets = $this->alphabets;
        $user = User::with('questions')->find(auth()->user()->id);
        $questions = filter_questions($user);
        return view('profile.profile-edit', compact('user', 'alphabets', 'questions'));
    }
    public function update(Request $request) {
        $id = $request->user_id;
        // validation
        $request->validate([
            'name'  => 'required|min:2',
            'email' => "required|email|unique:users,email,$id",
            'bio'   => 'sometimes|min:2',
            // 'image' => 'sometimes|image'
        ]);
        // save
        $user = User::find($id);
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->bio          = $request->bio;
        $user->phone        = $request->phone;
        $user->profession   = $request->profession;
        $user->profession   = $request->profession;
        $user->image        = $request->image ? $request->image : null;
        $user->save();
        Session::flash('success', 'Updated.');
        // Redirect
        return redirect()->back();
    }
    public function password() {
        $alphabets = $this->alphabets;
        $user = Auth()->user()->id;
        $user = User::with('questions')->firstOrfail();
        $questions = filter_questions($user);
        return view('profile.password', compact('user', 'alphabets', 'questions'));
    }
    public function savePassword(Request $request) {
        $id = $request->user_id;
        dd($id);
        // validation
        $request->validate([
            'name'  => 'required|min:2',
            'email' => "required|email|unique:users,email,$id",
            'bio'   => 'sometimes|min:2',
            'image' => 'sometimes|image'
        ]);
        $user = User::find($id);
        return redirect()->back();
    }
    public function incrementProfileView($user_id, $ip) {
        if (auth()->check()) $viewer_id = auth()->user()->id;
        else $viewer_id = 0;
        if ($user_id == $viewer_id) return false;
        $profileView = Profileview::where('user_id', $user_id)->where('ip', $ip)->first();
        if (!$profileView) {
            $profileView = new Profileview;
            $profileView->user_id = $user_id;
            $profileView->ip = $ip;
            $profileView->viewer_id = $viewer_id;

            $profileView->save();
        }
    }
}