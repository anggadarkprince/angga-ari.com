<?php

use Faker\Generator as Faker;

$factory->define(App\Skill::class, function (Faker $faker) {
    return [
        'field' => $faker->words(2, true),
        'expertise' => $faker->words(3, true),
        'description' => $faker->sentence(8),
        'proficiency_level' => $faker->numberBetween(1, 10),
    ];
});
