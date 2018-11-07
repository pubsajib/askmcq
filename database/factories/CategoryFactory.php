<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'group_id' => $faker->numberBetween(1,10),
        'description' => $faker->text,
        'created_at'    => date("Y-m-d h:i:s"), 
        'updated_at'    => date("Y-m-d h:i:s")
    ];
});
