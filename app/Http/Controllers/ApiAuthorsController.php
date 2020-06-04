<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class ApiAuthorsController extends Controller
{
    public function index(Request $request, Author $author)
    {
        if($request->get('value')){
            return Author::where('name', 'like', '%' . $request->get('value') . '%')->get();
        }

        $limit = (int) $request->get('limit', 100);
        $offset = (int) $request->get('offset', 0);
        return $author->limit($limit)->offset($offset)->get();

    }
    public function update(Request $request)
    {
        $author = Author::find($request->get('id'));
        $check = $author->name != $request->get('name') || $author->information != $request->get('information');
        if($check == 1){
            $author->name = $request->get('name');
            $author->information = $request->get('information');
            $author->save();
        }

        return $author;
    }

    public function add(Request $request)
    {

        return Author::create([
            'name' => $request->get('author'),
            'information' => $request->get('information'),
        ]);;
    }

}
