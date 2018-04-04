<?php

use Faker\Generator as Faker;

$factory->define(App\Upload::class, function (Faker $faker) {
    return [
        'file' => $faker->imageUrl(),
        'size' => $faker->numberBetween(10000, 300000),
        'mime' => $faker->mimeType,
        'caption' => $faker->words(3, true),
    ];
});
