<?php

use Faker\Generator as Faker;
use App\FoodLounge;

$factory->define(FoodLounge::class, function (Faker $faker) {
    return [

         'title' => $faker->realText(20, 3),
         'description' => $faker->realText(500),
    ];
});
