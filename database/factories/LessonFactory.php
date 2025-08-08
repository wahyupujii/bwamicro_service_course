<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lesson;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'video' => "",
        'chapter_id' => $faker->numberBetween(1, 30)
    ];
});
