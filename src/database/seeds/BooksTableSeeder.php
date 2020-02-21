<?php

use Illuminate\Database\Seeder;
use App\BookModel as Books;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Books::class, 30)->create();
    }
}
