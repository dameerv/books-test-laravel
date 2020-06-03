<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index' );
    }
    public function books(Book $book)
    {
        $books = $book->paginate(7);

        return view('admin.books.index', compact('books') );
    }

    public function booksUpdate($id)
    {
        $book = Book::find($id);

        return view('admin.books.update', compact('book' ) );
    }

    public function booksAdd()
    {
        dd(__METHOD__);
    }

    public function authors(Author $author)
    {
        $authors = $author->paginate(5);

        return view('admin.authors.index', compact('authors') );
    }

    public function authorsUpdate($id)
    {
        $author = Author::find($id);
        return view('admin.authors.update', compact('author') );
    }

    public function authorsAdd()
    {
        dd(__METHOD__);
    }

}
