<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

Route::get('/', 'BookController@index');
Route::post('/book', 'BookController@store');
Route::get('/books/{book}', 'BookController@show');
Route::delete('/books/{book}', 'BookController@destroy');

Route::get('/loans', 'LoanController@index');
Route::get('/loans/{loan}', 'LoanController@show');

Route::get('/users', 'UserController@index');
Route::get('/users/{user}', 'UserController@show');