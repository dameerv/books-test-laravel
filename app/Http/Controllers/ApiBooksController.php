<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiBooksController extends Controller
{


    /**
     * @param Request $request
     * @param Book $book
     * @return mixed
     */
    public function index(Request $request, Book $book)
    {
        $limit = (int) $request->get('limit', 100);
        $offset = (int) $request->get('offset', 0);
        return $book->limit($limit)->offset($offset)->get();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function add(Request $request)
    {

        $book = new Book();
        $book->title = $request->get('title');
        $book->author_id = (int) $request->get('author-id');
        $book->description = $request->get('description');
        $book->save();

        return $book;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Book::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function update(Request $request)
    {
        $book = Book::find($request->get('book-id'));
        $book->title = $request->get('title');
        $author = $book->getAuthor();

        if($author->name != $request->get('author') ){
            $author = Author::create([
                'name' => $request->get('author'),
                'information' => 'описание не создано',
            ]);
        }

        $book->author_id = $author->id;
        $book->save();
        return $book;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
