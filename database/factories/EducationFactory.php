<?php

use App\Education;
use Faker\Generator as Faker;

$factory->define(Education::class, function (Faker $faker) {
    return [
        'degree' => $faker->randomElement(Education::DEGREES),
        'institution' => $faker->words(3, true),
        'major' => $faker->words(3, true),
        'location' => $faker->city . ', ' . $faker->country,
        'enter' => $faker->date('Y'),
        'graduate' => $faker->randomElement([null, $faker->date('Y')]),
    ];
});
