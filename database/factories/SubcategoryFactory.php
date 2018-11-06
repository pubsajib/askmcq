<?php

use Faker\Generator as Faker;

$factory->define(App\Subcategory::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'category_id' => rand(1,5),
    ];
});
