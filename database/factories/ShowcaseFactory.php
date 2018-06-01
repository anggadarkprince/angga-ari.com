<?php

use Faker\Generator as Faker;

$factory->define(App\Portfolio::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug(),
        'field' => $faker->sentence(),
        'title' => $faker->sentence(),
        'tagline' => $faker->sentence(2),
        'description' => $faker->paragraphs(10, true),
        'cover' => $faker->imageUrl(),
        'company' => $faker->company,
        'team' => $faker->words(3, true),
        'url' => $faker->url,
        'year' => $faker->date('Y'),
        'month' => $faker->date('m'),
        'privacy' => $faker->randomElement(['private', 'public']),
    ];
});
