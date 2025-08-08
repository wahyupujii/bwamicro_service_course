<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ImageCourse;
use Faker\Generator as Faker;

$factory->define(ImageCourse::class, function (Faker $faker) {
    return [
        'course_id' => $faker->numberBetween(1, 10),
        'image' => 'https://picsum.photos/640/480?random=' . $faker->unique()->numberBetween(1, 1000),
    ];
});
