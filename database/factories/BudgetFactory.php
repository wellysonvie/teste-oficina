<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Budget;
use Faker\Generator as Faker;

$factory->define(Budget::class, function (Faker $faker) {
    return [
        'client' => $faker->name,
        'seller' => $faker->name,
        'description' => $faker->paragraph(3),
        'price' => $faker->numberBetween($min = 100, $max = 1000),
        'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now', $timezone = null)
    ];
});
