<?php

use Faker\Generator as Faker;

$factory->define(App\Showcase::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'slug' => $faker->slug(),
        'description' => $faker->paragraphs(10, true),
        'cover' => $faker->imageUrl(),
        'company' => $faker->company,
        'team' => $faker->words(3, true),
        'url' => $faker->url,
        'date' => $faker->date(),
        'licence' => $faker->sentence,
        'difficulty' => $faker->numberBetween(1, 10),
        'privacy' => $faker->randomElement(['private', 'public']),
    ];
});
