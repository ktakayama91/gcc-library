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

use App\Book;
use Illuminate\Http\Request;


Route::get('/', function () {

	$books = Book::orderBy('created_at', 'asc')->get();

    return view('books', [
        'books' => $books
    ]);

    return view('books');
});

Route::post('/books', function (Request $request) {

    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $book = new Book;
    $book->cod = $request->cod;
    $book->name = $request->name;
    $book->author = $request->author;
    $book->save();

    return redirect('/');

});

Route::delete('/books/{book}', function (Book $book) {

    $book->delete();

    return redirect('/');
});