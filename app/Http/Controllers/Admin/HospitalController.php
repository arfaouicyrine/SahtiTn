<?php

namespace App\Http\Controllers\Admin;

use App\Hospital;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HospitalController extends Controller
{
    public function index () {
        $hospitals = Hospital::all();
        return view ('admin.hospital.index')->with('hospitals', $hospitals);
    }


    public function create()
    {
        $locations = DB::table('locations')->get();
        return view('admin.hospital.create')->with('locations', $locations);
    }


    public function store(Request $request)
    {
        $hospitals = new Hospital();
        $hospitals->name = $request->input('name');

        $hospitals->location_id = $request->input('location_id');
        $hospitals->address = $request->input('address');
        $hospitals->description = $request->input('description');



        if ($request->hasfile('image')) {
            $image_file = $request->file('image');
            $img_extension = $image_file->getClientOriginalExtension(); //getting image extension
            $img_filename = time() . '.' . $img_extension;
            $image_file->move('uploads/hospital/', $img_filename);
            $hospitals->image = $img_filename;
        }
                $hospitals->save();
                return redirect('hospital')->with('status', 'Hopital ajouté avec succées');


    }

    public function edit($id) {
        $hospitals = Hospital::find($id);
        $locations = Location::all();
       // return $hospitals ;
       return view('admin.hospital.edit')->with('hospitals' , $hospitals)
       ->with('locations' , $locations);
    }


   
    public function update(Request $request, $id)
    {    
        
        $hospitals = Hospital::find($id);

        $hospitals->name = $request->input('name');
        $hospitals->address= $request->input('address');
        $hospitals->description = $request->input('description');
        $hospitals->location_id = $request->input('loction_id');


        if ($request->hasfile('image')) {
            $image_file = $request->file('image');
            $img_extension = $image_file->getClientOriginalExtension(); //getting image extension
            $img_filename = time() . '.' . $img_extension;
            $image_file->move('uploads/hospital/', $img_filename);
            $hospitals->image = $img_filename;
        }

        $hospitals->update();
        return redirect('hospital')->with('status', 'Article modifié avec succés');
    }



    public function delete($id)

    {
        $hospitals = Hospital::find($id);
        $hospitals->delete();
        return redirect()->back()->with('status', 'Doctor supprimé avec succés');
    }



}
