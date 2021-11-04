<?php

namespace App\Http\Controllers\Frontend;

use App\User ;
use App\Doctor;
use App\Appointment;
use App\SchedulingSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Location;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Appointment as MailAppointment;

class DoctorProfileController extends Controller
{
    public function doctor ()
     {    $user = DB::table('users');
          $doctor = DB::table('doctor');
         return view ('doctor.dashboard' , compact($doctor, $user));
     }




     public function index () {
             $locations = Location::all();
        $user = User::where('id', Auth::user()->id)->first();
        return view('doctor.profile', ['doctor' => $user])->with('locations' , $locations);
         }



         public function profileUpdate(Request $request){
           $user_id =   Auth::user()->id;
           $user= User::findOrFail($user_id);
           $user-> name = $request->input('name');
           $user->address = $request->input('address');
           $user->mobileNo = $request->input('mobileNo');
            $user->date_of_birth = $request->input('date_of_birth');
           $user->gender = $request->input('gender');



        if ($request->hasfile('image')) {
            $image_file = $request->file('image');
            $img_extension = $image_file->getClientOriginalExtension(); //getting image extension
            $img_filename = time() . '.' . $img_extension;
            $image_file->move('uploads/doctor/', $img_filename);
            $user->image = $img_filename;
        }

        $user->update();
        return redirect('doctor')->with('status', 'Profile Modifié');






         }






     public function appointments() {

        $doctor=Auth::user()->doctors;
        $appointments=$doctor->appointments;
        $ids=$appointments->pluck('user_id');
        $users=User::findMany($ids);

        return view('doctor.appointments',compact('appointments'));
    }

     public function sendEmail ( Appointment $appointment , Request $request) {
         $appointment->app_date = $request->input('app_date');
         $appointment->app_time = $request->input('app_time');
         $appointment->status= "Confirmé";
        $appointment->save();
         Mail::to($appointment->user)->send(new MailAppointment($appointment));
         return redirect('/setSchedule')->with('status','rendez-vous ajouté');
     }



     public function appointmentsDetail(Appointment $appointment)
     {

         return view('doctor.appointmentsDetail')->with(['app_id'=>$appointment->id]);
     }




}
