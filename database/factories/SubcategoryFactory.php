<?php

use Faker\Generator as Faker;

$factory->define(App\Subcategory::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'category_id' => $faker->numberBetween(1,40),
        'created_at'  => date("Y-m-d h:i:s"), 
        'updated_at'  => date("Y-m-d h:i:s")
    ];
});
