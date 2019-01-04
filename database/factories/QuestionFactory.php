<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
	$options = '';
	$type = ['test','saved', 'submited'];
	$optionLoop = rand(2,5);
	for ($loop=0; $loop < $optionLoop; $loop++) { 
		$options .= 'Option '. $faker->numberBetween(1,999) .',';
	}
	$options = rtrim($options, ',');
    return [
        'subcategory_id' => $faker->numberBetween(1,50),
        'user_id' => $faker->numberBetween(1,5),
        'question' => $faker->sentence(6) .' ?',
        'options' => $options,
        'answer' => $faker->word,
        'direction' => $faker->sentence(6),
        'explanation' => $faker->sentence(6),
        'title' => $faker->sentence(6),
        'type' => $type[$faker->numberBetween(1,2)],
        'published' => '1',
        'created_at'    => date("Y-m-d h:i:s"), 
        'updated_at'    => date("Y-m-d h:i:s")
    ];
});
