<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Group;

class GroupController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $groups = Group::All();
        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $rootCats = Category::where('parent', '0')->get();
        return view('groups.create', compact('rootCats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'parent' => 'nullable',
        ]);

        $group = new Group;
        $group->name = $request->name;
        $group->parent = $request->parent ? $request->parent : '0';
        $group->description = $request->description;

        $group->save();
        return redirect()->route('group.show', $group->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $group = Group::with('categories')->find($id);
        return view('groups.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $group = Group::find($id);
        $rootCats = Category::where('parent', '0')->get();
        return view('groups.edit', compact('group', 'rootCats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $group = Group::find($id);
        $request->validate([
            'name' => 'required',
            'parent' => 'nullable',
        ]);
        // dd($request->parent);
        $group->name = $request->name;
        $group->parent = $request->parent ? $request->parent : '0';
        $group->description = $request->description;

        $group->save();

        return redirect()->route('group.show', $group->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group) {
        // DETACH ALL CHILD CATEGORIES IF ANY

        // DELETE THE CATEGORY
        // $group = Group::find($id);
        $deleted = $group->delete();
        // return json_encode($deleted);
        return $group->id;
    }
}
