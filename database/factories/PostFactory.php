<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'slug' => $faker->slug(),
        'content' => $faker->paragraphs(10, true),
        'cover' => $faker->imageUrl(),
        'status' => $faker->randomElement(['draft', 'published', 'scheduled']),
        'privacy' => $faker->randomElement(['private', 'public']),
        'published_at' => $faker->dateTime(),
    ];
});
