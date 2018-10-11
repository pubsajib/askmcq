<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	[
        		'name' 			=> 'Sports', 
        		'parent' 		=> 0, 
        		'description' 	=> 'All types of stports goods will be here.', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Electronics', 
        		'parent' 		=> 0, 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Tools', 
        		'parent' 		=> 0, 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Interior', 
        		'parent' 		=> 0, 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Men', 
        		'parent' 		=> 1, 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Women', 
        		'parent' 		=> 1, 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Baby', 
        		'parent' 		=> 2, 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        ]);
    }
}
