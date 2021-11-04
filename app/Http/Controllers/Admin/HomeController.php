<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index () {
        return view ('admin.dashboard');
    }


    public function profile(){
        $locations = DB::table('locations')->get();
        return view('admin.profile')->with('locations', $locations);
    }
}
