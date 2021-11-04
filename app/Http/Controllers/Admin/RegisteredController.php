<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class RegisteredController extends Controller
{
   public function dashboard () {
       return view('admin.dashboard');
   }


   public function index(){

   $users = User::paginate(4);
 // $users = User::all();

  //$users = User::where('role_as',Input::get('roles'))->get();

    return view('admin.users.index')->with('users' ,$users) ;

   }
   public function edit ($id){

      $user_roles =User::find($id);
        return view('admin.users.edit')->with('user_roles' , $user_roles);

   }
   public function updaterole (Request $request ,$id){
        $user = User::find($id);
        $user->name =$request->input('name');
        $user->role_as = $request->input('roles');
        $user->update();
        return redirect()->back()->with('status','role a été modifié avec succés');

   }
   
}
