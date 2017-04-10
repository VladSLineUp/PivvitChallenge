<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Offering;

$factory->define(Offering::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->title,
        'price' => $faker->randomNumber(2),
    ];
});