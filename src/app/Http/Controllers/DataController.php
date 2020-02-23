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
        if ($this->formValidation()) {
            $author = new Author();
            $author->name = request('firstName') . ' ' . request('lastName');
            $author->age = request('age');
            $author->address = request('address');
            $author->save();

            $book = new Book();
            $book->name = request('bookTitle');
            $book->release_date = request('releaseDate');
        //        $book->save();
        }

//        dd($author->name);
        dd($book->name);

    }

    /**
     * This function is checking for the incoming inputs and validate the correct
     * data format before saving them into the database
     *
     * @return boolean
     */
    private function formValidation(){
        $check = request()->validate([
            'firstName' => 'required|min 3',
            'lastName' => 'required|min 3',
            'age' => 'required|integer|between:1,150',
            'address' => 'required|min 3',
            'bookTitle' => 'required|min 3',
            'releaseDate' => 'required|date_format:d-m-Y',
        ]);

        return $check;

    }

}
