<?php

use App\User;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
        'title' => $faker->sentence,
        'body' => implode(PHP_EOL . PHP_EOL, [$faker->paragraph(), $faker->paragraph(), $faker->paragraph()])
    ];
});
