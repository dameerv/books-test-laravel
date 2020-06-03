<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AdminController extends Controller
{
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
        dd($id);
    }

    public function booksAdd()
    {
        dd(__METHOD__);
    }

    public function authors(Author $author)
    {
        $author = $author->paginate(7);
        return view('admin.authors.index', compact('authors') );
    }

    public function authorsUpdate($id)
    {
        dd($id);
    }

    public function authorsAdd()
    {
        dd(__METHOD__);
    }

}
