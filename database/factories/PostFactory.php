<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug(),
        'title' => $faker->sentence(),
        'subtitle' => $faker->randomElement([$faker->sentence(), null]),
        'content' => $faker->paragraphs(10, true),
        'cover' => $faker->imageUrl(),
        'status' => $faker->randomElement(['draft', 'published', 'scheduled']),
        'privacy' => $faker->randomElement(['private', 'public']),
        'view' => $faker->numberBetween(5, 1000),
        'published_at' => $faker->dateTime(),
    ];
});
