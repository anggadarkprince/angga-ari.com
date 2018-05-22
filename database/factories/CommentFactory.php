<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'contact' => $faker->phoneNumber,
        'website' => $faker->domainName,
        'comment' => $faker->paragraph(5),
        'status' => $faker->randomElement(['pending', 'approved', 'rejected']),
        'ip' => $faker->ipv4
    ];
});
