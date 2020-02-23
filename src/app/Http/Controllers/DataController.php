<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function fetch()
    {
        // retrieve all records from Authors table
        $authors = Author::all();
        $books   = Book::all();


        return view('main' , [
            'authors' => $authors,
            'books' => $books
        ]);
    }


    public function store()
    {
        $author = new Author();
        $author->name = request('firstName') . ' ' . request('lastName');
//        $author->save();

        $book = new Book();
        $book->name = request('bookTitle');
        $book->release_date = request('releaseDate');
//        $book->save();

//        dd($author->name);
        dd($book->name);

    }
}
