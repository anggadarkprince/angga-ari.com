<?php

use App\Experience;
use Faker\Generator as Faker;

$factory->define(Experience::class, function (Faker $faker) {
    return [
        'experience' => $faker->words(3, true),
        'occupation' => $faker->words(3, true),
        'description' => $faker->paragraph(3),
        'location' => $faker->city . ', ' . $faker->country,
        'start' => $faker->date('Y'),
        'end' => $faker->randomElement([null, $faker->date('Y')]),
    ];
});
