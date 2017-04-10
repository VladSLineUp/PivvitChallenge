<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Offering;
use App\Models\Purchase;

$factory->define(Purchase::class, function (Faker\Generator $faker) {
    $offerings = Offering::all('id')->toArray();
    $minOfferingId = min($offerings);
    $maxOfferingId = max($offerings);
    return [
        'customer_name' => $faker->name,
        'quantity' => mt_rand(1, 9),
        'offering_id' => mt_rand($minOfferingId, $maxOfferingId),
    ];
});