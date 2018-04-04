<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(['work', 'school', 'award', 'plan']),
        'title' => $faker->sentence(5),
        'description' => $faker->paragraph,
        'location' => $faker->city,
        'start_date' => $faker->date(),
        'end_date' => $faker->randomElement([null, $faker->date()]),
    ];
});
