<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\User;
use App\Qusetion;
use Session;
use Image;
use File;
use Auth;
class UserController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        $users = User::all();
        return view('users.index')->withUsers($users);
    }
    public function activeUsers() {
        $users = User::where('is_active', '1')->get();
        return view('users.status')->withUsers($users);
    }
    public function inactiveUsers() {
        $users = User::where('is_active', '')->get();
        return view('users.status')->withUsers($users);
    }
    public function freezeUsers() {
        $users = User::where('is_active', '0')->get();
        return view('users.status')->withUsers($users);
    }
    public function show($id) {
        $user = User::where('id', $id)->first();
        $roles = ['editor', 'admin'];
        $user->verified = $user->hasAnyRole($roles);
        return view('users.show')->withUser($user);
    }
    public function create() {
        return view('users.create');
    }
    public function store(Request $request) {
        // validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'bio' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,gif,svg|max:1024',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->bio = $request->bio;
        $user->password = bcrypt('123456');
        $user->email_verified_at = date('Y-m-d');
        // image
        if ( $request->hasFile('image') ) {
            $image = $request->file('image');
            $fileName = 'user-'. time() .'.'. $image->getClientOriginalExtension();
            $location = public_path('images/users/'. $fileName);
            $image->move($location, $fileName);
            $user->image    = $fileName;
        }
        $user->save();
        Session::flash('success', 'User added successfully.');
        return view('users.create');
    }
    public function edit($id) {
        $user = User::find($id);
        return view('users.edit')->withUser($user);
    }
    public function update(Request $request, $id) {
        $user = User::find($id);
        // validation
        $request->validate([
            'name'  => 'required|min:2',
            'email' => "required|email|unique:users,email,$id",
            // 'bio'   => 'sometimes|min:2',
            // 'image' => 'sometimes|image'
        ]);
        // image
        if ( $request->hasFile('image') ) {
            $image = $request->file('image');
            // dd($image->getClientOriginalName());
            $fileName = 'user-'. time() .'.'. $image->getClientOriginalExtension();
            $location = public_path('images/users/'. $fileName);
            Image::make($image)->resize(300, 300)->save($location);
            File::delete('images/'.$user->image);
            $user->image    = $fileName;
        }
        // save
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->bio          = $request->bio;
        $user->phone        = $request->phone;
        $user->profession   = $request->profession;
        $user->save();
        // Redirect
        return redirect()->route('user.show', $user->id);
    }
    public function destroy($id) {
        $user = User::find($id);    
        $user->delete();
    }
    public function updateStaush(Request $request, $id) {
        $data = [];
        $user = User::find($id);
        if ($user) {
            $user->is_active  = $request->is_active;
            $user->save();
            $data['status'] = 200;
            $data['message'] = 'Updated successfully.';
            return json_encode($data);
        }
        $data['status'] = 400;
        $data['message'] = 'Update failed.';
        return json_encode($data);
    }
    public function follow(int $profile) {
        $user = User::find($profile);
        if(! $user) return redirect()->back()->with('error', 'User does not exist.');

        $user->followers()->attach(auth()->user()->id);
        return redirect()->back()->with('success', 'Successfully followed the user.');
    }
    public function unFollow(int $profile) {
        $user = User::find($profile);
        if(! $user) return redirect()->back()->with('error', 'User does not exist.');
        $user->followers()->detach(auth()->user()->id);
        return redirect()->back()->with('success', 'Successfully unfollowed the user.');
    }
    public function followInfo(int $userId) {
        $user = User::find($userId);
        $followers = $user->followers;
        $followings = $user->followings;
        dd($followers, $followings);
    }
    public function bio(Request $request) {
        $request->validate(['bio' => 'required']);
        $user       = Auth::User();
        $user->bio  = $request->bio;
        $user->save();
        return $user->bio;
    }
}