<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Group;
class GroupController extends Controller {
    public function index() {
        $groups = Group::All();
        return view('groups.index', compact('groups'));
    }
    public function create() {
        return view('groups.create', compact('rootCats'));
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);
        $group = new Group;
        $group->name = $request->name;
        $group->description = $request->description;
        $group->save();
        return redirect()->route('group.show', $group->id);
    }
    public function show($id) {
        $group = Group::with('categories')->find($id);
        return view('groups.show', compact('group'));
    }
    public function edit($id) {
        $group = Group::find($id);
        return view('groups.edit', compact('group'));
    }
    public function update(Request $request, $id) {
        $group = Group::find($id);
        $request->validate([
            'name' => 'required',
        ]);
        $group->name = $request->name;
        $group->description = $request->description;
        $group->save();
        return redirect()->route('group.show', $group->id);
    }
    public function destroy(Group $group) {
        // DETACH ALL CHILD CATEGORIES IF ANY
        // DELETE THE CATEGORY
        $deleted = $group->delete();
        return $group->id;
    }
    public function categories(Group $group) {
        $group = Group::where('id', $group->id)->with('categories.subcategories')->firstOrFail()->toJson();
        // $group = ModalCategories($group);
        return $group;
    }
}