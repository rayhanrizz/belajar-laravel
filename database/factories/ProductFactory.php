<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	$faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
    return [
        'name' => $faker->word,
    	'stock' => $faker->numberBetween(1,20),
    	'harga' => $faker->numberBetween(200000,3000000),
    	'gambar' => $faker->picsum('public/image',400,400, false)
    ];
});
