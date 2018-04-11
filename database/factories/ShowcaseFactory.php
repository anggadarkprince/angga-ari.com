<?php

use Faker\Generator as Faker;

$factory->define(App\Showcase::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug(),
        'title' => $faker->sentence(),
        'tagline' => $faker->sentence(10),
        'description' => $faker->paragraphs(10, true),
        'cover' => $faker->imageUrl(),
        'company' => $faker->company,
        'team' => $faker->words(3, true),
        'url' => $faker->url,
        'date' => $faker->date(),
        'licence' => $faker->sentence,
        'privacy' => $faker->randomElement(['private', 'public']),
    ];
});
