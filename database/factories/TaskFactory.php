<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'description'=>$faker->sentence,
        'status'=>$faker->boolean(),
        'user_id'=>$faker->numberBetween(1, 10)
    ];
});
