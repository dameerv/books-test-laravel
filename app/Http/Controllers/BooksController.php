<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function books()
    {

        $books = Book::paginate(5);

        return view('public.books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::find($id);

        return view('public.books.show', compact('book'));
    }

}
