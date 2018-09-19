<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create default admin
        DB::table('users')->insert([
            [
                'name'          => 'Admin', 
                'email'         => 'admin@gmail.com', 
                'education'     => 'BSc in economics', 
                'institution'   => 'Example name college', 
                'exp_years'     => rand(1,5), 
                'exp_type'      => 'Javascript', 
                'user_type'     => 0, 
                'is_active'     => 1, 
                'password'      => bcrypt('123456'), 
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
                'name'          => 'atio admin', 
                'email'         => 'admin@atitonline.com', 
                'education'     => 'BSc in economics', 
                'institution'   => 'Example name college', 
                'exp_years'     => rand(1,5), 
                'exp_type'      => 'Javascript', 
                'user_type'     => 1, 
                'is_active'     => 1, 
                'password'      => bcrypt('123456'), 
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
                'name'          => 'atio user', 
                'email'         => 'user@atitonline.com', 
                'education'     => 'BSc in economics', 
                'institution'   => 'Example name college', 
                'exp_years'     => rand(1,5), 
                'exp_type'      => 'Javascript', 
                'user_type'     => 1, 
                'is_active'     => 1, 
                'password'      => bcrypt('123456'), 
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
                'name'          => 'User', 
                'email'         => 'user@gmail.com', 
                'education'     => 'BSc in economics', 
                'institution'   => 'Example name college', 
                'exp_years'     => rand(1,5), 
                'exp_type'      => 'Javascript', 
                'user_type'     => 1, 
                'is_active'     => 1, 
                'password'      => bcrypt('123456'), 
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ]
        ]);
    }
}
