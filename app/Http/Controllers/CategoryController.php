<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $categories = Category::categories();
        return view('categories.index')->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $rootCats = Category::where('parent', '0')->get();
        return view('categories.create', compact('rootCats'));
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

        $category = new Category;
        $category->name = $request->name;
        $category->parent = $request->parent ? $request->parent : '0';
        $category->description = $request->description;

        $category->save();
        return redirect()->route('category.show', $category->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $category = Category::find($id);
        $parentCat = Category::find($category->parent);
        // dd($parentCat);
        return view('categories.show', compact('category', 'parentCat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $category = Category::find($id);
        $hasSubCategories = Category::hasSubCategories($category);
        $rootCats = Category::where('parent', '0')->get();
        return view('categories.edit', compact('category', 'rootCats', 'hasSubCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $category = Category::find($id);
        $request->validate([
            'name' => 'required',
            'parent' => 'nullable',
        ]);
        // dd($request->parent);
        $category->name = $request->name;
        $category->parent = $request->parent ? $request->parent : '0';
        $category->description = $request->description;

        $category->save();

        return redirect()->route('category.show', $category->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category) {
        // DETACH ALL CHILD CATEGORIES IF ANY

        // DELETE THE CATEGORY
        // $category = Category::find($id);
        $deleted = $category->delete();
        // return json_encode($deleted);
        return $category->id;
    }
}
