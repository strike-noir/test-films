<?php

use Faker\Generator as Faker;

$factory->define(App\Film::class, function (Faker $faker) {
    return [
        'name' => $faker->safeColorName,
        'description' => $faker->safeColorName,
        'release_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'rating' => $faker->numberBetween($min = 1, $max = 5),
        'ticket_price' => $faker->numberBetween($min = 5, $max = 8),
        'photo' => $faker->image('public/storage/images',400,300, null, false),
        'country_id' => $faker->numberBetween($min = 1, $max = 5),
        //
    ];
});
