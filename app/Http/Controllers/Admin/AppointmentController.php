<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Doctor;
use App\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    public function index () {
        $doctor = Doctor::all();
     $appointment = Appointment::all();
     return $appointment ;
     return view ('admin.appointment.index')
     ->with('appointment', $appointment)
     ->with('docotor' ,$doctor);

    }
    public function create() {

        $user = User::whereRole_as('doctor')->get();
        return view ('admin.appointment.add')->with('user' , $user);
    }

    public function store (Request $request) {

        $appointment = new Appointment();

        $appointment->doctor_id = $request ->input('doctor_id');


        $appointment->description = $request ->input('description');

        $appointment->app_time = $request ->input('app_time');
        $appointment->app_date = $request ->input('app_date');


        $appointment->save();

        return redirect('appointment')->with('status','Rendez-vous ajoutée avec succés');



    }
    public function edit ($id){
        $doctor = Doctor::all();
        $appointment = Appointment::find($id);

        return view ('admin.appointment.edit')
        ->with('appointment' , $appointment)
        ->with('doctor','$doctor');
    }
    public function update (Request $request , $id){

        $appointment = Appointment::find($id);
        $appointment->doctor_id = $request->input('doctor_id');


        $appointment->user_name = $request->input('user_name');

        $appointment->appointment_time = $request->input('appointment_time');
        $appointment->appointment_date = $request->input('appointment_date');


        $appointment->update();

        return redirect('appointment')->with('status', 'Rendez-vous modifié avec succés');

    }
    public function delete ($id) {
        $appointment = Appointment::find($id);
        $appointment->delete();
        return redirect('appointment')->with('status','Rendez-vous supprimé avec succés');
    }


    public function book (){

    }


}
