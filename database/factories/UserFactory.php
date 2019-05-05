<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'productName' => $faker->name,
        'quantity' => $faker->numberBetween(10,500),
        'category_id' => $faker->numberBetween(1,3),
        'buyPrice' => $faker->numberBetween(50,1500), // secret
        'sellPrice' => $faker->numberBetween(100,2000),
        'productImage' => 'noImage.jpg',
        'details' => $faker->text(200),
    ];
});
