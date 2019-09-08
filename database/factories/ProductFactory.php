<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\{Product, Category};

$factory->define(Product::class, function (Faker $faker) {
    return [
        'titre' => $faker->company,
        'prix' => $faker->randomNumber(2),
        'photo' => 'none',
        'description' => $faker->text($maxNbChars = 20),
        'category_id' => $faker->numberBetween($min = 1, $max = 4)

    ];
});
