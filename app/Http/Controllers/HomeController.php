<?php

namespace App\Http\Controllers;

use App\Department;
use App\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        return view('home')->with(["doctor" =>  Doctor::latest()->paginate(10),
        "department" =>  Department::has()
        ]);


    }
    public function sahti () {
        return view('frontend.index');
    }

}
