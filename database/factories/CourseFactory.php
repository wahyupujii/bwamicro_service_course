<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Course::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'certificate' => true,
        'thumbnail' => 'https://picsum.photos/640/480?random=' . $faker->unique()->numberBetween(1, 1000),
        'type' => 'premium',
        'status' => 'published',
        'price' => $faker->numberBetween(100000, 500000),
        'level' => 'all-level',
        'description' => $faker->text(300),
        'mentor_id' => $faker->numberBetween(1, 5)
    ];
});
