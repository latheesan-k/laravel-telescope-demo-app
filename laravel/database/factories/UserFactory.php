<?php

use Faker\Generator as Faker;

/**
 * App\User
 */
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});
