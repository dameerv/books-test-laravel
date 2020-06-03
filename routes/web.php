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
Route::prefix('/books')->group(function(){
    Route::get('/','BooksController@index')->name( 'Books');

    Route::get('/{id}','BooksController@show')->name('BooksShow' );
//    Route::get('/{id}/update','BooksController@update')->name('BooksUpdate' );
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Админка
Route::prefix('/admin')->group(function(){
    Route::get('/','AdminController@index')->name( 'admin');
    Route::get('/books','AdminController@books')->name( 'AdminBooks');
    Route::get('/books/{id}/update','AdminController@booksUpdate')->name( 'AdminBooksUpdate');
    Route::get('/books/add/','AdminController@booksAdd' )->name('AdminBooksAdd');
    Route::get('/authors','AdminController@authors')->name( 'AdminAuthors');
    Route::get('/authors/{id}/update','AdminController@AuthorsUpdate')->name( 'AdminAuthorsUpdate');
    Route::get('/authors/add/','AdminController@authorsAdd' )->name('AdminAuthorsAdd');
});


