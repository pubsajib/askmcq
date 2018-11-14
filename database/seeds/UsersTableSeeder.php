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
                'name'              => 'Sabuz', 
                'email'             => 'sabuz.phase3@gmail.com', 
                'bio'               => 'BSc in economics',
                'user_type'         => 0, 
                'is_active'         => '1', 
                'password'          => bcrypt('32bit.PNG'), 
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'created_at'        => date("Y-m-d h:i:s"), 
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'Admin', 
                'email'             => 'test1@gmail.com', 
                'bio'               => 'BSc in economics', 
                'user_type'         => 0, 
                'is_active'         => '1', 
                'password'          => bcrypt('123456'), 
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'created_at'        => date("Y-m-d h:i:s"), 
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'atio admin', 
                'email'             => 'test2@atitonline.com', 
                'bio'               => 'BSc in economics', 
                'user_type'         => 1, 
                'is_active'         => '1', 
                'password'          => bcrypt('123456'), 
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'created_at'        => date("Y-m-d h:i:s"), 
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'atio user', 
                'email'             => 'test3@atitonline.com', 
                'bio'               => 'BSc in economics', 
                'user_type'         => 1, 
                'is_active'         => '1', 
                'password'          => bcrypt('123456'), 
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'created_at'        => date("Y-m-d h:i:s"), 
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'User', 
                'email'             => 'test4@gmail.com', 
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
