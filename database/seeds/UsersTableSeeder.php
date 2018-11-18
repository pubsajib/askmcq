<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            [
                'name'              => 'Admin', 
                'email'             => 'admin@gmail.com', 
                'bio'               => 'BSc in economics',
                'user_type'         => 0, 
                'is_active'         => '1', 
                'password'          => bcrypt('123456'), 
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'created_at'        => date("Y-m-d h:i:s"), 
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'Admin 2', 
                'email'             => 'admin2@gmail.com', 
                'bio'               => 'BSc in economics', 
                'user_type'         => 0, 
                'is_active'         => '1', 
                'password'          => bcrypt('123456'), 
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'created_at'        => date("Y-m-d h:i:s"), 
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'Admin 3', 
                'email'             => 'admin3@atitonline.com', 
                'bio'               => 'BSc in economics', 
                'user_type'         => 1, 
                'is_active'         => '1', 
                'password'          => bcrypt('123456'), 
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'created_at'        => date("Y-m-d h:i:s"), 
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'Admin 4', 
                'email'             => 'admin4@atitonline.com', 
                'bio'               => 'BSc in economics', 
                'user_type'         => 1, 
                'is_active'         => '1', 
                'password'          => bcrypt('123456'), 
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'created_at'        => date("Y-m-d h:i:s"), 
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'Admin 5', 
                'email'             => 'admin5@gmail.com', 
                'bio'               => 'BSc in economics', 
                'user_type'         => 1, 
                'is_active'         => '', 
                'password'          => bcrypt('123456'), 
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'created_at'        => date("Y-m-d h:i:s"), 
                'updated_at'        => date("Y-m-d h:i:s")
            ]
        ]);
        //factory('App\User', 10)->create();
    }
}
