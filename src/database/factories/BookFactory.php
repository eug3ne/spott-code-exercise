<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\Author;
use Faker\Generator as Faker;


$factory->define(Book::class, function (Faker $faker) {

    $book = [
        'name'          => $faker->text(60),
        'author_id'     => $faker->numberBetween(1,10),
        'release_date'  => $faker->unique()->dateTime('now'),
    ];

    return $book;
});
