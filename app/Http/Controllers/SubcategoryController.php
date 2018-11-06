<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
class SubcategoryController extends Controller {
    public function index() {
        $subcategories = Subcategory::All();
        return view('subcategories.index', compact('subcategories'));
    }
    public function create() {
        $categories = Category::All();
        return view('subcategories.create', compact('categories'));
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'category' => 'nullable',
        ]);
        $subcategory = new Subcategory;
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category ? $request->category : '1';
        $subcategory->description = $request->description;
        $subcategory->save();
        return redirect()->route('subcategory.show', $subcategory->id);
    }
    public function show($id) {
        $subcategory = Subcategory::with('category')->find($id);
        return view('subcategories.show', compact('subcategory'));
    }
    public function edit($id) {
        $subcategory = Subcategory::with('category')->find($id);
        $categories = Category::All();
        return view('subcategories.edit', compact('subcategory', 'categories'));
    }
    public function update(Request $request, $id) {
        $subcategory = Subcategory::find($id);
        $request->validate([
            'name' => 'required',
            'category' => 'nullable',
        ]);
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category ? $request->category : '1';
        $subcategory->description = $request->description;
        $subcategory->save();
        return redirect()->route('subcategory.show', $subcategory->id);
    }
    public function destroy(Subcategory $subcategory) {
        // DELETE THE ITEM
        $deleted = $subcategory->delete();
        return $subcategory->id;
    }
}
