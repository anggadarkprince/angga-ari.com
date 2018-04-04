<?php

use Faker\Generator as Faker;

$factory->define(App\Taxonomy::class, function (Faker $faker) {
    return [
        'term' => $faker->words(2, true),
        'slug' => $faker->slug(2),
        'type' => $faker->randomElement(['category', 'tag']),
    ];
});
