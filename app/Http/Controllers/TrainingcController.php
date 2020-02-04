<?php

namespace App\Http\Controllers;
use App\Industry;
use App\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TrainingcController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:trainingc');
    }
    public function index()
    {
          $industry=Industry::orderBy('name','asc')->get();
          $town=Town::orderBy('name','asc')->get();
        return view('new.trainingapp')->with('industry',$industry)
        ->with('town',$town);
    }

}
