<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DataController extends Controller
{
    public function getCountries()
    {
        $countries = DB::table('countries')->pluck("name","id");
        return view('dropdown',compact('countries'));
    }

    public function getStates($id) 
{        
        $states = DB::table("towns")->where("countries_id",$id)->pluck("name","id");
        return json_encode($states);
}
}
