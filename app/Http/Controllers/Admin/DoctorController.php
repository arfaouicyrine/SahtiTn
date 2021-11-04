<?php

namespace App\Http\Controllers\Admin;


use App\User;
use App\Doctor;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index(){
        $department = Department::all();
        $locations = DB::table('locations')->get();
        $doctor = Doctor::all();
        return view('admin.doctor.index')->with('doctor', $doctor)
            ->with('department', $department)
            ->with('locations', $locations);
    }

    public function create (){
         $department = Department::all();
        $locations = DB::table('locations')->get();
        $users = User::whereRole_as('doctor')->get();
        return view('admin.doctor.create')
        ->with('department', $department)
        ->with ('locations' , $locations)
        ->with('users' , $users);
    }

    public function store(Request $request) {

        $doctor = new Doctor ();
        $doctor->user_id = $request->input('user_id');
        $doctor->doctorName = $request->input('doctorName');
        $doctor->department_id = $request->input('department_id');
        $doctor->location_id = $request->input('location_id');
        $doctor->mobileNo = $request->input('mobileNo');
        $doctor->educations = $request->input('educations');
        $doctor->consultation_fee = $request->input('consultation_fee');
        $doctor->address = $request->input('address');
      if ($request->hasfile('image')) {
            $image_file = $request->file('image');
            $img_extension = $image_file->getClientOriginalExtension(); //getting image extension
            $img_filename = time() . '.' . $img_extension;
            $image_file->move('uploads/doctor/', $img_filename);
            $doctor->image = $img_filename;
        }
        $doctor->save();
        return redirect('/doctor-list')->with('status','Médecin ajouté avec succées');





}

    public function edit($id){
        $department = Department::all();
        $doctor = Doctor::find($id);
        $users = User::whereRole_as('doctor')->get();
        $locations = DB::table('locations')->get();
        return view('admin.doctor.edit')
        ->with('doctor', $doctor)
        ->with('department', $department)
        ->with('locations', $locations)
            ->with('users', $users);
    }

    public function update (Request $request , $id)
    {
        $doctor = Doctor::find($id);
        $doctor->user_id = $request->input('user_id');
        $doctor->doctorName = $request->input('doctorName');
        $doctor->department_id = $request->input('department_id');
        $doctor->location_id = $request->input('location_id');

        $doctor->educations = $request->input('educations');

         $doctor->image = $request->input('image');
       if ($request->hasfile('image')) {
            $image_file = $request->file('image');
            $img_extension = $image_file->getClientOriginalExtension(); //getting image extension
            $img_filename = time() . '.' . $img_extension;
            $image_file->move('uploads/doctor/', $img_filename);
            $doctor->image = $img_filename;
        }


        $doctor->consultation_fee = $request->input('consultation_fee');
        $doctor->address = $request->input('address');
       $doctor->update();
        return redirect('doctor-list')->with('status', 'Médecin modifié avec succées');




    }
     public function delete($id)

    {
        $doctor = Doctor::find($id);
      $doctor->delete();
        return redirect()->back()->with('status', 'Doctor supprimé avec succés');
    }
}
