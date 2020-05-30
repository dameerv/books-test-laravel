<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books',['uses' => 'BooksController@index', 'as' => 'Books'] );
Route::get('/books/{id}',['uses' => 'BooksController@show', 'as' => 'BooksShow'] );
Route::get('/books/add',['uses' => 'BooksController@add', 'as' => 'BooksAdd'] );
