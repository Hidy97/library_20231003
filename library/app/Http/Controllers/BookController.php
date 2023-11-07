<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return Book::all();
    }

    public function show($id){
        return Book::find($id);
    }

    public function destroy($id){
        Book::find($id)->delete();
<<<<<<< HEAD
        //még nem létezik... most már igen
        //return redirect('/book/list');
=======
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
    }

    public function update(Request $request, $id){
        $book = Book::find($id);
        $book->author = $request->author;
        $book->title = $request->title;
<<<<<<< HEAD
        //$book->pieces = $request->pieces;
=======
        
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
        $book->save();
        //még nem létezik...
        //return redirect('/book/list');
    }

    public function store(Request $request){
        $book = new Book();
        $book->author = $request->author;
        $book->title = $request->title;
<<<<<<< HEAD
        //$book->pieces = $request->pieces;
=======
        
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
        $book->save();
        //még nem létezik...
        //return redirect('/book/list');
    }

    //view függvények
    public function listView(){
        $books = Book::all();
        return view('book.list', ['books' => $books]);
    }

    //with függvények
    public function bookCopy(){
        //a modelben megírt függvényre hivatkozunk
        return Book::with('copy')->get();
    }
}
