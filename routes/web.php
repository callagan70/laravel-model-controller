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

//Rotta: localhost:8080
// Route::get('/', function () {

//     $books = config('books');
//     dump($books);

//     //compact('books') = [ 'books' => $books ]
//     return view( 'pages.book.index', compact('books') );
// });

Route::get('/', 'BookController@index' )->name('home');

//Rotta:localhost8080/book/id
Route::get('/movie/{id}', 'BookController@show')->name('book');
