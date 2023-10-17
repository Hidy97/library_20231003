<?php

namespace App\Http\Controllers;

use App\Models\Lending;
use Illuminate\Http\Request;

class LendingController extends Controller
{
    //
    public function index(){
        return Lending::all();
    }

    public function show ($user_id, $copy_id, $start)
    {
        $lending = Lending::where('user_id', $user_id)->where('copy_id', $copy_id)->where('start', $start)->get();
        return $lending[0];
    }

    public function destroy($user_id, $copy_id, $start){
        LendingController::show($user_id, $copy_id, $start)->delete();
        //még nem létezik... most már igen
        //return redirect('/book/list');
    }

    /*
    public function update(Request $request, $id){
        $lending = Lending::find($id);
        $lending->user_id = $request->user_id;
        $lending->copy_id = $request->copy_id;
        $lending->start = $request->start;
        $lending->save();
    }
     */

    public function store(Request $request){
        $lending = new Lending();
        $lending->user_id = $request->user_id;
        $lending->copy_id = $request->copy_id;
        $lending->start = $request->start;
        $lending->save();
    }

    //view függvények
    public function listView(){
        $lendings = Lending::all();
        return view('book.list', ['books' => $lendings]);
    }
}
