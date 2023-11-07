<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Book;
=======
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
use App\Models\Copy;
use Illuminate\Http\Request;

class CopyController extends Controller
{
<<<<<<< HEAD
    //
=======
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
    public function index(){
        return Copy::all();
    }

    public function show($id){
        return Copy::find($id);
    }

    public function destroy($id){
        Copy::find($id)->delete();
<<<<<<< HEAD
        //még nem létezik... most már igen
        //return redirect('/copy/list');
=======
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
    }

    public function update(Request $request, $id){
        $copy = Copy::find($id);
        $copy->book_id = $request->book_id;
<<<<<<< HEAD
        $copy->hardcover = $request->hardcover;
=======
        $copy->hardcovered = $request->hardcovered;
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
        $copy->status = $request->status;
        $copy->publication = $request->publication;
        $copy->save();
    }

    public function store(Request $request){
        $copy = new Copy();
        $copy->book_id = $request->book_id;
<<<<<<< HEAD
        $copy->hardcover = $request->hardcover;
        $copy->status = $request->status;
        $copy->publication = $request->publication;
        $copy->save();
    }

    //view függvények
    public function listView(){
        $copys = Copy::all();
        return view('copy.list', ['copys' => $copys]);
    }

    public function copyBookLending(){
        //több függv-t is használhatunk
        return Copy::with('book')->with('lending')->get();
    }
=======
        $copy->hardcovered = $request->hardcovered;
        $copy->status = $request->status;
        $copy->publication = $request->publication;
        $copy->save();
        
    }

>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
}
