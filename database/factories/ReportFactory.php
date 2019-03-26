<?php

use Faker\Generator as Faker;

$factory->define(App\Report::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'question_id' => $faker->numberBetween(1,10),
        'created_at'    => date("Y-m-d h:i:s"), 
        'updated_at'    => date("Y-m-d h:i:s")
    ];
});
