<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Group;
use App\Category;
class CategoryController extends Controller {
    public function index() {
        $categories = Category::with('subCategories')->get();
        return view('categories.index', compact('categories'));
    }
    public function create() {
        $groups = Group::All();
        return view('categories.create', compact('groups'));
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'group' => 'nullable',
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->group_id = $request->group ? $request->group : '1';
        $category->description = $request->description;
        $category->save();
        return redirect()->route('category.show', $category->id);
    }
    public function show($id) {
        $category = Category::with('group')->find($id);
        return view('categories.show', compact('category'));
    }
    public function edit($id) {
        $category = Category::with('group')->find($id);
        $groups = Group::All();
        return view('categories.edit', compact('category', 'groups'));
    }
    public function update(Request $request, $id) {
        $category = Category::find($id);
        $request->validate([
            'name' => 'required',
            'group' => 'nullable',
        ]);
        // dd($request->parent);
        $category->name = $request->name;
        $category->group_id = $request->group ? $request->group : '1';
        $category->description = $request->description;
        $category->save();
        return redirect()->route('category.show', $category->id);
    }
    public function destroy(Category $category) {
        // DETACH ALL CHILD CATEGORIES IF ANY
        // DELETE THE CATEGORY
        // $category = Category::find($id);
        $deleted = $category->delete();
        // return json_encode($deleted);
        return $category->id;
    }
    public function subcategory(Category $category) {
        $subcategory = Category::subCategories($category);
        return $subcategory;
    }
}