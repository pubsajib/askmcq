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
        'bio' => $faker->text,
        'image' => $faker->image(public_path('images'), 270, 270, 'cats', false),
        'is_active' => '1',
        'email_verified_at' => date('Y-m-d H:i:s', time()),
        'password' => bcrypt('123456'), // secret
        'remember_token' => str_random(10),
    ];
});
