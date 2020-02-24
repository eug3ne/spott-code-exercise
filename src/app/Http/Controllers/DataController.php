<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;

class DataController extends Controller
{
    private $authorTable    = 'authors';
    private $bookTable      = 'books';
    private $view           = 'main';

    /**
     * Retrieve all the data for book collection
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function fetch()
    {
        $data = Book::leftJoin("$this->authorTable", "$this->authorTable.id", '=' , "$this->bookTable.author_id")
            ->select("$this->bookTable.name AS title", "$this->bookTable.release_date","$this->authorTable.name")
            ->get();

        return view("$this->view" , [
            'collection' => $data
        ]);
    }


    /**
     * Receive the data from the request and store them to
     * the relevant tables
     *
     * @param \http\Client\Request
     */
    public function store()
    {

        if ($this->formValidation()) {
            $author = new Author();
            $author->name = request('firstName') . ' ' . request('lastName');
            $author->age = request('age');
            $author->address = request('address');
            $author->save();
//            dd($author->id);

            $book = new Book();
            $book->name = request('bookTitle');
            $book->author_id = intval($author->id);
            $book->release_date = request('releaseDate') . ' ' . date("H:i:s");
            $book->save();
        }

    }

    /**
     * Checking for the incoming inputs and validate the correct
     * data format before saving them into the database.
     *
     * @return boolean
     */
    private function formValidation()
    {
        $check = request()->validate([
            'firstName' => 'required|min:3',
            'lastName' => 'required|min:3',
            'age' => 'required|integer|between:1,150',
            'address' => 'required|min:3',
            'bookTitle' => 'required|min:3',
            'releaseDate' => 'required|date_format:Y-m-d',
        ]);

        return $check;
    }

}
