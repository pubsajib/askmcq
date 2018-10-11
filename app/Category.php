<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Category extends Model {
    function questions() {}
    public static function categories() {
    	$categories = [];
    	$cats = Category::where('parent', 0)->get();
    	if (!$cats->isEmpty()) {
    		foreach ($cats as $key => $cat) {
    			$categories[$key]['id'] = $cat->id;
    			$categories[$key]['name'] = $cat->name;
    			$categories[$key]['description'] = $cat->description;
    			$categories[$key]['subCategories'] = [];
    			$subCats = Category::where('parent', $cat->id)->get();
    			if (!$subCats->isEmpty()) {
    				foreach ($subCats as $subKey => $subCat) {
    					$subCategories[$subKey]['id'] = $subCat->id; 
    					$subCategories[$subKey]['name'] = $subCat->name; 
    					$subCategories[$subKey]['description'] = $subCat->description; 
    					$categories[$key]['subCategories'] = $subCategories;
    				}
    			}
    		}
    	}
    	return $categories;
    }
    public static function subCategories($category) {
    	$categories = DB::table('categories')->where('parent', $category);
    	dd($categories);
    }
    function parentCategory($category) {
    	
    }
}
