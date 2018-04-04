<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'location' => $faker->city . ', ' . $faker->country,
        'contact' => $faker->phoneNumber,
        'website' => $faker->domainName,
        'about' => $faker->sentence(15),
        'avatar' => $faker->imageUrl(300, 300),
        'status' => $faker->randomElement(['pending', 'activated', 'suspended']),
        'remember_token' => str_random(10),
    ];
});
