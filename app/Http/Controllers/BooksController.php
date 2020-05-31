<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {

        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function add()
    {
        return view('books.add');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);


        return view('books.show', compact('book'));
    }

    public function update($id)
    {
        $book = Book::findOrFail($id);
        return view('books.update', compact('book'));
    }


}
