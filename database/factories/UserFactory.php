<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'education' => rand(1,4),
        'institution' => $faker->name . ' college',
        'exp_years' => rand(1,4),
        'exp_type' => $faker->name,
        'is_active' => '1',
        'email_verified_at' => date('Y-m-d H:i:s', time()),
        'password' => bcrypt('123456'), // secret
        'remember_token' => str_random(10),
    ];
});
