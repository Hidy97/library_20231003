<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Foundation\Auth\User;
=======
use App\Models\User;
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
<<<<<<< HEAD
    //
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        //még nem létezik... most már igen
        //return redirect('/User/list');
    }

    public function update(Request $request, $id)
    {
=======
    public function index(){
        return User::all();
    }

    public function show($id){
        return User::find($id);
    }

    public function destroy($id){
        User::find($id)->delete();
        
    }

    public function update(Request $request, $id){
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->permission = $request->permission;
        $user->save();
<<<<<<< HEAD
        //még nem létezik...
        //return redirect('/User/list');
    }

    /**
     * public function updatePassword(Request $request, $id)
     * {
     * $validator = Validator::make($request->all(), [
     * "password" => 'string|min:3|max:50'
     *  ]);
     *  if ($validator->fails()) {
     *      return response()->json(["message" => $validator->errors()->all()], 400);
     *  }
     *  $user = User::where("id", $id)->update([
     *      "password" => Hash::make($request->password),
     *  ]);
     *  return response()->json(["user" => $user]);
     * }
     */

    public function updatePassword(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "password" => array('required', 'regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[^\s]{8,}$/')
        ]);
=======
        
    }

    public function updatePassword(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "password" => array( 'required', 'regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[^\s]{8,}$/')
      ]);

>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()->all()], 400);
        }
        $user = User::where("id", $id)->update([
            "password" => Hash::make($request->password),
        ]);
        return response()->json(["user" => $user]);
    }


<<<<<<< HEAD
    public function store(Request $request)
    {
=======
    public function store(Request $request){
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->permission = $request->permission;
        $user->save();
<<<<<<< HEAD
        //még nem létezik...
        //return redirect('/User/list');
=======
>>>>>>> 2a5e920d315e24581cfa98bd30b0634158f91f44
    }
}
