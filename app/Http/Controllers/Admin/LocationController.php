<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Location;

class LocationController extends Controller
{
    public function index () {
        $locations = Location::all();
        return view ('admin.location.index')->with('locations',$locations);
    }

    public function create () {
        return view ('admin.location.add');
    }

    public function store (Request $request) {
        $locations = new Location();
        $locations->title = $request->input('title');

        $locations->save();
      return redirect('location')->with('Etat ajoutée avec succé');
    }

    public function edit($id)
    {

        $locations = Location::find($id);
        return view('admin.location.edit')->with('locations', $locations);
    }
    public function update(Request $request, $id)
    {

        $locations = Location::find($id);
        $locations->title = $request->input('title');
        $locations->update();
        return redirect('location')->with('status', 'Adresse modifié avec succés');
    }


}
