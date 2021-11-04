<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use App\Location ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function myprofile (){
        return view ('frontend.user.profile');
    }

    public function profileupdate(Request $request){
     $user_id =   Auth::user()->id;
     $user = User::findOrFail($user_id);
        $user->name = $request->input('name');
        $user->address = $request->input('address');

        $user->date_of_birth = $request->input('date_of_birth');
        $user->mobileNo = $request->input('mobileNo');

        if($request->hasfile('image')){
         $destination ='uploads/profile/' . $user->image;
         if(File::exists($destination)){
             File::delete($destination);
         }
         $file = $request->file('image');
         $extension =$file->getClientOriginalExtension();
         $filename = time() . '.' . $extension ;
         $file->move('uploads/profile/' , $filename);
         $user->image = $filename ;

        }

        $user->update();
        return redirect('/')->with('status' , 'Profile Modifié');
    }


}

