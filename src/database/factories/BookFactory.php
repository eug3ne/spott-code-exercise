<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BookModel as Book;
use Faker\Generator as Faker;


$factory->define(Book::class, function (Faker $faker) {

    $bookModel = [
        'name' => $faker->text(60),
        'author_id' => factory(Author::class)->create(),
        'release_date' => $faker->date($format = 'd-m-Y', $max = 'now'),
    ];

    return $bookModel;
});
