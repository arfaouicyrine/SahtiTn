<?php

namespace App\Http\Controllers\Frontend;

use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Department ;
use App\Location ;


class SearchController extends Controller
{
    public function doctors () {
       $department = DB::table('department')->select('department.id' , 'department.name')->get() ;
        $doctor = DB::table('doctor')->latest()->paginate(2);
        $doctor = Doctor::with('department')->get();
        $locations = DB::table('locations')->get();
        return  view ('frontend.search.doctors' , ['department'=>$department])
        ->with('doctor' , $doctor)
        ->with('locations' , $locations);
}








   public function department(Request $request){
       $data= DB::table('department')->get();
       $output = '';
       if($data->count()>0){
           foreach ($data as $row){
               $output .= '<option value='.$row->id.'>'. $row->name. '</option>' ;
           }
            $output .= '';
            echo $output;

       }
   }

    public function location(Request $request){
       $data= DB::table('locations')->get();
       $output = '';
       if($data->count()>0){
           foreach ($data as $row){
               $output .= '<option value='.$row->id.'>'. $row->name. '</option>' ;
           }
            $output .= '';
            echo $output;

       }
   }




   public function searchDoctor(Request $request){
      if($request->get('location') && $request->get('department')){
          $location = $request->get('location');
          $department = $request->get('department');

               $locations = DB::table('locations')->get();
            $departments = DB::table('department')->select('department.id', 'department.name')->get();
            $data = DB::table('doctor')
                          ->where(['location_id' => $location , 'department_id' => $department ])
                          ->get();


     return view('frontend.search.search' , ['department'=>$department , 'data'=> $data ])
     ->with('locations', $locations)
                ->with('departments', $departments) ;

       }



   }

   public function docDetail (Request $request , $id){
        $department = DB::table('department')->select('department.id', 'department.name')->get();
        $location = DB::table('locations')->select('locations.id', 'locations.title')->get();
        $doctor = Doctor::with('department')->where(['id' => $id])->get();
        $doctor = Doctor::with('locations')->where(['id' => $id])->get();
             return view('frontend.search.viewDoc')
             ->with('doctor' ,$doctor)
            ->with('department' , $department)
             ->with('location' ,$location);

   }




   public function hospitals () {
      $hospitals = DB::table('hospitals')->latest()->paginate(3);
        $locations = Location::all();
      return  view ('frontend.search.hospital')
      ->with('hospitals' , $hospitals)
      ->with('locations' , $locations);
}



   public function searchHospitals (Request $request){
       if($request->get('location')){
           $location = $request->get('location');

            $locations = Location::all();


           $data = DB::table('hospitals')
           ->whereLocation_id($location)
           ->get();

           return view('frontend.search.HospitalResults' , ['data' => $data])->with('locations' , $locations);
       }
   }


}
