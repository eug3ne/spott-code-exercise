<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {

    $author = [
        'name'      => $faker->name,
        'age'       => $faker->randomNumber(2),
        'address'   => $faker->streetAddress
    ];

    return $author;
});
