<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('/books')->group(function(){
    Route::get('/list','ApiBooksController@index');
    Route::post('/add','ApiBooksController@add');
    Route::get('/{id}','ApiBooksController@show')
        ->where(['id' => '[0-9]+']);
//    Route::post('/store','ApiBooksController@store')->name( 'ApiPostBook');0
    Route::delete('/{id}','ApiBooksController@destroy')
                ->where(['id' => '[0-9]+']);
    Route::post('/update','ApiBooksController@update')
                ->where(['id' => '[0-9]+']);
});

Route::prefix('/authors')->group(function(){
    Route::get('/list','ApiAuthorsController@index');
    Route::post('/add','ApiAuthorsController@add');
    Route::delete('/{id}','ApiAuthorsController@destroy')
        ->where(['id' => '[0-9]+']);
    Route::post('/update','ApiAuthorsController@update');
});
