<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\movie;

class BookController extends Controller
{
    public function index(){
        $movies = config('movies');
        dump($movies);

        //SELECT * FROM 'books'
        //$books = Book::all();

        // SELECT `title` FROM 'movies'
        // $movies = movie::select('title')->get();

        //SELECT * FROM books WHERE title <> 'il signore degli anelli'
        // $movies = ::where( 'title', '<>', 'Il signore degli anelli' )->get();

        // dd( $books );

        //compact('books') = [ 'books' => $books ]
        return view( 'pages.movie.index', compact('movies') );
    }

    public function show($id){
        //recupera tutto l'array book
        //$books = config('books');
        // dump($books);
        //recuperare un solo dato dell'array globale
        //$book = $books[$id];
        //dump($book);
        //compact('books') = [ 'book' => $book ]

        $book = Book::findOrFail($id);

        return view( 'pages.book.show', compact('book') );
    }
}
