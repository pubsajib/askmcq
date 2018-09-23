<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	[
                'name'          => 'admin', 
                'description'   => 'admin role',
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
        	[
                'name'          => 'editor', 
                'description'   => 'editor role',
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
        	[
                'name'          => 'user', 
                'description'   => 'user role',
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
        ]);
    }
}
