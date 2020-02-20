<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AuthorModel as Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
            'name' => $faker->name,
            'age' => $faker->randomDigitNotNull,
            'address' => $faker->address,
    ];
});
