<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $quantity = $faker->numberBetween(1,100);
    return [
        'name' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'details' => $faker->sentence(),
        'quantity' => $quantity,
        'price' => $quantity * $faker->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 100),
        'need_supply' => $faker->numberBetween(0,1),
    ];
});
