<?php

use Faker\Generator as Faker;
use App\Task;
use App\User;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'user_id' => function () {
          return factory(User::class)->create()->id;
        },
    ];
});
