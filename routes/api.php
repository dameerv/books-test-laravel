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
    Route::get('/list','ApiBooksController@index')->name( 'ApiGetBooks');
    Route::get('/{id}','ApiBooksController@show')->name( 'ApiGetBook');
//    Route::post('/store','ApiBooksController@store')->name( 'ApiPostBook');
    Route::delete('/{id}','ApiBooksController@destroy')->name( 'ApiDeleteBook')
                ->where(['id' => '[0-9]+']);
    Route::put('/{id}/update','ApiBooksController@update')->name( 'ApiUpdateBook')
                ->where(['id' => '[0-9]+']);
});
