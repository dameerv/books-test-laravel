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

Route::get('/books/','BooksController@index')->name( 'Books');
Route::get('/books/add','BooksController@add' )->name('BooksAdd');
Route::get('/books/{id}','BooksController@show')->name('BooksShow' );
Route::get('/books/{id}/update','BooksController@update')->name('BooksUpdate' );

