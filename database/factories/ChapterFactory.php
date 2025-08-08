<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chapter;
use Faker\Generator as Faker;

$factory->define(Chapter::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'course_id' => $faker->numberBetween(1, 10)
    ];
});
