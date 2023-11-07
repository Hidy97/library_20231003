<?php

namespace App\Http\Controllers;

use App\Models\Lending;
<<<<<<< HEAD
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LendingController extends Controller
{
    //
=======
use Illuminate\Http\Request;

class LendingController extends Controller
{
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
    public function index(){
        return Lending::all();
    }

<<<<<<< HEAD
    public function show ($start, $user_id, $copy_id)
    {
        $lending = Lending::where('start', $start)->where('user_id', $user_id)->where('copy_id', $copy_id)->get();
        return $lending[0];
    }

    public function destroy($start, $user_id, $copy_id){
        LendingController::show($start, $user_id, $copy_id)->delete();
        //még nem létezik... most már igen
        //return redirect('/book/list');
    }

    /*
    public function update(Request $request, $id){
        $lending = Lending::find($id);
=======
    public function show ($user_id, $copy_id, $start)
    {
        $lending = Lending::where('user_id', $user_id)->where('copy_id', $copy_id)->where('start', $start)->get();
        return $lending[0];
    }


    public function destroy($user_id, $copy_id, $start){
        LendingController::show($user_id, $copy_id, $start)->delete();
    }
    /*
    public function update(Request $request, $user_id, $copy_id, $start){
        $lending = Lending::show($user_id, $copy_id, $start);
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
        $lending->user_id = $request->user_id;
        $lending->copy_id = $request->copy_id;
        $lending->start = $request->start;
        $lending->save();
    }
<<<<<<< HEAD
     */

=======
    */
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
    public function store(Request $request){
        $lending = new Lending();
        $lending->user_id = $request->user_id;
        $lending->copy_id = $request->copy_id;
        $lending->start = $request->start;
        $lending->save();
<<<<<<< HEAD
    }

    //view függvények
    public function listView(){
        $lendings = Lending::all();
        return view('book.list', ['books' => $lendings]);
    }

    //with függv
    public function lendingUser(){
        //bejelentkezett felhasználó
        $user = Auth::user();
        $lendings = Lending::with('user')->where('user_id','=',$user->id)->get();
        return $lendings;
    }

    //userHas
    public function lendingUser2(){
        //bejelentkezett felhasználó
        $user = Auth::user();
        $lendings = Lending::with('user')->where('user_id','=',$user->id)->get();
        return $lendings;
    }

    //keresés
    public function userMany($start){
        $lendings = Lending::with('user')->where('start','=',$start)->get();
        return $lendings;
    }
=======
        
    }

>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
}
