<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\User;
use App\Role;

class RoleController extends Controller {
    public function index() {
        $users = User::all();
        return view('roles.index')->withUsers($users);
    }
    public function update(Request $request, $id) {
        $user = User::find($id);
    }
}
