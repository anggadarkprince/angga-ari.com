<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'contact' => $faker->phoneNumber,
        'website' => $faker->domainName,
        'subject' => $faker->sentence(),
        'message' => $faker->paragraph(5),
    ];
});
