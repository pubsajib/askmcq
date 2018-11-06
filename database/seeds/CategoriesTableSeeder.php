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
                'name'          => 'Uncategorized', 
                'group_id'      => rand(1,5), 
                'description'   => 'Default category', 
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
        	[
        		'name' 			=> 'Sports', 
        		'group_id' 		=> rand(1,5), 
        		'description' 	=> 'All types of stports goods will be here.', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Electronics', 
        		'group_id' 		=> rand(1,5), 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Tools', 
        		'group_id' 		=> rand(1,5), 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Interior', 
        		'group_id' 		=> rand(1,5), 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Men', 
        		'group_id' 		=> rand(1,5), 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Women', 
        		'group_id' 		=> rand(1,5), 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Baby', 
        		'group_id' 		=> rand(1,5), 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        ]);
    }
}
