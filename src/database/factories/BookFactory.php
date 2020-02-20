<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BookModel as Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' => $faker->text(60),
        'release_date' => $faker->date($format = 'd-m-Y', $max = 'now'),
    ];
});
