<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mentor;
use Faker\Generator as Faker;

$factory->define(Mentor::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'profile' => 'https://picsum.photos/640/480?random=' . $faker->unique()->numberBetween(1, 1000),
        'email' => $faker->unique()->safeEmail,
        'profession' => $faker->randomElement(['Software Engineer', 'Frontend Engineer', 'Backend Engineer']),
    ];
});
