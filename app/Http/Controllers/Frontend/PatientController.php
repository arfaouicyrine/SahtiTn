<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use App\Doctor ;

use App\Department;
use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function takeAppointmentform($id)
    {

        $doctor = Doctor::get();
        //        dd($doctors);
        $department = Department::all();
        return view('patient.takeAppointment', ['doctor' => $doctor, 'department' => $department,'id'=>$id]);
    }

    public function takeAppointment(Request $request,$id){

        $this->validate($request ,[
            'description' => 'required'        ]);

            Auth::user()->appointments()->create([
            'doctor_id' => $id,
            'description' => $request->description
            ]);

        return redirect('/')->with('status','Veuillez attendez la confrirmation par mail ');


  

    }


    function history( User $user) {
         $user =Auth::user()->load(['appointments', 'appointments.doctor']);
     
                return view ('patient.MyAppointments')->with('user', $user);
              
               
                   
                
                   
     }

}
