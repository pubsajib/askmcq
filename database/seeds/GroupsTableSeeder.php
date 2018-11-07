<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
        	[
        		'name' 			=> 'Programming', 
        		'description' 	=> 'All types of programming categories will be here.', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Education', 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Sports', 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Business', 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Tours', 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
        	[
        		'name' 			=> 'Travels', 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
            [
                'name'          => 'Real state', 
                'description'   => '', 
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
                'name'          => 'Developer', 
                'description'   => '', 
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
        	[
        		'name' 			=> 'Rental', 
        		'description' 	=> '', 
        		'created_at' 	=> date("Y-m-d h:i:s"), 
        		'updated_at' 	=> date("Y-m-d h:i:s")
        	],
            [
                'name'          => 'Others', 
                'description'   => 'Default group', 
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
        ]);
    }
}
