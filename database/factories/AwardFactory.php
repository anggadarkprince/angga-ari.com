<?php

use App\Award;
use Faker\Generator as Faker;

$factory->define(Award::class, function (Faker $faker) {
    return [
        'title' => $faker->words(3, true),
        'category' => $faker->words(3, true),
        'description' => $faker->paragraph(3),
        'location' => $faker->city . ', ' . $faker->country,
        'awarded_in' => $faker->date('Y'),
    ];
});
