<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'group_id' => rand(1,5),
        'description' => $faker->text,
    ];
});
