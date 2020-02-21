<?php

use Illuminate\Database\Seeder;
use App\AuthorModel as Authors;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Authors::class, 10)->create();
    }
}
