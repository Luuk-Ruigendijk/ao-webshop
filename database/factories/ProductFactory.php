<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'productName' => $faker->firstName(),
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet porttitor est, id ultrices risus consequat a. Nullam ante arcu, efficitur ut ex eu, vestibulum scelerisque lectus. Ut vel maximus leo. Integer ac neque posuere, placerat elit a, elementum est.",
        'picture' => "test",
        'price' =>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
        'category_id' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
